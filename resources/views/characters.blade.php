@extends('layouts.app')

@section('content')
<section class="characters">
    <div class="container py-5">
        <div class="title">
            <h2>characters</h2>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-lg-2">
            @forelse($characters as $character)
            <div class="col">
                <div class="character card h-100">
                    <div class="row g-0 h-100">
                        <div class="col-md-4">
                            <img src="{{$character['image']}}" class="img-fluid rounded-start h-100" alt="{{$character['name']}}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$character['name']}}</h5>
                                <p class="card-text">{{$character['description']}}</p>
                            </div>
                        </div>
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
@include('partials.merchandise')
@endsection
