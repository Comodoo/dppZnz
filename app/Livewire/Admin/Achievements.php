<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Achievement;
use Livewire\WithPagination;

class Achievements extends Component
{
    use WithPagination;

    // Form properties
    public $type;
    public $number;
    public $year;
    public $date_created;
    public $edit_id;

    // Modal states
    public $showAddModal = false;
    public $showEditModal = false;

    // Available achievement types
    public $achievementTypes = [
        'Complainants',
        'Victims',
        'Recorded Files',
        'Defendants'
    ];

    public function render()
    {
        $achievements = Achievement::latest()->paginate(10);

        return view('livewire.admin.achievements', [
            'achievements' => $achievements
        ])->layout('admin.layouts.app', ['title' => 'Achievements']);
    }

    // ========== ADD ACHIEVEMENT ==========
    public function openAddModal()
    {
        $this->reset(['type', 'number', 'year', 'date_created']);
        $this->resetErrorBag();
        $this->showAddModal = true;
    }

    public function closeAddModal()
    {
        $this->showAddModal = false;
    }

    public function store()
    {
        $this->validate([
            'type' => 'required|string|in:' . implode(',', $this->achievementTypes),
            'number' => 'required|integer|min:1',
            'year' => 'required|digits:4',
            'date_created' => 'required|date',
        ]);

        Achievement::create([
            'type' => $this->type,
            'number' => $this->number,
            'year' => $this->year,
            'date_created' => $this->date_created,
        ]);

        $this->closeAddModal();
        session()->flash('success', 'Achievement created successfully.');
    }

    // ========== EDIT ACHIEVEMENT ==========
    public function openEditModal($id)
    {
        $achievement = Achievement::findOrFail($id);
        $this->edit_id = $id;
        $this->type = $achievement->type;
        $this->number = $achievement->number;
        $this->year = $achievement->year;
        $this->date_created = $achievement->date_created;
        $this->resetErrorBag();
        $this->showEditModal = true;
    }

    public function closeEditModal()
    {
        $this->showEditModal = false;
    }

    public function update()
    {
        $this->validate([
            'type' => 'required|string|in:' . implode(',', $this->achievementTypes),
            'number' => 'required|integer|min:1',
            'year' => 'required|digits:4',
            'date_created' => 'required|date',
        ]);

        $achievement = Achievement::findOrFail($this->edit_id);
        $achievement->update([
            'type' => $this->type,
            'number' => $this->number,
            'year' => $this->year,
            'date_created' => $this->date_created,
        ]);

        $this->closeEditModal();
        session()->flash('success', 'Achievement updated successfully.');
    }

    // ========== DELETE ACHIEVEMENT ==========
    public function delete($id)
    {
        $achievement = Achievement::findOrFail($id);
        $achievement->delete();

        session()->flash('success', 'Achievement deleted successfully.');
    }

    // ========== RESET FORM ==========
    public function resetForm()
    {
        $this->reset(['type', 'number', 'year', 'date_created', 'edit_id']);
        $this->resetErrorBag();
    }
}
