<?php

namespace App\Livewire;

use Livewire\Component;

class Guidelines extends Component
{
    public $items = [
        [
        'title' => 'Basic Technician Certificate in Law (NTA Level 4)',
        'description' => 'Open to Form IV graduates with at least four passes (excluding religious studies) or holders of NVA Level 3.',
        'color' => 'blue',
        'icon' => '📘',
        'link' => 'https://zlrc.ac.tz/admission-requirements/'
    ],
    [
        'title' => 'Technician Certificate in Law (NTA Level 5)',
        'description' => 'Open to holders of NTA Level 4 in Law or Form VI with at least one Principal and one Subsidiary pass. Successful candidates may proceed to the Ordinary Diploma in Law or exit with a Technician Certificate in Law (TCL).',
        'color' => 'green',
        'icon' => '📗',
        'link' => 'https://zlrc.ac.tz/admission-requirements/',
    ],
    [
        'title' => 'Ordinary Diploma in Law (NTA Level 6)',
        'description' => 'A continuation of legal studies for candidates who have successfully completed NTA Level 5. The programme prepares learners with practical and theoretical legal skills.',
        'color' => 'purple',
        'icon' => '📘',
        'link' => 'https://zlrc.ac.tz/diploma-requirements/',
    ],
    ];

    public function openGuide($title)
    {
        // Add your logic here
        session()->flash('message', "Opening guide for: $title");
    }

    public function openPage($title)
    {
        // Add your logic here
        session()->flash('message', "Opening page for: $title");
    }
    
    public function render()
    {
        return view('livewire.guidelines');
    }
}