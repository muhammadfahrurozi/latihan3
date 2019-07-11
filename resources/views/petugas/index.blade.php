@extends('master.app')

@section('title')
    template Laravel
@endsection

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://get.pxhere.com/photo/laptop-iphone-desk-notebook-computer-smartphone-writing-work-apple-working-table-coffee-wood-technology-pen-notepad-office-business-espresso-apple-inc-workstation-blogging-home-office-macbook-air-author-multimedia-blog-portable-device-personal-computer-office-job-electronic-device-computer-hardware-personal-computer-hardware-1338928.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ytimg.com/vi/oNq3NrYkoMw/maxresdefault.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://c.pxhere.com/photos/c5/ad/apple_computer_devices_drink_iphone_laptop_macbook_air_mockup-955549.jpg!d" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
@endsection