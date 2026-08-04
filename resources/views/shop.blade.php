@extends('layouts.app')
@section('title', 'Show')
@section('content')
    <div id="shop" class="mb-10 pt-4 mt-0 flex items-center gap-4 ">
        <a class="font-satoshi text-[14px] lg:text-[16px] text-black opacity-60 cursor-pointer">Home</a>
        <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M1.28318 0.221294L6.28318 5.22129C6.3531 5.29097 6.40857 5.37377 6.44643 5.46493C6.48428 5.55609 6.50377 5.65383 6.50377 5.75254C6.50377 5.85126 6.48428 5.94899 6.44643 6.04016C6.40857 6.13132 6.3531 6.21412 6.28318 6.28379L1.28318 11.2838C1.14228 11.4247 0.951183 11.5038 0.751926 11.5038C0.552669 11.5038 0.361572 11.4247 0.220676 11.2838C0.0797797 11.1429 0.000625142 10.9518 0.000625142 10.7525C0.000625143 10.5533 0.0797797 10.3622 0.220676 10.2213L4.69005 5.75192L0.220051 1.28255C0.0791551 1.14165 1.25847e-07 0.950553 1.28223e-07 0.751295C1.30599e-07 0.552037 0.0791552 0.360941 0.220051 0.220045C0.360948 0.0791493 0.552044 -7.62281e-06 0.751301 -7.62044e-06C0.950559 -7.61806e-06 1.14166 0.0791493 1.28255 0.220045L1.28318 0.221294Z"
                fill="black" fill-opacity="0.6" />
        </svg>
        <a class="font-satoshi text-[14px] lg:text-[16px] text-black ">T-Shirts</a>
    </div>
    <div class="flex flex-col items-center">
        <div class="flex justify-center w-full lg:max-w-320 gap-3">
            <div id="filters" class="hidden lg:block w-full max-w-80 border border-black/10 rounded-[20px] overflow-y-auto">
                <div class="flex justify-between items-center mt-5 mx-6 pb-6 border-b border-black/10">
                    <h2 class="font-satoshi font-bold text-[20px]">Filters</h2>
                    <svg class="cursor-pointer" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.125 11.625V20.25C13.125 20.5484 13.0065 20.8345 12.7955 21.0455C12.5845 21.2565 12.2984 21.375 12 21.375C11.7016 21.375 11.4155 21.2565 11.2045 21.0455C10.9935 20.8345 10.875 20.5484 10.875 20.25V11.625C10.875 11.3266 10.9935 11.0405 11.2045 10.8295C11.4155 10.6185 11.7016 10.5 12 10.5C12.2984 10.5 12.5845 10.6185 12.7955 10.8295C13.0065 11.0405 13.125 11.3266 13.125 11.625ZM18.75 18C18.4516 18 18.1655 18.1185 17.9545 18.3295C17.7435 18.5405 17.625 18.8266 17.625 19.125V20.25C17.625 20.5484 17.7435 20.8345 17.9545 21.0455C18.1655 21.2565 18.4516 21.375 18.75 21.375C19.0484 21.375 19.3345 21.2565 19.5455 21.0455C19.7565 20.8345 19.875 20.5484 19.875 20.25V19.125C19.875 18.8266 19.7565 18.5405 19.5455 18.3295C19.3345 18.1185 19.0484 18 18.75 18ZM21 14.25H19.875V3.75C19.875 3.45163 19.7565 3.16548 19.5455 2.9545C19.3345 2.74353 19.0484 2.625 18.75 2.625C18.4516 2.625 18.1655 2.74353 17.9545 2.9545C17.7435 3.16548 17.625 3.45163 17.625 3.75V14.25H16.5C16.2016 14.25 15.9155 14.3685 15.7045 14.5795C15.4935 14.7905 15.375 15.0766 15.375 15.375C15.375 15.6734 15.4935 15.9595 15.7045 16.1705C15.9155 16.3815 16.2016 16.5 16.5 16.5H21C21.2984 16.5 21.5845 16.3815 21.7955 16.1705C22.0065 15.9595 22.125 15.6734 22.125 15.375C22.125 15.0766 22.0065 14.7905 21.7955 14.5795C21.5845 14.3685 21.2984 14.25 21 14.25ZM5.25 15C4.95163 15 4.66548 15.1185 4.4545 15.3295C4.24353 15.5405 4.125 15.8266 4.125 16.125V20.25C4.125 20.5484 4.24353 20.8345 4.4545 21.0455C4.66548 21.2565 4.95163 21.375 5.25 21.375C5.54837 21.375 5.83452 21.2565 6.0455 21.0455C6.25647 20.8345 6.375 20.5484 6.375 20.25V16.125C6.375 15.8266 6.25647 15.5405 6.0455 15.3295C5.83452 15.1185 5.54837 15 5.25 15ZM7.5 11.25H6.375V3.75C6.375 3.45163 6.25647 3.16548 6.0455 2.9545C5.83452 2.74353 5.54837 2.625 5.25 2.625C4.95163 2.625 4.66548 2.74353 4.4545 2.9545C4.24353 3.16548 4.125 3.45163 4.125 3.75V11.25H3C2.70163 11.25 2.41548 11.3685 2.2045 11.5795C1.99353 11.7905 1.875 12.0766 1.875 12.375C1.875 12.6734 1.99353 12.9595 2.2045 13.1705C2.41548 13.3815 2.70163 13.5 3 13.5H7.5C7.79837 13.5 8.08452 13.3815 8.2955 13.1705C8.50647 12.9595 8.625 12.6734 8.625 12.375C8.625 12.0766 8.50647 11.7905 8.2955 11.5795C8.08452 11.3685 7.79837 11.25 7.5 11.25ZM14.25 6.75H13.125V3.75C13.125 3.45163 13.0065 3.16548 12.7955 2.9545C12.5845 2.74353 12.2984 2.625 12 2.625C11.7016 2.625 11.4155 2.74353 11.2045 2.9545C10.9935 3.16548 10.875 3.45163 10.875 3.75V6.75H9.75C9.45163 6.75 9.16548 6.86853 8.9545 7.0795C8.74353 7.29048 8.625 7.57663 8.625 7.875C8.625 8.17337 8.74353 8.45952 8.9545 8.6705C9.16548 8.88147 9.45163 9 9.75 9H14.25C14.5484 9 14.8345 8.88147 15.0455 8.6705C15.2565 8.45952 15.375 8.17337 15.375 7.875C15.375 7.57663 15.2565 7.29048 15.0455 7.0795C14.8345 6.86853 14.5484 6.75 14.25 6.75Z" fill="black" fill-opacity="0.4"/></svg>
                </div>
                <div class="flex flex-col gap-5 mt-5 mx-6 pb-6 border-b border-black/10">
                    <div class="flex justify-between">
                        <span class="font-satoshi text-[16px] opacity-60">T-shirts</span>
                        <svg class="cursor-pointer" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.53073 2.46937L11.5307 7.46937C11.6007 7.53905 11.6561 7.62184 11.694 7.71301C11.7318 7.80417 11.7513 7.90191 11.7513 8.00062C11.7513 8.09933 11.7318 8.19707 11.694 8.28824C11.6561 8.3794 11.6007 8.46219 11.5307 8.53187L6.53073 13.5319C6.38984 13.6728 6.19874 13.7519 5.99948 13.7519C5.80023 13.7519 5.60913 13.6728 5.46823 13.5319C5.32734 13.391 5.24818 13.1999 5.24818 13.0006C5.24818 12.8014 5.32734 12.6103 5.46823 12.4694L9.93761 8L5.46761 3.53062C5.32671 3.38973 5.24756 3.19863 5.24756 2.99937C5.24756 2.80011 5.32671 2.60902 5.46761 2.46812C5.60851 2.32723 5.7996 2.24807 5.99886 2.24807C6.19812 2.24807 6.38921 2.32723 6.53011 2.46812L6.53073 2.46937Z" fill="black" fill-opacity="0.6"/></svg>
                    </div>
                    <div class="flex justify-between">
                        <span class="font-satoshi text-[16px] opacity-60">Shorts</span>
                        <svg class="cursor-pointer" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.53073 2.46937L11.5307 7.46937C11.6007 7.53905 11.6561 7.62184 11.694 7.71301C11.7318 7.80417 11.7513 7.90191 11.7513 8.00062C11.7513 8.09933 11.7318 8.19707 11.694 8.28824C11.6561 8.3794 11.6007 8.46219 11.5307 8.53187L6.53073 13.5319C6.38984 13.6728 6.19874 13.7519 5.99948 13.7519C5.80023 13.7519 5.60913 13.6728 5.46823 13.5319C5.32734 13.391 5.24818 13.1999 5.24818 13.0006C5.24818 12.8014 5.32734 12.6103 5.46823 12.4694L9.93761 8L5.46761 3.53062C5.32671 3.38973 5.24756 3.19863 5.24756 2.99937C5.24756 2.80011 5.32671 2.60902 5.46761 2.46812C5.60851 2.32723 5.7996 2.24807 5.99886 2.24807C6.19812 2.24807 6.38921 2.32723 6.53011 2.46812L6.53073 2.46937Z" fill="black" fill-opacity="0.6"/></svg>
                    </div>
                    <div class="flex justify-between">
                        <span class="font-satoshi text-[16px] opacity-60">Shirts</span>
                        <svg class="cursor-pointer" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.53073 2.46937L11.5307 7.46937C11.6007 7.53905 11.6561 7.62184 11.694 7.71301C11.7318 7.80417 11.7513 7.90191 11.7513 8.00062C11.7513 8.09933 11.7318 8.19707 11.694 8.28824C11.6561 8.3794 11.6007 8.46219 11.5307 8.53187L6.53073 13.5319C6.38984 13.6728 6.19874 13.7519 5.99948 13.7519C5.80023 13.7519 5.60913 13.6728 5.46823 13.5319C5.32734 13.391 5.24818 13.1999 5.24818 13.0006C5.24818 12.8014 5.32734 12.6103 5.46823 12.4694L9.93761 8L5.46761 3.53062C5.32671 3.38973 5.24756 3.19863 5.24756 2.99937C5.24756 2.80011 5.32671 2.60902 5.46761 2.46812C5.60851 2.32723 5.7996 2.24807 5.99886 2.24807C6.19812 2.24807 6.38921 2.32723 6.53011 2.46812L6.53073 2.46937Z" fill="black" fill-opacity="0.6"/></svg>
                    </div>
                    <div class="flex justify-between">
                        <span class="font-satoshi text-[16px] opacity-60">Hoodie</span>
                        <svg class="cursor-pointer" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.53073 2.46937L11.5307 7.46937C11.6007 7.53905 11.6561 7.62184 11.694 7.71301C11.7318 7.80417 11.7513 7.90191 11.7513 8.00062C11.7513 8.09933 11.7318 8.19707 11.694 8.28824C11.6561 8.3794 11.6007 8.46219 11.5307 8.53187L6.53073 13.5319C6.38984 13.6728 6.19874 13.7519 5.99948 13.7519C5.80023 13.7519 5.60913 13.6728 5.46823 13.5319C5.32734 13.391 5.24818 13.1999 5.24818 13.0006C5.24818 12.8014 5.32734 12.6103 5.46823 12.4694L9.93761 8L5.46761 3.53062C5.32671 3.38973 5.24756 3.19863 5.24756 2.99937C5.24756 2.80011 5.32671 2.60902 5.46761 2.46812C5.60851 2.32723 5.7996 2.24807 5.99886 2.24807C6.19812 2.24807 6.38921 2.32723 6.53011 2.46812L6.53073 2.46937Z" fill="black" fill-opacity="0.6"/></svg>
                    </div>
                    <div class="flex justify-between">
                        <span class="font-satoshi text-[16px] opacity-60">Jeans</span>
                        <svg class="cursor-pointer" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.53073 2.46937L11.5307 7.46937C11.6007 7.53905 11.6561 7.62184 11.694 7.71301C11.7318 7.80417 11.7513 7.90191 11.7513 8.00062C11.7513 8.09933 11.7318 8.19707 11.694 8.28824C11.6561 8.3794 11.6007 8.46219 11.5307 8.53187L6.53073 13.5319C6.38984 13.6728 6.19874 13.7519 5.99948 13.7519C5.80023 13.7519 5.60913 13.6728 5.46823 13.5319C5.32734 13.391 5.24818 13.1999 5.24818 13.0006C5.24818 12.8014 5.32734 12.6103 5.46823 12.4694L9.93761 8L5.46761 3.53062C5.32671 3.38973 5.24756 3.19863 5.24756 2.99937C5.24756 2.80011 5.32671 2.60902 5.46761 2.46812C5.60851 2.32723 5.7996 2.24807 5.99886 2.24807C6.19812 2.24807 6.38921 2.32723 6.53011 2.46812L6.53073 2.46937Z" fill="black" fill-opacity="0.6"/></svg>
                    </div>              
                </div>
                <div class="flex flex-col gap-10 mt-5 mx-6 pb-8 border-b border-black/10">
                    <div class="flex justify-between items-center ">
                        <h2 class="font-satoshi font-bold text-[20px]">Price</h2>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.4694 9.46939L7.4694 4.46939C7.53908 4.39947 7.62188 4.34399 7.71304 4.30614C7.8042 4.26828 7.90194 4.2488 8.00065 4.2488C8.09936 4.2488 8.1971 4.26828 8.28827 4.30614C8.37943 4.34399 8.46223 4.39947 8.5319 4.46939L13.5319 9.46939C13.6728 9.61028 13.752 9.80138 13.752 10.0006C13.752 10.1999 13.6728 10.391 13.5319 10.5319C13.391 10.6728 13.1999 10.7519 13.0007 10.7519C12.8014 10.7519 12.6103 10.6728 12.4694 10.5319L8.00003 6.06251L3.53065 10.5325C3.38976 10.6734 3.19866 10.7526 2.9994 10.7526C2.80015 10.7526 2.60905 10.6734 2.46815 10.5325C2.32726 10.3916 2.2481 10.2005 2.2481 10.0013C2.2481 9.80201 2.32726 9.61091 2.46815 9.47001L2.4694 9.46939Z" fill="black"/></svg>
                    </div>
                    <div id="slider" class="bg-[#F0F0F0] w-[100%] h-2 rounded-[20px] relative">
                        <span id="minPrice" class="font-satoshi font-medium text-[14px] text-center w-9 left-12.5 top-4 -translate-x-[50%] absolute">100$</span>
                        <span id="maxPrice" class="font-satoshi font-medium text-[14px] text-center w-9 left-55 top-4 -translate-x-[50%] absolute">400$</span>
                        <span id="collisionPrice" class="font-satoshi font-medium text-[14px] text-center top-4 -translate-x-[50%] absolute whitespace-nowrap hidden">200$</span>
                    </div>
                    <form class="flex justify-between relative font-satoshi text-[16px]">
                        <div>
                            <label>From ($)</label>
                            <input type="number" id="minInput" placeholder="Min" max="460" min="0" value="100"
                            class="bg-[#F0F0F0] text-center w-28 h-10 rounded-[8px] border focus:outline-none" />
                        </div>
                        
                        <div class="absolute left-1/2 top-[65%] -translate-x-1/2 -translate-y-1/2">-</div>

                        <div>
                            <label>To ($)</label>
                            <input type="number" id="maxInput" placeholder="Max" max="460" min="0" value="400"
                            class="bg-[#F0F0F0] text-center w-28 h-10 rounded-[8px] border focus:outline-none" />
                        </div>
                    </form>
                </div>
                <div class="flex flex-col gap-5 mt-5 mx-6 pb-8 border-b border-black/10">
                    <div class="flex justify-between items-center ">
                        <h2 class="font-satoshi font-bold text-[20px]">Color</h2>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.4694 9.46939L7.4694 4.46939C7.53908 4.39947 7.62188 4.34399 7.71304 4.30614C7.8042 4.26828 7.90194 4.2488 8.00065 4.2488C8.09936 4.2488 8.1971 4.26828 8.28827 4.30614C8.37943 4.34399 8.46223 4.39947 8.5319 4.46939L13.5319 9.46939C13.6728 9.61028 13.752 9.80138 13.752 10.0006C13.752 10.1999 13.6728 10.391 13.5319 10.5319C13.391 10.6728 13.1999 10.7519 13.0007 10.7519C12.8014 10.7519 12.6103 10.6728 12.4694 10.5319L8.00003 6.06251L3.53065 10.5325C3.38976 10.6734 3.19866 10.7526 2.9994 10.7526C2.80015 10.7526 2.60905 10.6734 2.46815 10.5325C2.32726 10.3916 2.2481 10.2005 2.2481 10.0013C2.2481 9.80201 2.32726 9.61091 2.46815 9.47001L2.4694 9.46939Z" fill="black"/></svg>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="flex justify-between">
                            <div class="h-9.25 w-9.25 rounded-full bg-[#00C12B] border border-black/20 border-2 flex items-center justify-center"></div>
                            <div class="h-9.25 w-9.25 rounded-full bg-[#F50606] border border-black/20 border-2 flex items-center justify-center"></div>
                            <div class="h-9.25 w-9.25 rounded-full bg-[#F5DD06] border border-black/20 border-2 flex items-center justify-center"></div>
                            <div class="h-9.25 w-9.25 rounded-full bg-[#F57906] border border-black/20 border-2 flex items-center justify-center"></div>
                            <div class="h-9.25 w-9.25 rounded-full bg-[#06CAF5] border border-black/20 border-2 flex items-center justify-center"></div>
                        </div>

                        <div class="flex justify-between">
                            <div class="h-9.25 w-9.25 rounded-full bg-[#063AF5] border border-black/20 border-2 flex items-center justify-center"> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">s<path d="M14.5306 5.03063L6.5306 13.0306C6.46092 13.1005 6.37813 13.156 6.28696 13.1939C6.1958 13.2317 6.09806 13.2512 5.99935 13.2512C5.90064 13.2512 5.8029 13.2317 5.71173 13.1939C5.62057 13.156 5.53778 13.1005 5.4681 13.0306L1.9681 9.53063C1.89833 9.46087 1.84299 9.37804 1.80524 9.28689C1.76748 9.19574 1.74805 9.09804 1.74805 8.99938C1.74805 8.90072 1.76748 8.80302 1.80524 8.71187C1.84299 8.62072 1.89833 8.53789 1.9681 8.46813C2.03786 8.39837 2.12069 8.34302 2.21184 8.30527C2.30299 8.26751 2.40069 8.24808 2.49935 8.24808C2.59801 8.24808 2.69571 8.26751 2.78686 8.30527C2.87801 8.34302 2.96083 8.39837 3.0306 8.46813L5.99997 11.4375L13.4693 3.96938C13.6102 3.82848 13.8013 3.74933 14.0006 3.74933C14.1999 3.74933 14.391 3.82848 14.5318 3.96938C14.6727 4.11028 14.7519 4.30137 14.7519 4.50063C14.7519 4.69989 14.6727 4.89098 14.5318 5.03188L14.5306 5.03063Z" fill="white"/></svg></div>
                            <div class="h-9.25 w-9.25 rounded-full bg-[#7D06F5] border border-black/20 border-2 flex items-center justify-center"></div>
                            <div class="h-9.25 w-9.25 rounded-full bg-[#F506A4] border border-black/20 border-2 flex items-center justify-center"></div>
                            <div class="h-9.25 w-9.25 rounded-full bg-[#FFFFFF] border border-black/20 border-2 flex items-center justify-center"></div>
                            <div class="h-9.25 w-9.25 rounded-full bg-[#000000] border border-black/20 border-2 flex items-center justify-center"></div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-5 mt-5 mx-6 pb-8 border-b border-black/10">
                    <div class="flex justify-between items-center ">
                        <h2 class="font-satoshi font-bold text-[20px]">Size</h2>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.4694 9.46939L7.4694 4.46939C7.53908 4.39947 7.62188 4.34399 7.71304 4.30614C7.8042 4.26828 7.90194 4.2488 8.00065 4.2488C8.09936 4.2488 8.1971 4.26828 8.28827 4.30614C8.37943 4.34399 8.46223 4.39947 8.5319 4.46939L13.5319 9.46939C13.6728 9.61028 13.752 9.80138 13.752 10.0006C13.752 10.1999 13.6728 10.391 13.5319 10.5319C13.391 10.6728 13.1999 10.7519 13.0007 10.7519C12.8014 10.7519 12.6103 10.6728 12.4694 10.5319L8.00003 6.06251L3.53065 10.5325C3.38976 10.6734 3.19866 10.7526 2.9994 10.7526C2.80015 10.7526 2.60905 10.6734 2.46815 10.5325C2.32726 10.3916 2.2481 10.2005 2.2481 10.0013C2.2481 9.80201 2.32726 9.61091 2.46815 9.47001L2.4694 9.46939Z" fill="black"/></svg>
                    </div>
                    <div id="sizeBtnsCont" class="flex flex-wrap gap-3">
                        <button
                            class="font-satoshi text-[16px] text-black/60 bg-[#F0F0F0] py-2.5 px-5 rounded-[62px] cursor-pointer hover:bg-[#EAEAEA] relative overflow-hidden">XX-Small</button>
                        <button
                            class="font-satoshi text-[16px] text-black/60 bg-[#F0F0F0] py-2.5 px-5 rounded-[62px] cursor-pointer hover:bg-[#EAEAEA] relative overflow-hidden">X-Small</button>
                        <button
                            class="font-satoshi text-[16px] text-black/60 bg-[#F0F0F0] py-2.5 px-5 rounded-[62px] cursor-pointer hover:bg-[#EAEAEA] relative overflow-hidden">Small</button>
                        <button
                            class="font-satoshi text-[16px] text-black/60 bg-[#F0F0F0] py-2.5 px-5 rounded-[62px] cursor-pointer hover:bg-[#EAEAEA] relative overflow-hidden">Medium</button>
                        <button
                            class="font-satoshi text-[16px] text-black/60 bg-[#F0F0F0] py-2.5 px-5 rounded-[62px] cursor-pointer hover:bg-[#EAEAEA] relative overflow-hidden">Large</button>
                        <button
                            class="font-satoshi text-[16px] text-black/60 bg-[#F0F0F0] py-2.5 px-5 rounded-[62px] cursor-pointer hover:bg-[#EAEAEA] relative overflow-hidden">X-Large</button>
                        <button
                            class="font-satoshi text-[16px] text-black/60 bg-[#F0F0F0] py-2.5 px-5 rounded-[62px] cursor-pointer hover:bg-[#EAEAEA] relative overflow-hidden">XX-Large</button>
                        <button
                            class="font-satoshi text-[16px] text-black/60 bg-[#F0F0F0] py-2.5 px-5 rounded-[62px] cursor-pointer hover:bg-[#EAEAEA] relative overflow-hidden">3X-Large</button>
                        <button
                            class="font-satoshi text-[16px] text-black/60 bg-[#F0F0F0] py-2.5 px-5 rounded-[62px] cursor-pointer hover:bg-[#EAEAEA] relative overflow-hidden">4X-Large</button>
                    </div>
                </div>
                <div class="flex flex-col  gap-5 mt-5 mx-6 pb-8 border-b border-black/10">
                    <div class="flex justify-between items-center ">
                        <h2 class="font-satoshi font-bold text-[20px]">Dress Style</h2>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.4694 9.46939L7.4694 4.46939C7.53908 4.39947 7.62188 4.34399 7.71304 4.30614C7.8042 4.26828 7.90194 4.2488 8.00065 4.2488C8.09936 4.2488 8.1971 4.26828 8.28827 4.30614C8.37943 4.34399 8.46223 4.39947 8.5319 4.46939L13.5319 9.46939C13.6728 9.61028 13.752 9.80138 13.752 10.0006C13.752 10.1999 13.6728 10.391 13.5319 10.5319C13.391 10.6728 13.1999 10.7519 13.0007 10.7519C12.8014 10.7519 12.6103 10.6728 12.4694 10.5319L8.00003 6.06251L3.53065 10.5325C3.38976 10.6734 3.19866 10.7526 2.9994 10.7526C2.80015 10.7526 2.60905 10.6734 2.46815 10.5325C2.32726 10.3916 2.2481 10.2005 2.2481 10.0013C2.2481 9.80201 2.32726 9.61091 2.46815 9.47001L2.4694 9.46939Z" fill="black"/></svg>
                    </div>
                    <div class="flex flex-col gap-5">
                        <div class="flex justify-between">
                            <span class="font-satoshi text-[16px] opacity-60">T-shirts</span>
                            <svg class="cursor-pointer" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.53073 2.46937L11.5307 7.46937C11.6007 7.53905 11.6561 7.62184 11.694 7.71301C11.7318 7.80417 11.7513 7.90191 11.7513 8.00062C11.7513 8.09933 11.7318 8.19707 11.694 8.28824C11.6561 8.3794 11.6007 8.46219 11.5307 8.53187L6.53073 13.5319C6.38984 13.6728 6.19874 13.7519 5.99948 13.7519C5.80023 13.7519 5.60913 13.6728 5.46823 13.5319C5.32734 13.391 5.24818 13.1999 5.24818 13.0006C5.24818 12.8014 5.32734 12.6103 5.46823 12.4694L9.93761 8L5.46761 3.53062C5.32671 3.38973 5.24756 3.19863 5.24756 2.99937C5.24756 2.80011 5.32671 2.60902 5.46761 2.46812C5.60851 2.32723 5.7996 2.24807 5.99886 2.24807C6.19812 2.24807 6.38921 2.32723 6.53011 2.46812L6.53073 2.46937Z" fill="black" fill-opacity="0.6"/></svg>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-satoshi text-[16px] opacity-60">Shorts</span>
                            <svg class="cursor-pointer" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.53073 2.46937L11.5307 7.46937C11.6007 7.53905 11.6561 7.62184 11.694 7.71301C11.7318 7.80417 11.7513 7.90191 11.7513 8.00062C11.7513 8.09933 11.7318 8.19707 11.694 8.28824C11.6561 8.3794 11.6007 8.46219 11.5307 8.53187L6.53073 13.5319C6.38984 13.6728 6.19874 13.7519 5.99948 13.7519C5.80023 13.7519 5.60913 13.6728 5.46823 13.5319C5.32734 13.391 5.24818 13.1999 5.24818 13.0006C5.24818 12.8014 5.32734 12.6103 5.46823 12.4694L9.93761 8L5.46761 3.53062C5.32671 3.38973 5.24756 3.19863 5.24756 2.99937C5.24756 2.80011 5.32671 2.60902 5.46761 2.46812C5.60851 2.32723 5.7996 2.24807 5.99886 2.24807C6.19812 2.24807 6.38921 2.32723 6.53011 2.46812L6.53073 2.46937Z" fill="black" fill-opacity="0.6"/></svg>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-satoshi text-[16px] opacity-60">Shirts</span>
                            <svg class="cursor-pointer" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.53073 2.46937L11.5307 7.46937C11.6007 7.53905 11.6561 7.62184 11.694 7.71301C11.7318 7.80417 11.7513 7.90191 11.7513 8.00062C11.7513 8.09933 11.7318 8.19707 11.694 8.28824C11.6561 8.3794 11.6007 8.46219 11.5307 8.53187L6.53073 13.5319C6.38984 13.6728 6.19874 13.7519 5.99948 13.7519C5.80023 13.7519 5.60913 13.6728 5.46823 13.5319C5.32734 13.391 5.24818 13.1999 5.24818 13.0006C5.24818 12.8014 5.32734 12.6103 5.46823 12.4694L9.93761 8L5.46761 3.53062C5.32671 3.38973 5.24756 3.19863 5.24756 2.99937C5.24756 2.80011 5.32671 2.60902 5.46761 2.46812C5.60851 2.32723 5.7996 2.24807 5.99886 2.24807C6.19812 2.24807 6.38921 2.32723 6.53011 2.46812L6.53073 2.46937Z" fill="black" fill-opacity="0.6"/></svg>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-satoshi text-[16px] opacity-60">Hoodie</span>
                            <svg class="cursor-pointer" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.53073 2.46937L11.5307 7.46937C11.6007 7.53905 11.6561 7.62184 11.694 7.71301C11.7318 7.80417 11.7513 7.90191 11.7513 8.00062C11.7513 8.09933 11.7318 8.19707 11.694 8.28824C11.6561 8.3794 11.6007 8.46219 11.5307 8.53187L6.53073 13.5319C6.38984 13.6728 6.19874 13.7519 5.99948 13.7519C5.80023 13.7519 5.60913 13.6728 5.46823 13.5319C5.32734 13.391 5.24818 13.1999 5.24818 13.0006C5.24818 12.8014 5.32734 12.6103 5.46823 12.4694L9.93761 8L5.46761 3.53062C5.32671 3.38973 5.24756 3.19863 5.24756 2.99937C5.24756 2.80011 5.32671 2.60902 5.46761 2.46812C5.60851 2.32723 5.7996 2.24807 5.99886 2.24807C6.19812 2.24807 6.38921 2.32723 6.53011 2.46812L6.53073 2.46937Z" fill="black" fill-opacity="0.6"/></svg>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-satoshi text-[16px] opacity-60">Jeans</span>
                            <svg class="cursor-pointer" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.53073 2.46937L11.5307 7.46937C11.6007 7.53905 11.6561 7.62184 11.694 7.71301C11.7318 7.80417 11.7513 7.90191 11.7513 8.00062C11.7513 8.09933 11.7318 8.19707 11.694 8.28824C11.6561 8.3794 11.6007 8.46219 11.5307 8.53187L6.53073 13.5319C6.38984 13.6728 6.19874 13.7519 5.99948 13.7519C5.80023 13.7519 5.60913 13.6728 5.46823 13.5319C5.32734 13.391 5.24818 13.1999 5.24818 13.0006C5.24818 12.8014 5.32734 12.6103 5.46823 12.4694L9.93761 8L5.46761 3.53062C5.32671 3.38973 5.24756 3.19863 5.24756 2.99937C5.24756 2.80011 5.32671 2.60902 5.46761 2.46812C5.60851 2.32723 5.7996 2.24807 5.99886 2.24807C6.19812 2.24807 6.38921 2.32723 6.53011 2.46812L6.53073 2.46937Z" fill="black" fill-opacity="0.6"/></svg>
                        </div>              
                    </div>
                    <button
                        class="flex items-center justify-around bg-black w-[100%] h-12 mt-1 rounded-[62px] cursor-pointer font-satoshi font-medium text-[16px] text-white">Apply filter</button>
                </div>
            </div>
            <div class="flex flex-col gap-6">
                <div class="flex justify-between items-center">
                    <div class="flex gap-4">
                        <h1 class="font-satoshi font-bold text-[20px] lg:text-[24px] lg:text-[32px]">Casual</h1>
                        <span class="flex items-center font-satoshi text-[14px] lg:text-[16px] text-black/60">Showing 1-9 of 100 Products</span>
                    </div>
                    <div id="filtersBtn" class="flex items-center justify-center bg-[#F0F0F0] w-[32px] h-[32px] rounded-full">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.75 7.75V13.5C8.75 13.6989 8.67098 13.8897 8.53033 14.0303C8.38968 14.171 8.19891 14.25 8 14.25C7.80109 14.25 7.61032 14.171 7.46967 14.0303C7.32902 13.8897 7.25 13.6989 7.25 13.5V7.75C7.25 7.55109 7.32902 7.36032 7.46967 7.21967C7.61032 7.07902 7.80109 7 8 7C8.19891 7 8.38968 7.07902 8.53033 7.21967C8.67098 7.36032 8.75 7.55109 8.75 7.75ZM12.5 12C12.3011 12 12.1103 12.079 11.9697 12.2197C11.829 12.3603 11.75 12.5511 11.75 12.75V13.5C11.75 13.6989 11.829 13.8897 11.9697 14.0303C12.1103 14.171 12.3011 14.25 12.5 14.25C12.6989 14.25 12.8897 14.171 13.0303 14.0303C13.171 13.8897 13.25 13.6989 13.25 13.5V12.75C13.25 12.5511 13.171 12.3603 13.0303 12.2197C12.8897 12.079 12.6989 12 12.5 12ZM14 9.5H13.25V2.5C13.25 2.30109 13.171 2.11032 13.0303 1.96967C12.8897 1.82902 12.6989 1.75 12.5 1.75C12.3011 1.75 12.1103 1.82902 11.9697 1.96967C11.829 2.11032 11.75 2.30109 11.75 2.5V9.5H11C10.8011 9.5 10.6103 9.57902 10.4697 9.71967C10.329 9.86032 10.25 10.0511 10.25 10.25C10.25 10.4489 10.329 10.6397 10.4697 10.7803C10.6103 10.921 10.8011 11 11 11H14C14.1989 11 14.3897 10.921 14.5303 10.7803C14.671 10.6397 14.75 10.4489 14.75 10.25C14.75 10.0511 14.671 9.86032 14.5303 9.71967C14.3897 9.57902 14.1989 9.5 14 9.5ZM3.5 10C3.30109 10 3.11032 10.079 2.96967 10.2197C2.82902 10.3603 2.75 10.5511 2.75 10.75V13.5C2.75 13.6989 2.82902 13.8897 2.96967 14.0303C3.11032 14.171 3.30109 14.25 3.5 14.25C3.69891 14.25 3.88968 14.171 4.03033 14.0303C4.17098 13.8897 4.25 13.6989 4.25 13.5V10.75C4.25 10.5511 4.17098 10.3603 4.03033 10.2197C3.88968 10.079 3.69891 10 3.5 10ZM5 7.5H4.25V2.5C4.25 2.30109 4.17098 2.11032 4.03033 1.96967C3.88968 1.82902 3.69891 1.75 3.5 1.75C3.30109 1.75 3.11032 1.82902 2.96967 1.96967C2.82902 2.11032 2.75 2.30109 2.75 2.5V7.5H2C1.80109 7.5 1.61032 7.57902 1.46967 7.71967C1.32902 7.86032 1.25 8.05109 1.25 8.25C1.25 8.44891 1.32902 8.63968 1.46967 8.78033C1.61032 8.92098 1.80109 9 2 9H5C5.19891 9 5.38968 8.92098 5.53033 8.78033C5.67098 8.63968 5.75 8.44891 5.75 8.25C5.75 8.05109 5.67098 7.86032 5.53033 7.71967C5.38968 7.57902 5.19891 7.5 5 7.5ZM9.5 4.5H8.75V2.5C8.75 2.30109 8.67098 2.11032 8.53033 1.96967C8.38968 1.82902 8.19891 1.75 8 1.75C7.80109 1.75 7.61032 1.82902 7.46967 1.96967C7.32902 2.11032 7.25 2.30109 7.25 2.5V4.5H6.5C6.30109 4.5 6.11032 4.57902 5.96967 4.71967C5.82902 4.86032 5.75 5.05109 5.75 5.25C5.75 5.44891 5.82902 5.63968 5.96967 5.78033C6.11032 5.92098 6.30109 6 6.5 6H9.5C9.69891 6 9.88968 5.92098 10.0303 5.78033C10.171 5.63968 10.25 5.44891 10.25 5.25C10.25 5.05109 10.171 4.86032 10.0303 4.71967C9.88968 4.57902 9.69891 4.5 9.5 4.5Z" fill="black"/></svg>
                    </div>
                </div>
                <div class="flex flex-wrap justify-between w-full gap-y-8 max-w-239 pb-6 border-b border-black/10">
                    <div class="flex flex-col w-full max-w-[45%] lg:max-w-[30%] gap-[8px]">
                            <div class="bg-[#F0EEED] p-4 rounded-[20px] aspect-square flex justify-center items-center overflow-hidden">
                                <img class="w-full h-full object-contain" src="{{ asset('images/gradient-shirt.png') }}" alt="Logo">
                            </div>
                        <label class="font-satoshi font-bold text-[16px] lg:text-[20px]">Gradient Graphic T-shirt</label>
                        <div class="flex gap-[5px]">
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="9" height="17" viewBox="0 0 9 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.35842 16.7243L8.79246 13.701V0L6.17325 5.63991L0 6.38809L4.55449 10.6219L3.35842 16.7243Z"
                                    fill="#FFC633" />
                            </svg>
                            <label class="font-satoshi text-[14px]">3.5/<span class="opacity-60">5</span></label>
                        </div>
                        <div class="flex items-center gap-[8px]">
                            <label class="font-satoshi font-bold text-[20px] lg:text-[24px]">145$</label>
                        </div>
                    </div>
                    <div class="flex flex-col w-full max-w-[45%] lg:max-w-[30%] gap-[8px]">
                        <div class="bg-[#F0EEED] p-4 rounded-[20px] aspect-square flex justify-center items-center overflow-hidden">
                                <img class="w-full h-full object-contain" src="{{ asset('images/polo.png') }}" alt="Logo">
                            </div>
                        <label class="font-satoshi font-bold text-[16px] lg:text-[20px]">Polo with Tipping Details</label>
                        <div class="flex gap-[5px]">
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="9" height="17" viewBox="0 0 9 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.35842 16.7243L8.79246 13.701V0L6.17325 5.63991L0 6.38809L4.55449 10.6219L3.35842 16.7243Z"
                                    fill="#FFC633" />
                            </svg>
                            <label class="font-satoshi text-[14px]">4.5/<span class="opacity-60">5</span></label>
                        </div>
                        <div class="flex items-center gap-[8px]">
                            <label class="font-satoshi font-bold text-[20px] lg:text-[24px]">180$</label>
                        </div>
                    </div>
                    <div class="flex flex-col w-full max-w-[45%] lg:max-w-[30%] gap-[8px]">
                        <div class="bg-[#F0EEED] p-4 rounded-[20px] aspect-square flex justify-center items-center overflow-hidden">
                                <img class="w-full h-full object-contain" src="{{ asset('images/black-striped-shirt.png') }}" alt="Logo">
                            </div>
                        <label class="font-satoshi font-bold text-[16px] lg:text-[20px]">Black Striped T-shirt</label>
                        <div class="flex gap-[5px]">
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <label class="font-satoshi text-[14px]">5/<span class="opacity-60">5</span></label>
                        </div>
                        <div class="flex items-center gap-[8px]">
                            <label class="font-satoshi font-bold text-[20px] lg:text-[24px]">210$</label>
                            <label class="font-satoshi font-bold text-[20px] lg:text-[24px] opacity-40 line-through">252$</label>
                            <label
                                class="flex items-center justify-center font-satoshi font-medium text-[12px] text-[#FF3333] bg-[#FFEBEB] rounded-[62px] w-[58px] h-[28px]">-20%</label>
                        </div>
                    </div>
                    <div class="flex flex-col w-full max-w-[45%] lg:max-w-[30%] gap-[8px]">
                        <div class="bg-[#F0EEED] p-4 rounded-[20px] aspect-square flex justify-center items-center overflow-hidden">
                                <img class="w-full h-full object-contain" src="{{ asset('images/jeans.png') }}" alt="Logo">
                            </div>
                        <label class="font-satoshi font-bold text-[16px] lg:text-[20px]">Skinny fit jeans</label>
                        <div class="flex gap-[5px]">

                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="9" height="17" viewBox="0 0 9 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.35842 16.7243L8.79246 13.701V0L6.17325 5.63991L0 6.38809L4.55449 10.6219L3.35842 16.7243Z"
                                    fill="#FFC633" />
                            </svg>
                            <label class="font-satoshi text-[14px]">3.5/<span class="opacity-60">5</span></label>
                        </div>
                        <div class="flex items-center gap-[8px]">
                            <label class="font-satoshi font-bold text-[20px] lg:text-[24px]">240$</label>
                            <label class="font-satoshi font-bold text-[20px] lg:text-[24px] opacity-40 line-through">260$</label>
                            <label
                                class="flex items-center justify-center font-satoshi font-medium text-[12px] text-[#FF3333] bg-[#FFEBEB] rounded-[62px] w-[58px] h-[28px]">-20%</label>
                        </div>
                    </div>
                    <div class="flex flex-col w-full max-w-[45%] lg:max-w-[30%] gap-[8px]">
                        <div class="bg-[#F0EEED] p-4 rounded-[20px] aspect-square flex justify-center items-center overflow-hidden">
                                <img class="w-full h-full object-contain" src="{{ asset('images/CHECKERED-SHIRT.png') }}" alt="Logo">
                            </div>
                        <label class="font-satoshi font-bold text-[16px] lg:text-[20px]">Checkered Shirt</label>
                        <div class="flex gap-[5px]">
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="9" height="17" viewBox="0 0 9 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.35842 16.7243L8.79246 13.701V0L6.17325 5.63991L0 6.38809L4.55449 10.6219L3.35842 16.7243Z"
                                    fill="#FFC633" />
                            </svg>
                            <label class="font-satoshi text-[14px]">4.5/<span class="opacity-60">5</span></label>
                        </div>
                        <div class="flex items-center gap-[8px]">
                            <label class="font-satoshi font-bold text-[20px] lg:text-[24px]">180$</label>
                        </div>
                    </div>
                    <div class="flex flex-col w-full max-w-[45%] lg:max-w-[30%] gap-[8px]">
                        <div class="bg-[#F0EEED] p-4 rounded-[20px] aspect-square flex justify-center items-center overflow-hidden">
                                <img class="w-full h-full object-contain" src="{{ asset('images/striped-shirt.png') }}" alt="Logo">
                            </div>
                        <label class="font-satoshi font-bold text-[16px] lg:text-[20px]">Sleeve Striped T-shirt</label>
                        <div class="flex gap-[5px]">
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="9" height="17" viewBox="0 0 9 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.35842 16.7243L8.79246 13.701V0L6.17325 5.63991L0 6.38809L4.55449 10.6219L3.35842 16.7243Z"
                                    fill="#FFC633" />
                            </svg>
                            <label class="font-satoshi text-[14px]">4.5/<span class="opacity-60">5</span></label>
                        </div>
                        <div class="flex items-center gap-[8px]">
                            <label class="font-satoshi font-bold text-[20px] lg:text-[24px]">130$</label>
                            <label class="font-satoshi font-bold text-[20px] lg:text-[24px] opacity-40 line-through">160$</label>
                            <label
                                class="flex items-center justify-center font-satoshi font-medium text-[12px] text-[#FF3333] bg-[#FFEBEB] rounded-[62px] w-[58px] h-[28px]">-30%</label>
                        </div>
                    </div>
                    <div class="flex flex-col w-full max-w-[45%] lg:max-w-[30%] gap-[8px]">
                        <div class="bg-[#F0EEED] p-4 rounded-[20px] aspect-square flex justify-center items-center overflow-hidden">
                                <img class="w-full h-full object-contain" src="{{ asset('images/vertical-shirt.png') }}" alt="Logo">
                            </div>
                        <label class="font-satoshi font-bold text-[16px] lg:text-[20px]">Vertical Striped Shirt</label>
                        <div class="flex gap-[5px]">
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="9" height="17" viewBox="0 0 9 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.35842 16.7243L8.79246 13.701V0L6.17325 5.63991L0 6.38809L4.55449 10.6219L3.35842 16.7243Z"
                                    fill="#FFC633" />
                            </svg>
                            <label class="font-satoshi text-[14px]">4.5/<span class="opacity-60">5</span></label>
                        </div>
                        <div class="flex items-center gap-[8px]">
                            <label class="font-satoshi font-bold text-[20px] lg:text-[24px]">212$</label>
                            <label class="font-satoshi font-bold text-[20px] lg:text-[24px] opacity-40 line-through">232$</label>
                            <label
                                class="flex items-center justify-center font-satoshi font-medium text-[12px] text-[#FF3333] bg-[#FFEBEB] rounded-[62px] w-[58px] h-[28px]">-20%</label>
                        </div>
                    </div>
                    <div class="flex flex-col w-full max-w-[45%] lg:max-w-[30%] gap-[8px]">
                        <div class="bg-[#F0EEED] p-4 rounded-[20px] aspect-square flex justify-center items-center overflow-hidden">
                                <img class="w-full h-full object-contain" src="{{ asset('images/courage.png') }}" alt="Logo">
                            </div>
                        <label class="font-satoshi font-bold text-[16px] lg:text-[20px]">Courage Graphic T-shirt</label>
                        <div class="flex gap-[5px]">

                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="9" height="17" viewBox="0 0 9 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.35842 16.7243L8.79246 13.701V0L6.17325 5.63991L0 6.38809L4.55449 10.6219L3.35842 16.7243Z"
                                    fill="#FFC633" />
                            </svg>
                            <label class="font-satoshi text-[14px]">3.5/<span class="opacity-60">5</span></label>
                        </div>
                        <div class="flex items-center gap-[8px]">
                            <label class="font-satoshi font-bold text-[20px] lg:text-[24px]">145$</label>
                        </div>
                    </div>
                    <div class="flex flex-col w-full max-w-[45%] lg:max-w-[30%] gap-[8px]">
                        <div class="bg-[#F0EEED] p-4 rounded-[20px] aspect-square flex justify-center items-center overflow-hidden">
                                <img class="w-full h-full object-contain" src="{{ asset('images/loose.png') }}" alt="Logo">
                            </div>
                        <label class="font-satoshi font-bold text-[16px] lg:text-[20px]">Loose Fit Bermuda Shorts</label>
                        <div class="flex gap-[5px]">
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.79246 0L11.4117 5.63991L17.5849 6.38809L13.0304 10.6219L14.2265 16.7243L8.79246 13.701L3.35842 16.7243L4.5545 10.6219L2.86102e-06 6.38809L6.17325 5.63991L8.79246 0Z"
                                    fill="#FFC633" />
                            </svg>
                            <svg width="9" height="17" viewBox="0 0 9 17" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M3.35842 16.7243L8.79246 13.701V0L6.17325 5.63991L0 6.38809L4.55449 10.6219L3.35842 16.7243Z"
                                    fill="#FFC633" />
                            </svg>
                            <label class="font-satoshi text-[14px]">4.5/<span class="opacity-60">5</span></label>
                        </div>
                        <div class="flex items-center gap-[8px]">
                            <label class="font-satoshi font-bold text-[20px] lg:text-[24px]">80$</label>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between">
                    <button class="flex items-center justify-center gap-2 px-3.5 py-2 rounded-[8px] border border-black/10">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15.8332 9.99996H4.1665M9.99984 4.16663L4.1665 9.99996L9.99984 15.8333" stroke="black" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        <span class="font-satoshim text-[14px] leading-[20px]">Previous</span>
                    </button>
                    <div class="flex flex-wrap gap-3">
                            <button
                                class="font-satoshi text-[16px] text-black/60 bg-[#F0F0F0] w-[36px] lg:w-10 aspect-square rounded-[8px] cursor-pointer hover:bg-[#EAEAEA] overflow-hidden">1</button>
                            <button
                                class="font-satoshi text-[16px] text-black/60 w-[36px] lg:w-10 aspect-square rounded-[8px] cursor-pointer hover:bg-[#EAEAEA] overflow-hidden">2</button>
                            <button
                                class="font-satoshi text-[16px] text-black/60 w-[36px] lg:w-10 aspect-square rounded-[8px] cursor-pointer hover:bg-[#EAEAEA] overflow-hidden hidden lg:inline-block">3</button>
                            <span
                                class="flex items-center justify-center font-satoshi text-[16px] text-black/60 w-[36px] lg:w-10 aspect-square rounded-[8px] ">...</span>
                            <button
                                class="font-satoshi text-[16px] text-black/60 w-[36px] lg:w-10 aspect-square rounded-[8px] cursor-pointer hover:bg-[#EAEAEA] overflow-hidden hidden lg:inline-block">8</button>
                            <button
                                class="font-satoshi text-[16px] text-black/60 w-[36px] lg:w-10 aspect-square rounded-[8px] cursor-pointer hover:bg-[#EAEAEA] overflow-hidden">9</button>
                                <button
                                class="font-satoshi text-[16px] text-black/60 w-[36px] lg:w-10 aspect-square rounded-[8px] cursor-pointer hover:bg-[#EAEAEA] overflow-hidden">10</button>
                    </div>
                    <button class="flex items-center justify-center gap-2 px-3.5 py-2 rounded-[8px] border border-black/10">
                        <span class="font-satoshim text-[14px] leading-[20px]">Next</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.1665 9.99996H15.8332M9.99984 15.8333L15.8332 9.99996L9.99984 4.16663" stroke="black" stroke-width="1.67" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </button>
                </div>
            <div>
        </div>
    </div>
@endsection
