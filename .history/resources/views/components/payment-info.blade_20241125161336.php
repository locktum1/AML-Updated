<div {{ $attributes->merge(['class' => " flex flex-col absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-gray-500 w-[60vw] h-[70vh] rounded-[15px]"]) }}>
    <x-text-input for='card-num' type='text' label='Card number'></x-text-input>
    <x-text-input for='expiry' type='text' label='Expiry date'></x-text-input>
    <x-text-input for='cvv' type='text' label='CVV'></x-text-input>
</div>
