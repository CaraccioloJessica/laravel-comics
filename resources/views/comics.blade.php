@extends('layout.main-layout')

@section('head')
  <title>Comics list - page 1</title>    
@endsection

@section('content')
<main>
  <section>

    <div class="container d-flex justify-content-center flex-wrap my_container">
      <div id="series_tag">
        <h2>CURRENT SERIES</h2>
      </div>
      
      <!-- comics card -->
      <div class="my_card">
        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX">
      <h3>ACTION COMICS</h3>
    </div>
    <div class="my_card">
      <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01">
      <h3>AMERICAN VAMPIRE 1976</h3>
    </div>
    <div class="my_card">
      <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2018/08/AQMv4_UW_153-001_HD_5b7efa1745a9b8.08589135.jpg?itok=HPTtnrsb">
      <h3>AQUAMAN</h3>
    </div>
    <div class="my_card">
      <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/06/batgirl_v5_1_5b23e1f1124941.50950783.jpg?itok=VnrJah76">
      <h3>BATGIRL</h3>
    </div>
    <div class="my_card">
      <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ">
      <h3>BATMAN</h3>
    </div>
    <div class="my_card">
      <img src="https://www.dc.com/sites/default/files/styles/comics320x485/public/comic-covers/2020/11/BMB_49_300-001_HD_5fadb6e9e9a407.96873519.jpg?itok=Nn-IMho_">
      <h3>BATMAN BEYOND</h3>
    </div>
    <div class="my_card">
      <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2019/08/BMSM_5d4361b7116261.74371456.jpg?itok=kEDR2OL8">
      <h3>BATMAN/SUPERMAN</h3>
    </div>
    <div class="my_card">
      <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=azz5sfGk">
      <h3>BATMAN/SUPERMAN ANNUAL</h3>
    </div>
    <div class="my_card">
      <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMTJWZ_01_300-001_HD_5f5ff2307dcb37.34652945.jpg?itok=VswVjLR8">
      <h3>BATMAN: THE JOKER WAR ZONE</h3>
    </div>
    <div class="my_card">
      <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/08/cover-v2_5f40314645a734.37285065.png?itok=ImNM2QBY">
      <h3>BATMAN: THREE JOKERS</h3>
    </div>
    <div class="my_card">
      <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=sVwALbUX">
      <h3>BATMAN: WHITE KNIGHT PRESENTS: HARLEY QUINN</h3>
    </div>
    <div class="my_card">
      <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2019/04/CTWv1_CC_144-001_HD_5ca5299a751963.53054221.jpg?itok=ooPaoLDq">
      <h3>CATWOMAN</h3>
    </div>
  </div>
  
  <div id="btn">
    <a href="#">
      LOAD MORE
    </a>
  </div>
</section>

{{-- blue bar --}}
<div class="blue_bar">
  <div class="container blue_container">
    <div class="buy_info">
      <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png')}}">
      <a href="#">
        DIGITAL COMICS
      </a>
    </div>
    <div class="buy_info">
      <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png')}}">
      <a href="#">
        DC MERCHANDISE
      </a>
    </div>
    <div class="buy_info">
      <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png')}}">
      <a href="#">
        SUBCRIPTION
      </a>
    </div>
    <div class="buy_info">
      <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png')}}">
      <a href="#">
        COMIC SHOP LOCATOR
      </a>
    </div>
    <div class="buy_info">
      <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg')}}">
      <a href="#">
        DC POWER VISA
      </a>
    </div>
  </div>
</div>
</main>
@endsection