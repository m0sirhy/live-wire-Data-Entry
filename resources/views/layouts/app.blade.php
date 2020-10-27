<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css')}}">

    <title>Bootstrap Responsive Search Box</title>
    @livewireStyles

</head>

<body class="bg">
    <!-- Overlay -->
    <div class="overlay" id="overlay" onclick="resetBg()"></div>

    <!-- Container -->
    <div class="container">
@yield('content')
    </div>
    <!-- ./End of container -->

    <!-- LiveWire -->

    @livewireScripts

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

    <script type="text/javascript">
        function setBgToDark() {
            document.getElementById("overlay").style.opacity = "0.7";
        }

        function resetBg() {
            document.getElementById("overlay").style.opacity = "0.2";
        }
    </script>
</body>

</html>