<div class="col-span-6 sm:col-span-3">
    <label for="name" class="block text-sm font-medium text-gray-700">Nome da categoria:</label>  
    <input wire:model.lazy="name" type="text" name="name" value="{{ old('name') }}" id="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
    @error('name')
        <span>{{ $message }}</span>
    @enderror
</div>
<div class="col-span-6 sm:col-span-3">
    <label for="first-name" class="block text-sm font-medium text-gray-700">Nome da categoria:</label>
    <input wire:model="image" type="file" name="image" accept="image/x-png, image/gif, image/jpeg" id="image" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm">
    @error('image')
        <span>{{ $message }}</span>
    @enderror
</div>