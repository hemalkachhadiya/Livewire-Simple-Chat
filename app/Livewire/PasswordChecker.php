<?php

namespace App\Livewire;

use Livewire\Component;

class PasswordChecker extends Component
{
    public $password;
    public $errors = [];

    public function updatedPassword()
    {
        $this->checkpass();
    }

    public function checkpass()
    {
        $password = $this->password;
        $this->errors = []; // Clear previous errors

        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);

        if (empty($password)) {
            $this->errors[] = 'Password cannot be empty.';
        }

        if (strlen($password) !== 8) {
            $this->errors[] = 'Password must be maximum 8 characters long.';
        }

        if (!$uppercase) {
            $this->errors[] = 'Password must contain at least one uppercase letter.';
        }

        if (!$lowercase) {
            $this->errors[] = 'Password must contain at least one lowercase letter.';
        }

        if (!$number) {
            $this->errors[] = 'Password must contain at least one number.';
        }

        if (!$specialChars) {
            $this->errors[] = 'Password must contain at least one special character.';
        }
    }
    public function render()
    {
        return view('livewire.password-checker');
    }
}
