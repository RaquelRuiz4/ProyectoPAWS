{{-- @vite(['resources/css/inicio.css'])
<x-app-layout>
    <h1 class="titulo">Medicamentos</h1>
    
    <div class="container w-65 d-flex justify-content-center">
        @if(count($medicamentos) == 0)
            <div class="d-flex justify-content-center flex-column align-items-center" role="alert">
                <div class="mt-4 alert alert-danger align-self-center" role="alert">
                    No hay medicamentos disponibles.
                </div>
                @if(!Auth::user()->admin)
                    <a href="{{ route('medicamentos.create') }}" class="btn btn-dark">Agregar Medicamento</a>
                @endif
            </div>
        @else
            <div class="d-flex flex-column align-items-start">
                <table class="mt-4 table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($medicamentos as $medicamento)
                            <tr>
                                <td>{{ $medicamento->Nombre }}</td>
                                <td>
                                    @if(Auth::user()->admin)
                                        <input type="number" class="form-control" value="{{ $medicamento->Cantidad }}">
                                    @else
                                        {{ $medicamento->Cantidad }}
                                    @endif
                                </td>
                                <td>
                                    @if(Auth::user()->admin)
                                        <form action="{{ route('medicamentos.destroy', $medicamento->ID_Medicamento) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if(!Auth::user()->admin)
                    <a href="{{ route('medicamentos.create') }}" class="btn btn-dark">Agregar Medicamento</a>
                @endif
            </div>
        @endif
    </div>
</x-app-layout> --}}



@vite(['resources/css/inicio.css'])
<x-app-layout>
    <h1 class="titulo">Medicamentos</h1>
    
    <div class="container w-65 d-flex justify-content-center">
        @if(count($medicamentos) == 0)
        <div class="d-flex justify-content-center flex-column align-items-center" role="alert">

            <div class="mt-4 alert alert-danger align-self-center" role="alert">
                Actualmente no tienes medicamentos.
            </div>
            @if(!Auth::user()->admin)
            <a href="{{ route('medicamentos.create') }}" class="btn btn-dark">Crear medicamento</a>
            @endif
        </div>

        @else
        <div class="d-flex  flex-column align-items-start">

            <table class="mt-4 table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($medicamentos as $medicamento)
                    <tr>
                        <td>{{$medicamento->Nombre}}</td>
                        <td>{{$medicamento->Descripción}}</td>
                        <td>
                            <a href="{{ route('medicamentos.edit', $medicamento->ID_Medicamento) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('medicamentos.destroy', $medicamento->ID_Medicamento) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if(!Auth::user()->admin)
            <a href="{{ route('medicamentos.create') }}" class="btn btn-dark">Crear medicamento</a>
            @endif

        </div>
    </div>
    @endempty
</x-app-layout>

