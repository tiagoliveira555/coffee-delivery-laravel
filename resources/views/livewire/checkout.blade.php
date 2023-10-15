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
                <x-payment-method type="card" label="cartão" />
                <x-payment-method type="pix" label="pix" />
                <x-payment-method type="money" label="dinheiro" />
            </div>
        </div>
    </div>
    <livewire:cart />
</main>
