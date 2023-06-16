@vite(['resources/css/inicio.css'])
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">

<x-app-layout>
   

    <div class="container w-65 d-flex justify-content-center">
        @if(count($citas) == 0)
        <div class="d-flex justify-content-center flex-column align-items-center" role="alert">

            <div class="mt-4 alert alert-danger align-self-center" role="alert">
                You currently have no appointments.
            </div>
            @if(!Auth::user()->admin)
            <a href="{{ route("citas.insCita") }}" class="btn btn-dark">Schedule an appointment</a>
            @endif
        </div>

        @else
        <div class="d-flex flex-column align-items-start">

            <table class="mt-4 table table-striped bg-white border-collapse">
                <thead>
                    <tr>
                        <th scope="col" class="p-4">Date</th>
                        <th scope="col" class="p-4">Veterinarian</th>
                        <th scope="col" class="p-4">Specialty</th>
                        <th scope="col" class="p-4">Pet</th>
                        <th scope="col" class="p-4"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($citas as $cita)
                    <tr class="border-t">
                        <td class="p-4">{{$cita->fecha_cita}}</td>
                        <td class="p-4">{{$cita->nombre}} {{$cita->apellido}}</td>
                        <td class="p-4">{{$cita->especialidad}}</td>
                        <td class="p-4">{{$cita->nombrePerro}}</td>
                        <td class="p-4">
                            <a href="{{ route("citas.eliminarCita", $cita->idCit) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @if(!Auth::user()->admin)
            <a href="{{ route("citas.insCita") }}" class="btn btn-dark">Schedule an appointment</a>
            @endif

        </div>
    </div>
    @endempty
</x-app-layout>
