@extends('main')

@section('title', ' | ' . __('titles.feedback'))

@section('content')
    <div class="wrapper">
        <vue-feedback :feedbacks="{{ json_encode($feedbacks) }}" :user="{{ json_encode(auth()->user()) }}"></vue-feedback>
    </div>
@endsection