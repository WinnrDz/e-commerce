<div class="font-satoshi">
    <h1 class="font-integral font-bold text-[40px] mb-5">My Reviews</h1>

    <div class="font-satoshim text-[16px] text-black/60 mb-5">
        Your opinions help others find the perfect fit. Here are all the reviews you've submitted.
    </div>
    @if(session()->has('message'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-5" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('message') }}</span>
        </div>
    @elseif(session()->has('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-5" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif
    <div class="space-y-6 font-satoshi">
    @foreach ($reviews as $review)
        <div class="border border-black/10 rounded-2xl p-5 flex items-center min-h-[150px]">
            <div class="w-[76px] h-[76px] rounded-xl bg-black/5 overflow-hidden shrink-0">
                <img src="{{ Storage::url($review->product->images->first()->path) }}"
                    class="w-full h-full object-cover">
            </div>

            <div class="ml-6 flex-1">
                <a href="{{ route('show', $review->product->id) }}" class="font-bold text-[18px]">{{ $review->product->name }}</a>

                <div class="flex gap-1 mt-2">
                    @for ($i = 0; $i < 5; $i++)
                        @if ($i < $review->rating)
                            <span class="text-yellow-500 text-[18px]">★</span>
                        @else
                            <span class="text-gray-300 text-[18px]">★</span>
                        @endif
                    @endfor
                </div>

                <p class="text-[14px] leading-[20px] text-black/70 mt-2">
                    {{ $review->review }}
                </p>

                <p class="text-[12px] text-black/50 mt-3">
                    {{ $review->created_at->format('F j, Y') }}
                </p>
            </div>

            <div class="flex items-center gap-6 self-start mt-1 ml-6 text-[13px] text-black/70">
                <button wire:click="deleteReview({{ $review->id }})"
                    wire:confirm="Are you sure you want to delete this review?"
                    class="flex items-center gap-2 cursor-pointer">
                    <i data-lucide="trash-2" class="w-5 h-5"></i>
                    Delete
                </button>
            </div>
        </div>
    @endforeach
</div>
</div>
