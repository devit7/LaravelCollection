@extends('layouts.main')
@section('title', 'List Toko')
@section('content')
    <div class="container ">
        <div class="row row-cols-1 row-cols-md-3 g-4  column-gap-3 ">
            @foreach ($data_toko as $item)
                <div class="card p-2" style="width: 18rem;">
                    <img src="{{ $item['img'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item['nama'] }}</h5>
                        <p class="card-text">{{ $item['desc'] }}</p>
                        <a class="btn btn-primary " href="{{ route('cariToko', ['id' => $item['id']]) }}">Check Ayang</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
