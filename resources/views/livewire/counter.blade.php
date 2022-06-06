<div style="text-align: center">
<button wire:click="increment" class="px-4 py-2  bg-blue-600">+</button>
<input wire:model="count" type="text">

 <h1>{{ $count }}</h1>


 <form wire:submit.prevent="save">
     
    <input type="file" wire:model="photos" multiple>
 
    @error('photos') <span class="error">{{ $message }}</span> @enderror
 
    <button type="submit" class="px-4 py-2  bg-indigo-600">Save Photo</button>
</form>

</div>
