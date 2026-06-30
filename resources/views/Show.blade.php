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
<div class="ml-20 flex gap-4">
     <div>
          <div class="bg-[#F0EEED] w-38 h-41 rounded-[20px] border black mb-4 flex justify-center items-center">
               <img class="bg-[#F0EEED] w-34 " src="{{ asset('images/life-shirt.png') }}" alt="Logo">
          </div>
          <div class="bg-[#F0EEED] w-38 h-41 rounded-[20px] mb-4 flex justify-center items-center">
               <img class="bg-[#F0EEED] w-34 " src="{{ asset('images/dead-shirt.png') }}" alt="Logo">
          </div>
          <div class="bg-[#F0EEED] w-38 h-41 rounded-[20px] mb-4 flex justify-center items-center overflow-hidden">
               <img class="bg-[#F0EEED] w-44 max-w-none translate-x-2" src="{{ asset('images/life-guy.png') }}" alt="Logo">
          </div>
     </div>
     <div class="bg-[#F0EEED] w-111 h-132 rounded-[20px] mb-4 flex justify-center items-center">
               <img class="bg-[#F0EEED] w-100 " src="{{ asset('images/life-shirt.png') }}" alt="Logo">
     </div>
     <div class="flex flex-col gap-4">
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
     </div>
</div>
@endsection