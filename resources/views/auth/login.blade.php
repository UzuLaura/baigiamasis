@extends('main')

@section('title', ' | ' . __('titles.login'))

@section('content')
    <div class="wrapper">
        <div class="auth-card">

            {{--Section Header START--}}
            <h2>{{ __('titles.login') }}</h2>
            {{--Section Header END--}}

            {{--Login Form START--}}
            <form method="POST" action="{{ route('login') }}">
                @csrf

                {{--Email Input Group START--}}
                <div class="form-group">
                    <label for="email">{{ ucfirst(__('validation.attributes.email')) }}</label>
                    <input id="email"
                           type="email"
                           name="email"
                           value="{{ old('email') }}"
                           required
                           autocomplete="email"
                           autofocus>

                    @error('email')
                    <small>{{ ucfirst($message) }}</small>
                    @enderror
                </div>
                {{--Email Input Group END--}}

                {{--Password Input Group START--}}
                <div class="form-group">
                    <label for="password">{{ ucfirst(__('validation.attributes.password')) }}</label>
                    <input id="password"
                           type="password"
                           name="password"
                           required
                           autocomplete="current-password">

                    @error('password')
                    <small>{{ ucfirst($message) }}</small>
                    @enderror
                </div>
                {{--Password Input Group END--}}

                {{--Remember Me Token START--}}
                <input type="checkbox"
                       name="remember"
                       id="remember"
                        {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">
                    {{ __('titles.remember_me') }}
                </label>
                {{--Remember Me Token END--}}

                {{--Submit Button START--}}
                <div class="form-group">
                    <button type="submit">
                        {{ __('titles.login') }}
                    </button>
                </div>
                {{--Submit Button END--}}

            </form>
            {{--Login Form END--}}

        </div>
    </div>
@endsection
