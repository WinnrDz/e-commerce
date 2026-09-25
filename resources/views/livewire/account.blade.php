<div>
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
