@extends('layouts.app')
@section('title', 'Show')
@section('content')
<div class="border-t border-black/10 m-20 pt-4 mt-0 flex items-center gap-4 ">
     <a class="font-satoshi text-[16px] text-black opacity-60 cursor-pointer">Home</a>
     <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.28318 0.221294L6.28318 5.22129C6.3531 5.29097 6.40857 5.37377 6.44643 5.46493C6.48428 5.55609 6.50377 5.65383 6.50377 5.75254C6.50377 5.85126 6.48428 5.94899 6.44643 6.04016C6.40857 6.13132 6.3531 6.21412 6.28318 6.28379L1.28318 11.2838C1.14228 11.4247 0.951183 11.5038 0.751926 11.5038C0.552669 11.5038 0.361572 11.4247 0.220676 11.2838C0.0797797 11.1429 0.000625142 10.9518 0.000625142 10.7525C0.000625143 10.5533 0.0797797 10.3622 0.220676 10.2213L4.69005 5.75192L0.220051 1.28255C0.0791551 1.14165 1.25847e-07 0.950553 1.28223e-07 0.751295C1.30599e-07 0.552037 0.0791552 0.360941 0.220051 0.220045C0.360948 0.0791493 0.552044 -7.62281e-06 0.751301 -7.62044e-06C0.950559 -7.61806e-06 1.14166 0.0791493 1.28255 0.220045L1.28318 0.221294Z" fill="black" fill-opacity="0.6"/></svg>
     <a class="font-satoshi text-[16px] text-black opacity-60 cursor-pointer">Shope</a>
     <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.28318 0.221294L6.28318 5.22129C6.3531 5.29097 6.40857 5.37377 6.44643 5.46493C6.48428 5.55609 6.50377 5.65383 6.50377 5.75254C6.50377 5.85126 6.48428 5.94899 6.44643 6.04016C6.40857 6.13132 6.3531 6.21412 6.28318 6.28379L1.28318 11.2838C1.14228 11.4247 0.951183 11.5038 0.751926 11.5038C0.552669 11.5038 0.361572 11.4247 0.220676 11.2838C0.0797797 11.1429 0.000625142 10.9518 0.000625142 10.7525C0.000625143 10.5533 0.0797797 10.3622 0.220676 10.2213L4.69005 5.75192L0.220051 1.28255C0.0791551 1.14165 1.25847e-07 0.950553 1.28223e-07 0.751295C1.30599e-07 0.552037 0.0791552 0.360941 0.220051 0.220045C0.360948 0.0791493 0.552044 -7.62281e-06 0.751301 -7.62044e-06C0.950559 -7.61806e-06 1.14166 0.0791493 1.28255 0.220045L1.28318 0.221294Z" fill="black" fill-opacity="0.6"/></svg>
     <a class="font-satoshi text-[16px] text-black opacity-60 cursor-pointer">Men</a>
     <svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.28318 0.221294L6.28318 5.22129C6.3531 5.29097 6.40857 5.37377 6.44643 5.46493C6.48428 5.55609 6.50377 5.65383 6.50377 5.75254C6.50377 5.85126 6.48428 5.94899 6.44643 6.04016C6.40857 6.13132 6.3531 6.21412 6.28318 6.28379L1.28318 11.2838C1.14228 11.4247 0.951183 11.5038 0.751926 11.5038C0.552669 11.5038 0.361572 11.4247 0.220676 11.2838C0.0797797 11.1429 0.000625142 10.9518 0.000625142 10.7525C0.000625143 10.5533 0.0797797 10.3622 0.220676 10.2213L4.69005 5.75192L0.220051 1.28255C0.0791551 1.14165 1.25847e-07 0.950553 1.28223e-07 0.751295C1.30599e-07 0.552037 0.0791552 0.360941 0.220051 0.220045C0.360948 0.0791493 0.552044 -7.62281e-06 0.751301 -7.62044e-06C0.950559 -7.61806e-06 1.14166 0.0791493 1.28255 0.220045L1.28318 0.221294Z" fill="black" fill-opacity="0.6"/></svg>
     <a class="font-satoshi text-[16px] text-black ">T-shirts</a>
</div>
<div class="flex flex-col items-center justify-center">
          <div class="flex gap-4">
               <div id="previewCont">
                    <div class="bg-[#F0EEED] w-38 h-41 rounded-[20px] border black mb-8 flex justify-center items-center cursor-pointer" onclick="preview(0)">
                         <img class="bg-[#F0EEED] w-34 " src="{{ asset('images/life-shirt.png') }}" alt="Logo">
                    </div>
                    <div class="bg-[#F0EEED] w-38 h-41 rounded-[20px] mb-8 flex justify-center items-center cursor-pointer" onclick="preview(1)">
                         <img class="bg-[#F0EEED] w-34 " src="{{ asset('images/dead-shirt.png') }}" alt="Logo">
                    </div>
                    <div class="bg-[#F0EEED] w-38 h-41 rounded-[20px] mb-8 flex justify-center items-center overflow-hidden cursor-pointer" onclick="preview(2)">
                         <img class="bg-[#F0EEED] w-44 max-w-none translate-x-2" src="{{ asset('images/life-guy.png') }}" alt="Logo">
                    </div>
               </div>
               <div id="zoomable" class="bg-[#F0EEED] w-111 h-140 rounded-[20px] mb-8 flex justify-center items-center overflow-hidden cursor-pointer relative">
                         <img id="previewImage" class="bg-[#F0EEED] w-100 " src="{{ asset('images/life-shirt.png') }}" alt="Logo">
                         <div id="square" class="bg-[#91FFFF] h-70 w-60 absolute z-50 opacity-20 hidden"></div>
               </div>
               <div id="zoomed" class="bg-[#F0EEED] w-154 h-140 rounded-[20px] mb-8 flex justify-center items-center overflow-hidden relative hidden ">
                         <img id="zoomedImage" class="bg-[#F0EEED] w-100 scale-200 absolute" src="{{ asset('images/life-shirt.png') }}" alt="Logo">    
               </div>
               <div id="buyContent" class="flex flex-col gap-4 ml-4">
                    <h1 class="font-integral font-bold text-[40px] ">ONE LIFE GRAPHIC T-SHIRT</h1>
                    <div class="flex gap-2">
                         <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.7515 0L15.2521 7.53796L23.5029 8.53794L17.4157 14.1966L19.0143 22.3526L11.7515 18.3119L4.48868 22.3526L6.08728 14.1966L2.00272e-05 8.53794L8.25081 7.53796L11.7515 0Z" fill="#FFC633"/></svg>
                         <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.7515 0L15.2521 7.53796L23.5029 8.53794L17.4157 14.1966L19.0143 22.3526L11.7515 18.3119L4.48868 22.3526L6.08728 14.1966L2.00272e-05 8.53794L8.25081 7.53796L11.7515 0Z" fill="#FFC633"/></svg>
                         <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.7515 0L15.2521 7.53796L23.5029 8.53794L17.4157 14.1966L19.0143 22.3526L11.7515 18.3119L4.48868 22.3526L6.08728 14.1966L2.00272e-05 8.53794L8.25081 7.53796L11.7515 0Z" fill="#FFC633"/></svg>
                         <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.7515 0L15.2521 7.53796L23.5029 8.53794L17.4157 14.1966L19.0143 22.3526L11.7515 18.3119L4.48868 22.3526L6.08728 14.1966L2.00272e-05 8.53794L8.25081 7.53796L11.7515 0Z" fill="#FFC633"/></svg>
                         <svg width="12" height="23" viewBox="0 0 12 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.48866 22.3526L11.7515 18.3119V0L8.25079 7.53796L0 8.53793L6.08726 14.1966L4.48866 22.3526Z" fill="#FFC633"/></svg>
                         <label class="font-satoshi text-[16px] ml-3">4.5/<span class="opacity-60">5</span></label>
                    </div>
                    <div class="flex items-center gap-4">
                         <label class="font-satoshi font-bold text-[32px]">260$</label>
                         <label class="font-satoshi font-bold text-[32px] opacity-40 line-through">300$</label>
                         <label class="flex items-center justify-center font-satoshi font-medium text-[16px] text-[#FF3333] bg-[#FFEBEB] rounded-[62px] w-18 h-[28px] p-4">-40%</label>
                    </div>
                    <p class="font-satoshi text-[16px] text-black opacity-60 w-147 border-b border-black/10 pb-4 leading-[22px]">
                         This graphic t-shirt which is perfect for any occasion. Crafted from a soft and breathable fabric, it offers superior comfort and style.
                    </p>
                    <p class="font-satoshi text-[16px] text-black opacity-60">
                         Select Colors
                    </p>
                    <div class="flex gap-4 border-b border-black/10 pb-4">
                         <button class="bg-[#4F4631] w-10 h-10 rounded-full flex items-center justify-center cursor-pointer"> <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.5306 5.03063L6.5306 13.0306C6.46092 13.1005 6.37813 13.156 6.28696 13.1939C6.1958 13.2317 6.09806 13.2512 5.99935 13.2512C5.90064 13.2512 5.8029 13.2317 5.71173 13.1939C5.62057 13.156 5.53778 13.1005 5.4681 13.0306L1.9681 9.53063C1.89833 9.46087 1.84299 9.37804 1.80524 9.28689C1.76748 9.19574 1.74805 9.09804 1.74805 8.99938C1.74805 8.90072 1.76748 8.80302 1.80524 8.71187C1.84299 8.62072 1.89833 8.53789 1.9681 8.46813C2.03786 8.39837 2.12069 8.34302 2.21184 8.30527C2.30299 8.26751 2.40069 8.24808 2.49935 8.24808C2.59801 8.24808 2.69571 8.26751 2.78686 8.30527C2.87801 8.34302 2.96083 8.39837 3.0306 8.46813L5.99997 11.4375L13.4693 3.96938C13.6102 3.82848 13.8013 3.74933 14.0006 3.74933C14.1999 3.74933 14.391 3.82848 14.5318 3.96938C14.6727 4.11028 14.7519 4.30137 14.7519 4.50063C14.7519 4.69989 14.6727 4.89098 14.5318 5.03188L14.5306 5.03063Z" fill="white"/></svg></button>
                         <button class="bg-[#314F4A] w-10 h-10 rounded-full cursor-pointer"></button>
                         <button class="bg-[#31344F] w-10 h-10 rounded-full cursor-pointer"></button>
                    </div>
                    <p class="font-satoshi text-[16px] text-black opacity-60">
                         Chose Size
                    </p>
                    <div id="sizeBtnsCont" class="flex gap-3 border-b border-black/10 pb-4">
                         <button class="font-satoshi text-[16px] text-black/60 bg-[#F0F0F0] p-3 pl-7 pr-7 rounded-[62px] cursor-pointer hover:bg-[#EAEAEA] relative overflow-hidden">Small</button>
                         <button class="font-satoshi text-[16px] text-black/60 bg-[#F0F0F0] p-3 pl-7 pr-7 rounded-[62px] cursor-pointer hover:bg-[#EAEAEA] relative overflow-hidden">Medium</button>
                         <button class="font-satoshi text-[16px] text-black/60 bg-[#F0F0F0] p-3 pl-7 pr-7 rounded-[62px] cursor-pointer hover:bg-[#EAEAEA] relative overflow-hidden">Large</button>
                         <button class="font-satoshi text-[16px] text-black/60 bg-[#F0F0F0] p-3 pl-7 pr-7 rounded-[62px] cursor-pointer hover:bg-[#EAEAEA] relative overflow-hidden">X-Large</button>
                    </div>
                    <div class="flex gap-6">
                         <button class="bg-[#F0F0F0] flex p-5 justify-between w-43 rounded-[62px]">
                              <svg class="cursor-pointer" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.375 12C21.375 12.2984 21.2565 12.5845 21.0455 12.7955C20.8345 13.0065 20.5484 13.125 20.25 13.125H3.75C3.45163 13.125 3.16548 13.0065 2.9545 12.7955C2.74353 12.5845 2.625 12.2984 2.625 12C2.625 11.7016 2.74353 11.4155 2.9545 11.2045C3.16548 10.9935 3.45163 10.875 3.75 10.875H20.25C20.5484 10.875 20.8345 10.9935 21.0455 11.2045C21.2565 11.4155 21.375 11.7016 21.375 12Z" fill="black"/></svg>
                              <span class="font-satoshim text-[16px] text-black ">1</span>
                              <svg class="cursor-pointer" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.375 12C21.375 12.2984 21.2565 12.5845 21.0455 12.7955C20.8345 13.0065 20.5484 13.125 20.25 13.125H13.125V20.25C13.125 20.5484 13.0065 20.8345 12.7955 21.0455C12.5845 21.2565 12.2984 21.375 12 21.375C11.7016 21.375 11.4155 21.2565 11.2045 21.0455C10.9935 20.8345 10.875 20.5484 10.875 20.25V13.125H3.75C3.45163 13.125 3.16548 13.0065 2.9545 12.7955C2.74353 12.5845 2.625 12.2984 2.625 12C2.625 11.7016 2.74353 11.4155 2.9545 11.2045C3.16548 10.9935 3.45163 10.875 3.75 10.875H10.875V3.75C10.875 3.45163 10.9935 3.16548 11.2045 2.9545C11.4155 2.74353 11.7016 2.625 12 2.625C12.2984 2.625 12.5845 2.74353 12.7955 2.9545C13.0065 3.16548 13.125 3.45163 13.125 3.75V10.875H20.25C20.5484 10.875 20.8345 10.9935 21.0455 11.2045C21.2565 11.4155 21.375 11.7016 21.375 12Z" fill="black"/></svg>
                         </button>
                         <button class="bg-black p-5 w-100 rounded-[62px] font-satoshi font-medium text-[16px] text-white cursor-pointer">
                              Add to Cart
                         </button>
                    </div>
               </div>
          </div>
          <div class="flex flex-col w-320 mt-15 gap-8">
               <div id="detailBtnsCont" class="flex">
                    <button class="w-[33%] font-satoshi text-[20px] opacity-60 border-b border-black/10 leading-[22px] p-5 cursor-pointer hover:bg-gray-100 transition-colors duration-150 relative overflow-hidden">Product Details</button>
                    <button class="w-[33%] font-satoshim text-[20px] border-b leading-[22px] p-5 cursor-pointer hover:bg-gray-100 transition-colors duration-150 relative overflow-hidden">Rating & Reviews</button>
                    <button class="w-[33%] font-satoshi text-[20px] opacity-60 border-b border-black/10 leading-[22px] p-5 cursor-pointer hover:bg-gray-100 transition-colors duration-150 relative overflow-hidden">FAQs</button>
               </div>
               <div class="flex justify-between">
                    <div class="flex items-center gap-2">
                         <h3 class="font-satoshi font-bold text-[24px]">All Reviews</h3>
                         <span class="font-satoshi text-[16px] leading-[22px] opacity-60">(451)</span>
                    </div>
                    <div class="flex items-center gap-4">
                         <button class="flex items-center justify-center bg-[#F0F0F0] w-12 h-12 rounded-[62px] cursor-pointer"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.125 11.625V20.25C13.125 20.5484 13.0065 20.8345 12.7955 21.0455C12.5845 21.2565 12.2984 21.375 12 21.375C11.7016 21.375 11.4155 21.2565 11.2045 21.0455C10.9935 20.8345 10.875 20.5484 10.875 20.25V11.625C10.875 11.3266 10.9935 11.0405 11.2045 10.8295C11.4155 10.6185 11.7016 10.5 12 10.5C12.2984 10.5 12.5845 10.6185 12.7955 10.8295C13.0065 11.0405 13.125 11.3266 13.125 11.625ZM18.75 18C18.4516 18 18.1655 18.1185 17.9545 18.3295C17.7435 18.5405 17.625 18.8266 17.625 19.125V20.25C17.625 20.5484 17.7435 20.8345 17.9545 21.0455C18.1655 21.2565 18.4516 21.375 18.75 21.375C19.0484 21.375 19.3345 21.2565 19.5455 21.0455C19.7565 20.8345 19.875 20.5484 19.875 20.25V19.125C19.875 18.8266 19.7565 18.5405 19.5455 18.3295C19.3345 18.1185 19.0484 18 18.75 18ZM21 14.25H19.875V3.75C19.875 3.45163 19.7565 3.16548 19.5455 2.9545C19.3345 2.74353 19.0484 2.625 18.75 2.625C18.4516 2.625 18.1655 2.74353 17.9545 2.9545C17.7435 3.16548 17.625 3.45163 17.625 3.75V14.25H16.5C16.2016 14.25 15.9155 14.3685 15.7045 14.5795C15.4935 14.7905 15.375 15.0766 15.375 15.375C15.375 15.6734 15.4935 15.9595 15.7045 16.1705C15.9155 16.3815 16.2016 16.5 16.5 16.5H21C21.2984 16.5 21.5845 16.3815 21.7955 16.1705C22.0065 15.9595 22.125 15.6734 22.125 15.375C22.125 15.0766 22.0065 14.7905 21.7955 14.5795C21.5845 14.3685 21.2984 14.25 21 14.25ZM5.25 15C4.95163 15 4.66548 15.1185 4.4545 15.3295C4.24353 15.5405 4.125 15.8266 4.125 16.125V20.25C4.125 20.5484 4.24353 20.8345 4.4545 21.0455C4.66548 21.2565 4.95163 21.375 5.25 21.375C5.54837 21.375 5.83452 21.2565 6.0455 21.0455C6.25647 20.8345 6.375 20.5484 6.375 20.25V16.125C6.375 15.8266 6.25647 15.5405 6.0455 15.3295C5.83452 15.1185 5.54837 15 5.25 15ZM7.5 11.25H6.375V3.75C6.375 3.45163 6.25647 3.16548 6.0455 2.9545C5.83452 2.74353 5.54837 2.625 5.25 2.625C4.95163 2.625 4.66548 2.74353 4.4545 2.9545C4.24353 3.16548 4.125 3.45163 4.125 3.75V11.25H3C2.70163 11.25 2.41548 11.3685 2.2045 11.5795C1.99353 11.7905 1.875 12.0766 1.875 12.375C1.875 12.6734 1.99353 12.9595 2.2045 13.1705C2.41548 13.3815 2.70163 13.5 3 13.5H7.5C7.79837 13.5 8.08452 13.3815 8.2955 13.1705C8.50647 12.9595 8.625 12.6734 8.625 12.375C8.625 12.0766 8.50647 11.7905 8.2955 11.5795C8.08452 11.3685 7.79837 11.25 7.5 11.25ZM14.25 6.75H13.125V3.75C13.125 3.45163 13.0065 3.16548 12.7955 2.9545C12.5845 2.74353 12.2984 2.625 12 2.625C11.7016 2.625 11.4155 2.74353 11.2045 2.9545C10.9935 3.16548 10.875 3.45163 10.875 3.75V6.75H9.75C9.45163 6.75 9.16548 6.86853 8.9545 7.0795C8.74353 7.29048 8.625 7.57663 8.625 7.875C8.625 8.17337 8.74353 8.45952 8.9545 8.6705C9.16548 8.88147 9.45163 9 9.75 9H14.25C14.5484 9 14.8345 8.88147 15.0455 8.6705C15.2565 8.45952 15.375 8.17337 15.375 7.875C15.375 7.57663 15.2565 7.29048 15.0455 7.0795C14.8345 6.86853 14.5484 6.75 14.25 6.75Z" fill="black"/></svg></button>
                         <button class="flex items-center justify-around bg-[#F0F0F0] w-30 h-12 rounded-[62px] cursor-pointer">
                              <span class="font-satoshim text-[16px]">Latest</span>
                              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.5306 6.53061L8.5306 11.5306C8.46092 11.6005 8.37813 11.656 8.28696 11.6939C8.1958 11.7317 8.09806 11.7512 7.99935 11.7512C7.90064 11.7512 7.8029 11.7317 7.71173 11.6939C7.62057 11.656 7.53778 11.6005 7.4681 11.5306L2.4681 6.53061C2.3272 6.38972 2.24805 6.19862 2.24805 5.99936C2.24805 5.80011 2.3272 5.60901 2.4681 5.46811C2.60899 5.32722 2.80009 5.24806 2.99935 5.24806C3.19861 5.24806 3.3897 5.32722 3.5306 5.46811L7.99997 9.93749L12.4693 5.46749C12.6102 5.32659 12.8013 5.24744 13.0006 5.24744C13.1999 5.24744 13.391 5.32659 13.5318 5.46749C13.6727 5.60838 13.7519 5.79948 13.7519 5.99874C13.7519 6.198 13.6727 6.38909 13.5318 6.52999L13.5306 6.53061Z" fill="black"/></svg>
                         </button>
                         <button class="flex items-center justify-around bg-black w-42 h-12 rounded-[62px] cursor-pointer font-satoshi font-medium text-[16px] text-white">Write a Review</button>
                    </div>
               </div>
          </div>
     </div>
@endsection