<form method="POST" action="{{ route('payment') }}">
    @csrf
    <button type="button" {{ $attributes->merge(['class' => 'bg-gray-700 rounded-[10px] w-[20rem] h-[20rem] shadow-lg mt-[10rem]']) }} onclick='window.href'>
        <h2 class="text-[40px] mb-[10px]">{{ $tier }}</h2>
        <h2 class="text-[30px] mb-[30px]">{{ $price }} per month</h2>
        <h3>Benefits:</h3>
        <h3>{{ $benefits }}</h3>
    </button>
</form>
