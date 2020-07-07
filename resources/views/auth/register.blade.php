@extends('main')

@section('title', ' | ' . __('titles.register'))

@section('content')
    <div class="wrapper">
        <div class="auth-card">

            {{--Section Header START--}}
            <h2>{{ __('titles.register') }}</h2>
            {{--Section Header END--}}

            {{--Register Form START--}}
            <form method="POST" action="{{ route('register') }}">
                @csrf

                {{--Name Input Group START--}}
                <div class="form-group">
                    <label for="name">{{ __('titles.name') }}</label>
                    <input id="name"
                           type="text"
                           name="name"
                           value="{{ old('name') }}"
                           required
                           autocomplete="name"
                           autofocus>

                    @error('name')
                    <small>{{ ucfirst($message) }}</small>
                    @enderror
                </div>
                {{--Name Input Group END--}}

                {{--Surname Input Group END--}}
                <div class="form-group">
                    <label for="surname">{{ __('titles.surname') }}</label>
                    <input id="surname"
                           type="text"
                           name="surname"
                           value="{{ old('surname') }}"
                           required
                           autocomplete="surname">

                    @error('surname')
                    <small>{{ ucfirst($message) }}</small>
                    @enderror
                </div>
                {{--Surname Input Group END--}}

                {{--Email Input Group START--}}
                <div class="form-group">
                    <label for="email">{{ ucfirst(__('validation.attributes.email')) }}</label>
                    <input id="email"
                           type="email"
                           name="email"
                           value="{{ old('email') }}"
                           required
                           autocomplete="email">

                    @error('email')
                    <small>{{ ucfirst($message) }}</small>
                    @enderror
                </div>
                {{--Email Input Group END--}}

                {{--Phone Number Input Group STARt--}}
                <div class="form-group">
                    <label for="phone-number">{{ __('titles.phone-number') . ' (' . __('titles.optional') . ')' }}</label>
                    <input id="phone-number"
                           type="text"
                           name="phone-number"
                           value="{{ old('phone-number') }}"
                           autocomplete="phone-number">

                    @error('phone-number')
                    <small>{{ ucfirst($message) }}</small>
                    @enderror
                </div>
                {{--Phone Number Input Group END--}}

                {{--Address Input Group START--}}
                <div class="form-group">
                    <label for="address">{{ ucfirst(__('validation.attributes.address')) . ' (' . __('titles.optional') . ')' }}</label>
                    <input id="address"
                           type="text"
                           name="address"
                           value="{{ old('address') }}"
                           autocomplete="address">

                    @error('address')
                    <small>{{ ucfirst($message) }}</small>
                    @enderror
                </div>
                {{--Address Input Group END--}}

                {{--Password Input Group START--}}
                <div class="form-group">
                    <label for="password">{{ ucfirst(__('validation.attributes.password')) }}</label>
                    <input id="password"
                           type="password"
                           name="password"
                           required
                           autocomplete="new-password">

                    @error('password')
                    <small>{{ ucfirst($message) }}</small>
                    @enderror
                </div>
                {{--Password Input Group END--}}

                {{--Password Repeat Input Group START--}}
                <div class="form-group">
                    <label for="password-confirm">{{ __('titles.repeat_password') }}</label>
                    <input id="password-confirm"
                           type="password"
                           class="form-control"
                           name="password_confirmation"
                           required
                           autocomplete="new-password">
                </div>
                {{--Password Repeat Input Group END--}}

                {{--Submit Button START--}}
                <div class="form-group">
                    <button type="submit">
                        {{ __('titles.register') }}
                    </button>
                </div>
                {{--Submit Button END--}}

            </form>
            {{--Register Form END--}}

        </div>
    </div>
@endsection
