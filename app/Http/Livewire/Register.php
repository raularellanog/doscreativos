<?php

namespace App\Http\Livewire;

use Illuminate\Support\Str;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Companies;

class Register extends Component
{

    use WithFileUploads;

    public $typeMenu;
    public $company_name;
    public $company_slug;
    public $menu_name;
    public $menu_slug;
    public $user_name;
    public $email;
    public $type;
    public $user_pass;
    public $file;
    public function mount()
    {
        $this->type = "password";
        $this->typeMenu = null;
    }
    public function ver()
    {
        // $this->nuevo();
        if ($this->type == "password") {
            $this->type = "text";
        } else {
            $this->type = "password";
        }
    }

    public function save()
    {
        $modelCompany = new Companies;
        $this->validate(
            [
                'email' => 'required|email|unique:users',
                'company_name' => 'required',
                'menu_name' => 'required',
                'user_name' => 'required',
                'user_pass' => 'required'
            ],
            [
                'email.required' => 'El email es un dato requerido.',
                'email.unique' => 'Este email ya se registro anteriormente.',
                'company_name.required' => 'El nombre de la empresa es un dato requerido.',
                'menu_name.required' => 'El nombre del menú es un dato requerido.',
                'user_name.required' => 'El nombre es un dato requerido.',
                'user_pass.required' => 'La contraseña es un dato requerido.',
            ],
        );
        $company_id = $modelCompany->add_register($this->company_name);
    }
    public function render()
    {
        $this->company_slug = Str::slug($this->company_name, '_');
        return view('livewire.register');
    }
}
