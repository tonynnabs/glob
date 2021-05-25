<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public $image;
    public function render()
    {
        return view('livewire.home-page')
        ->layout('layouts.guest');
    }
}
