@props(['type', 'label'])

@php
    switch ($type) {
        case 'card':
            $icon = "ph-credit-card";
            break;
        case 'pix':
            $icon = "ph-qr-code";
            break;
        case 'money':
            $icon = "ph-money";
            break;
        default:
            break;
    }
@endphp

<div class="flex items-center flex-1 gap-3">
    <input class="sr-only peer" type="radio" name="payment" id="{{ $type }}">
    <label
        class="peer-checked:bg-product-purple-light border peer-checked:border-product-purple flex justify-center items-center flex-1 gap-3 cursor-pointer p-4 bg-base-button rounded-md hover:bg-base-hover transition-all"
        for="{{ $type }}"
    >
        <i class="text-product-purple ph {{ $icon }}"></i>
        <span class="text-base-text text-xs uppercase">{{ $label }}</span>
    </label>
</div>
