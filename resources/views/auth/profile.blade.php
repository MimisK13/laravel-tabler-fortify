@extends('layouts.tabler')

@section('content')
<div class="page-body">
    <div class="container-xl">
        @if( ! request()->user()->two_factor_secret )

            You don't have two-factor authentication enabled.

            <form method="POST" action="{{ route('two-factor.enable') }}">
                @csrf

                <button type="submit" class="btn btn-primary">
                    {{ __('Enable 2FA') }}
                </button>
            </form>
        @else
            <p>Please finish configuring two factor authentication below.</p>

            <form method="POST" action="{{ route('two-factor.confirm') }}">
                @csrf

                <div class="mb-3">
                    <label for="code" class="form-label required">
                        Code
                    </label>

                    <input type="text" name="code" id="code" class="form-control">

                    <button type="submit" class="btn btn-outline-warning">
                        {{ __('Confirm') }}
                    </button>
                </div>
            </form>

            @if (session('status') == 'two-factor-authentication-confirmed')
                <div class="mb-4 font-medium text-sm">
                    Two factor authentication confirmed and enabled successfully.
                </div>

                <form method="POST" action="{{ route('two-factor.disable') }}">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">
                        {{ __('Disable 2FA') }}
                    </button>
                </form>
            @endif

        @endif

        @if (session('status') == 'two-factor-authentication-enabled')
            You have now enabled 2fa, please scan the following QR code into your phone authenticator app.

            {!! request()->user()->twoFactorQrCodeSvg() !!}


            <p>Please store theses recovery codes in a secure location.</p>

            <br>

            @foreach(request()->user()->recoveryCodes() as $code)
                {{ $code }}
                <br>
            @endforeach
        @endif

    </div>
</div>
@endsection
