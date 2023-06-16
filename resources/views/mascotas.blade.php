@vite(['resources/css/style.css', 'resources/css/inicio.css'])
<x-app-layout>
    <div class="container w-75 veterinarios bg-gray-100 dark:bg-gray-900">
        @if(count($mascotas) == 0)
        <div class="d-flex justify-content-center flex-column align-items-center" role="alert">
            <div class="mt-4 alert alert-danger alig-self-center" role="alert">
                Currently, there are no registered pets.
            </div>
            <a href="{{ route('mascotas.formularioIns') }}"><button class="btn btn-dark">Insert Pet</button></a>
        </div>
        @else

        <div class="row mt-3 justify-content-around g-3">
            @foreach($mascotas as $mascota)
            <div class="col-3 card bg-white hover:scale-105 rounded-lg shadow-md flex flex-col items-center justify-center text-center hover:text-yellow-400 transition-all">
               
                    <a class="hover:text-yellow-400 mascota_link" href="{{ route('mascotas.formularioAct', $mascota) }}">
                        <div class="mascota_img">
                            <img src="{{ $mascota->fotoPerro }}" class="card-img-top mx-auto imagen-mascota" alt="...">
                        </div>
                        <div class="card-body">
                            <p class="card-text text-lg font-bold mb-2 hover:text-yellow-400"><b>Name:</b> {{ $mascota->nombrePerro }}</p>
                            <p class="card-text"><b>Breed:</b> {{ $mascota->raza }}</p>
                            <p class="card-text"><b>Age:</b> {{ $mascota->edad }} Years</p>
                            <p class="card-text"><b>Gender:</b> {{ $mascota->genero }}</p>
                            <p class="card-text"><b>Weight:</b> {{ $mascota->peso }}kg</p>
                        </div>
                    </a>
                    <div class="boton_eliminar">
                        <a href="{{ route('mascotas.eliminar', $mascota->idPer) }}">
                            <button class="bg-red-400 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </a>
                    </div>
                </div>
            
            @endforeach
            @if(Auth::id() == $mascotas[0]->idDue)
            <a href="{{ route('mascotas.formularioIns') }}"><button class="bg-stone-400 hover:bg-stone-500 text-white font-bold py-2 px-4 rounded">Insert Pet</button></a>
            @endif
        </div>
        @endempty
    </div>
</x-app-layout>

