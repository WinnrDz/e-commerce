@extends('layouts.rawApp')
@section('title', 'Order Details')

@section('content')

    <div class="pt-4">

        {{-- Back to Orders --}}
        <div class="mb-8 flex items-center gap-2">
            <a href="#" class="font-satoshi text-[14px] text-black/60 hover:text-black">
                ← Back to orders
            </a>
        </div>

        {{-- Order Header --}}
        <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between mb-8">

            <div>
                <h1 class="font-integral font-bold text-[32px] lg:text-[40px]">
                    ORDER #12345
                </h1>

                <p class="font-satoshi text-[14px] lg:text-[16px] text-black/50 mt-1">
                    September 16, 2026
                </p>
            </div>

            {{-- Status --}}
            <div class="mt-4 lg:mt-0">
                <div class="flex items-center gap-2 bg-[#F0F0F0] rounded-[62px] px-4 py-2 w-fit">
                    <div class="w-2.5 h-2.5 bg-black rounded-full"></div>

                    <span class="font-satoshi text-[14px]">
                        Delivered
                    </span>
                </div>
            </div>

        </div>


        {{-- Order Items + Summary --}}
        <div class="flex flex-col lg:flex-row gap-6 mb-6">

            {{-- Order Items --}}
            <div class="w-full lg:w-[58%] border border-black/10 rounded-[20px] p-5 lg:p-6">

                <h2 class="font-satoshi font-bold text-[18px] lg:text-[20px] mb-5">
                    ORDER ITEMS
                </h2>


                {{-- Item 1 --}}
                <div class="flex items-center gap-4 pb-5 border-b border-black/10">

                    <img
                        class="w-[70px] h-[70px] lg:w-[82px] lg:h-[82px] bg-[#F0EEED] rounded-[10px] p-2 object-contain"
                        src="{{ asset('images/gradient-shirt.png') }}"
                        alt="One Life Graphic T-shirt"
                    >

                    <div class="flex-1 min-w-0">

                        <h3 class="font-satoshi font-bold text-[14px] lg:text-[16px]">
                            One Life Graphic T-shirt
                        </h3>

                        <p class="font-satoshi text-[12px] lg:text-[13px] text-black/50 mt-1">
                            Olive Green
                            <span class="mx-1">•</span>
                            Size M
                            <span class="mx-1">•</span>
                            Qty 1
                        </p>

                    </div>

                    <div>
                        <span class="font-satoshi font-bold text-[16px] lg:text-[18px]">
                            $120
                        </span>
                    </div>

                </div>


                {{-- Item 2 --}}
                <div class="flex items-center gap-4 pt-5">

                    <img
                        class="w-[70px] h-[70px] lg:w-[82px] lg:h-[82px] bg-[#F0EEED] rounded-[10px] p-2 object-contain"
                        src="{{ asset('images/jeans.png') }}"
                        alt="Skinny Fit Jeans"
                    >

                    <div class="flex-1 min-w-0">

                        <h3 class="font-satoshi font-bold text-[14px] lg:text-[16px]">
                            Skinny Fit Jeans
                        </h3>

                        <p class="font-satoshi text-[12px] lg:text-[13px] text-black/50 mt-1">
                            Blue
                            <span class="mx-1">•</span>
                            32
                            <span class="mx-1">•</span>
                            Qty 1
                        </p>

                    </div>

                    <div>
                        <span class="font-satoshi font-bold text-[16px] lg:text-[18px]">
                            $180
                        </span>
                    </div>

                </div>

            </div>


            {{-- Order Summary --}}
            <div class="w-full lg:w-[42%] border border-black/10 rounded-[20px] p-5 lg:p-6">

                <h2 class="font-satoshi font-bold text-[18px] lg:text-[20px] mb-5">
                    ORDER SUMMARY
                </h2>

                <div class="flex flex-col gap-4">

                    {{-- Subtotal --}}
                    <div class="flex justify-between">
                        <span class="font-satoshi text-[14px] text-black/50">
                            Subtotal
                        </span>

                        <span class="font-satoshi text-[14px]">
                            $300
                        </span>
                    </div>


                    {{-- Delivery --}}
                    <div class="flex justify-between">
                        <span class="font-satoshi text-[14px] text-black/50">
                            Delivery
                        </span>

                        <span class="font-satoshi text-[14px]">
                            $15
                        </span>
                    </div>


                    {{-- Discount --}}
                    <div class="flex justify-between">
                        <span class="font-satoshi text-[14px] text-black/50">
                            Discount
                        </span>

                        <span class="font-satoshi text-[14px]">
                            -$20
                        </span>
                    </div>


                    <div class="w-full h-px bg-black/10 my-1"></div>


                    {{-- Total --}}
                    <div class="flex justify-between items-center">

                        <span class="font-satoshi font-bold text-[16px]">
                            Total
                        </span>

                        <span class="font-satoshi font-bold text-[24px]">
                            $295
                        </span>

                    </div>

                </div>

            </div>

        </div>


        {{-- Delivery Address --}}
        <div class="border border-black/10 rounded-[20px] p-5 lg:p-6 mb-6">

            <div class="flex justify-between items-center mb-5">

                <div class="flex items-center gap-2">

                    {{-- Location Icon --}}
                    <svg
                        width="18"
                        height="18"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M12 21C12 21 19 14.5 19 8.5C19 4.91 15.866 2 12 2C8.134 2 5 4.91 5 8.5C5 14.5 12 21 12 21Z"
                            fill="black"
                        />
                        <circle
                            cx="12"
                            cy="8.5"
                            r="2.5"
                            fill="white"
                        />
                    </svg>

                    <h2 class="font-satoshi font-bold text-[16px]">
                        DELIVERY ADDRESS
                    </h2>

                </div>


                <button
                    class="border border-black/10 rounded-[8px] px-4 py-2 font-satoshi text-[12px] hover:bg-black hover:text-white transition"
                >
                    Edit
                </button>

            </div>


            <div class="font-satoshi text-[13px] lg:text-[14px] leading-6 text-black/60">

                <p class="text-black font-medium">
                    Rabah Benali
                </p>

                <p>
                    12 Rue des Frères, Draria
                </p>

                <p>
                    Algiers, 16000
                </p>

                <p>
                    Algeria
                </p>

            </div>

        </div>


        {{-- Payment Method --}}
        <div class="border border-black/10 rounded-[20px] p-5 lg:p-6 mb-6">

            <div class="flex justify-between items-center">

                <div class="flex items-center gap-2">

                    {{-- Card Icon --}}
                    <svg
                        width="20"
                        height="20"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <rect
                            x="3"
                            y="5"
                            width="18"
                            height="14"
                            rx="2"
                            stroke="black"
                            stroke-width="1.8"
                        />

                        <path
                            d="M3 9H21"
                            stroke="black"
                            stroke-width="1.8"
                        />

                    </svg>

                    <h2 class="font-satoshi font-bold text-[16px]">
                        PAYMENT METHOD
                    </h2>

                </div>


                <button
                    class="border border-black/10 rounded-[8px] px-4 py-2 font-satoshi text-[12px] hover:bg-black hover:text-white transition"
                >
                    Edit
                </button>

            </div>


            <div class="flex items-center gap-4 mt-5">

                {{-- Visa Logo Placeholder --}}
                <div class="w-[50px] h-[32px] bg-[#F0F0F0] rounded-[6px] flex items-center justify-center">

                    <span class="font-satoshi font-bold text-[13px] italic">
                        VISA
                    </span>

                </div>


                <div>

                    <p class="font-satoshi font-bold text-[14px]">
                        •••• 4242
                    </p>

                    <p class="font-satoshi text-[12px] text-black/50">
                        Visa
                    </p>

                </div>

            </div>

        </div>


        {{-- Continue Shopping --}}
        <a
            href="{{ route('welcome') }}"
            class="flex items-center justify-center gap-3 bg-black text-white font-satoshim text-[14px] lg:text-[16px] w-full py-4 rounded-[62px] mb-10"
        >
            <span>
                CONTINUE SHOPPING
            </span>

            <svg
                width="20"
                height="20"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M14.2959 4.45404L21.0459 11.204C21.1508 11.3086 21.234 11.4327 21.2908 11.5695C21.3476 11.7062 21.3768 11.8529 21.3768 12.0009C21.3768 12.149 21.3476 12.2956 21.2908 12.4323C21.234 12.5691 21.1508 12.6933 21.0459 12.7978L14.2959 19.5478C14.0846 19.7591 13.7979 19.8779 13.4991 19.8779C13.2002 19.8779 12.9135 19.7591 12.7022 19.5478C12.4908 19.3364 12.3721 19.0498 12.3721 18.7509C12.3721 18.452 12.4908 18.1654 12.7022 17.954L17.5313 13.125L3.75 13.125C3.45163 13.125 3.16548 13.0065 2.9545 12.7955C2.74353 12.5845 2.625 12.2983 2.625 12C2.625 11.7016 2.74353 11.4155 2.95451 11.2045C3.16548 10.9935 3.45163 10.875 3.75 10.875L17.5313 10.875L12.7013 6.04592C12.4899 5.83457 12.3712 5.54793 12.3712 5.24904C12.3712 4.95016 12.4899 4.66351 12.7013 4.45217C12.9126 4.24082 13.1992 4.12209 13.4981 4.12209C13.797 4.12209 14.0837 4.24082 14.295 4.45217L14.2959 4.45404Z"
                    fill="white"
                />
            </svg>

        </a>

    </div>

@endsection