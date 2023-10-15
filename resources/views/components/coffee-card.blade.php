@props(['name', 'description', 'price', 'tags', 'image'])

@php
    $tagsJson = html_entity_decode($tags);

    $tagsArray = json_decode($tagsJson);
@endphp

<div class="flex flex-col gap-2 px-5 items-center bg-base-card w-64 h-[310px] rounded-tl-md rounded-tr-[36px] rounded-br-md rounded-bl-[36px] shadow-inner">
    <img class="-mt-5" src="{{ $image }}" alt="{{ $image }}">
    <div class="flex justify-center items-center gap-1">
        @foreach ($tagsArray as $tag)
            <span class="uppercase bg-product-yellow-light py-1 px-2 rounded-full text-[10px] text-product-yellow-dark font-bold">{{ $tag }}</span>
        @endforeach
    </div>
    <h3 class="font-baloo text-xl mt-1 text-base-subtitle">{{ $name }}</h3>
    <p class="text-base-lable text-sm text-center">{{ $description }}</p>
    <div class="flex justify-between items-center w-[208px] mt-6">
        <span class="text-sm text-base-text">R$
            <strong class="font-baloo text-base-text text-2xl font-extrabold">{{ number_format($price, 2, ',', '.') }}</strong>
        </span>
        <div class="flex justify-center items-center gap-2">
            <div class="bg-base-button p-2 rounded-md flex justify-center items-center gap-3">
                <button class="bg-transparent border-none"><i class="ph-bold ph-minus text-sm text-product-purple hover:text-product-purple-dark transition-all"></i></button>
                <span class="text-base-title">1</span>
                <button class="bg-transparent border-none"><i class="ph-bold ph-plus text-sm text-product-purple hover:text-product-purple-dark transition-all"></i></button>
            </div>
            <button class="flex justify-center items-center border-none text-base-card p-2 rounded-md bg-product-purple-dark hover:bg-product-purple transition-all">
                <i class="text-icon ph-fill ph-shopping-cart"></i>
            </button>
        </div>
    </div>
</div>