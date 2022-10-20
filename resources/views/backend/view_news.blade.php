<!doctype html>
<html lang="en">
  <head>
    <title>View News</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>



    <div class="container">

        <br>
    <button class="btn btn-danger" ><a  href="{{url('/create_news')}}">Create News</a></button>
    <br>

    <br>
    <h1>View News</h1>
    <br>

        <table class="table table-dark" >

            <thead>

                <tr>

                <th scope="col">News ID</th>
                <th scope="col">Category</th>
                <th scope="col">Headline</th>
                <th scope="col">News Preview</th>
                <th scope="col">News body</th>
                <th scope="col"> Created at</th>
                <th scope="col"> Action</th>

                </tr>

            </thead>

            <tbody>

                @foreach ($newss as $news)


                <tr>

                <td>{{$news->news_id}}</td>
                <td>{{$news->category}}</td>
                <td>{{$news->headline}}</td>
                <td>{{$news->sub_headline}}</td>
                <td>{{$news->description}}</td>
                <td>{{$news->created_at}}</td>
                <td>
                   <a href="{{route('view_news.delete', ['id' => $news->news_id])}}"><button class="btn btn-danger">Delete</button></a>
                   <a href="{{route('view_news.edit', ['id' => $news->news_id])}}"><button class="btn btn-primary">Edit</button></a>


                </td>

                </tr>

            </tbody>

            @endforeach

          </table>

    </div>

    </body>
</html>
