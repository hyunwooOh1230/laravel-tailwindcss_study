@extends('layouts.main')
@extends('layouts.sliderbox')


@section('content')
<br>
<div class="sliderAx h-auto">
      <div id="slider-1" class="container mx-auto">
        <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill" style="background-image: url(/img/sliderbox1.jpg)">
          <div class="md:w-1/2">
          <p class="text-3xl font-bold">KD-hairshop</p>
          <p class="text-2xl mb-10 leading-none">あなたに合う最高のスタイルを...</p>
          <a href="/introduction" class="bg-gray-700 py-4 px-8 text-white font-bold uppercase text-xl rounded hover:bg-gray-200 hover:text-gray-700">詳しく</a>
          </div>  
        </div> <!-- container -->
      </div>

      <div id="slider-2" class="container mx-auto">
        <div class="bg-cover bg-top  h-auto text-white py-24 px-10 object-fill" style="background-image: url(/img/sliderbox2.jpg)">
        <p class="text-3xl font-bold">KD-hairshop</p>
        <p class="text-2xl mb-10 leading-none">あなたに合う最高のスタイルを...</p>
        <a href="/introduction" class="bg-gray-700 py-4 px-8 text-white font-bold uppercase text-xl rounded hover:bg-gray-200 hover:text-gray-700">詳しく</a> 
        </div> <!-- container -->
      </div>      
</div>
<!--appointment box-->
<div class="container mx-auto">
  <div class="grid grid-cols-3">
  <a href="/appoint" class=""><div class="bg-gray-800 text-center text-2xl hover:bg-gray-200 hover:text-black font-bold">予約</div></a>
    <a href="/mypage"><div class="bg-gray-700 text-center text-2xl font-bold hover:bg-gray-200 hover:text-black font-bold">予約管理</div></a>
    <a href="/price"><div class="bg-gray-800 text-center text-2xl font-bold hover:bg-gray-200 hover:text-black font-bold">値段</div></a>
  </div>
</div>
<div class="container mx-auto">
    <p class="text-xl bg-gray-500 pl-10 font-bold pt-5">  
        <img src ="/img/leaf_crown.png" class="w-10 h-10 inline-block"> ヘアスタイルランキング
    </p>
  <div class="grid grid-cols-3 bg-gray-500">
    <div class="max-w-xs rounded overflow-hidden shadow-lg my-2 mx-auto">
    <img class="w-full object-cover h-48 overflow-hidden" src="/img/cut1.jpg" >
    <div class="px-6 py-4 bg-gray-600">
      <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
      <p class="text-grey-darker text-base">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
      </p>
    </div>
    <div class="px-6 py-4 bg-gray-600">
      <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#KD-hair</span>
      <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#two-block</span>
      <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#man's hairstyle</span>
    </div>
  </div>
  <div class="max-w-xs rounded overflow-hidden shadow-lg my-2 mx-auto">
    <img class="w-full object-cover h-48 overflow-hidden"src="/img/cut2.jpg">
    <div class="px-6 py-4 bg-gray-600">
      <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
      <p class="text-grey-darker text-base">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
      </p>
    </div>
    <div class="px-6 py-4 bg-gray-600">
      <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#KD-hair</span>
      <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#longhair</span>
      <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#woman's hairstyle</span>
    </div>
  </div>
  <div class="max-w-xs rounded overflow-hidden shadow-lg my-2 mx-auto">
    <img class="w-full object-cover h-48 overflow-hidden" src="/img/cut3.jpg">
    <div class="px-6 py-4 bg-gray-600">
      <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
      <p class="text-grey-darker text-base">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
      </p>
    </div>
    <div class="px-6 py-4 bg-gray-600">
      <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#KD-hair</span>
      <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker mr-2">#shorthair</span>
      <span class="inline-block bg-grey-lighter rounded-full px-3 py-1 text-sm font-semibold text-grey-darker">#woman's hairstyle</span>
    </div>
  </div>

  </div>
</div>

<div class="container mx-auto kd_bg">
<br>
  <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl ">
    <div class="md:flex fles-row">
      <div class="md:flex-shrink-0">
        <img class="h-48 w-full object-cover md:w-48" src="/img/magazine1.png">
      </div>
      <div class="p-8">
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Case study</div>
        <a href="naver.com" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Finding customers for your new business</a>
        <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.</p>
      </div>
    </div>
  </div>

  <br>
  <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
    <div class="md:flex">
      <div class="md:flex-shrink-0">
        <img class="h-48 w-full object-cover md:w-48" src="/img/magazine2.png">
      </div>
      <div class="p-8">
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Case study</div>
        <a href="naver.com" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Finding customers for your new business</a>
        <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.</p>
      </div>
    </div>
  </div>

  <br>
  <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
    <div class="md:flex">
      <div class="md:flex-shrink-0">
        <img class="h-48 w-full object-cover md:w-48" src="/img/magazine3.png">
      </div>
      <div class="p-8">
        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Case study</div>
        <a href="naver.com" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Finding customers for your new business</a>
        <p class="mt-2 text-gray-500">Getting a new business off the ground is a lot of hard work. Here are five ideas you can use to find your first customers.</p>
      </div>
    </div>
  </div>
  <br>
</div>
<div class="py-16">
  <div class="container m-auto px-6">

   <div class="lg:flex justify-between items-center">
       <div class="lg:w-6/12 lg:p-0 p-7">
          <h1 class="text-4xl font-bold leading-tight mb-5 capitalize">  KD-hair. </h1>
          <p class="text-2xl font-semibold">  00-0000-0000 </p>
          <p class="text-xl font-semibold">  kd-hair@gmail.com</p>
          <p class="text-xl font-semibold">  神田駅3丁目１２−2</p>
          <p class="text-xl font-semibold">  休日：第三水曜日休みます。</p>
          <div class="py-5">
               <p href="#" class="text-white rounded-full py-2 px-5 text-lg font-semibold bg-purple-600 inline-block border border-purple-600 mr-3">Open : 09:00</p>
               <p href="#" class="text-black rounded-full py-2 px-5 text-lg font-semibold bg-gray-400 inline-block border">Close : 22:00</p>
          </div>

        </div>
        <div class="lg:w-5/12 order-2">
          <img src="/img/kd-hair.png"
          style="transform: scale(1) perspective(1040px) rotateY(-11deg) rotateX(2deg) rotate(2deg);" alt="" class="rounded">
        </div>
    </div>

  </div>
</div>

@endsection