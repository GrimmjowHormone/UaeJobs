<div>
    <form action="" class="md:w-1/2 space-y-5" wire:submit.prevent='crearVacante'>

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

            </select>
            <x-input-error :messages="$errors->get('salario')" class="mt-2" />
        </div>

        {{-- Categoria --}}
        <div>
            <x-input-label for="categoria" :value="__('Categoría')" />
            <select wire:model="categoria" id="categoria"
                class=" w-full order-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">

                <option value="">--Seleccione--</option>

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


        <x-primary-button class="w-full justify-center">
            {{ __('Crear Vacante') }}
        </x-primary-button>

    </form>

</div>
