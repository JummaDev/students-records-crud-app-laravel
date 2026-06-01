<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email, $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',

    ];

    public function login()
    {
        $this->validate();

        if(Auth::attempt(credentials: ['email' => $this->email, 'password' => $this->password]))
        {
            return redirect()->route('students.index');
        }

        session()->flash('error', 'Invalid Credentials');

    }

    public function updated($property)
    {
        if($property === 'email')
        {
            $this->email = strtolower($this->email);
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
