<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Ekatuwal</title>
    <link rel="shortcut icon" href="{{url('frontend/img/favicon.png')}}" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <link rel="stylesheet" href="{{url('frontend/scss/styel.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/scss/page.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/owl.theme.default.min.css')}}">

</head>

<body>

    <!-- Header part-->

    <header class="page-header">
        <div class="header__nav">
            <div class="container">
                <div class="top__nav">
                    <a href="{{url('/')}}"><img src="{{url('frontend/img/katwal master logo.png')}}" alt=""></a>


                    <nav class="navbar">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </nav>

                    <div class="use__contact">
                        <div class="dropdown">
                            <button class="btn" type="button" id="dropdownMenu2" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="{{url('frontend/img/katwal main logo.png')}}" alt="">
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><a class="dropdown-item" href="{{url('/about')}}">About Us</a></li>
                                <li><a class="dropdown-item" href="{{url('/contact')}}">Contact Us</a></li>
                                <li><a class="dropdown-item" href="{{url('/advertising')}}">Advertising</a></li>
                                <li><a class="dropdown-item" href="{{url('/team')}}">Our Team</a></li>
                            </ul>
                        </div>
                        <a href=""><i class="fas fa-user-circle"></i></a>
                        <span style="font-size:25px;cursor:pointer" class="open_btn" onclick="openNav()">&#9776;</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header ends -->
