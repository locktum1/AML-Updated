<div {{ $attributes->merge(['class' => 'absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 bg-gray-500 w-[10vw] h-[70vh] rounded-[15px]']) }}>
    <div id="payment-info" class="bg-gray-600 w-full rounded-[15px]"></div>
        <h3 class="text-[25px] mt-[10px]">Please enter your review</h3>
        <div class="flex mx-auto overflow-x-auto w-[90%] space-x-4 items-center justify-center flex-col">
            <form action="">
                
            </form>
            <x-text-input for="rating" type="text" label="Rating (1-5)" width="60%"></x-text-input>
            <label for="review" class="text-[20px] mt-[10px] text-center">Review</label>
            <textarea name="review" id="review" cols="30" rows="25" maxlength="700" class="w-80% text-black rounded-[15px]"></textarea>
        </div>
    </div>
</div>
