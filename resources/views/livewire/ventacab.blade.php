<div class="p-2">

    <div class="grid grid-cols-3 grid-flow-row gap-2 mb-2 p-3">
        <div class="bg-teal-400"  x-show="!retencion">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="num_de_pago">
            Código
            </label>
            <input
                type="text"
                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 w-full block rounded-none rounded-r-md sm:text-sm border-gray-300"
                placeholder="Código"
                wire:model="codigo"
            >
        </div>
        <div class="bg-teal-400">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="cliente">
                Cliente
            </label>
            <select
                class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 w-full block rounded-none rounded-r-md sm:text-sm border-gray-300 form-select  block w-full"
                x-ref="select_retencion"
                x-on:change="if( $event.target.value == 4 ){retencion= true}else{retencion=false}"
                wire:model="cliente_id"
            >
                <option>Seleccione el tipo de pago</option>
                @foreach ($clientes as $item)
                <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                @endforeach
            </select>
        </div>


    </div>

</div