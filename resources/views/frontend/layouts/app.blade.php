<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PurrWell | Home</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/images/favicon-ico.png')}}">
    <!-- Syne Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Inter Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/preloader.css')}}">
</head>
<body>
<!-- Loading screen -->
<div id="preloader">
    <div id="spinner" class="spinner large-icon">
        <img alt="" src="{{asset('assets/images/13.gif')}}">
        <h5 class="line-height-1 font-18">{{__('Loading...')}}</h5>
    </div>
</div>
@yield('styles')
@yield('content')
@yield('scripts')
<!-- jQuery -->
<script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
<!-- jQuery Mask -->
<script src="{{asset('assets/js/jquery.mask.min.js')}}"></script>
<!-- Waypoint -->
<script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Counter Up -->
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<!-- Slick Slider -->
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<!-- Font Awesome -->
<script src="{{asset('assets/js/all.min.js')}}"></script>
<script src="{{asset('assets/js/fontawesome.min.js')}}"></script>
<!-- Main Script -->
<script src="{{asset('assets/js/main.js')}}"></script>
<script type="module">
    // Função para mostrar a tela de carregamento
    function showLoading() {
        document.getElementById('preloader').style.display = 'block';
    }

    // Função para ocultar a tela de carregamento
    function hideLoading() {
        document.getElementById('preloader').style.display = 'none';
    }

    // Mostrar a tela de carregamento quando a página está carregando
    window.addEventListener('load', hideLoading);
    window.addEventListener('beforeunload', showLoading);
</script>
<script type="module">
    $(document).ready(function () {
        function formatPhoneNumber(inputValue) {
            let number = inputValue.replace(/\D/g, '');
            let mask = number.length > 10 ? '(00) 0 0000-0000' : '(00) 0000-0000';
            let formattedNumber = '';
            let j = 0;

            for (let i = 0; i < mask.length; i++) {
                if (mask[i] === '0') {
                    if (number[j]) {
                        formattedNumber += number[j++];
                    } else {
                        break;
                    }
                } else {
                    formattedNumber += mask[i];
                }
            }

            return formattedNumber;
        }

        $('#home-contact-phone').on('input', function (event) {
            let inputValue = $(this).val();
            if (inputValue.length > 0) {
                let formattedNumber = formatPhoneNumber(inputValue);
                $(this).val(formattedNumber);
            }
        }).on('keydown', function (event) {
            if (event.key === 'Backspace') {
                let inputValue = $(this).val();
                let newValue = inputValue.slice(0, -2);
                $(this).val(newValue);
            }
        });
    });
</script>
</body>
