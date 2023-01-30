@extends('layout.main-layout')

@section('head')
  <title>Comic book - page 2</title>    
@endsection

@section('content')
  <main>
    <section class="mini_blue">
      <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
    </section>

    <section>
      <div class="container d-flex justify-content-between pb-4 pt-5 my_single_wrap">
        <div class="col-7">
          <h1>
            ACTION COMICS #1000: THE DELUXE EDITION
          </h1>

          <div class="green_bar my-3 d-flex align-items-center">
            <div class="col-8 p-2 d-flex justify-content-between">
              <span>
                U.S. Price: &dollar;19.99
              </span>
              <span>
                AVAILABLE
              </span>
            </div>
            <div class="col-4 p-2 text-center">
              Check Availability
            </div>
          </div>

          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error mollitia quis omnis pariatur cupiditate. Placeat corporis animi minus ad error accusamus vel at modi aliquam vero velit, quis reiciendis. Placeat corporis animi minus ad error accusamus vel at modi aliquam vero velit, quis reiciendis.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error mollitia quis omnis pariatur cupiditate. Placeat corporis animi minus ad error accusamus vel at modi aliquam vero velit, quis reiciendis. Placeat corporis animi minus ad error accusamus vel at modi aliquam vero velit, quis reiciendis.
          </p>
        </div>

        <div class="col-4">
          <h6>ADVERTISEMENT</h6>
          <div>
            <img src="{{Vite::asset('resources/img/adv.jpg')}}">
          </div>
        </div>
      </div>
    </section>

    <section class="my_gray_bg">
      <div class="container d-flex justify-content-between pb-4 pt-5">
        <div class="col-5">
          <h4 class="m-0">Titolo</h4>
          <div class="d-flex">
            <span class="col-4">
              Art by:
            </span>
            <span class="col-8">           
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit tenetur officia itaque molestiae nobis.
          </div>
          <div class="d-flex">
            <span class="col-4">
              Art by:
            </span>
            <span class="col-8">           
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis a expedita distinctio tempore officiis veritatis.
            </span>
          </div>
        </div>

        <div class="col-5">
          <h4 class="m-0">Titolo</h4>
          <div class="d-flex">
            <span class="col-4">
              Series:
            </span>
            <span class="col-8">           
              Lorem ipsum
            </span>
          </div>
          <div class="d-flex">
            <span class="col-4">
              Series:
            </span>
            <span class="col-8">           
              Lorem ipsum sit
            </span>
          </div>
          <div class="d-flex">
            <span class="col-4">
              Series:
            </span>
            <span class="col-8">           
              Lorem ipsum ipsum
            </span>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="grey_bar">
        <div class="container grey_container">
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
    </section>
  </main>
@endsection