<x-app-layout>
    <x-slot name="header">
        <div class="flex">
            <div class="flex-1">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Categorias') }}
                </h2> 
            </div>
            <div class="flex-none">
              <!-- Will not grow or shrink -->
            </div>
            <div class="flex-1 text-right">
                <a href="{{ route('category.create') }}" class="rounded py-2 px-2 bg-indigo-500 text-white float-right">Novo registro</a>
            </div>
          </div>
    </x-slot>

    <div class="py-12">
        

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
               @livewire('category')
                
            </div>
        </div>
    </div>
</x-app-layout>
