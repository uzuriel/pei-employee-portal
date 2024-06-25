<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var bool */
    public $remember = false;

    protected $rules = [
        'email' => ['required'],
        'password' => ['required'],
    ];

    public function authenticate()
    {
        $this->validate();

        if (!Auth::attempt(['employee_id' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', trans('auth.failed'));

            return;
        }

        // return redirect()->intended(route('home'));
        
        if(auth()->user()->role_id == 1){
            return redirect()->route('EmployeeDashboard');
        }
        
        return redirect()->route('LoginDashboard');

    }

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.auth');
    }
}
