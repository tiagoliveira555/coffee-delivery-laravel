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
        <title>Coffee Delivery | Checkout</title>
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
                    <button class="w-[38px] h-[38px] flex justify-center items-center rounded-md bg-product-yellow-light">
                        <i class="text-product-yellow-dark text-icon ph-fill ph-shopping-cart"></i>
                    </button>
                </div>
            </div>
        </header>
        <main class="mt-[184px] max-w-[1440px] mx-auto px-40">
            <h1 class="font-baloo text-product-yellow-dark text-[32px] font-extrabold">Uhu! Pedido confirmado</h1>
            <p class="text-base-subtitle text-xl">Agora é só aguardar que logo o café chegará até você</p>
            <div class="flex justify-between mt-10">
                <div class="p-px w-[526px] bg-border-gradient rounded-tl-md rounded-tr-[36px] rounded-br-md rounded-bl-[36px]">
                    <div class="p-10 flex flex-col gap-8 bg-base-background w-full h-full rounded-tl-md rounded-tr-[35px] rounded-br-md rounded-bl-[35px]">
                        <div class="flex items-center gap-3">
                            <div class="bg-product-purple w-8 h-8 p-2 rounded-full flex justify-center items-center">
                                <i class="text-base-background ph-fill ph-map-pin"></i>
                            </div>
                            <div>
                                <p class="text-base-text leading-5">Entraga em <strong>Pov. Cavaco de Dalmo, S/N</strong></p>
                                <p class="text-base-text leading-5">Zona Rural - Paripiranga, BA</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="bg-product-yellow w-8 h-8 p-2 rounded-full flex justify-center items-center">
                                <i class="text-base-background ph-fill ph-timer"></i>
                            </div>
                            <div>
                                <p class="text-base-text leading-5">Previsão de entrega</p>
                                <strong class="text-base-text leading-5">20 min - 30 min </strong>
                            </div>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="bg-product-yellow-dark w-8 h-8 p-2 rounded-full flex justify-center items-center">
                                <i class="text-base-background ph ph-currency-dollar"></i>
                            </div>
                            <div>
                                <p class="text-base-text leading-5">Pagamento na entrega</p>
                                <strong class="text-base-text leading-5">PIX</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="imgs/confirmed-order.svg" alt="Confirmed">
                </div>
            </div>
        </main>
    </body>
</html>
