<div>
    <main class="mx-auto max-w-[1440px]">
        <div class="mt-[104px] flex h-[544px] items-center justify-between bg-intro bg-cover bg-no-repeat px-40">
            <div class="w-[588px]">
                <h1 class="font-baloo text-5xl font-extrabold leading-[62.4px] text-base-title">Encontre o café perfeito
                    para qualquer hora do dia</h1>
                <h2 class="mt-4 text-xl leading-[26px] text-base-subtitle">Com o Coffee Delivery você recebe seu café
                    onde estiver, a qualquer hora</h2>
                <div class="mt-[68px] flex flex-wrap gap-5">
                    <div class="flex w-[231px] items-center justify-start gap-3">
                        <div
                            class="flex h-8 w-8 items-center justify-center rounded-full bg-product-yellow-dark text-base-background">
                            <i class="ph-fill ph-shopping-cart text-base"></i>
                        </div>
                        <span class="text-base-text">Compra simples e segura</span>
                    </div>
                    <div class="ml-5 flex w-[294px] items-center justify-start gap-3">
                        <div
                            class="flex h-8 w-8 items-center justify-center rounded-full bg-base-text text-base-background">
                            <i class="ph-fill ph-package text-base"></i>
                        </div>
                        <span class="text-base-text">Embalagem mantém o café intacto</span>
                    </div>

                    <div class="flex w-[231px] items-center justify-start gap-3">
                        <div
                            class="flex h-8 w-8 items-center justify-center rounded-full bg-product-yellow text-base-background">
                            <i class="ph-fill ph-timer text-base"></i>
                        </div>
                        <span class="text-base-text">Entrega rápida e rastreada</span>
                    </div>
                    <div class="ml-5 flex w-[294px] items-center justify-start gap-3">
                        <div
                            class="flex h-8 w-8 items-center justify-center rounded-full bg-product-purple text-base-background">
                            <i class="ph-fill ph-coffee text-base"></i>
                        </div>
                        <span class="text-base-text">O café chega fresquinho até você</span>
                    </div>
                </div>
            </div>
            <img src="imgs/intro-img.svg" alt="Img Intro">
        </div>
    </main>

    <section class="mx-auto max-w-[1440px] px-40">
        <div class="mt-8 flex items-center justify-between">
            <h2 class="font-baloo text-[32px] font-extrabold text-base-subtitle">Nossos cafés</h2>
            <ul class="flex items-center justify-center gap-2">
                <li
                    class="rounded-[100px] border border-product-yellow px-3 py-[6px] text-[10px] font-bold uppercase leading-[13px] text-product-yellow-dark">
                    tradicional</li>
                <li
                    class="rounded-[100px] border border-product-yellow px-3 py-[6px] text-[10px] font-bold uppercase leading-[13px] text-product-yellow-dark">
                    especial</li>
                <li
                    class="rounded-[100px] border border-product-yellow px-3 py-[6px] text-[10px] font-bold uppercase leading-[13px] text-product-yellow-dark">
                    com leite</li>
                <li
                    class="rounded-[100px] border border-product-yellow px-3 py-[6px] text-[10px] font-bold uppercase leading-[13px] text-product-yellow-dark">
                    alcoólico</li>
                <li
                    class="rounded-[100px] border border-product-yellow px-3 py-[6px] text-[10px] font-bold uppercase leading-[13px] text-product-yellow-dark">
                    gelado</li>
            </ul>
        </div>
        <div class="mb-32 mt-8 grid grid-cols-4 gap-10">
            @foreach ($coffees as $coffee)
                <x-coffee-card :$coffee />
            @endforeach
        </div>
    </section>
    <div>
