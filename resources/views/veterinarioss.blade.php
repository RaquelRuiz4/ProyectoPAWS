@vite(['resources/css/inicio.css'])
<x-app-layout>
    <h1 class="titulo">Veterinarios</h1>
    @empty($datos)
    Lo siento, pero no hay veterinarios disponibles.
    @else

    <div class="container w-75 veterinarios bg-gray-100 dark:bg-gray-900">
        <div class="row mt-3 justify-content-around g-3">

            @foreach($datos as $veterinario)

            <div class="col-3">
                <div class="card">
                    <img src="{{ $veterinario->foto }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class=" nombre card-title"><b>{{ $veterinario->nombre }} {{ $veterinario->apellido }}</b></h5>
                        <p class="card-text">{{ $veterinario->especialidad }}</p>
                    </div>
                </div>
            </div>



            @endforeach
        </div>
    </div>


    @endempty
</x-app-layout>