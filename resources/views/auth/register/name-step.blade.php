<!-- Name -->
<div>
    <x-label for="name" :value="__('Name')" />

    <x-input wire:model="state.name" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
</div>
