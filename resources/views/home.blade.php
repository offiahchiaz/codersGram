@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/svg/freecodecamp.svg" style="height:100px;" alt="">
        </div>

        <div class="col-9 pt-5">
            <div>
                <h1>freecodecamp</h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>212</strong> following</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>153</strong> posts</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>
                We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.
            </div>
            <div><a href="#">www.freecodecamp.org</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4"><img src="/images/pic1.jpg" class="w-100" alt=""></div>
        <div class="col-4"><img src="/images/pic3.jpg" class="w-100" alt=""></div>
        <div class="col-4"><img src="/images/pic2.jpg" class="w-100" alt=""></div>
    </div>
</div>
@endsection
