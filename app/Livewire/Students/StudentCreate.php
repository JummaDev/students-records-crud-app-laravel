<?php

namespace App\Livewire\Students;

use App\Models\Student;
use Livewire\Component;

class StudentCreate extends Component
{

    public $name, $subject, $email;

    protected $rules = [
        'name' => 'required|string|max:255',
        'subject' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email',
    ];

    public function createStudent()
    {
        $this->validate();

        Student::create([
            'name' => $this->name,
            'subject' => $this->subject,
            'email' => $this->email,
        ]);

        return redirect()->route('students.index');
    }

    public function render()
    {
        return view('livewire.students.student-create');
    }
}
