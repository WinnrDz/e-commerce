<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>


<body class="bg-white">


<div class="flex min-h-screen font-satoshi">


    {{-- Sidebar --}}
    <aside class="w-64 border border-black/10 p-6">

        <a class="block font-integral font-bold text-[32px] mb-10" href="{{ route('welcome') }}">
            SHOP.CO
        </a>


        <nav id="navLinks" class="space-y-3">
            
            <a class="flex gap-4 px-4 py-3 rounded-xl {{ request()->routeIs('admin.dashboard') ? 'bg-black text-white' : '' }}" href="{{ route("admin.dashboard") }}">
                <i data-lucide="house"></i>  
                <span>Dashboard</span>
            </a>

            <a class="flex gap-4 px-4 py-3 rounded-xl {{ request()->routeIs('admin.categories') ? 'bg-black text-white' : '' }}" href="{{ route("admin.categories") }}">
                <i data-lucide="layout-grid"></i>
                <span>Categories<span>
            </a>

            <a class="flex gap-4 px-4 py-3 rounded-xl {{ request()->routeIs('admin.products') ? 'bg-black text-white' : '' }}" href="{{ route("admin.products") }}">
                <i data-lucide="package"></i>  
                <span>Products<span>
            </a>

            <a class="flex gap-4 px-4 py-3 rounded-xl {{ request()->routeIs('admin.variants') ? 'bg-black text-white' : '' }}" href="{{ route("admin.variants") }}">
                <i data-lucide="barcode"></i>   
                <span>Variants<span>
            </a>

            <a class="flex gap-4 px-4 py-3 rounded-xl {{ request()->routeIs('admin.carts') ? 'bg-black text-white' : '' }}" href="{{ route("admin.carts") }}">
                <i data-lucide="shopping-cart"></i>   
                <span>Carts<span>
            </a>

            <a class="flex gap-4 px-4 py-3 rounded-xl {{ request()->routeIs('admin.orders') ? 'bg-black text-white' : '' }}" href="{{ route("admin.orders") }}">
                <i data-lucide="shopping-bag"></i>  
                <span>Orders<span>
            </a>

            <a class="flex gap-4 px-4 py-3 rounded-xl {{ request()->routeIs('admin.reviews') ? 'bg-black text-white' : '' }}" href="{{ route("admin.reviews") }}">
                <i data-lucide="star"></i>  
                <span>Reviews</span>
            </a>
            

        </nav>

    </aside>



    {{-- Main --}}
    <main class="flex-1 bg-[#f0f0f07e]">


        {{-- Navbar --}}
        <div class="flex justify-between p-8 items-center bg-white border-b border-black/10">

            <div class="hidden lg:block relative w-[60%] flex-1 max-w-xl">
                <svg class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-500" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M19.9399 18.348L15.4877 13.8939C16.8226 12.1544 17.4458 9.97216 17.2309 7.78998C17.0161 5.60781 15.9792 3.58907 14.3306 2.14328C12.6821 0.697486 10.5453 -0.0670986 8.35376 0.00462578C6.16221 0.0763502 4.07999 0.979013 2.5295 2.5295C0.979013 4.07999 0.0763502 6.16221 0.00462578 8.35376C-0.0670986 10.5453 0.697486 12.6821 2.14328 14.3306C3.58907 15.9792 5.60781 17.0161 7.78998 17.2309C9.97216 17.4458 12.1544 16.8226 13.8939 15.4877L18.3499 19.9445C18.4545 20.0492 18.5787 20.1322 18.7155 20.1888C18.8522 20.2455 18.9987 20.2746 19.1467 20.2746C19.2947 20.2746 19.4413 20.2455 19.578 20.1888C19.7147 20.1322 19.839 20.0492 19.9436 19.9445C20.0482 19.8399 20.1313 19.7157 20.1879 19.5789C20.2445 19.4422 20.2737 19.2957 20.2737 19.1477C20.2737 18.9997 20.2445 18.8531 20.1879 18.7164C20.1313 18.5797 20.0482 18.4554 19.9436 18.3508L19.9399 18.348ZM2.26891 8.64391C2.26891 7.38306 2.6428 6.15052 3.3433 5.10215C4.04379 4.05379 5.03943 3.23669 6.20431 2.75418C7.36919 2.27167 8.65099 2.14543 9.88762 2.39141C11.1242 2.63739 12.2602 3.24455 13.1517 4.13611C14.0433 5.02767 14.6504 6.16359 14.8964 7.40021C15.1424 8.63684 15.0162 9.91864 14.5336 11.0835C14.0511 12.2484 13.234 13.244 12.1857 13.9445C11.1373 14.645 9.90477 15.0189 8.64391 15.0189C6.95369 15.0172 5.3332 14.345 4.13803 13.1498C2.94286 11.9546 2.27065 10.3341 2.26891 8.64391Z" fill="black" fill-opacity="0.4" /> </svg>
                <input type="text" placeholder="Search for products..." class="bg-[#F0F0F0]  pl-13 pr-5 py-4  w-full rounded-full focus:outline-none" />
            </div>


            <div>
                Admin User
            </div>

        </div>

        {{-- Content --}}
        <div class="p-8">

            {{ $slot }}

        <div>

    </main>


</div>


</body>

</html>