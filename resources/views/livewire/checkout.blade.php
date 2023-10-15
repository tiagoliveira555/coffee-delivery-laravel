<main class="max-w-[1440px] mx-auto mt-36 flex justify-between gap-8 px-40">
    <div>
        <x-h2>Complete seu pedido</x-h2>
        <div class="w-[640px] bg-base-card mt-3 shadow-sm p-10 rounded-md">
            <div class="flex gap-2">
                <i class="text-icon text-product-yellow-dark ph ph-map-pin-line"></i>
                <div>
                    <x-h3>Endereço de entrega</x-h3>
                    <x-h4>Informe o endereço onde deseja receber seu pedido</x-h4>
                </div>
            </div>
            <div class="mt-7">
                <x-input-address type="text" id="cep" placeholder="CEP" width="[200px]" />
                <x-input-address type="text" id="rua" placeholder="Rua" width="full" mt />
                <x-input-address type="text" id="numero" placeholder="Número" width="[200px]" mt />
                <x-input-address type="text" id="complemento" placeholder="Complemento" width="[348px]" widthInput mt ml optional />
                <x-input-address type="text" id="bairro" placeholder="Bairro" width="[200px]" mt />
                <x-input-address type="text" id="cidade" placeholder="Cidade" width="[276px]" mt ml />
                <x-input-address type="text" id="uf" placeholder="UF" width="[60px]" mt ml />
            </div>
        </div>
        <div class="w-[640px] bg-base-card mt-4 shadow-sm p-10 rounded-md">
            <div class="flex gap-2">
                <i class="text-icon text-product-purple ph ph-currency-dollar"></i>
                <div>
                    <x-h3>Pagamento</x-h3>
                    <x-h4>O pagamento é feito na entrega. Escolha a forma que deseja pagar</x-h4>
                </div>
            </div>
            <div class="mt-8 flex justify-center items-center gap-3">
                <x-payment-method type="card" label="cartão" />
                <x-payment-method type="pix" label="pix" />
                <x-payment-method type="money" label="dinheiro" />
            </div>
        </div>
    </div>
    <livewire:cart />
</main>
