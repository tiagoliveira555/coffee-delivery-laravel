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
                <div class="w-[640px] bg-base-card mt-3 shadow-sm p-10 rounded-md">
                    <div class="flex gap-2">
                        <i class="text-icon text-product-yellow-dark ph ph-map-pin-line"></i>
                        <div>
                            <h3 class="font-normal text-base-subtitle">Endereço de entrega</h3>
                            <h4 class="font-normal text-base-text text-sm">Informe o endereço onde deseja receber seu pedido</h4>
                        </div>
                    </div>
                    <div class="mt-7">
                        <label for="cep" class="block w-[200px] bg-base-input border border-base-button focus-within:border-product-yellow-dark transition-all px-3 py-2 rounded">
                            <input class="w-full text-sm bg-inherit text-base-text outline-none placeholder:text-base-lable placeholder:text-sm" type="text" id="cep" placeholder="CEP">
                        </label>
                        <label for="rua" class="block mt-4 w-full bg-base-input border border-base-button focus-within:border-product-yellow-dark transition-all px-3 py-2 rounded">
                            <input class="w-full bg-inherit text-sm text-base-text outline-none placeholder:text-base-lable placeholder:text-sm" type="text" id="rua" placeholder="Rua">
                        </label>
                        <label for="numero" class="inline-block mt-4 w-[200px] bg-base-input border border-base-button focus-within:border-product-yellow-dark transition-all px-3 py-2 rounded">
                            <input class="w-full bg-inherit text-sm text-base-text outline-none placeholder:text-base-lable placeholder:text-sm" type="text" id="numero" placeholder="Número">
                        </label>
                        <label for="complemento" class="inline-block mt-4 ml-2 w-[348px] bg-base-input border border-base-button focus-within:border-product-yellow-dark transition-all px-3 py-2 rounded">
                            <input class="inline-block w-10/12 bg-inherit text-sm text-base-text outline-none placeholder:text-base-lable placeholder:text-sm" type="text" id="complemento" placeholder="Complemento">
                            <label for="complemento" class="inline-block text-xs italic text-base-lable">Opcional</label>
                        </label>
                        <label for="bairro" class="inline-block mt-4 w-[200px] bg-base-input border border-base-button focus-within:border-product-yellow-dark transition-all px-3 py-2 rounded">
                            <input class="w-full bg-inherit text-sm text-base-text outline-none placeholder:text-base-lable placeholder:text-sm" type="text" id="bairro" placeholder="Bairro">
                        </label>
                        <label for="cidade" class="inline-block mt-4 ml-2  w-[276px] bg-base-input border border-base-button focus-within:border-product-yellow-dark transition-all px-3 py-2 rounded">
                            <input class="w-full bg-inherit text-sm text-base-text outline-none placeholder:text-base-lable placeholder:text-sm" type="text" id="cidade" placeholder="Cidade">
                        </label>
                        <label for="uf" class="inline-block mt-4 ml-2 w-[60px] bg-base-input border border-base-button focus-within:border-product-yellow-dark transition-all px-3 py-2 rounded">
                            <input class="w-full bg-inherit text-sm text-base-text outline-none placeholder:text-base-lable placeholder:text-sm" type="text" id="uf" placeholder="UF">
                        </label>
                    </div>
                </div>
                <div class="w-[640px] bg-base-card mt-4 shadow-sm p-10 rounded-md">
                    <div class="flex gap-2">
                        <i class="text-icon text-product-purple ph ph-currency-dollar"></i>
                        <div>
                            <h3 class="font-normal text-base-subtitle">Pagamento</h3>
                            <h4 class="font-normal text-base-text text-sm">O pagamento é feito na entrega. Escolha a forma que deseja pagar</h4>
                        </div>
                    </div>
                    <div class="mt-8 flex justify-center items-center gap-3">
                        <div class="flex items-center flex-1 gap-3">
                            <input class="sr-only peer" type="radio" name="payment" id="card">
                            <label class="peer-checked:bg-product-purple-light border peer-checked:border-product-purple flex justify-center items-center flex-1 gap-3 cursor-pointer p-4 bg-base-button rounded-md hover:bg-base-hover transition-all" for="card">
                                <i class="text-product-purple ph ph-credit-card"></i>
                                <span class="text-base-text text-xs uppercase">cartão</span>
                            </label>
                        </div>
                        <div class="flex items-center flex-1 gap-3">
                            <input class="sr-only peer" type="radio" name="payment" id="pix">
                            <label class="peer-checked:bg-product-purple-light border peer-checked:border-product-purple flex justify-center items-center flex-1 gap-3 cursor-pointer p-4 bg-base-button rounded-md hover:bg-base-hover transition-all" for="pix">
                                <i class="text-product-purple ph ph-qr-code"></i>
                                <span class="text-base-text text-xs uppercase">pix</span>
                            </label>
                        </div>
                        <div class="flex items-center flex-1 gap-3">
                            <input class="sr-only peer" type="radio" name="payment" id="money">
                            <label class="peer-checked:bg-product-purple-light border peer-checked:border-product-purple flex justify-center items-center flex-1 gap-3 cursor-pointer p-4 bg-base-button rounded-md hover:bg-base-hover transition-all" for="money">
                                <i class="text-product-purple ph ph-money"></i>
                                <span class="text-base-text text-xs uppercase">dinheiro</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
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
                        <button class="mt-4 text-base-white font-bold text-sm uppercase border-none bg-product-yellow py-3 p-2 rounded-md hover:bg-product-yellow-dark transition-all">
                            confirmar pedido
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
