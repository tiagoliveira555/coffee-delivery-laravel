@props(['item'])

<div>
    <div class="w-[368px] py-2 px-1 flex justify-between">
        <div class="flex gap-5">
            <img class="w-16 h-16" src="{{ $item['image'] }}" alt="{{ $item['name'] }}">
            <div class="flex flex-col gap-2">
                <span class="text-base-subtitle">{{ $item['name'] }}</span>
                <div class="flex justify-center items-center gap-2">
                    <div class="h-8 bg-base-button p-2 rounded-md flex justify-center items-center gap-3">
                        <button
                            wire:click="decrementQuantity({{ $item['id'] }})"
                            class="bg-transparent border-none"
                        >
                            <i class="ph-bold ph-minus text-sm text-product-purple hover:text-product-purple-dark transition-all"></i>
                        </button>
                        <span class="text-base-title">{{ $item['quantity'] }}</span>
                        <button
                            wire:click="incrementQuantity({{ $item['id'] }})"
                            class="bg-transparent border-none"
                        >
                            <i class="ph-bold ph-plus text-sm text-product-purple hover:text-product-purple-dark transition-all"></i>
                        </button>
                    </div>
                    <button
                        class="h-8 bg-base-button p-2 rounded-md flex justify-center items-center gap-1 px-2 hover:bg-base-hover transition-all"
                        wire:click="removeItem({{ $item['id'] }})"
                        >
                        <i class="text-product-purple ph ph-trash"></i>
                        <span class="text-xs text-base-text uppercase">remover</span>
                    </button>
                </div>
            </div>
        </div>
        <span class="text-base-text font-bold text-right">R$ {{ number_format($item['price'] * $item['quantity'], 2, ',', '.') }}</span>
    </div>
    <hr class="text-base-button my-6">
</div>
