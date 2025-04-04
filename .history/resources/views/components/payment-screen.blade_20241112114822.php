<div $attributes->merge(['class' => 'absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-gray-500 w-[60vw] h-[70vh]']) }}>
        <h1 class="text-[50px]">{{ $tier }}</h1>
        <h2 class="text-[40px]">{{ $price }}</h2>
        <h3 class="text-[30px]">Select your payment method</h3>
        <div class="flex mx-auto overflow-x-auto w-[90%] space-x-4 items-center justify-center">
            <x-payment-type src="{{ asset('assets/visa.jpg') }}" alt="paypal logo"></x-payment-type>
            <x-payment-type src="{{ asset('assets/paypal.jpg') }}" alt="paypal logo"></x-payment-type>
            <x-payment-type src="{{ asset('assets/google-pay.jpg') }}" alt="paypal logo"></x-payment-type>
        </div>
    </div>
</main>
