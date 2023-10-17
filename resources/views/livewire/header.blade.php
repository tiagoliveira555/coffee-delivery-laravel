<header class="fixed w-full top-0 bg-base-background">
    <div class="max-w-[1440px] mx-auto px-40 py-6 flex justify-between items-center">
        <a href="{{ route('home') }}" wire:navigate ><img src="imgs/coffee-delivery-logo.svg" alt="Logo"></a>
        <div class="flex justify-center items-center gap-1">
            <div class="flex justify-center items-center bg-product-purple-light p-2 gap-1 rounded-md">
                <i class="text-product-purple text-icon ph-fill ph-map-pin"></i>
                <span class="text-product-purple-dark text-sm tracking-wide">Paripiranga, BA</span>
            </div>
            <div class="relative w-14 h-14 flex justify-center items-center bg-inherit -mr-2">
                <a href="{{ route('checkout') }}" wire:navigate class="w-[38px] h-[38px] flex justify-center items-center rounded-md bg-product-yellow-light">
                    <i class="text-product-yellow-dark text-icon ph-fill ph-shopping-cart"></i>
                    <span class="text-base-white text-xs font-bold absolute top-0 right-0 rounded-full flex justify-center items-center bg-product-yellow-dark w-5 h-5">
                        3
                    </span>
                </a>
            </div>
        </div>
    </div>
</header>
