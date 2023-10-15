<div>
    <h2 class="font-baloo text-lg text-base-subtitle">Café selecionados</h2>
    <div class="w-[448px] bg-base-card mt-3 p-10 rounded-tl-md rounded-tr-[44px] rounded-br-md rounded-bl-[44px] shadow-sm">
        <div class="w-[368px] py-2 px-1 flex justify-between">
            <div class="flex gap-5">
                <img class="w-16 h-16" src="imgs/coffees/tradicional.png" alt="Tradicional">
                <div class="flex flex-col gap-2">
                    <span class="text-base-subtitle">Expresso Tradicional</span>
                    <div class="flex justify-center items-center gap-2">
                        <div class="h-8 bg-base-button p-2 rounded-md flex justify-center items-center gap-3">
                            <button class="bg-transparent border-none"><i class="ph-bold ph-minus text-sm text-product-purple hover:text-product-purple-dark transition-all"></i></button>
                            <span class="text-base-title">1</span>
                            <button class="bg-transparent border-none"><i class="ph-bold ph-plus text-sm text-product-purple hover:text-product-purple-dark transition-all"></i></button>
                        </div>
                        <button class="h-8 bg-base-button p-2 rounded-md flex justify-center items-center gap-1 px-2 hover:bg-base-hover transition-all">
                            <i class="text-product-purple ph ph-trash"></i>
                            <span class="text-xs text-base-text uppercase">remover</span>
                        </button>
                    </div>
                </div>
            </div>
            <span class="text-base-text font-bold text-right">R$ 9,90</span>
        </div>
        <hr class="text-base-button my-6">
        <div class="w-[368px] py-2 px-1 flex justify-between">
            <div class="flex gap-5">
                <img class="w-16 h-16" src="imgs/coffees/latte.png" alt="Latte">
                <div class="flex flex-col gap-2">
                    <span class="text-base-subtitle">Latte</span>
                    <div class="flex justify-center items-center gap-2">
                        <div class="h-8 bg-base-button p-2 rounded-md flex justify-center items-center gap-3">
                            <button class="bg-transparent border-none"><i class="ph-bold ph-minus text-sm text-product-purple hover:text-product-purple-dark transition-all"></i></button>
                            <span class="text-base-title">2</span>
                            <button class="bg-transparent border-none"><i class="ph-bold ph-plus text-sm text-product-purple hover:text-product-purple-dark transition-all"></i></button>
                        </div>
                        <button class="h-8 bg-base-button p-2 rounded-md flex justify-center items-center gap-1 px-2 hover:bg-base-hover transition-all">
                            <i class="text-product-purple ph ph-trash"></i>
                            <span class="text-xs text-base-text uppercase">remover</span>
                        </button>
                    </div>
                </div>
            </div>
            <span class="text-base-text font-bold text-right">R$ 9,90</span>
        </div>
        <hr class="text-base-button my-6">

        <div class="flex flex-col gap-2">
            <div class="flex items-center justify-between">
                <span class="text-base-text text-sm">Total de itens</span>
                <span class="text-base-text">R$ 27,90</span>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-base-text text-sm">Entrega</span>
                <span class="text-base-text">R$ 3,50</span>
            </div>
            <div class="flex items-center justify-between">
                <strong class="text-xl text-base-subtitle">Total</strong>
                <strong class="text-xl text-base-subtitle">R$ 33,20</strong>
            </div>
            <button wire:click='save' class="mt-4 text-base-white font-bold text-sm uppercase border-none bg-product-yellow py-3 p-2 rounded-md hover:bg-product-yellow-dark transition-all">
                confirmar pedido
            </button>
        </div>
    </div>
</div>
