@extends('backend.layouts.sidenav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{url('backend/style.css')}}">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.js">

    <title>News Dashboard Panel</title>

</head>
<body>
    @section('navbar')

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>

            <!-- <img src="images/katwal logo.png" alt=""> -->
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <a href="create_news"><button type="button" class="new-post">Creat New Post</button></a>

                </div>
                <div class="title">
                    <i class="fa-solid fa-gauge-simple"></i>
                    <span class="text">News Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <a href="samachar_back"><span class="text">समाचार</span></a>
                        <span class="number">{{$samachar}}</span>
                    </div>
                    <div class="box box2">
                        <a href="rajniti_back"><span class="text">राजनीति</span></a>
                        <span class="number">{{$rajniti}}</span>
                    </div>
                    <div class="box box3">
                        <a href="mofsal_back"><span class="text">मोफसल</span></a>
                        <span class="number">{{$mofsal}}</span>
                    </div>
                    <div class="box box3">
                        <a href="manoranjan_back"><span class="text">मनोरञ्जन</span></a>
                        <span class="number">{{$entertainment}}</span>
                    </div>
                    <div class="box box1">
                        <a href="sport_back"><span class="text">खेलकुद</span></a>
                        <span class="number">{{$sport}}</span>
                    </div>
                    <div class="box box2">
                        <a href="automobile_back"><span class="text">अटोमोबाइल्स</span></a>
                        <span class="number">{{$automobile}}</span>
                    </div>
                    <div class="box box1">
                        <a href="bichar_back"><span class="text">विचार</span></a>
                        <span class="number">{{$bichar}}</span>
                    </div>
                    <div class="box box2">
                        <a href="corporate_back"><span class="text">कर्पोरेट</span></a>
                        <span class="number">{{$corporate}}</span>
                    </div>
                    <div class="box box3">
                        <a href="share_back"><span class="text">शेयरबजार</span></a>
                        <span class="number">{{$share}}</span>
                    </div>
                    <div class="box box3">
                        <a href="international_back"><span class="text">अन्तरराष्ट्रिय</span></a>
                        <span class="number">{{$intl}}</span>
                    </div>
                    <div class="box box1">
                        <a href="it_back"><span class="text">सूचना-प्रविधि</span></a>
                        <span class="number">{{$it}}</span>
                    </div>
                    <div class="box box2">
                        <a href="bibidh_back"><span class="text">विविध</span></a>
                        <span class="number">{{$bibidh}}</span>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>

@endsection
