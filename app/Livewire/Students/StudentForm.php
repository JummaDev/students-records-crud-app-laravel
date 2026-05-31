<?php

namespace App\Livewire\Students;

use App\Models\Student;
use Livewire\Component;

class StudentForm extends Component
{

    public $name, $subject, $email;

    protected $rules = [
        "name"=> "required|string|max:255",
        "subject"=> "required|string|max:255",
        "email"=> "required|email|unique:students,email",
    ];

    public function submit()
    {
        $this->validate();

        Student::create(["name"=> $this->name,"subject"=> $this->subject,"email"=> $this->email]);
        
        $this->dispatch('studentAdded');
        $this->reset(['name','subject', 'email']);

    }

    public function render()
    {
        return view('livewire.students.student-form');
    }
}
