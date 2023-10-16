@props([
    'id' => null,
    'placeholder' => null,
    'type' => null,
    'width' => null,
    'widthInput' => null,
    'mt' => null,
    'ml' => null,
    'optional' => null
])

<label for="{{ $id }}" class="inline-block {{ $width }} {{ $mt !== null ? 'mt-4' : '' }} {{ $ml !== null ? 'ml-2' : '' }} bg-base-input border border-base-button focus-within:border-product-yellow-dark transition-all px-3 py-2 rounded">
    <input
        class="{{ $widthInput === null ? 'w-full' : 'w-10/12' }} text-sm bg-inherit text-base-text outline-none placeholder:text-base-lable placeholder:text-sm"
        type="{{ $type }}"
        id="{{ $id }}"
        placeholder="{{ $placeholder }}"
    >
    @if ($optional)
    <label for="complemento" class="inline-block text-xs italic text-base-lable">Opcional</label>
    @endif
</label>
