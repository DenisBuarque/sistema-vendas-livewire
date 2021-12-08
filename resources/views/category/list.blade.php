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
                
                <!-- component -->
                
                    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                <th class="px-4 py-3">Imagem</th>
                                <th class="px-4 py-3">Categória</th>
                                <th class="px-4 py-3">Acões</th>
                            </thead>
                            <tbody class="bg-white">
                                <tr class="text-gray-700">
                                    <td class="px-4 py-3 border">
                                        <div class="flex items-center text-sm">
                                            <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full" src="https://dummyimage.com/160x120/cccccc/000000" alt="" loading="lazy" />
                                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-ms font-semibold border">Nome da categoria</td>
                                    <td class="px-4 py-3 text-sm border">
                                        <a href="" class="border rounded py-1 px-2">Edit</a>
                                        <a href="" class="border rounded py-1 px-2">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
