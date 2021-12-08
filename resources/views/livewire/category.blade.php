<div>

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
                <a href="{{ route('category.create') }}"
                    class="rounded py-2 px-2 bg-indigo-500 text-white float-right">Novo registro</a>
            </div>
        </div>
    </x-slot>

    <div class="py-6">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex">
                <div class="flex-none">
                    <select wire:model="pagination" id="pagination" name="pagination"
                        class="mt-1 w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="2">2</option>
                        <option value="4">4</option>
                    </select>
                </div>
                <div class="flex-1 pl-10">
                    <input wire:model="search" type="search" name="search" id="search" placeholder="O quê procura?"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <!-- component -->
                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr
                                    class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                    <th class="px-4 py-3">Imagem</th>
                                    <th class="px-1 py-3">Categória</th>
                                    <th class="px-4 py-3 text-center">Acões</th>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($categories as $category)
                                    <tr class="text-gray-700">
                                        <td class="px-1 py-1 border">
                                            <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full"
                                                    src="{{ asset('storage/images/categories/' . $category->image) }}"
                                                    alt="{{ $category->name }}" />
                                            </div>
                                        </td>
                                        <td class="px-1 py-1 text-ms font-semibold border">{{ $category->name }}</td>
                                        <td class="px-1 py-1 text-sm border text-center">
                                            <a href="" class="border rounded py-1 px-2">Alterar</a>
                                            <a href="" class="border rounded py-1 px-2">Excluir</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                        @if (!$search && $categories)
                            <div class="py-2 px-2">{{ $categories->links() }}</div>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
