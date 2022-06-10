@extends('layouts.app')

@section('content')
<section class="single_comic">
    <div class="blue_line"></div>
    <div class="container sm_ py-5">
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
        <div class="row g-0">
            <div class="col-8">
                <div class="text_comic">
                    <h2 class="text-uppercase mb-3 mt-4">{{$comic['title']}}</h2>
                    <div class="row g-0">
                        <div class="col-9">
                            <div class="price">
                                <p><span>U.S. Price: </span>{{$comic['price']}}</p>
                                <p><span>AVAILABLE</span></p>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="check">
                                <p>Check Availability <i class="fa-solid fa-caret-down"></i></p>
                            </div>
                        </div>
                    </div>
                    <p class="mt-3">{{$comic['description']}}</p>
                </div>
            </div>
            <div class="col-4">
                <div class="advertisement text-end">
                    <small>ADVERTISEMENT</small>
                    <img src="{{asset('../img/adv.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="details_comic py-4">
    <div class="container sm_">
        <div class="row">
            <div class="col-6">
                <div class="talent mb-5 pb-5">
                    <h4>Talent</h4>
                    <div class="detail">
                        <div class="row">
                            <div class="col-4">
                                <p>Art By:</p>
                            </div>
                            <div class="col-8">
                            <p>
                                @forelse($comic['artists'] as $artist)
                                <span>{{$artist}}</span>,
                                @empty
                                No Results
                                @endforelse
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="row">
                            <div class="col-4">
                                <p>Written By:</p>
                            </div>
                            <div class="col-8">
                            <p>
                                @forelse($comic['writers'] as $writer)
                                <span>{{$writer}}</span>,
                                @empty
                                No Results
                                @endforelse
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="specs">
                    <h4>Specs</h4>
                    <div class="detail">
                        <div class="row">
                            <div class="col-4">
                                <p>Series:</p>
                            </div>
                            <div class="col-8">
                            <p>
                                <span class="text-uppercase">{{$comic['series']}}</span>
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="row">
                            <div class="col-4">
                                <p>U.S. Price:</p>
                            </div>
                            <div class="col-8">
                            <p>{{$comic['price']}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="row">
                            <div class="col-4">
                                <p>On Sale Date:</p>
                            </div>
                            <div class="col-8">
                            <p>
                                {{date_format(date_create_from_format("Y-m-d",$comic['sale_date']),"M d Y")}}
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
