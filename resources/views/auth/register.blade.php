<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" novalidate>
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Rol -->
        <div class="mt-4">
            <x-input-label for="rol" :value="__('¿Que tipo de cuenta deseas crear?')" />
            <select name="rol" id="rol"
                class=" w-full order-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="">--Selecciona un rol--</option>
                <option value="1">Estudiante/Egresado - Obtener Empleo</option>
                <option value="2">Reclutador - Publicar Empleos</option>
            </select>
            <x-input-error :messages="$errors->get('rol')" class="mt-2" />
        </div>
        <!-- RFC -->
        <div id="rfc-section" class="mt-4">
            <x-input-label for="rfc" :value="__('RFC')" />
            <x-text-input id="rfc" class="block mt-1 w-full" type="text" name="rfc" :value="old('rfc')" />

        </div>

        <x-input-error :messages="$errors->get('rfc')" class="mt-2" />

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Repetir Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex justify-between my-5">
            <x-link :href="route('register')">Crear Cuenta
            </x-link>

            <x-link :href="route('password.request')">
                Olvidaste tu contraseña?
            </x-link>



        </div>

        <x-primary-button class="w-full justify-center">
            {{ __('Crear Cuenta') }}
        </x-primary-button>
    </form>
    <!-- Agrega esta sección en la parte inferior de tu vista -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Cuando se carga la página, verifica el valor inicial del select
            checkRolValue();

            // Detecta cambios en el select
            $("#rol").change(function() {
                checkRolValue();
            });

            function checkRolValue() {
                var selectedRol = $("#rol").val();

                if (selectedRol === "2") {
                    $("#rfc-section").show();
                } else {
                    $("#rfc-section").hide();
                }
            }
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            // Cuando se carga la página, verifica el valor inicial del select
            checkRolValue();

            // Detecta cambios en el select
            $("#rol").change(function() {
                checkRolValue();
            });

            function checkRolValue() {
                var selectedRol = $("#rol").val();

                if (selectedRol === "2") {
                    $("#rfc-section").show();
                } else {
                    $("#rfc-section").hide();
                }
            }
        });
    </script>

</x-guest-layout>
