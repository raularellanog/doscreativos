<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $type;
    public $email;
    public $password;
    public function mount()
    {
        $this->type = "password";
    }
    public function login_form()
    {
        $validatedData = $this->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ],
            [
                'email.required' => 'El email es un dato requerido.',
                'password.required' => 'La contraseña es un dato requerido.',
            ],
        );
        $credentials = ['email' => trim($this->email), 'password' => trim($this->password)];
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }
        $this->addError('noLogin', 'Usuario y contraseña incorrecta vuelve a intentarlo.');
    }
    public function nuevo()
    {
        return User::create([
            'name' => 'raul',
            'email' => 'raularellanoguevara@gmail.com',
            'password' => Hash::make('123456789')
        ]);
    }
    public function ver()
    {


        // $this->nuevo();
        if ($this->type == "password") {
            $this->type = "text";
        } else {
            $this->type = "password";
        }
        $this->emit('render');
    }
    public function render()
    {
        return view('livewire.login');
    }
}
