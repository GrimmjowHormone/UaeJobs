<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        @forelse ($vacantes as $vacante)
            <div class="p-6 text-gray-900 md:flex md:justify-between md:items-center">
                <div class="space-y-3">
                    <a href="{{route('vacantes.show',$vacante->id)}}" class="text-xl font-bold">
                        {{ $vacante->titulo }}
                    </a>

                    <p class="text-sm text-gray-600 font-bold">{{ $vacante->empresa }}</p>
                    <p class="text-sm text-gray-500">Ultimo dia: {{ $vacante->ultimo_dia->format('d/m/Y') }}</p>
                </div>
                <div class="flex gap-3 items-stretch  flex-col md:flex-row mt-5 md:mt-0">
                    <a href="{{route('candidatos.index',$vacante)}}"
                        class="bg-slate-800 py-2 px-4 rounded-lg text-white text-sm font-bold uppercase text-center">
                        {{$vacante->candidatos->count()}}
                         Candidatos</a>
                    <a href="{{ route('vacantes.edit', $vacante->id) }}"
                        class="bg-blue-800 py-2 px-4 rounded-lg text-white text-sm font-bold uppercase text-center">Editar</a>


                        <button wire:click="$emit('showAlert',{{ $vacante->id}})"
                        class="bg-red-600 py-2 px-4 rounded-lg text-white text-sm font-bold uppercase text-center" id="eliminar">Eliminar</button>
                </div>

            </div>
        @empty
            <div class="text-lg text-gray-600 font-bold text-center p-10">No hay vacantes para mostrar</div>
        @endforelse

    </div>
    <div class=" my-10">{{ $vacantes->links() }}</div>
</div>

@push('scripts')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('showAlert',vacanteId=>{
            Swal.fire({
            title: 'Eliminar Vacante?',
            text: "Una vacante eliminada no se puede recuperar!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Eliminada!',
                    'La vacante ha sido eliminada',
                    'success'
                )
                //Eliminar la vacante desde el servidor
                Livewire.emit('eliminarVacante',vacanteId)


            }
        })
        })

    </script>
@endpush
