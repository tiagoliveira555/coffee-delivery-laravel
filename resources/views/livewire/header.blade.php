<header class="fixed top-0 w-full bg-base-background">
    <div class="mx-auto flex max-w-[1440px] items-center justify-between px-40 py-6">
        <a href="{{ route('home') }}" wire:navigate><img src="imgs/coffee-delivery-logo.svg" alt="Logo"></a>
        <div class="flex items-center justify-center gap-1">
            <div class="flex items-center justify-center gap-1 rounded-md bg-product-purple-light p-2">
                <i class="ph-fill ph-map-pin text-icon text-product-purple"></i>
                <span class="text-sm tracking-wide text-product-purple-dark">Paripiranga, BA</span>
            </div>
            <div class="relative -mr-2 flex h-14 w-14 items-center justify-center bg-inherit">
                <a href="{{ route('checkout') }}" wire:navigate
                    class="flex h-[38px] w-[38px] items-center justify-center rounded-md bg-product-yellow-light">
                    <i class="ph-fill ph-shopping-cart text-icon text-product-yellow-dark"></i>
                    @if ($this->getCountCart > 0)
                        <span
                            class="absolute right-0 top-0 flex h-5 w-5 items-center justify-center rounded-full bg-product-yellow-dark text-xs font-bold text-base-white">
                            {{ $this->getCountCart }}
                        </span>
                    @endif
                </a>
            </div>
        </div>
    </div>
</header>
