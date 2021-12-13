<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar municipio') }}
        </h2>
    </x-slot>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <form method="POST" action="{{ url('/municipios/edit', array('id' => $municipio->id))}}">

            {{method_field('PUT')}}
            @csrf

            <!-- Nombre -->
            <div>
                <x-label for="nombre" :value="{{$municipio->nombre}}" />

                <x-input id="nombre" class="block mt-1 w-full text-gray-700" type="text" name="nombre" value="" required autofocus />
            </div>

            <!-- Población -->
            <div class="mt-4">
                <x-label for="poblacion" :value="{{$municipio->poblacion}}" />

                <x-input id="poblacion" class="block mt-1 w-full text-gray-700" type="number" name="poblacion" value="" required />
            </div>

                <x-button class="ml-4">
                    {{ __('Save') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-app-layout>
