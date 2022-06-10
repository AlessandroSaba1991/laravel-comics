@extends('layouts.app')

@section('content')
<section class="comics">
    <div class="container py-5">
        <div class="title">
            <h2>current series</h2>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-3 row-cols-lg-6">
            @forelse($comics as $index => $comic)
            <a href="{{route('comics.show',$index)}}">
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
            </a>
            @endforelse
        </div>
        <div class="load_more">
            <a href="#" class="btn-primary">load more</a>
        </div>
    </div>
</section>
@include('partials.merchandise')
@endsection
