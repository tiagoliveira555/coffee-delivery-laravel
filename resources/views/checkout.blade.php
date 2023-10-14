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
        <main class="max-w-[1440px] mx-auto mt-36 flex justify-between gap-8 px-40">
            <div>
                <h2 class="font-baloo text-lg text-base-subtitle">Complete seu pedido</h2>
                <div class="w-[640px] h-96 bg-base-card mt-3 shadow-sm p-10">
                    <div class="flex gap-2">
                        <i class="text-icon text-product-yellow-dark ph ph-map-pin-line"></i>
                        <div>
                            <h3 class="font-normal text-base-subtitle">Endereço de entrega</h3>
                            <h4 class="font-normal text-base-text text-sm">Informe o endereço onde deseja receber seu pedido</h4>
                        </div>
                    </div>
                    <div class="mt-7">
                        <input class="block w-[200px] bg-base-input text-sm text-base-text outline-none border border-base-button rounded p-3 transition-all focus-within:border-product-yellow placeholder:text-base-lable placeholder:text-sm" type="text" placeholder="CEP">
                        <input class="mt-4 w-full bg-base-input text-sm text-base-text outline-none border border-base-button rounded p-3 transition-all focus-within:border-product-yellow placeholder:text-base-lable placeholder:text-sm" type="text" placeholder="Rua">
                    </div>
                </div>
                <div class="w-[640px] h-9 bg-base-card mt-3 shadow-sm p-10">
                    pagamento
                </div>
            </div>
            <div>
                <h2 class="font-baloo text-lg text-base-subtitle">Café selecionados</h2>
                <div class="w-[448px] h-96 bg-base-card mt-3 p-10 rounded-tl-md rounded-tr-[44px] rounded-br-md rounded-bl-[44px] shadow-sm">
                    cart
                </div>
            </div>
        </main>
    </body>
</html>
