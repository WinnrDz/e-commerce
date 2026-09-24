<div>
    <div class="mb-10 pt-4 mt-0 flex items-center gap-4 ">
        <a class="font-satoshi text-[16px] text-black opacity-60 cursor-pointer">Home</a>
        <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M1.28318 0.221294L6.28318 5.22129C6.3531 5.29097 6.40857 5.37377 6.44643 5.46493C6.48428 5.55609 6.50377 5.65383 6.50377 5.75254C6.50377 5.85126 6.48428 5.94899 6.44643 6.04016C6.40857 6.13132 6.3531 6.21412 6.28318 6.28379L1.28318 11.2838C1.14228 11.4247 0.951183 11.5038 0.751926 11.5038C0.552669 11.5038 0.361572 11.4247 0.220676 11.2838C0.0797797 11.1429 0.000625142 10.9518 0.000625142 10.7525C0.000625143 10.5533 0.0797797 10.3622 0.220676 10.2213L4.69005 5.75192L0.220051 1.28255C0.0791551 1.14165 1.25847e-07 0.950553 1.28223e-07 0.751295C1.30599e-07 0.552037 0.0791552 0.360941 0.220051 0.220045C0.360948 0.0791493 0.552044 -7.62281e-06 0.751301 -7.62044e-06C0.950559 -7.61806e-06 1.14166 0.0791493 1.28255 0.220045L1.28318 0.221294Z"
                fill="black" fill-opacity="0.6" />
        </svg>
        <a class="font-satoshi text-[16px] text-black ">Account</a>
    </div>
    <h1 class="font-integral font-bold text-[40px] w-[100%] mb-10">Manage Account</h1>
    <div class="flex justify-between">
        <div class="w-full max-w-[33%] p-5 border border-black/10 rounded-[20px]">
            <div class="flex gap-8 items-center border-b border-black/10 pb-5 mb-5">
                <div
                    class="bg-black flex min-w-[90px] min-h-[90px] rounded-full border border-2-black items-center justify-center">
                    <i class="w-[50%] h-full text-white" data-lucide="user"></i>
                </div>
                <div class="flex flex-col gap-1">
                    <h1 class="font-satoshi font-bold text-[24px]">Guest Demo</h1>
                    <div class="font-satoshi text-[16px] text-black/60">demo@example.com</div>
                </div>
            </div>
            <div>
                <div class="bg-black flex justify-between rounded-xl gap-3 p-2.5 items-center mb-2 cursor-pointer">
                    <div class="flex gap-3.5 items-center">
                        <i class="w-5 h-5 text-white" data-lucide="user"></i>
                        <span class="font-satoshim text-[16px] text-white">Profile</span>
                    </div>
                    <i class="w-4 h-4 text-white" data-lucide="chevron-right"></i>
                </div>

                <div class="flex justify-between rounded-xl gap-3 p-2.5 items-center mb-2 cursor-pointer">
                    <div class="flex gap-3.5 items-center">
                        <i class="w-5 h-5 text-black" data-lucide="shopping-cart"></i>
                        <span class="font-satoshim text-[16px]">Cart</span>
                    </div>
                    <i class="w-4 h-4" data-lucide="chevron-right"></i>
                </div>

                <div class="flex justify-between rounded-xl gap-3 p-2.5 items-center mb-2 cursor-pointer">
                    <div class="flex gap-3.5 items-center">
                        <i class="w-5 h-5 text-black" data-lucide="shopping-bag"></i>
                        <span class="font-satoshim text-[16px]">Orders</span>
                    </div>
                    <i class="w-4 h-4" data-lucide="chevron-right"></i>
                </div>

                <div class="flex justify-between rounded-xl gap-3 p-2.5 items-center mb-2 cursor-pointer">
                    <div class="flex gap-3.5 items-center">
                        <i class="w-5 h-5 text-black" data-lucide="shield"></i>
                        <span class="font-satoshim text-[16px]">Security</span>
                    </div>
                    <i class="w-4 h-4" data-lucide="chevron-right"></i>
                </div>

                <div class="flex justify-between gap-3 p-2.5 items-center mb-2 cursor-pointer">
                    <div class="flex gap-3.5 items-center">
                        <i class="w-5 h-5 text-black" data-lucide="log-out"></i>
                        <span class="font-satoshim text-[16px]">Logout</span>
                    </div>
                    <i class="w-4 h-4" data-lucide="chevron-right"></i>
                </div>
            </div>
        </div>
        <div class="w-full max-w-[65%] p-5 px-10 border border-black/10 rounded-[20px]">
            <h1 class="font-integral font-bold text-[26px] tracking-[1px]">Personal Information</h1>

            <form>
                <div class="flex gap-5 mt-5">
                    <div class="w-full">
                        <label for="first_name" class="font-satoshi text-[16px]">First Name</label>
                        <input type="text" id="first_name" name="first_name"
                            class="w-full border border-black/10 rounded-lg p-3 mt-2 focus:outline-none focus:ring-2 focus:ring-black/20">
                    </div>

                    <div class="w-full">
                        <label for="last_name" class="font-satoshi text-[16px]">Last Name</label>
                        <input type="text" id="last_name" name="last_name"
                            class="w-full border border-black/10 rounded-lg p-3 mt-2 focus:outline-none focus:ring-2 focus:ring-black/20">
                    </div>
                </div>

                <div class="mt-5">
                    <label for="email" class="font-satoshi text-[16px]">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full border border-black/10 rounded-lg p-3 mt-2 focus:outline-none focus:ring-2 focus:ring-black/20">
                </div>

                <div class="mt-5">
                    <label for="phone" class="font-satoshi text-[16px]">Phone Number</label>
                    <input type="tel" id="phone" name="phone"
                        class="w-full border border-black/10 rounded-lg p-3 mt-2 focus:outline-none focus:ring-2 focus:ring-black/20">
                </div>

                <button type="submit" class="mt-5 bg-black text-white font-satoshi text-[16px] px-8 py-3 rounded-3xl">
                    Save Changes
                </button>
            </form>

            <!-- Account Statistics -->
            <div class="border-t border-black/10 mt-5 pt-4">
                <h2 class="font-integral font-bold text-[20px] tracking-[0.5px] mb-4">
                    Account Statistics
                </h2>

                <div class="grid grid-cols-4 gap-3">

                    <!-- Total Orders -->
                    <div class="bg-black/[0.03] rounded-xl p-4">
                        <i class="w-5 h-5 text-black mb-3" data-lucide="package"></i>

                        <div class="font-satoshi font-bold text-[20px]">
                            5
                        </div>

                        <div class="font-satoshi text-[13px] text-black/50">
                            Total Orders
                        </div>
                    </div>

                    <!-- Wishlist -->
                    <div class="bg-black/[0.03] rounded-xl p-4">
                        <i class="w-5 h-5 text-black mb-3" data-lucide="heart"></i>

                        <div class="font-satoshi font-bold text-[20px]">
                            3
                        </div>

                        <div class="font-satoshi text-[13px] text-black/50">
                            Wishlist Items
                        </div>
                    </div>

                    <!-- Saved Address -->
                    <div class="bg-black/[0.03] rounded-xl p-4">
                        <i class="w-5 h-5 text-black mb-3" data-lucide="map-pin"></i>

                        <div class="font-satoshi font-bold text-[20px]">
                            1
                        </div>

                        <div class="font-satoshi text-[13px] text-black/50">
                            Saved Address
                        </div>
                    </div>

                    <!-- Member Since -->
                    <div class="bg-black/[0.03] rounded-xl p-4">
                        <i class="w-5 h-5 text-black mb-3" data-lucide="calendar"></i>

                        <div class="font-satoshi font-bold text-[16px]">
                            Since
                        </div>

                        <div class="font-satoshi text-[13px] text-black/50">
                            Aug 2025
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>
