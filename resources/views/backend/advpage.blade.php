@extends('backend.layouts.sidenav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('backend/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Ekatuwal Dashboard Panel</title>

</head>
<body>
    @section('navbar')



    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search here...">
            </div>

            <!-- <img src="images/profile.jpg" alt=""> -->
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="fa-solid fa-gauge-simple"></i>
                    <span class="text">Main advertising Post</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <a href="{{url('/advpage/advpost')}}"><span class="text">Main advertising</span></a>
                        <span class="number">50,120</span>
                    </div>

                </div>
            </div>

            <div class="overview">
                <div class="title">
                    <i class="fa-solid fa-gauge-simple"></i>
                    <span class="text">Slide advertising Post</span>
                </div>

                <div class="boxes">
                    <div class="box box2">
                        <a href="/advpage/slideradv"><span class="text">Slider advertising</span></a>
                        <span class="number">50,120</span>
                    </div>

                </div>
            </div>


        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>
@endsection
