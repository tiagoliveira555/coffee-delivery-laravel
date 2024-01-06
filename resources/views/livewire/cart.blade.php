<div>
    <x-h2>Café selecionados</x-h2>
    <div
        class="mt-3 w-[448px] rounded-bl-[44px] rounded-br-md rounded-tl-md rounded-tr-[44px] bg-base-card p-10 shadow-sm">
        @if ($cart)
            @foreach ($cart as $item)
                <x-card-item-cart :item="$item" />
            @endforeach

            <div class="flex flex-col gap-2">
                <div class="flex items-center justify-between">
                    <span class="text-sm text-base-text">Total de itens</span>
                    <span class="text-base-text">R$ {{ number_format($this->totalItems, 2, ',', '.') }}</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-sm text-base-text">Entrega</span>
                    <span class="text-base-text">R$ 3,50</span>
                </div>
                <div class="flex items-center justify-between">
                    <strong class="text-xl text-base-subtitle">Total</strong>
                    <strong class="text-xl text-base-subtitle">R$
                        {{ number_format($this->total, 2, ',', '.') }}</strong>
                </div>
                <button wire:click='save'
                    class="mt-4 rounded-md border-none bg-product-yellow p-2 py-3 text-sm font-bold uppercase text-base-white transition-all hover:bg-product-yellow-dark">
                    confirmar pedido
                </button>
            </div>
        @else
            <h2 class="font-baloo text-base-subtitle">Não a itens selecionados</h2>
            <p class="mt-10 text-base-subtitle transition-all"><a class="underline hover:text-product-purple-dark"
                    href="{{ route('home') }}" wire:navigate>Clique aqui</a> para selecionar seus cafés</p>
        @endif
    </div>
</div>
