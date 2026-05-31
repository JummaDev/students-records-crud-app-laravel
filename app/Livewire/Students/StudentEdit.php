<?php

namespace App\Livewire\Students;

use App\Models\Student;
use Livewire\Component;

class StudentEdit extends Component
{
    public $studentId, $name, $subject, $email;
    
    public function mount($id)
    {
        $student = Student::findOrFail($id);
        $this->studentId = $student->id;
        $this->name = $student->name;
        $this->subject = $student->subject;
        $this->email = $student->email;

    }

    public function updateStudent()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' .$this->studentId,
        ]);

        $student = Student::find($this->studentId);
        $student->update([
            'name' => $this->name,
            'subject' => $this->subject,
            'email' => $this->email,
        ]);

        session()->flash('success', 'Student Updated Successfully');
    }

    public function render()
    {
        return view('livewire.students.student-edit');
    }
}
