<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Authentication extends Component
{
    public $username;

    public $email;

    public $password;

    public $rpassword;

    public $activeTab = 'login';  // Default active tab is 'login'

    public function register(){


        $this->validate([
            'username' => ['required','min:3','max:255'],
            'email' => ['required','email','unique:users'],
            'password' => ['required','min:3'],
            'rpassword' => ['required','same:password']
        ]);


        User::create([
            'name' => $this->username,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'remember_token' => $this->password,
        ]);

        session()->flash('success', 'You have successfully registered!');
        $this->reset();  // Clear form inputs

        $this->activeTab = 'login';


    }

    public function login(){

        $this->validate([
            'email' => ['required','email'],
            'password' => ['required','min:3']
        ]);

         if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('success', 'You have successfully logged in!');
            $this->redirect('/todos',navigate: true);

        } else {
            session()->flash('error', 'Invalid credentials!');
        }

    }
    public function logout()
    {

        Auth::logout();
        session()->invalidate(); // Invalidate the session to clear all data
        session()->regenerateToken(); // Regenerate token to prevent CSRF attacks
        return redirect('/');
    }

    public function render()
    {
        return view('livewire.auth.authentication');
    }
}
