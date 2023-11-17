<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\data;

class Form extends Component
{
    public $name;
    public $email;
    public $phone;
    public function form(){
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|numeric',
        ]);
        $newdata = new data();
        $newdata->name = $this->name;
        $newdata->email = $this->email;
        $newdata->phone = $this->phone;
        $newdata->save();
        return redirect('/');
    }
    public function render()
    {
        return view('livewire.form');
    }
}
