@vite(['resources/css/inicio.css'])
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<x-app-layout>
    <div class="container w-75">
        @empty($clientes)
        <div class="flex justify-center items-center h-screen">
            <div class="text-center">
                <div class="mt-4 alert alert-danger" role="alert">
                    There are no registered clients.
                </div>
            </div>
        </div>
        @else
        <div class="d-flex flex-column align-items-start">
            <table class="mt-4 table table-striped bg-white border-collapse">
                <thead>
                    <tr>
                        <th scope="col" class="p-4">Name</th>
                        <th scope="col" class="p-4">Phone</th>
                        <th scope="col" class="p-4">Email</th>
                        <th scope="col" class="p-4"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($clientes as $cliente)
                    <tr class="border-t">
                        <td class="p-4">{{$cliente->nombre}} {{$cliente->apellido}}</td>
                        <td class="p-4">{{$cliente->telefono}}</td>
                        <td class="p-4">{{$cliente->email}}</td>
                        <td class="p-4">
                            <a href="{{ route("clientes.muestraMascotasAjenas", $cliente->idUsu) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">Pets</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endempty
    </div>
</x-app-layout>

