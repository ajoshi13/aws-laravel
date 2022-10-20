<!doctype html>
<html lang="en">
  <head>
    <title>{{$title}}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>



<form action="{{$url}}" method="POST" enctype="multipart/form-data">

    @csrf

    <div class="container">

        <br>
        <button class="btn btn-danger"><a href="{{ url()->previous() }}">back</a></button>
        <br>


        <br>
    <h1>{{$title}}</h1>
    <br>

        <div class="form-group">
        <label for="">select a category</label>
        <select class="form-control" name="category" value="{{$news->category}}" >
          <option selected>News</option>
          <option>Rajniti</option>
          <option>mofsal</option>
          <option>Entertainment</option>
          <option>sports</option>
          <option>Share</option>
          <option>Corporate</option>
          <option>automobile</option>
          <option>bichar</option>
          <option>IT</option>
          <option>bibidh</option>
          <option>share</option>
          <option>International</option>
        </select>
        <span class="text-danger">
            @error('category')
            {{$message}}
            @enderror
        </span>
    </div>

        <div>
        <label for="">Input news headline</label>
        <input class="form-control" type="text" placeholder="Input Headline"  name="headline" value="{{$news->headline}}">
        <span class="text-danger">
            @error('headline')
            {{$message}}
            @enderror
        </span>
        </div>


        <div class="form-group">
            <label for="">preview news</label>
            <textarea name="sub_headline" class="form-control"  rows="2" >{{$news->sub_headline}}</textarea>
            <span class="text-danger">
                @error('sub_headline')
                {{$message}}
                @enderror
            </span>
        </div>


        <div class="form-group">
            <label for="">news body</label>
            <textarea name="description" class="form-control editor " id="exampleFormControlTextarea1"  rows="10" >{{$news->description}}</textarea>
            <span class="text-danger">
                @error('description')
                {{$message}}
                @enderror
            </span>
          </div>


          <div class="form-group">
            <label for="">sliding heading 1</label>
            <input name="slide_h1" type="text" class="form-control" id="inputAddress" placeholder="enter here" value="{{$news->slide_h1}}" >
          </div>

          <div class="form-group">
            <label for="">Sliding description 1</label>
            <input name="slide_d1" type="text" class="form-control" id="inputAddress" placeholder="enter here" value="{{$news->slide_d1}}" >
          </div>


          <div class="form-group">
            <label for="">sliding heading 2</label>
            <input name="slide_h2" type="text" class="form-control" id="inputAddress" placeholder="enter here" value="{{$news->slide_h2}}" >
          </div>

          <div class="form-group">
            <label for="">Sliding description 2</label>
            <input name="slide_d2" type="text" class="form-control" id="inputAddress" placeholder="enter here" value="{{$news->slide_d2}}" >
          </div>


          <div class="form-group">
            <label for="">sliding heading 3</label>
            <input name="slide_h3" type="text" class="form-control" id="inputAddress" placeholder="enter here" value="{{$news->slide_h3}}" >
          </div>

          <div class="form-group">
            <label for="">Sliding description 3</label>
            <input name="slide_d3" type="text" class="form-control" id="inputAddress" placeholder="enter description here" value="{{$news->slide_d3}}" >
          </div>


        <div class="form-group">
            <label for="">Upload an Image</label>
            <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1" >
            <img src="{{ asset('uploads/news/'.$news->image) }}" alt="">
        </div>


        <div>
        <button name="submit" class="btb btn-success">Upload</button>
         </div>

    </div>
</form>

    <!-- Optional JavaScript -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.2.1/classic/ckeditor.js"></script>
    <script>
        var allEditors = document.querySelectorAll('.editor');
        for (var i = 0; i < allEditors.length; ++i) {
          ClassicEditor.create(allEditors[i]);
        }
    </script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      </body>
</html>
