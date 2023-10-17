<div>
    <main class="max-w-[1440px] mx-auto">
        <div class="mt-[104px] bg-intro h-[544px] bg-cover bg-no-repeat flex justify-between items-center px-40">
            <div class="w-[588px]">
                <h1 class="font-baloo text-base-title font-extrabold text-5xl leading-[62.4px]">Encontre o café perfeito para qualquer hora do dia</h1>
                <h2 class="text-base-subtitle text-xl leading-[26px] mt-4">Com o Coffee Delivery você recebe seu café onde estiver, a qualquer hora</h2>
                <div class="mt-[68px] flex flex-wrap gap-5">
                    <div class="flex justify-start items-center gap-3 w-[231px]">
                        <div class="w-8 h-8 bg-product-yellow-dark rounded-full text-base-background flex justify-center items-center">
                            <i class="text-base ph-fill ph-shopping-cart"></i>
                        </div>
                        <span class="text-base-text">Compra simples e segura</span>
                    </div>
                    <div class="flex justify-start items-center gap-3 w-[294px] ml-5">
                        <div class="w-8 h-8 bg-base-text rounded-full text-base-background flex justify-center items-center">
                            <i class="text-base ph-fill ph-package"></i>
                        </div>
                        <span class="text-base-text">Embalagem mantém o café intacto</span>
                    </div>

                    <div class="flex justify-start items-center gap-3 w-[231px]">
                        <div class="w-8 h-8 bg-product-yellow rounded-full text-base-background flex justify-center items-center">
                            <i class="text-base ph-fill ph-timer"></i>
                        </div>
                        <span class="text-base-text">Entrega rápida e rastreada</span>
                    </div>
                    <div class="flex justify-start items-center gap-3 w-[294px] ml-5">
                        <div class="w-8 h-8 bg-product-purple rounded-full text-base-background flex justify-center items-center">
                            <i class="text-base ph-fill ph-coffee"></i>
                        </div>
                        <span class="text-base-text">O café chega fresquinho até você</span>
                    </div>
                </div>
            </div>
            <img src="imgs/intro-img.svg" alt="Img Intro">
        </div>

        @if(session('cart'))
        <ul>
            @foreach(session('cart') as $coffee)
            <li>
                Name: {{ $coffee->name }} | Qtde: {{ $coffee->quantity }}
            </li>
            @endforeach
        </ul>
        @endif
    </main>

    <section class="max-w-[1440px] mx-auto px-40">
        <div class="flex justify-between items-center mt-8">
            <h2 class="font-baloo text-[32px] font-extrabold text-base-subtitle">Nossos cafés</h2>
            <ul class="flex gap-2 justify-center items-center">
                <li class="uppercase border border-product-yellow text-product-yellow-dark py-[6px] px-3 text-[10px] font-bold rounded-[100px] leading-[13px]">tradicional</li>
                <li class="uppercase border border-product-yellow text-product-yellow-dark py-[6px] px-3 text-[10px] font-bold rounded-[100px] leading-[13px]">especial</li>
                <li class="uppercase border border-product-yellow text-product-yellow-dark py-[6px] px-3 text-[10px] font-bold rounded-[100px] leading-[13px]">com leite</li>
                <li class="uppercase border border-product-yellow text-product-yellow-dark py-[6px] px-3 text-[10px] font-bold rounded-[100px] leading-[13px]">alcoólico</li>
                <li class="uppercase border border-product-yellow text-product-yellow-dark py-[6px] px-3 text-[10px] font-bold rounded-[100px] leading-[13px]">gelado</li>
            </ul>
        </div>
        <div class="grid grid-cols-4 gap-10 mt-8 mb-32">
            @foreach ($coffees as $coffee)
                <x-coffee-card :$coffee />
            @endforeach
        </div>
    </section>
<div>

