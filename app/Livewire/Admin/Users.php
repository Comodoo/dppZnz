<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;

    // Form properties
    public $name;
    public $email;
    public $password;
    public $edit_id;

    // Validation rules
    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
    ];

    public function render()
    {
        $users = User::latest()->paginate(10);
        return view('livewire.admin.users', compact('users'))
            ->layout('admin.layouts.app', ['title' => 'Users']);
    }

    // ========== ADD USER ==========
    public function store()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        $this->reset(['name', 'email', 'password']);
        session()->flash('success', 'User created successfully.');

        // Dispatch event to close modal
        $this->dispatch('closeModal', 'addUserModal');
    }

    // ========== EDIT USER ==========
    public function openEditModal($id)
    {
        $user = User::findOrFail($id);
        $this->edit_id = $id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = '';
        $this->resetErrorBag();

        // Dispatch event to open modal
        $this->dispatch('openEditModal');
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $this->edit_id,
            'password' => 'nullable|min:6',
        ]);

        $user = User::findOrFail($this->edit_id);
        $data = [
            'name' => $this->name,
            'email' => $this->email,
        ];

        if ($this->password) {
            $data['password'] = bcrypt($this->password);
        }

        $user->update($data);

        $this->reset(['name', 'email', 'password', 'edit_id']);
        session()->flash('success', 'User updated successfully.');

        // Dispatch event to close modal
        $this->dispatch('closeModal', 'editUserModal');
    }

    // ========== DELETE USER ==========
    public function delete($id)
    {
        $user = User::findOrFail($id);

        if ($user->id === auth()->id()) {
            session()->flash('error', 'You cannot delete your own account.');
            return;
        }

        $user->delete();
        session()->flash('success', 'User deleted successfully.');
    }

    // ========== RESET FORM ==========
    public function resetForm()
    {
        $this->reset(['name', 'email', 'password', 'edit_id']);
        $this->resetErrorBag();
    }
}
