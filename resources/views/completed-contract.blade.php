@extends('layouts.app');
@section('content')
<body style="line-height:0;">
    <div class="custom-bg">
    <img class="back-deco" src="{{asset('/img/login-bg.svg')}}" alt="Background image">
    <img class="logo-deco-noti" src="{{asset('/img/powered-by-white.svg')}}" alt="Background image">

    <div class="container vertical-center">
        <div class="form-ctm-noti">
            <div class="card mt-4 text-center">
                <br>
                <img src="{{asset('/img/party_emoji.png')}}" alt="Gif Success">
                <h4 class="alert-heading h2">Felicidades!</h4>
                <br>
                <p class="h4">Tu contrato se ha firmado de forma exitosa, uno de nuestros agentes se pondra en contacto contigo pronto.</p>
                <hr class="my-2">
                <img src="{{ asset('./img/logo.png') }}" alt="PixelPay" class="logo"
                    style="display:inline-block; margin:auto;">
                <br>
                <a target="_blank" href="https://www.facebook.com/pixelpay"><i class="fab fa-facebook-f social"></i></a>
                <a target="_blank" href="https://twitter.com/pixelpayhn"><i class="fab fa-twitter social"></i></a>
                <a target="_blank" href="https://pixelpay.tumblr.com"><i class="fab fa-tumblr social"></i></i></a>
            </div>
        </div>
    </div>
    </div>
</body>
@endsection