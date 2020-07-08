@extends('main')

@section('content')
    <vue-hero></vue-hero>
    <div class="wrapper services">
        @foreach($services as $service)
            <vue-service-card :service="{{ json_encode($service) }}"></vue-service-card>
        @endforeach
    </div>
    <vue-map></vue-map>
@endsection