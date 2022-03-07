<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Repositorios
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Enlace</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">{{ $repository->id }}</td>
                            <td class="border px-4 py-2">{{ $repository->description }}</td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-right mb-4">
                    <a  href="{{route('repositories.index')}}"
                        class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md text-xs">
                            Volver
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
