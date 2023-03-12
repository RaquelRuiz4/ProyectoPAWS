@vite(['resources/css/inicio.css'])
<x-app-layout>
    <h1 class="titulo">Citas</h1>
    
    <div class="container w-65 d-flex justify-content-center">
        @if(count($citas) == 0)
        <div class="d-flex justify-content-center flex-column align-items-center" role="alert">

            <div class="mt-4 alert alert-danger align-self-center" role="alert">
                Actualmente no tienes citas.
            </div>
            @if(!Auth::user()->admin)
            <a href="{{ route("citas.insCita") }}" class="btn btn-dark">Sacar cita</a>
            @endif
        </div>

        @else
        <div class="d-flex  flex-column align-items-start">

            <table class="mt-4 table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Veterinario</th>
                        <th scope="col">Especialidad</th>
                        <th scope="col">Mascota</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($citas as $cita)
                    <tr>
                        <td>{{$cita->fecha_cita}}</td>
                        <td>{{$cita->nombre}} {{$cita->apellido}}</td>
                        <td>{{$cita->especialidad}}</td>
                        <td>{{$cita->nombrePerro}}</td>
                        <td> <a href="{{ route("citas.eliminarCita", $cita->idCit) }}" class="btn btn-danger">Borrar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @if(!Auth::user()->admin)
            <a href="{{ route("citas.insCita") }}" class="btn btn-dark">Sacar cita</a>
            @endif

        </div>
    </div>
    @endempty
</x-app-layout>