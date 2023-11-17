<?php

namespace App\Http\Livewire;
use App\Models\data;

use Livewire\Component;

class Showdata extends Component
{
    public $datas;
    public $deletedata;
    public $edit_id,$edit_name,$edit_email,$edit_phone;
    public $new_name,$new_email,$new_phone;
    public $edit_check=true;
    public function mount(){
        $this->datas = data::all();
    }
    public function delete($id){
        $this->deletedata = data::find($id);
        $this->deletedata->delete();
        return redirect('/');
    }  

    public function edit($id){
        $editdata = data::find($id);
        $this->edit_id = $editdata->id;
        $this->edit_name = $editdata->name;
        $this->edit_email = $editdata->email;
        $this->edit_phone = $editdata->phone;
        $this->edit_check = false;
    }
    public function save(){
        $this->validate([
            'new_name' => 'required|min:3',
            'new_email' => 'required|email',
            'new_phone' => 'required|numeric',
        ]);
        $save_data = data::find($this->edit_id);
        $save_data->name = $this->new_name;
        $save_data->email = $this->new_email;
        $save_data->phone = $this->new_phone;
        $save_data->save();
        $this->edit_check = true;
        return redirect('/');
    }
    public function add_row(){
        dd('test');

    }
    public function abc(){
        dd('test');

    }
    public function render()
    {
        return view('livewire.showdata');
    }
}
