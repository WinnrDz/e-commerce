<div class="p-6">
    @if (session()->has('success'))
                    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
    @endif


    {{-- Header --}}
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">
            Orders
        </h1>

    </div>

    {{-- Order management --}}
    @if ($showing)
    <h1 class="text-2xl font-bold mb-4">
        {{ $order->name }}
    </h1>
    <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">

            <table class="w-full">

                <thead>
                    <tr class="border-b border-gray-200 text-left">
                        <th class="p-4">
                            Product
                        </th>
                        <th class="p-4">
                            Quantity
                        </th>
                        <th class="p-4">
                            Price
                        </th>
                    </tr>
                </thead>


                <tbody>
                    @foreach($order->variants as $variant)

                        <tr class="border-b border-gray-100">

                            <td class="p-4">
                                {{ $variant->product->name }} {{ $variant->size->name }} {{ $variant->color->name }}
                            </td>


                            <td class="p-4">
                                {{ $variant->pivot->quantity }}
                            </td>
                            
                            <td class="p-4">
                                {{ $variant->pivot->price }}
                            </td>

                        </tr> 
                            
                    @endforeach

                </tbody>

            </table>

        </div>



    @elseif ($editing)
        <form wire:submit="update" class="bg-white border border-gray-200 rounded-2xl p-6 mb-6">

                <h2 class="text-lg font-semibold mb-4">
                    Update Order
                </h2>

                <input
                    type="text"
                    wire:model="user_id"
                    placeholder="New User name"
                    class="border border-gray-200 rounded-xl px-4 py-3 w-full"
                >
                @error('user_id')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                <input
                    type="text"
                    wire:model="status"
                    placeholder="New Status"
                    class="border border-gray-200 rounded-xl px-4 py-3 w-full mt-4"
                >
                @error('status')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                <input
                    type="text"
                    wire:model="total"
                    placeholder="New Total Price"
                    class="border border-gray-200 rounded-xl px-4 py-3 w-full mt-4"
                >
                @error('total')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                

                <div class="flex justify-end gap-3 mt-4">

                    <button
                        wire:click="$set('editing', false)"
                        class="border border-gray-200 px-5 py-2 rounded-full cursor-pointer"
                    >
                        Cancel
                    </button>

                    <button
                        type="submit"
                        class="bg-black text-white px-5 py-2 rounded-full cursor-pointer"
                    >
                        Save
                    </button>

                </div>

        </form>

    @else
    <div>

        {{-- Add Order Form --}}
            <form wire:submit="create" class="bg-white border border-gray-200 rounded-2xl p-6 mb-6">

                <h2 class="text-lg font-semibold mb-4">
                    Add Order
                </h2>

                    <select
                        wire:model="user_id"
                        class="w-full border border-gray-200 rounded-xl px-4 py-3 bg-white outline-none focus:border-black">
                        <option value="">Select user</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                     @error('user_id')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                <input
                    type="text"
                    wire:model="status"
                    placeholder="Status"
                    class="border border-gray-200 rounded-xl px-4 py-3 w-full mt-4"
                >
                @error('status')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                <input
                    type="text"
                    wire:model="total"
                    placeholder="Total Price"
                    class="border border-gray-200 rounded-xl px-4 py-3 w-full mt-4"
                >
                @error('total')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                
                
                

                <div class="flex justify-end gap-3 mt-4">

                    <button
                        {{--wire:click="$set('showForm', false)"--}}
                        class="border border-gray-200 px-5 py-2 rounded-full cursor-pointer"
                    >
                        Cancel
                    </button>

                    <button
                        type="submit"
                        class="bg-black text-white px-5 py-2 rounded-full cursor-pointer"
                    >
                        Save
                    </button>
                    

                </div>

            </form>
        {{-- Orders Table --}}
        <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden">

            <table class="w-full">

                <thead>
                    <tr class="border-b border-gray-200 text-left">

                        <th class="p-4">
                            User name
                        </th>
                        <th class="p-4">
                            Status
                        </th>
                        <th class="p-4">
                            Total Price
                        </th>
                    </tr>
                </thead>


                <tbody>

                    @foreach($orders as $order)

                        <tr class="border-b border-gray-100">

                            <td class="p-4">
                                {{ $order->user->name }}
                            </td>
                            
                            <td class="p-4">
                                {{ $order->status }}
                            </td>

                            <td class="p-4">
                                {{ $order->total }}
                            </td>

                            <td class="p-4">

                                <button wire:click="edit({{ $order->id }})" class="text-sm cursor-pointer">
                                    Edit
                                </button>

                                <button wire:click="delete({{ $order }}) " wire:confirm="Are you sure you want to delete this order?" class="text-sm text-red-500 ml-3 cursor-pointer">
                                    Delete
                                </button>
                                <button wire:click="show({{ $order->id }})" class="text-sm text-blue-500 ml-3 cursor-pointer">
                                    Show
                                </button>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>
    @endif
</div>