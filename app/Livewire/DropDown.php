<?php

namespace App\Livewire;

use Livewire\Component;

class DropDown extends Component
{

    public $isOpen = false;

    protected $listeners = ['showModal', 'closeModal'];

    public function showModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }


    public function render()
    {
        return view('livewire.drop-down');
    }
}
