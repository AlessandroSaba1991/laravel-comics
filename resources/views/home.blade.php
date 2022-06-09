@extends('layouts.app')

@section('content')
<div class="hero_image"></div>
<section class="comics">
    <div class="container py-5">
        <div class="title">
            <h2>current series</h2>
        </div>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-6">
            @forelse($comics as $comic)
            <div class="col">
                <div class="comic">
                    <div class="img">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}" />
                    </div>
                    <div class="text">
                        <small>{{$comic['series']}}</small>
                    </div>
                </div>
            </div>
            @empty
            <p>Nothing to show</p>
            @endforelse
        </div>
        <div class="load_more">
            <a href="#" class="btn-primary">load more</a>
        </div>
    </div>
</section>
<section class="merchandises">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="merchandise">
                    <div class="img">
                        <img src="{{asset('../img/buy-comics-digital-comics.png')}}" alt="digital comics" />
                    </div>
                    <div class="text">digital comics</div>
                </div>
            </div>
            <div class="col">
                <div class="merchandise">
                    <div class="img">
                        <img src="{{asset('../img/buy-comics-merchandise.png')}}" alt="digital comics" />
                    </div>
                    <div class="text">digital comics</div>
                </div>
            </div>
            <div class="col">
                <div class="merchandise">
                    <div class="img">
                        <img src="{{asset('../img/buy-comics-subscriptions.png')}}" alt="digital comics" />
                    </div>
                    <div class="text">digital comics</div>
                </div>
            </div>
            <div class="col">
                <div class="merchandise">
                    <div class="img">
                        <img src="{{asset('../img/buy-comics-shop-locator.png')}}" alt="digital comics" />
                    </div>
                    <div class="text">digital comics</div>
                </div>
            </div>
            <div class="col">
                <div class="merchandise">
                    <div class="img">
                        <img src="{{asset('../img/buy-dc-power-visa.svg')}}" alt="digital comics" />
                    </div>
                    <div class="text">digital comics</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
