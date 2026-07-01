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
<div class="ml-20 flex gap-4">
     <div>
          <div class="bg-[#F0EEED] w-38 h-41 rounded-[20px] border black mb-8 flex justify-center items-center">
               <img class="bg-[#F0EEED] w-34 " src="{{ asset('images/life-shirt.png') }}" alt="Logo">
          </div>
          <div class="bg-[#F0EEED] w-38 h-41 rounded-[20px] mb-8 flex justify-center items-center">
               <img class="bg-[#F0EEED] w-34 " src="{{ asset('images/dead-shirt.png') }}" alt="Logo">
          </div>
          <div class="bg-[#F0EEED] w-38 h-41 rounded-[20px] mb-8 flex justify-center items-center overflow-hidden">
               <img class="bg-[#F0EEED] w-44 max-w-none translate-x-2" src="{{ asset('images/life-guy.png') }}" alt="Logo">
          </div>
     </div>
     <div class="bg-[#F0EEED] w-111 h-140 rounded-[20px] mb-8 flex justify-center items-center">
               <img class="bg-[#F0EEED] w-100 " src="{{ asset('images/life-shirt.png') }}" alt="Logo">
     </div>
     <div class="flex flex-col gap-4 ml-4">
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
          <div class="flex gap-3 border-b border-black/10 pb-4">
               <button class="font-satoshi text-[16px] text-black/60 bg-[#F0F0F0] p-3 pl-7 pr-7 rounded-[62px]">Small</button>
               <button class="font-satoshi text-[16px] text-black/60 bg-[#F0F0F0] p-3 pl-7 pr-7 rounded-[62px]">Medium</button>
               <button class="font-satoshi text-[16px] text-white bg-black p-3 pl-7 pr-7 rounded-[62px]">Large</button>
               <button class="font-satoshi text-[16px] text-black/60 bg-[#F0F0F0] p-3 pl-7 pr-7 rounded-[62px]">X-Large</button>
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
</div>
@endsection