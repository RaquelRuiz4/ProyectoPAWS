
<x-app-layout> <h1 class="text-3xl font-bold text-center mt-4">Editar Medicamento</h1>
    <div class="container w-65 flex justify-center flex-column">
       

   
        <form action="{{ route('medicamentos.update', $medicamento->ID_Medicamento) }}" method="POST" class="mb-8">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block font-bold">Nombre:</label>
                <input type="text" name="nombre" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-400" value="{{ $medicamento->Nombre }}" required>
            </div>
            <div class="mb-4">
                <label for="cantidad" class="block font-bold">Cantidad:</label>
                <input type="number" name="cantidad" class="w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring focus:border-blue-400" value="{{ $medicamento->Cantidad }}" required>
            </div>
            <button type="submit" class="bg-yellow-400 hover:bg-yellow-500 text-white font-bold py-2 px-4 rounded">Actualizar</button>
        </form>
    </div>
</x-app-layout>

