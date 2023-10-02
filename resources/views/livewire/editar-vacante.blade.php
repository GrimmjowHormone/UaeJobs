<form action="" class="md:w-1/2 space-y-5" wire:submit.prevent='editarVacante'>

    {{-- Titulo --}}
    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input id="titulo" class="block mt-1 w-full" type="text" wire:model="titulo" :value="old('titulo')"
            placeholder="Titulo Vacante" />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>
    {{-- Salario --}}
    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select wire:model="salario" id="salario"
            class=" w-full order-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
            <option value="">--Seleccione--</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>

    {{-- Categoria --}}
    <div>
        <x-input-label for="categoria" :value="__('Categoría')" />
        <select wire:model="categoria" id="categoria"
            class=" w-full order-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">

            <option value="">--Seleccione--</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
            @endforeach
        </select>
        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
    </div>
    {{-- Empresa --}}
    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input id="empresa" class="block mt-1 w-full" type="text" wire:model="empresa" :value="old('empresa')"
            placeholder="Empresa: ej. Netflix, Uber, Shopify" />
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>
    {{-- Ultimo dia de postulación --}}
    <div>
        <x-input-label for="ultimo_dia)" :value="__('Último Día para postularse')" />
        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" wire:model="ultimo_dia"
            :value="old('ultimo_dia')" />
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>
    {{-- Descripcion --}}
    <div>
        <x-input-label for="descripcion)" :value="__('Descripción Puesto')" />
        <textarea wire:model="descripcion" placeholder="Decripción general del puesto, experiencia"
            class=" w-full h-72 max-h-72 order-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"></textarea>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
    </div>
    {{-- Imagen --}}
    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input id="imagen" class="block mt-1 w-full" type="file" wire:model="imagen" accept="image/*"/>
        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />

            <div class="my-5 w-96">
                <x-input-label  :value="__('Imagen Actual')" />
                <img src="{{asset('storage/vacantes/'. $imagen)}}" alt="{{'Imagen Vacante ' . $titulo}}">
            </div>
            {{-- <div class="my-5 w-96">
                @if ($imagen)
                    Imagen: 
                    <img src="{{$imagen->temporaryUrl()}}" alt="Imagen de la vacante">
                    
                @endif
            </div> --}}
    </div>
    <x-primary-button class="w-full justify-center">
        {{ __('Guardar Cambios') }}
    </x-primary-button>

</form>
