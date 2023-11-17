
@if ($edit_check == true)
<div>
    <table class="table table-striped table-hover table-bordered">
        <tr class="table-secondary">
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>
        @foreach ($datas as $data)
        <tr>
            <td>{{ $data->name }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->phone }}</td>
            <td><button class="btn btn-primary" id="delete" wire:click="edit({{ $data->id }})">Edit</button></td>
            <td><button class="btn btn-danger" id="edit" wire:click="delete({{ $data->id }})">Delete</button></td>
        </tr>
        @endforeach
    </table>    
</div>
@else
<div>
    <h1>Edit Data</h1>
    <form wire:submit.prevent='save'>
        <input type="text" wire:model="new_name"  placeholder="{{$edit_name}}">
            @error('new_name')
                <span>{{ $message }}</span>
            @enderror
        <input type="text" wire:model="new_email" placeholder="{{$edit_email}}" >
            @error('new_email')
            <span>{{ $message }}</span>
            @enderror
        <input type="text" wire:model="new_phone" placeholder="{{$edit_phone}}">
            @error('new_phone')
            <span>{{ $message }}</span>
            @enderror
        <button type="submit" type="button" class="btn btn-success">Submit</button>
    </form>
</div>
@endif






