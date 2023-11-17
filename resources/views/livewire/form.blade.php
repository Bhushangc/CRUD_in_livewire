<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <form wire:submit.prevent='form'>
        <input type="text" wire:model="name" placeholder="Name">
            @error('name')
                <span class="error">{{ $message }}</span>
            @enderror
        <input type="text" wire:model="email" placeholder="Email">
            @error('email')
            <span class="error">{{ $message }}</span>
            @enderror
        <input type="text" wire:model="phone" placeholder="Phone">
            @error('phone')
            <span class="error">{{ $message }}</span>
            @enderror
        <button type="submit" type="button" class="btn btn-success">Submit</button>
    </form>
</div>
