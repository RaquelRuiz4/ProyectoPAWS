@vite(['resources/css/inicio.css'])
<x-app-layout>
    <h1 class="titulo">Medications</h1>
    
    <div class="container w-65 flex justify-center">
        @if(count($medicamentos) == 0)
        <div class="flex justify-center flex-col items-center" role="alert">

            <div class="mt-4 bg-red-500 text-white px-4 py-2 rounded" role="alert">
                Currently, there are no medications available.
            </div>
            @if(!Auth::user()->admin)
            <a href="{{ route('medicamentos.create') }}" class="bg-gray-800 text-white font-bold py-2 px-4 mt-4 rounded">Add Medication</a>
            @endif
        </div>

        @else
        <div class="flex flex-col items-start">

            <table class="mt-4 table table-striped bg-white border-collapse">
                <thead>
                    <tr>
                        <th scope="col" class="p-4">Name</th>
                        <th scope="col" class="p-4">Description</th>
                        <th scope="col" class="p-4">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($medicamentos as $medicamento)
                    <tr>
                        <td>{{$medicamento->Nombre}}</td>
                        <td>{{$medicamento->Descripción}}</td>
                        <td>
                            <a href="{{ route('medicamentos.edit', $medicamento->ID_Medicamento) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Edit</a>
                            <form action="{{ route('medicamentos.destroy', $medicamento->ID_Medicamento) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if(!Auth::user()->admin)
            <a href="{{ route('medicamentos.create') }}" class="bg-gray-800 text-white font-bold py-2 px-4 mt-4 rounded">Add Medication</a>
            @endif

        </div>
    </div>
    @endempty
</x-app-layout>
