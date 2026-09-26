<div>
    <div id="cart" class="mb-10 pt-4 mt-0 flex items-center gap-4 ">
        <a href="{{ route('welcome') }}" class="font-satoshi text-[16px] text-black opacity-60 cursor-pointer">Home</a>
        <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M1.28318 0.221294L6.28318 5.22129C6.3531 5.29097 6.40857 5.37377 6.44643 5.46493C6.48428 5.55609 6.50377 5.65383 6.50377 5.75254C6.50377 5.85126 6.48428 5.94899 6.44643 6.04016C6.40857 6.13132 6.3531 6.21412 6.28318 6.28379L1.28318 11.2838C1.14228 11.4247 0.951183 11.5038 0.751926 11.5038C0.552669 11.5038 0.361572 11.4247 0.220676 11.2838C0.0797797 11.1429 0.000625142 10.9518 0.000625142 10.7525C0.000625143 10.5533 0.0797797 10.3622 0.220676 10.2213L4.69005 5.75192L0.220051 1.28255C0.0791551 1.14165 1.25847e-07 0.950553 1.28223e-07 0.751295C1.30599e-07 0.552037 0.0791552 0.360941 0.220051 0.220045C0.360948 0.0791493 0.552044 -7.62281e-06 0.751301 -7.62044e-06C0.950559 -7.61806e-06 1.14166 0.0791493 1.28255 0.220045L1.28318 0.221294Z"
                fill="black" fill-opacity="0.6" />
        </svg>
        <a href="{{ route('account') }}" class="font-satoshi text-[16px] text-black opacity-60 cursor-pointer">Account</a>
        <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M1.28318 0.221294L6.28318 5.22129C6.3531 5.29097 6.40857 5.37377 6.44643 5.46493C6.48428 5.55609 6.50377 5.65383 6.50377 5.75254C6.50377 5.85126 6.48428 5.94899 6.44643 6.04016C6.40857 6.13132 6.3531 6.21412 6.28318 6.28379L1.28318 11.2838C1.14228 11.4247 0.951183 11.5038 0.751926 11.5038C0.552669 11.5038 0.361572 11.4247 0.220676 11.2838C0.0797797 11.1429 0.000625142 10.9518 0.000625142 10.7525C0.000625143 10.5533 0.0797797 10.3622 0.220676 10.2213L4.69005 5.75192L0.220051 1.28255C0.0791551 1.14165 1.25847e-07 0.950553 1.28223e-07 0.751295C1.30599e-07 0.552037 0.0791552 0.360941 0.220051 0.220045C0.360948 0.0791493 0.552044 -7.62281e-06 0.751301 -7.62044e-06C0.950559 -7.61806e-06 1.14166 0.0791493 1.28255 0.220045L1.28318 0.221294Z"
                fill="black" fill-opacity="0.6" />
        </svg>
        <a class="font-satoshi text-[16px] text-black ">Order</a>
    </div>
    <div class="flex flex-col items-center justify-center">
        <div class="flex flex-row justify-between w-full mb-10">
            <div>
                <h1 class="font-integral font-bold text-[40px] w-[100%]">ORDER #{{ $order->id }}</h1>
                <span class="font-satoshim text-[16px] text-black/60">{{ $order->created_at->format('F d, Y') }}</span>
            </div>
            <div class="font-satoshim text-[15px] inline-flex items-center gap-2 rounded-full px-4 h-10
                {{ $order->status == 'pending' ? 'bg-[#F3F4F6] text-[#6B7280]' : '' }}
                {{ $order->status == 'confirmed' ? 'bg-[#E6F0FF] text-[#2563EB]' : '' }}
                {{ $order->status == 'shipped' ? 'bg-[#F3E8FF] text-[#9333EA]' : '' }}
                {{ $order->status == 'delivered' ? 'bg-[#E6F8EE] text-[#00994D]' : '' }}
                {{ $order->status == 'cancelled' ? 'bg-[#FEECEC] text-[#DC2626]' : '' }}">
                <span>●</span>
                {{ $order->status }}
            </div>
        </div>

        <div class="flex flex-col lg:flex-row items-start gap-8 mt-10 w-full">
            <div class="flex flex-col items-center py-5 px-4 gap-6 w-full max-w-178.75 border border-black/10 rounded-[20px]">
                @foreach($order->variants as $variant)
                    <div class="flex justify-between gap-4 w-full pb-6 border-b border-black/10">
                        <img class="w-[99px] h-[99px] lg:w-31 lg:h-31 bg-[#F0EEED] rounded-[8.66px] p-3" src="{{ Storage::url($variant->product->images->first()->path ?? '')}}" alt="Logo">
                        <div class="flex justify-between w-full max-w-131.75 items-center">
                            <div class="flex flex-col justify-between ">
                                <div>
                                    <h3 class="font-satoshi font-bold text-[16px] lg:text-[20px]">{{ $variant->product->name }}</h3>
                                    <div class="font-satoshi text-[12px] lg:text-[14px]">Size: <span class="opacity-60">{{ $variant->size->name }}</span></div>
                                    <div class="font-satoshi text-[12px] lg:text-[14px]">Color: <span class="opacity-60">{{ $variant->color->name }}</span></div>
                                    <div class="font-satoshi text-[12px] lg:text-[14px]">Quantity: <span class="opacity-60">{{ $variant->pivot->quantity }}</span></div>
                                </div>
                            </div>
                            <h3 class="font-satoshi font-bold text-[20px] lg:text-[24px]">{{ $variant->pivot->price * $variant->pivot->quantity }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="flex flex-col py-5 px-6 gap-6 w-full max-w-126.25 border border-black/10 rounded-[20px]">
                <h2 class="font-satoshi font-bold text-[20px] lg:text-[24px]">Order Summary</h2>
                <div class="flex flex-col gap-5">
                    <div class="flex justify-between">
                        <span class="font-satoshi text-[16px] lg:text-[20px] opacity-60">Subtotal</span>
                        <span class="font-satoshi font-bold text-[16px] lg:text-[20px]">${{ $order->subtotal() }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="font-satoshi text-[16px] lg:text-[20px] opacity-60">Discount (-0%)</span>
                        <span class="font-satoshi font-bold text-[16px] lg:text-[20px] text-[#FF3333]">-$0</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="font-satoshi text-[16px] lg:text-[20px] opacity-60">Delivery Fee</span>
                        <span class="font-satoshi font-bold text-[16px] lg:text-[20px]">${{ $order->delivery_fee }}</span>
                    </div>
                    <div class="w-full h-px bg-black opacity-10"></div>
                    <div class="flex justify-between">
                        <span class="font-satoshi text-[16px] lg:text-[20px]">Total</span>
                        <span class="font-satoshi font-bold text-[24px]">${{ $order->total }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
