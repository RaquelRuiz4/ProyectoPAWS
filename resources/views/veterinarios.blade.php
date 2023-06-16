@vite(['resources/css/inicio.css'])
<x-app-layout>
   
    @empty($datos)
        Sorry, but there are no available veterinarians.
    @else
    <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
          <div class="max-w-2xl">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Meet Our Veterinarians</h2>
            <p class="text-justify mt-6 text-lg leading-8 text-gray-600">A passionate and highly skilled team dedicated to the care and well-being of your beloved pets. Our veterinarians have extensive experience and specialized knowledge to provide exceptional care for your furry companions.</p>
        </div>
          <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            @empty($datos)
              <li>
                <p class="text-lg leading-8 text-gray-600">Sorry, but there are no available veterinarians.</p>
              </li>
            @else
              @foreach($datos as $veterinario)
                <li>
                  <div class="flex items-center gap-x-6">
                    <img class="h-16 w-16 rounded-full hover:scale-150 hover:rotate-30 " src="{{ $veterinario->foto }}" alt="">
                    <div>
                      <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900 hover:font-bold">{{ $veterinario->nombre }} {{ $veterinario->apellido }}</h3>
                      <p class="text-sm font-semibold leading-6 text-yellow-400 hover:font-bold">{{ $veterinario->especialidad }}</p>
                    </div>
                  </div>
                </li>
              @endforeach
            @endempty
          </ul>
        </div>
      </div>
      
    @endempty
</x-app-layout>
