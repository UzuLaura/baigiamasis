@extends('main')

@section('content')
    <vue-hero></vue-hero>
    <div class="wrapper services">
        @for($x=0; $x< 3; $x++)
            <vue-service-card></vue-service-card>
        @endfor
    </div>
    <vue-map></vue-map>
@endsection