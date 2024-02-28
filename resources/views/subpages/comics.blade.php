@extends('layouts.app')
@section('page-title', 'Comics')
@section('main-content')

<section class="jumbotron">
    <img src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="Teen Titans">
</section>

<section id="comics-series">
    <div class="container pt-5 pb-5">
        <div id="special-series">
            <h5>
                CURRENT SERIES
            </h5>
        </div>

        <div class="row">
            @foreach($data as $key=> $elem)
            <div class="col-6 col-md-4 col-lg-2">
                <div class="my-card mx-4">
                    <div class="container-img-comics">
                        <img src="{{$elem['thumb']}}" class="card-img-top" alt="{{$elem['title']}}">
                    </div>
                    <div class="card-bottom">
                      <h6 class="card-title">{{$elem['title']}}</h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center">
            <button type="button" class="btn btn-primary">LOAD MORE</button>
        </div>
    </div>
</section>

<section id="links-comics" class="p-5">
    <div class="container d-flex justify-content-around align-items-center ">
        @foreach($linkscomics as $elem)
        <div class="img-container">
            <img src="{{Vite::asset($elem['img'])}}" class="card-img-top" alt="{{$elem['name']}}">
        </div>
        {{$elem['name']}}
        @endforeach
    </div>
</section>
@endsection