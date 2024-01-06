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

<main class="mx-auto mt-[184px] max-w-[1440px] px-40">
    <h1 class="font-baloo text-[32px] font-extrabold text-product-yellow-dark">Uhu! Pedido confirmado</h1>
    <p class="text-xl text-base-subtitle">Agora é só aguardar que logo o café chegará até você</p>
    <div class="mt-10 flex justify-between">
        <div class="w-[526px] rounded-bl-[36px] rounded-br-md rounded-tl-md rounded-tr-[36px] bg-border-gradient p-px">
            <div
                class="flex h-full w-full flex-col gap-8 rounded-bl-[35px] rounded-br-md rounded-tl-md rounded-tr-[35px] bg-base-background p-10">
                <div class="flex items-center gap-3">
                    <div class="flex h-8 w-8 items-center justify-center rounded-full bg-product-purple p-2">
                        <i class="ph-fill ph-map-pin text-base-background"></i>
                    </div>
                    <div>
                        <p class="leading-5 text-base-text">Entrega em <strong>{{ $finally[0]['rua'] }},
                                {{ $finally[0]['numero'] }}</strong></p>
                        <p class="leading-5 text-base-text">{{ $finally[0]['bairro'] }} - {{ $finally[0]['cidade'] }},
                            {{ $finally[0]['uf'] }}</p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="flex h-8 w-8 items-center justify-center rounded-full bg-product-yellow p-2">
                        <i class="ph-fill ph-timer text-base-background"></i>
                    </div>
                    <div>
                        <p class="leading-5 text-base-text">Previsão de entrega</p>
                        <strong class="leading-5 text-base-text">20 min - 30 min </strong>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <div class="flex h-8 w-8 items-center justify-center rounded-full bg-product-yellow-dark p-2">
                        <i class="ph ph-currency-dollar text-base-background"></i>
                    </div>
                    <div>
                        <p class="leading-5 text-base-text">Pagamento na entrega</p>
                        <strong class="leading-5 text-base-text">{{ $payment }}</strong>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <img src="imgs/confirmed-order.svg" alt="Confirmed">
        </div>
    </div>
</main>
