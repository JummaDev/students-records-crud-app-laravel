<?php

namespace App\Livewire\Students;

use App\Models\Student;
use Livewire\Component;

class StudentList extends Component
{

    public $students;

    protected $listeners = ["studentAdded"=> "refreshList"];

    public function mount()
    {
        $this->students = Student::all();
    }

    public function delete($id)
    {
        Student::find($id)->delete();
        $this->students = Student::all();

        session()->flash('success', 'Student Deleted Successfully');
    }

    public function refreshList()
    {
        $this->students = Student::all();
    }

    public function render()
    {

        return view(view: 'livewire.students.student-list');
    }
}
