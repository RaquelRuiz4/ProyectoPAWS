@vite(['resources/css/inicio.css'])
<x-app-layout>
    <h1 class="titulo">Schedule an Appointment</h1>
    <div class="container w-65 mx-auto">
        <form action="{{ route('citas.insertarCita') }}" method="post" class="max-w-lg mx-auto">
            @csrf
            <div class="mb-4">
                <label for="idPerro" class="block font-bold">Pet's Name</label>
                <select class="form-select" id="idPerro" name="idPerro">
                    @foreach($misPerros as $perro)
                        <option value="{{ $perro->idPer }}">{{ $perro->nombrePerro }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="idVeterinario" class="block font-bold">Veterinarians</label>
                <select class="form-select" id="idVeterinario" name="idVeterinario">
                    @foreach($veterinarios as $veterinario)
                        <option value="{{ $veterinario->idUsu }}">{{ $veterinario->especialidad }} - {{ $veterinario->nombre }} {{ $veterinario->apellido }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="fecha_cita" class="block font-bold">Date and Time</label>
                <input type="datetime-local" class="form-input" id="fecha_cita" name="fecha_cita">
            </div>

            <button class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">Accept</button>
        </form>
    </div>
</x-app-layout>








