<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Achievement;

class Achievements extends Component
{
    public $achievementCards = [];

    public function mount()
    {
        // Get totals for each type from database
        $complainants = Achievement::where('type', 'Complainants')->sum('number') ?? 0;
        $victims = Achievement::where('type', 'Victims')->sum('number') ?? 0;
        $files = Achievement::where('type', 'Recorded Files')->sum('number') ?? 0;
        $defendants = Achievement::where('type', 'Defendants')->sum('number') ?? 0;

        $this->achievementCards = [
            [
                'number' => $complainants,
                'title' => 'Complainants',
                'front_image' => 'images/achievements/complainants.jpg',
                'back_image' => 'images/achievements/complainants.jpg',
                'front_icon' => 'fa-users',
                'back_icon' => 'fa-handshake',
                'description' => 'Individuals who have sought our assistance and received proper guidance through their cases.'
            ],
            [
                'number' => $victims,
                'title' => 'Victims',
                'front_image' => 'images/achievements/victims.png',
                'back_image' => 'images/achievements/victims.png',
                'front_icon' => 'fa-heart',
                'back_icon' => 'fa-shield-alt',
                'description' => 'Victims of various offenses who have received support, protection, and justice through our services.'
            ],
            [
                'number' => $files,
                'title' => 'Recorded Files',
                'front_image' => 'images/achievements/files.jpg',
                'back_image' => 'images/achievements/files.jpg',
                'front_icon' => 'fa-folder-open',
                'back_icon' => 'fa-archive',
                'description' => 'Case files meticulously documented and organized for efficient processing and future reference.'
            ],
            [
                'number' => $defendants,
                'title' => 'Defendants',
                'front_image' => 'images/achievements/defendants.png',
                'back_image' => 'images/achievements/defendants.png',
                'front_icon' => 'fa-balance-scale',
                'back_icon' => 'fa-gavel',
                'description' => 'Individuals who have gone through our legal system ensuring fair trials and proper procedures.'
            ],
        ];
    }

    public function render()
    {
        return view('livewire.achievements', [
            'achievementCards' => $this->achievementCards
        ]);
    }
}
