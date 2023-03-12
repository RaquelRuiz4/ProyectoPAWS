@vite(['resources/css/style.css', 'resources/css/inicio.css'])
<x-app-layout>
    <h1 class="titulo">Mascotas</h1>
    <div class="container w-75 veterinarios bg-gray-100 dark:bg-gray-900">
        @if(count($mascotas) == 0)
        <div class="d-flex justify-content-center flex-column align-items-center" role="alert">
            <div class="mt-4 alert alert-danger alig-self-center" role="alert">
                Actualmente no hay mascotas registradas.
            </div>
            <a href="{{ route('mascotas.formularioIns') }}"><button class="btn btn-dark">Insertar mascota</button>
            </a>
        </div>
        @else

        <div class="row mt-3 justify-content-around g-3">
            @foreach($mascotas as $mascota)
            <div class="col-3">

                <div class="card">
                    <a href="{{ route('mascotas.formularioAct', $mascota) }}">
                        <img src="{{ $mascota->fotoPerro }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"><b>Nombre:</b> {{ $mascota->nombrePerro }}</p>
                            <p class="card-text"><b>Raza:</b> {{ $mascota->raza }}</p>
                            <p class="card-text"><b>Edad:</b> {{ $mascota->edad }} Años</p>
                            <p class="card-text"><b>Género:</b> {{ $mascota->genero }}</p>
                            <p class="card-text"><b>Peso:</b> {{ $mascota->peso }}kg</p>
                        </div>
                    </a>
                    <div class="boton_eliminar">
                        <a href="{{ route('mascotas.eliminar', $mascota->idPer) }}"><button
                        class="btn btn-danger">Eliminar</button>
                        </a>
                    </div>
                    
                </div>


            </div>
            @endforeach
            @if(Auth::id() == $mascotas[0]->idDue)
            <a href="{{ route('mascotas.formularioIns') }}"><button class="btn btn-dark">Insertar mascota</button>
            </a>
            @endif
        </div>


        @endempty
</x-app-layout>