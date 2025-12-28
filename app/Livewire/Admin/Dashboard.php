<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Achievement;
use App\Models\User;
use Carbon\Carbon;

class Dashboard extends Component
{
    // Statistics
    public $totalComplainants = 0;
    public $totalVictims = 0;
    public $totalRecordedFiles = 0;
    public $totalDefendants = 0;
    public $totalUsers = 0;
    public $recentUsers = [];
    public $recentAchievements = [];

    public function mount()
    {
        // Calculate totals from achievements
        $this->totalComplainants = Achievement::where('type', 'Complainants')->sum('number') ?? 0;
        $this->totalVictims = Achievement::where('type', 'Victims')->sum('number') ?? 0;
        $this->totalRecordedFiles = Achievement::where('type', 'Recorded Files')->sum('number') ?? 0;
        $this->totalDefendants = Achievement::where('type', 'Defendants')->sum('number') ?? 0;

        // User statistics
        $this->totalUsers = User::count();
        $this->recentUsers = User::latest()->take(5)->get();

        // Recent achievements
        $this->recentAchievements = Achievement::latest()->take(5)->get();
    }

    public function render()
    {
        return view('livewire.admin.dashboard')
            ->layout('admin.layouts.app', ['title' => 'Dashboard']);
    }
}
