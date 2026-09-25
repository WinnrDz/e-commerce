<div>
    <h1 class="font-integral font-bold text-[36px] w-[100%] mb-8">Your Orders</h1>

    <div class="flex flex-col items-center justify-center gap-y-6">
        @foreach($orders as $order)
            <div class="flex flex-col items-center py-4 px-7 gap-5 w-full border border-black/10 rounded-[18px]">

                <div class="flex justify-between w-full">
                    <div>
                        <h2 class="font-satoshi font-bold text-[15px] lg:text-[18px]">
                            Order #{{ $order->id }}
                        </h2>

                        <span class="font-satoshim text-[14px] text-black/60">
                            {{ $order->created_at->format('F d, Y') }} &nbsp; • &nbsp;{{ $order->itemsCount() }}
                        </span>
                    </div>

                    <div class="font-satoshim text-[14px] inline-flex items-center gap-2 rounded-full px-3 h-9
                        {{ $order->status == 'pending' ? 'bg-[#F3F4F6] text-[#6B7280]' : '' }}
                        {{ $order->status == 'confirmed' ? 'bg-[#E6F0FF] text-[#2563EB]' : '' }}
                        {{ $order->status == 'shipped' ? 'bg-[#F3E8FF] text-[#9333EA]' : '' }}
                        {{ $order->status == 'delivered' ? 'bg-[#E6F8EE] text-[#00994D]' : '' }}
                        {{ $order->status == 'cancelled' ? 'bg-[#FEECEC] text-[#DC2626]' : '' }}">

                        <span>●</span>
                        {{ $order->status }}
                    </div>
                </div>

                <div class="flex flex-row w-full">

                    <div class="flex flex-row items-center gap-3 border-r-3 border-black/10 w-full max-w-[60%]">
                        @foreach ($order->variants->unique('product_id') as $variant)
                            <div>
                                <img
                                    class="w-[90px] h-[90px] lg:w-28 lg:h-28 bg-[#F0EEED] rounded-[8px] p-3"
                                    src="{{ Storage::url($variant->product->images->first()->path ?? '') }}"
                                    alt="Logo"
                                >
                            </div>

                            @php
                                $quantity = 0;

                                foreach ($order->variants as $thisvariant) {
                                    if ($thisvariant->product->id == $variant->product->id) {
                                        $quantity += $thisvariant->pivot->quantity;
                                    }
                                }
                            @endphp

                            <span class="font-satoshi font-bold text-[15px]">
                                x {{ $quantity }}
                            </span>
                        @endforeach
                    </div>

                    <div class="flex justify-between w-full max-w-[40%] pl-16">

                        <div class="flex flex-col gap-1.5">
                            <span class="font-satoshi font-bold text-[22px]">
                                ${{ $order->total }}
                            </span>

                            <span class="font-satoshim text-[12px] text-black/60">
                                Paid with Visa **** 4242
                            </span>
                        </div>

                        <a
                            href="{{ route('order', $order->id) }}"
                            class="font-satoshim text-[15px] bg-black text-white font-medium py-2.5 px-5 rounded-full max-h-11 mt-auto whitespace-nowrap"
                        >
                            View Details
                        </a>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>