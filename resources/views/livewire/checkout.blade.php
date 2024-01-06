<main class="mx-auto mt-36 flex max-w-[1440px] justify-between gap-8 px-40">
    <div>
        <x-h2>Complete seu pedido</x-h2>
        <div class="mt-3 w-[640px] rounded-md bg-base-card p-10 shadow-sm">
            <div class="flex gap-2">
                <i class="ph ph-map-pin-line text-icon text-product-yellow-dark"></i>
                <div>
                    <x-h3>Endereço de entrega</x-h3>
                    <x-h4>Informe o endereço onde deseja receber seu pedido</x-h4>
                </div>
            </div>
            <div class="mt-7">
                <input
                    class="@error('cep') border-red-500 @enderror block w-[200px] rounded border bg-base-input p-3 text-sm text-base-text outline-none transition-all placeholder:text-sm placeholder:text-base-lable focus-within:border-product-yellow"
                    type="text" placeholder="CEP" wire:model="cep" wire:change="searchCEP" value="cep">
                <x-input-address type="text" id="rua" placeholder="Rua" width="w-full" mt />
                <x-input-address type="text" id="numero" placeholder="Número" width="w-[200px]" mt />
                <x-input-address type="text" id="complemento" placeholder="Complemento" width="w-[348px]" widthInput
                    mt ml optional />
                <x-input-address type="text" id="bairro" placeholder="Bairro" width="w-[200px]" mt />
                <x-input-address type="text" id="cidade" placeholder="Cidade" width="w-[276px]" mt ml />
                <x-input-address type="text" id="uf" placeholder="UF" width="w-[60px]" mt ml />
            </div>
        </div>
        <div class="mt-4 w-[640px] rounded-md bg-base-card p-10 shadow-sm">
            <div class="flex gap-2">
                <i class="ph ph-currency-dollar text-icon text-product-purple"></i>
                <div>
                    <x-h3>Pagamento</x-h3>
                    <x-h4>O pagamento é feito na entrega. Escolha a forma que deseja pagar</x-h4>
                </div>
            </div>
            <div class="mt-8 flex items-center justify-center gap-3">
                <x-payment-method type="card" label="cartão" />
                <x-payment-method type="pix" label="pix" />
                <x-payment-method type="money" label="dinheiro" />
            </div>
        </div>
    </div>
    <livewire:cart />
</main>
