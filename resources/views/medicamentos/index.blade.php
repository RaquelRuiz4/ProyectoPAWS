@vite(['resources/css/inicio.css'])
<x-app-layout>
    
    <div class="container w-65 flex justify-center">

        @if(count($medicamentos) == 0)
        <div class="flex justify-center flex-col items-center" role="alert">

            <div class="mt-4 bg-red-500 text-white px-4 py-2 rounded" role="alert">
                Currently, there are no medications available.
            </div>
            @if(Auth::user()->admin)
            <a href="{{ route('medicamentos.create') }}" class="bg-stone-400 hover:bg-stone-500 text-white font-bold py-2 px-4 rounded">Add Medication</a>
            @endif
        </div>

        @else
        <div class="flex flex-col items-start">

            <table class="mt-4 table table-striped bg-white border-collapse">
                <thead>
                    <tr>
                        <th scope="col" class="medicamento_item">Name</th>
                        <th scope="col" class="medicamento_item">Description</th>
                        <th scope="col" class="medicamento_item">Price</th>
                        <th scope="col" class="medicamento_item">Amount</th>
                        <th scope="col" class="medicamento_item"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($medicamentos as $medicamento)
                    <tr>
                        <td>{{$medicamento->Nombre}}</td>
                        <td>{{$medicamento->Descripción}}</td>
                        <td>{{$medicamento->Precio}}€</td>
                        <td>{{$medicamento->Cantidad}}</td>
                        <td>
                            @if(Auth::user()->admin)
                            <a href="{{ route('medicamentos.edit', $medicamento->ID_Medicamento) }}" class="bg-yellow-400  hover:bg-yellow-500  text-white font-bold py-2 px-4 rounded">Edit</a>
                            <form action="{{ route('medicamentos.destroy', $medicamento->ID_Medicamento) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-400 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if(Auth::user()->admin)
            <a href="{{ route('medicamentos.create') }}" class="bg-gray-800 text-white font-bold py-2 px-4 mt-4 rounded">Add Medication</a>
            @endif

        </div>
    </div>
    @endempty
</x-app-layout>
