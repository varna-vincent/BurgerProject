@extends('layouts.master_light')

@section('content')
<div class="video-container">
    <div class="filter"></div>
    <video autoplay loop class="background">
        <source src="/images/eggshop/eggshop.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
        <source src="/images/eggshop/eggshop.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
    </video>
    <!-- <div class="poster hidden">
        <img src="/images/eggshop/eggshop.jpg" alt="">
    </div> -->
</div>
@endsection