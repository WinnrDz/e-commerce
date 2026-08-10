<div>
    <div class="space-y-6">

    {{-- Header --}}
    <div class="flex justify-between items-center">
        <div>
            <h1 class="text-3xl font-bold">
                Dashboard
            </h1>
            <p class="text-gray-500">
                Welcome back! Here's what's happening with your store today.
            </p>
        </div>

        <button class="px-5 py-2 bg-black text-white rounded-full">
            Add Product
        </button>
    </div>


    {{-- Stats Cards --}}
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5">

        <div class="border border-black/10 rounded-2xl p-5">
            <p class="text-gray-500">
                Total Sales
            </p>

            <h2 class="text-2xl font-bold mt-2">
                $24,560
            </h2>

            <span class="text-green-500 text-sm">
                ↑ 23.5% vs last week
            </span>
        </div>


        <div class="border border-black/10 rounded-2xl p-5">
            <p class="text-gray-500">
                Orders
            </p>

            <h2 class="text-2xl font-bold mt-2">
                1,245
            </h2>

            <span class="text-green-500 text-sm">
                ↑ 12.4%
            </span>
        </div>


        <div class="border border-black/10 rounded-2xl p-5">
            <p class="text-gray-500">
                Customers
            </p>

            <h2 class="text-2xl font-bold mt-2">
                892
            </h2>
        </div>


        <div class="border border-black/10 rounded-2xl p-5">
            <p class="text-gray-500">
                Refunds
            </p>

            <h2 class="text-2xl font-bold mt-2">
                $230
            </h2>
        </div>

    </div>


    {{-- Products Table --}}
    <div class="border border-black/10 rounded-2xl p-6">

        <div class="flex justify-between mb-5">
            <h2 class="text-xl font-bold">
                Products
            </h2>

            <button class="bg-black text-white px-5 py-2 rounded-full">
                Add Product
            </button>
        </div>


        <table class="w-full">

            <thead>
                <tr class="text-left text-gray-500 border-b border-black/10">

                    <th class="py-3">
                        Product
                    </th>

                    <th>
                        Category
                    </th>

                    <th>
                        Price
                    </th>

                    <th>
                        Stock
                    </th>

                    <th>
                        Status
                    </th>

                    <th>
                        Actions
                    </th>

                </tr>
            </thead>


            <tbody>

                <tr class="border-b border-black/10">

                    <td class="py-4 font-medium">
                        One Life Graphic T-Shirt
                    </td>

                    <td>
                        T-Shirts
                    </td>

                    <td>
                        $260
                    </td>

                    <td>
                        120
                    </td>

                    <td>
                        <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">
                            Active
                        </span>
                    </td>

                    <td>
                        <button>
                            👁
                        </button>

                        <button>
                            ✏️
                        </button>

                        <button>
                            🗑
                        </button>
                    </td>

                </tr>


            </tbody>

        </table>

    </div>


    </div>
</div>
