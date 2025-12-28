<?php

namespace App\Livewire;

use Livewire\Component;

class Footer extends Component
{
    // Data ya footer
    public $contactInfo = [
        'office' => 'Office of the Director of Public Prosecutions Zanzibar,',
        'address' => 'Mtumba-Mtaa wa Mtandao.,',
        'postal' => 'P.O. Box 1327 Zanzibar,Tanzania',
        'email' => 'dpp@dppznz.go.tz',
        'phone' => '+255 24 2235567,',
        'fax' => '+255 24 22355564'
    ];

    public $supportInfo = [
        'description' => 'Fikia timu yetu ya msaada wakati wowote – tunapatikana saa 24 kila siku.',
        'phones' => ['+255 764 292 299', '+255 0763 292 299']
    ];

    public $popularSites = [
        'sites' => [
            'ZLRC' => 'https://zlrc.ac.tz/',
            'Wizara ya katiba na sheria Zanzibbar' => 'https://utumishismz.go.tz/home/',
            'Mahakama kuu Zanzibar' => 'https://judiciaryzanzibar.go.tz/',
            'Ongea na DPP' => 'http://102.214.44.10:5050/complains',
            'Baraza la wawakilishi Zanzibar' => 'https://www.zanzibarassembly.go.tz/en',
            'ZAEC' => 'https://zaeca.go.tz/'
        ],
    ];

    public $onlineServices = [
        'Prosecutions' => '#',
        'News and Updates' => '{{route("news")}}',
        'Director Message' => '{{route("director")}}',
        'Managements' => '{{route("organization")}}',
        'Media Center' => '{{route("photo")}}'
    ];

    public $socialLinks = [
        'facebook' => '#',
        'twitter' => '#',
        'youtube' => '#',
        'instagram' => '#'
    ];

    public function render()
    {
        return view('livewire.footer');
    }
}
