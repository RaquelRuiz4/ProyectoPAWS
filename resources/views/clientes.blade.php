
@vite(['resources/css/inicio.css'])

<x-app-layout>
    @empty($clientes)
    No hay ningún cliente registrado.
    @else

    <h1 class="titulo">Clientes</h1>
    <div class="d-flex  flex-column align-items-start container w-75">
      
        <table class="mt-4 table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mascota</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->nombre}} {{$cliente->apellido}}</td>
                    <td>{{$cliente->telefono}}</td>
                    <td>{{$cliente->email}}</td>
                    <td> <a href="{{ route("clientes.muestraMascotasAjenas", $cliente->idUsu) }}"
                            class="btn btn-success">Mascotas</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


        @endempty
</x-app-layout>