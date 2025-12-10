<?php

namespace App\Livewire;

use Livewire\Component;

class HudumaZetuSlider extends Component
{
    public $currentSlide = 0;

    public $slides = [];

    public function mount()
    {
        $this->slides = [
            [
    'title' => 'Criminal Prosecution Services',
    'description' => 'We lead and manage all criminal prosecutions in all civil courts across Zanzibar, ensuring justice, fairness, and legal integrity.',
    'icon' => asset('images/icon1.jpg'),
],
[
    'title' => 'Legal Advisory & Guidance',
    'description' => 'We provide legal advice to investigative bodies and government institutions to strengthen criminal investigations and justice delivery.',
    'icon' => asset('images/icon2.jpg'),
],
[
    'title' => 'Research, Review & Legal Reform',
    'description' => 'We conduct legal research, analyze criminal justice issues, and recommend policy and legislative improvements to the Government.',
    'icon' => asset('images/icon3.png'),
],
[
    'title' => 'Victim and Witness Support',
    'description' => 'We protect witnesses, support victims of crime, ensure confidentiality, and provide psychological guidance during legal proceedings.',
    'icon' => asset('images/icon4.jfif'),
],
[
    'title' => 'Anti-Corruption & Economic Crimes Prosecution',
    'description' => 'We prosecute corruption, economic sabotage, money laundering, cybercrime, drug trafficking, and cross-border offenses with high professionalism.',
    'icon' => asset('images/icon5.jfif'),
],

        ];
    }

    public function nextSlide()
    {
        $this->currentSlide = ($this->currentSlide + 1) % count($this->slides);
    }

    public function prevSlide()
    {
        $this->currentSlide = ($this->currentSlide - 1 + count($this->slides)) % count($this->slides);
    }


    public function setSlide($index)
    {
        $this->currentSlide = $index;
    }

    public function render()
    {
        return view('livewire.huduma-zetu-slider');
    }
}
