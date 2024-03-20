@extends('layouts.main')
@section('title', 'Toko')
@section('content')
    <div>
        <div class="card w-50 position-relative">
            <div class="card-header">
                {{ $data_toko['nama'] }}
            </div>
            <div class="card-body">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $data_toko['img'] }}" class="img-fluid rounded" alt="...">
                    </div>
                    <div class="card-text col-md-8 p-2">
                        <h5 class="card-title">{{ $data_toko['nama'] }}</h5>
                        <p class="card-text">{{ $data_toko['desc'] }}</p>
                        @foreach ($data_toko['keunikan'] as $dk)
                            <p class="card-text">- {{ $dk }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            <a href="{{ route('listToko') }}" class="btn btn-primary position-absolute bottom-0 end-0 m-3">Go back</a>
        </div>

    </div>
@endsection
