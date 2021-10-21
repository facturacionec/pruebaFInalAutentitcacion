<div class="crud general">
    <div class="w-full overflow-x-auto mt-4">
        <div class="flex mb-2 justify-end">
                @if( $objectPermissionCreate )
                    <button
                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray bg-green-100 dark:bg-gray-800"
                        aria-label="Crear"
                        wire:click.prevent="new"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </button>
                @endif
        </div>
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    @foreach( $campos as $campo )
                        <th class="px-4 py-3">{{ $campo }}</th>
                    @endforeach
                    <th class="px-4 py-3 w-3">Acciones</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @foreach ($objects as $object)
                    <tr class="text-gray-700 dark:text-gray-400">
                        @foreach( $campos as $campo )
                        <td class="px-4 py-3">{{ $object->$campo }}</td>
                        @endforeach
                        <td class="px-4 py-3" >
                            <div class="flex items-center space-x-4 text-sm">
                                <button
                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="view"
                                    wire:click.prevent="view({{$object->id}})" >
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                        <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button
                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Edit"
                                    wire:click.prevent="edit({{$object->id}})" >
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                        </svg>
                                </button>
                                <button
                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                    aria-label="Delete"
                                    wire:click.prevent="delete({{$object->id}})" >
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $objects->links() }}
    </div>

    <x-jet-confirmation-modal wire:model="popup">
        <x-slot name="title">
            {{ $popup_tipo }}
        </x-slot>

        <x-slot name="content">
            @if( $popup_tipo == "Ver" )
                <table class="w-full whitespace-no-wrap">
                        @foreach( $campos as $campo )
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">{{ $campo }}</th>
                                <td class="px-4 py-3">{{ $elemento->$campo }}</td>
                            </tr>
                        @endforeach
                </table>
            @endif
            @if( $popup_tipo == "Editar" )
                @include("livewire.users._partes.permisos.formulario")
            @endif
            @if( $popup_tipo == "Crear" )
                @include("livewire.users._partes.permisos.formulario")
            @endif
            @if( $popup_tipo == "Borrar" )
                <div>¿Está seguro borrar <strong>{{ $elemento->name }}</strong>?</div>
            @endif
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$toggle('popup')" wire:loading.attr="disabled">
                Cancelar
            </x-jet-secondary-button>

            <x-jet-danger-button class="ml-2" wire:click="aceptar" wire:loading.attr="disabled">
            @if( $popup_tipo == "Ver" )
                Aceptar
            @else
                {{$popup_tipo}}
            @endif
            </x-jet-danger-button>
        </x-slot>
    </x-jet-confirmation-modal>

</div>
