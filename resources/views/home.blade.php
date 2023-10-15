<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700;800&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/@phosphor-icons/web"></script>
        <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
        <title>Coffee Delivery | Laravel</title>
        @vite('resources/css/app.css')
    </head>
    <body class="font-roboto antialiased bg-base-background h-full">
        <header class="fixed w-full top-0 bg-base-background">
            <div class="max-w-[1440px] mx-auto px-40 py-8 flex justify-between items-center">
                <img src="imgs/coffee-delivery-logo.svg" alt="Logo">
                <div class="flex justify-center items-center gap-3">
                    <div class="flex justify-center items-center bg-product-purple-light p-2 gap-1 rounded-md">
                        <i class="text-product-purple text-icon ph-fill ph-map-pin"></i>
                        <span class="text-product-purple-dark text-sm tracking-wide">Paripiranga, BA</span>
                    </div>
                    <div class="w-[38px] h-[38px] flex justify-center items-center rounded-md bg-product-yellow-light">
                        <i class="text-product-yellow-dark text-icon ph-fill ph-shopping-cart"></i>
                    </div>
                </div>
            </div>
        </header>
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
                <div class="flex flex-col gap-2 px-5 items-center bg-base-card w-64 h-[310px] rounded-tl-md rounded-tr-[36px] rounded-br-md rounded-bl-[36px] shadow-inner">
                    <img class="-mt-5" src="imgs/coffees/tradicional.png" alt="Tradicional">
                    <div class="flex justify-center items-center gap-1">
                        <span class="uppercase bg-product-yellow-light py-1 px-2 rounded-full text-[10px] text-product-yellow-dark font-bold">tradicional</span>
                    </div>
                    <h3 class="font-baloo text-xl mt-1 text-base-subtitle">Expresso Tradicional</h3>
                    <p class="text-base-lable text-sm text-center">O tradicional café feito com água quente e grãos moídos</p>
                    <div class="flex justify-between items-center w-[208px] mt-6">
                        <span class="text-sm text-base-text">R$
                            <strong class="font-baloo text-base-text text-2xl font-extrabold">9,90</strong>
                        </span>
                        <div class="flex justify-center items-center gap-2">
                            <div class="bg-base-button p-2 rounded-md flex justify-center items-center gap-2">
                                <i class="ph-bold ph-minus text-sm text-product-purple"></i>
                                <span class="text-base-title">1</span>
                                <i class="ph-bold ph-plus text-sm text-product-purple"></i>
                            </div>
                            <div class="flex justify-center items-center text-base-card p-2 rounded-md bg-product-purple-dark w-[38px] h-[38px]">
                                <i class="text-icon ph-fill ph-shopping-cart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-2 px-5 items-center bg-base-card w-64 h-[310px] rounded-tl-md rounded-tr-[36px] rounded-br-md rounded-bl-[36px] shadow-inner">
                    <img class="-mt-5" src="imgs/coffees/tradicional.png" alt="Tradicional">
                    <div class="flex justify-center items-center gap-1">
                        <span class="uppercase bg-product-yellow-light py-1 px-2 rounded-full text-[10px] text-product-yellow-dark font-bold">tradicional</span>
                    </div>
                    <h3 class="font-baloo text-xl mt-1 text-base-subtitle">Expresso Tradicional</h3>
                    <p class="text-base-lable text-sm text-center">O tradicional café feito com água quente e grãos moídos</p>
                    <div class="flex justify-between items-center w-[208px] mt-6">
                        <span class="text-sm text-base-text">R$
                            <strong class="font-baloo text-base-text text-2xl font-extrabold">9,90</strong>
                        </span>
                        <div class="flex justify-center items-center gap-2">
                            <div class="bg-base-button p-2 rounded-md flex justify-center items-center gap-2">
                                <i class="ph-bold ph-minus text-sm text-product-purple"></i>
                                <span class="text-base-title">1</span>
                                <i class="ph-bold ph-plus text-sm text-product-purple"></i>
                            </div>
                            <div class="flex justify-center items-center text-base-card p-2 rounded-md bg-product-purple-dark w-[38px] h-[38px]">
                                <i class="text-icon ph-fill ph-shopping-cart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-2 px-5 items-center bg-base-card w-64 h-[310px] rounded-tl-md rounded-tr-[36px] rounded-br-md rounded-bl-[36px] shadow-inner">
                    <img class="-mt-5" src="imgs/coffees/tradicional.png" alt="Tradicional">
                    <div class="flex justify-center items-center gap-1">
                        <span class="uppercase bg-product-yellow-light py-1 px-2 rounded-full text-[10px] text-product-yellow-dark font-bold">tradicional</span>
                    </div>
                    <h3 class="font-baloo text-xl mt-1 text-base-subtitle">Expresso Tradicional</h3>
                    <p class="text-base-lable text-sm text-center">O tradicional café feito com água quente e grãos moídos</p>
                    <div class="flex justify-between items-center w-[208px] mt-6">
                        <span class="text-sm text-base-text">R$
                            <strong class="font-baloo text-base-text text-2xl font-extrabold">9,90</strong>
                        </span>
                        <div class="flex justify-center items-center gap-2">
                            <div class="bg-base-button p-2 rounded-md flex justify-center items-center gap-2">
                                <i class="ph-bold ph-minus text-sm text-product-purple"></i>
                                <span class="text-base-title">1</span>
                                <i class="ph-bold ph-plus text-sm text-product-purple"></i>
                            </div>
                            <div class="flex justify-center items-center text-base-card p-2 rounded-md bg-product-purple-dark w-[38px] h-[38px]">
                                <i class="text-icon ph-fill ph-shopping-cart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-2 px-5 items-center bg-base-card w-64 h-[310px] rounded-tl-md rounded-tr-[36px] rounded-br-md rounded-bl-[36px] shadow-inner">
                    <img class="-mt-5" src="imgs/coffees/tradicional.png" alt="Tradicional">
                    <div class="flex justify-center items-center gap-1">
                        <span class="uppercase bg-product-yellow-light py-1 px-2 rounded-full text-[10px] text-product-yellow-dark font-bold">tradicional</span>
                    </div>
                    <h3 class="font-baloo text-xl mt-1 text-base-subtitle">Expresso Tradicional</h3>
                    <p class="text-base-lable text-sm text-center">O tradicional café feito com água quente e grãos moídos</p>
                    <div class="flex justify-between items-center w-[208px] mt-6">
                        <span class="text-sm text-base-text">R$
                            <strong class="font-baloo text-base-text text-2xl font-extrabold">9,90</strong>
                        </span>
                        <div class="flex justify-center items-center gap-2">
                            <div class="bg-base-button p-2 rounded-md flex justify-center items-center gap-2">
                                <i class="ph-bold ph-minus text-sm text-product-purple"></i>
                                <span class="text-base-title">1</span>
                                <i class="ph-bold ph-plus text-sm text-product-purple"></i>
                            </div>
                            <div class="flex justify-center items-center text-base-card p-2 rounded-md bg-product-purple-dark w-[38px] h-[38px]">
                                <i class="text-icon ph-fill ph-shopping-cart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-2 px-5 items-center bg-base-card w-64 h-[310px] rounded-tl-md rounded-tr-[36px] rounded-br-md rounded-bl-[36px] shadow-inner">
                    <img class="-mt-5" src="imgs/coffees/tradicional.png" alt="Tradicional">
                    <div class="flex justify-center items-center gap-1">
                        <span class="uppercase bg-product-yellow-light py-1 px-2 rounded-full text-[10px] text-product-yellow-dark font-bold">tradicional</span>
                    </div>
                    <h3 class="font-baloo text-xl mt-1 text-base-subtitle">Expresso Tradicional</h3>
                    <p class="text-base-lable text-sm text-center">O tradicional café feito com água quente e grãos moídos</p>
                    <div class="flex justify-between items-center w-[208px] mt-6">
                        <span class="text-sm text-base-text">R$
                            <strong class="font-baloo text-base-text text-2xl font-extrabold">9,90</strong>
                        </span>
                        <div class="flex justify-center items-center gap-2">
                            <div class="bg-base-button p-2 rounded-md flex justify-center items-center gap-2">
                                <i class="ph-bold ph-minus text-sm text-product-purple"></i>
                                <span class="text-base-title">1</span>
                                <i class="ph-bold ph-plus text-sm text-product-purple"></i>
                            </div>
                            <div class="flex justify-center items-center text-base-card p-2 rounded-md bg-product-purple-dark w-[38px] h-[38px]">
                                <i class="text-icon ph-fill ph-shopping-cart"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-2 px-5 items-center bg-base-card w-64 h-[310px] rounded-tl-md rounded-tr-[36px] rounded-br-md rounded-bl-[36px] shadow-inner">
                    <img class="-mt-5" src="imgs/coffees/tradicional.png" alt="Tradicional">
                    <div class="flex justify-center items-center gap-1">
                        <span class="uppercase bg-product-yellow-light py-1 px-2 rounded-full text-[10px] text-product-yellow-dark font-bold">tradicional</span>
                    </div>
                    <h3 class="font-baloo text-xl mt-1 text-base-subtitle">Expresso Tradicional</h3>
                    <p class="text-base-lable text-sm text-center">O tradicional café feito com água quente e grãos moídos</p>
                    <div class="flex justify-between items-center w-[208px] mt-6">
                        <span class="text-sm text-base-text">R$
                            <strong class="font-baloo text-base-text text-2xl font-extrabold">9,90</strong>
                        </span>
                        <div class="flex justify-center items-center gap-2">
                            <div class="bg-base-button p-2 rounded-md flex justify-center items-center gap-2">
                                <i class="ph-bold ph-minus text-sm text-product-purple"></i>
                                <span class="text-base-title">1</span>
                                <i class="ph-bold ph-plus text-sm text-product-purple"></i>
                            </div>
                            <div class="flex justify-center items-center text-base-card p-2 rounded-md bg-product-purple-dark w-[38px] h-[38px]">
                                <i class="text-icon ph-fill ph-shopping-cart"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
