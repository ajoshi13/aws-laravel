@extends('backend.layouts.sidenav')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{url('backend/style.css')}}">
    <link rel="stylesheet" href="{{url('backend/scss/styel.css')}}">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


    <title>Sports Panel</title>
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
        </div>

        <div class="dash-content">
            <div class="overview">
                <!-- <div class="title">
                    <button type="button" class="new-post">Creat New Post</button>
                </div> -->
                <div class="title">
                    <i class="fa-solid fa-gauge-simple"></i>
                    <span class="text">खेलकुद</span>
                </div>

                @foreach ($display_sport as $item)


                <div class="news-list">
                    <div class="left">
                        <div class="heading">{{$item->headline}}</div>
                        <div class="contant">{{$item->sub_headline}}</div>
                        <div class="publish-date">{{$item->created_at}}</div>
                    </div>
                    <div class="right">
                       <a href="{{route('view_news.edit', ['id' => $item->news_id])}}"> <button>Edit post</button></a>
                       <a href="{{route('view_news.delete', ['id' => $item->news_id])}}"> <button>Delete post</button></a>

                    </div>
                </div>
                @endforeach



            </div>

        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="{{url('backend/script.js')}}"></script>
</body>

</html>

@endsection
