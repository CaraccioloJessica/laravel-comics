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
          <h7>ADVERTISEMENT</h7>
          <img src="{{ Vite::asset('resources/img/adv.jpg')}}">
        </div>
      </div>
    </section>
  </main>
@endsection