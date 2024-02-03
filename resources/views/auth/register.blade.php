<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
    <div>
    <!-- Name -->
    <div class="">
            <x-input-label for="names" :value="__('Name')" />
            <x-text-input id="names" class="block mt-1 w-full" type="text" name="names" :value="old('names')" required autofocus autocomplete="names" />
            <x-input-error :messages="$errors->get('names')" class="mt-2" />
        </div>

        <!-- Second Name -->
        <div>
            <x-input-label for="second_name" :value="__('Second Name')" />
            <x-text-input id="second_name" class="block mt-1 w-full" type="text" name="second_name" :value="old('second_name')" required autofocus autocomplete="names" />
            <x-input-error :messages="$errors->get('second_name')" class="mt-2" />
        </div>

        <!-- Nacimiento -->
        <div>
            <x-input-label for="nacimiento" :value="__('Nacimiento')" />
            <x-text-input id="nacimiento" class="block mt-1 w-full" type="date" name="nacimiento" :value="old('nacimiento')" required autofocus autocomplete="names" />
            <x-input-error :messages="$errors->get('nacimiento')" class="mt-2" />
        </div>

         <!-- RFC -->
         <div>
            <x-input-label for="rfc" :value="__('RFC')" />
            <x-text-input id="rfc" class="block mt-1 w-full" type="text" name="rfc" :value="old('rfc')" required autofocus autocomplete="names" />
            <x-input-error :messages="$errors->get('rfc')" class="mt-2" />
        </div>

         <!-- CURP -->
         <div>
            <x-input-label for="curp" :value="__('CURP')" />
            <x-text-input id="curp" class="block mt-1 w-full" type="text" name="curp" :value="old('curp')" required autofocus autocomplete="names" />
            <x-input-error :messages="$errors->get('curp')" class="mt-2" />
        </div>

         <!-- Telefono -->
         <div>
            <x-input-label for="telefono" :value="__('Telefono')" />
            <x-text-input id="telefono" class="block mt-1 w-full" type="number" name="telefono" :value="old('telefono')" required autofocus autocomplete="names" />
            <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
        </div>


    </div>

    <div class="">

    </div>
         <!-- Calle -->
         <div>
            <x-input-label for="calle" :value="__('Calle')" />
            <x-text-input id="calle" class="block mt-1 w-full" type="text" name="calle" :value="old('calle')" required autofocus autocomplete="names" />
            <x-input-error :messages="$errors->get('calle')" class="mt-2" />
        </div>

        <!-- Colonia -->
        <div>
            <x-input-label for="colonia" :value="__('Colonia')" />
            <x-text-input id="colonia" class="block mt-1 w-full" type="text" name="colonia" :value="old('colonia')" required autofocus autocomplete="names" />
            <x-input-error :messages="$errors->get('colonia')" class="mt-2" />
        </div>

        <!-- Codigo postal -->
        <div>
            <x-input-label for="cp" :value="__('Codigo postal')" />
            <x-text-input id="cp" class="block mt-1 w-full" type="number" name="cp" :value="old('cp')" required autofocus autocomplete="names" />
            <x-input-error :messages="$errors->get('cp')" class="mt-2" />
        </div>

        <!-- Ciudad -->
        <div>
            <x-input-label for="ciudad" :value="__('Ciudad ')" />
            <x-text-input id="cp" class="block mt-1 w-full" type="text" name="ciudad" :value="old('ciudad')" required autofocus autocomplete="names" />
            <x-input-error :messages="$errors->get('ciudad')" class="mt-2" />
        </div>

        <!-- Estado -->
        <div>
            <x-input-label for="estado" :value="__('Estado')" />
            <x-text-input id="estado" class="block mt-1 w-full" type="text" name="estado" :value="old('estado')" required autofocus autocomplete="names" />
            <x-input-error :messages="$errors->get('estado')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="names" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
       
    </form>
</x-guest-layout>