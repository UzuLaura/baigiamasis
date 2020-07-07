@extends('main')

@section('content')
    <div class="wrapper">
        {{--Feedback Table START--}}
        <vue-feedback-table></vue-feedback-table>
        {{--Feedback Table END--}}

        @auth()
            {{--Feedback Form START--}}
            <vue-feedback-form></vue-feedback-form>
            {{--Feedback Form END--}}
        @endauth
    </div>
@endsection