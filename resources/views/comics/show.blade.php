@extends('layouts.app')

@section('content')
<section class="single_comic">
    <div class="blue_line"></div>
    <div class="container sm_ p-5">
        <div class="card_comic">
            <div class="img_comic">
                <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}" />
                <div class="text_img text-uppercase text-white">
                    <div class="top px-2">
                        comic book
                    </div>
                    <div class="bottom">
                        view gallery
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-3 row-cols-lg-6">
            <div class="col">
                <div class="comic">
                    <div class="img">

                    </div>
                    <div class="text">
                        <small>{{$comic['series']}}</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="load_more">
            <a href="#" class="btn-primary">load more</a>
        </div>
    </div>
</section>
@endsection
