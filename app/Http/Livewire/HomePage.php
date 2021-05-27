<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class HomePage extends Component
{
    use WithFileUploads;

    public $images;
    public $test;

    public function render()
    {
        return view('livewire.home-page')
        ->layout('layouts.guest');
    }
}
