<?php

namespace App\Livewire;

use Livewire\Component;

class NewsComponent extends Component
{
    public $news = [];

    public function mount()
    {
        $this->news = [
            [
                'title' => 'The President of Zanzibar Opens New DPP Building',
                'date'  => 'August 5, 2025',
                'tag'   => 'OFFICIAL EVENT',
                'image' => asset('images/news/guest.jpg'),
                'link'  => '#',
            ],
            [
                'title' => 'New Guidelines for Case Management',
                'date'  => 'July 20, 2025',
                'tag'   => 'GUIDELINES',
                'image' => asset('images/news/general.jpg'),
                'link'  => '#',
            ],
            [
                'title' => 'Community Outreach in Zanzibar North Region',
                'date'  => 'June 30, 2025',
                'tag'   => 'COMMUNITY',
                'image' => asset('images/news/meeting2.jpg'),
                'link'  => '#',
            ],
        ];
    }

    public function render()
    {
        return view('livewire.news-component');
    }
}
