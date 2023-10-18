@php
    switch ($finally[0]['payment']) {
        case 'card':
            $payment = 'Cartão';
            break;
        case 'money':
            $payment = 'Dinheiro';
            break;
        default:
            $payment = 'PIX';
            break;
    }
@endphp

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
                        <p class="text-base-text leading-5">Entraga em <strong>{{ $finally[0]['rua'] }}, {{ $finally[0]['numero'] }}</strong></p>
                        <p class="text-base-text leading-5">{{ $finally[0]['bairro'] }} - {{ $finally[0]['cidade'] }}, {{ $finally[0]['uf'] }}</p>
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
                        <strong class="text-base-text leading-5">{{ $payment }}</strong>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img src="imgs/confirmed-order.svg" alt="Confirmed">
        </div>
    </div>
</main>
