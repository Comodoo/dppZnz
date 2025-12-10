<?php

namespace App\Livewire;

use Livewire\Component;

class Achievements extends Component
{
    public $achievements = [
        [
            'number' => '4888',
            'title' => 'Complainants',
            'front_image' => 'images/achievements/complainants.jpg', // Link ya picha ya mbele
            'back_image' => 'images/achievements/complainants.jpg',   // Link ya picha ya nyuma
            'front_icon' => 'fa-users', // Fallback icon ikiwa picha haipo
            'back_icon' => 'fa-handshake',
            'description' => 'Individuals who have sought our assistance and received proper guidance through their cases.'
        ],
        [
            'number' => '539',
            'title' => 'Victims',
            'front_image' => 'images/achievements/victims.png',
            'back_image' => 'images/achievements/victims.png',
            'front_icon' => 'fa-heart',
            'back_icon' => 'fa-shield-alt',
            'description' => 'Victims of various offenses who have received support, protection, and justice through our services.'
        ],
        [
            'number' => '4967',
            'title' => 'Recorded Files',
            'front_image' => 'images/achievements/files.jpg',
            'back_image' => 'images/achievements/files.jpg',
            'front_icon' => 'fa-folder-open',
            'back_icon' => 'fa-archive',
            'description' => 'Case files meticulously documented and organized for efficient processing and future reference.'
        ],
        [
            'number' => '5058',
            'title' => 'Defendants',
            'front_image' => 'images/achievements/defendants.png',
            'back_image' => 'images/achievements/defendants.png',
            'front_icon' => 'fa-balance-scale',
            'back_icon' => 'fa-gavel',
            'description' => 'Individuals who have gone through our legal system ensuring fair trials and proper procedures.'
        ],
    ];
    
    public function render()
    {
        return view('livewire.achievements');
    }
}