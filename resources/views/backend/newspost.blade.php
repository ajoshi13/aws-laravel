<!doctype html>
<html lang="en">

<head>
    <title>{{$title}}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="scss/styel.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

</head>

<body>



    <form action="{{$url}}" method="POST" enctype="multipart/form-data">

        <!-- @csrf -->

        <div class="container">

            <a href=""><i class="fa-light fa-arrow-left"></i>back</a>
            

            <br>
            <button type="button" class="btn btn-primary">Creat New Post</button>
            
            <br>


            <br>
            <!-- <h1>{{$title}}</h1> -->
            <br>
            <label for="" class="label-head">Select Catagories</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>समाचार</option>
                <option value="1">राजनीति</option>
                <option value="2">मोफसल</option>
                <option value="3">मनोरञ्जन</option>
                <option value="4">खेलकुद</option>
                <option value="5">विचार</option>
                <option value="6">कर्पाेरट</option>
                <option value="7">अटोमोबाइल</option>
                <option value="8">सूचना-प्रविधि</option>
                <option value="9">शेयरबजार</option>
                <option value="10">अन्तरराष्ट्रिय</option>
                <option value="11">विविध</option>
            </select>

            <div>
                <label for="" class="label-head">News headline</label>
                <input class="form-control" type="text" placeholder="News Headline" name="headline"
                    value="">
                    <!-- {{$news->headline}} -->
                <span class="text-danger">
                    <!-- @error('headline')
                    {{$message}}
                    @enderror -->
                </span>
            </div>


            <div class="form-group">
                <label for="" class="label-head">News Lead</label>
                <textarea name="sub_headline" class="form-control" id="exampleFormControlTextarea1" placeholder="News lead or Higlight"
                    rows="2"></textarea>
                    <!-- {{$news->sub_headline}} -->
                <span class="text-danger">
                    <!-- @error('sub_headline')
                    {{$message}}
                    @enderror -->
                </span>
            </div>

            <div class="form-group">
                <label for="" class="label-head">Reporter Name</label>
                <textarea name="sub_headline" class="form-control" id="exampleFormControlTextarea1" placeholder="Ekatuwal"
                    rows="1"></textarea>
                    
                <span class="text-danger">
                    
                </span>
            </div>

            <div class="form-group">
                <label for="" class="label-head">Post Time</label>
                <textarea name="sub_headline" class="form-control" id="exampleFormControlTextarea1" placeholder="Post Time"
                    rows="1"></textarea>
                <span class="text-danger">
                </span>
            </div>


            <div class="form-group">
                <label for="" class="label-head" >News Contant</label>
                <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                    rows="20"></textarea>
                    <!-- {{$news->description}} -->
                <span class="text-danger">
                    <!-- @error('description')
                    {{$message}}
                    @enderror -->
                </span>
            </div>


            <div class="form-group">
                <label for="" class="label-head">Sliding Heading 1</label>
                <input name="slide_h1" type="text" class="form-control" id="inputAddress" placeholder="Heading"
                    value="">
                    <!-- {{$news->slide_h1}} -->
            </div>

            <div class="form-group">
                <label for="">Sliding description</label>
                <input name="slide_d1" type="text" class="form-control" id="inputAddress" placeholder="Contant"
                    value="">
                    <!-- {{$news->slide_d1}} -->
            </div>


            <div class="form-group">
                <label for="" class="label-head">Sliding Heading 2</label>
                <input name="slide_h2" type="text" class="form-control" id="inputAddress" placeholder="Heading"
                    value="">
                    <!-- {{$news->slide_h2}} -->
            </div>

            <div class="form-group">
                <label for="">Sliding description</label>
                <input name="slide_d2" type="text" class="form-control" id="inputAddress" placeholder="Contant"
                    value="">
                    <!-- {{$news->slide_d2}} -->
            </div>


            <div class="form-group">
                <label for="" class="label-head">Sliding Heading 3</label>
                <input name="slide_h3" type="text" class="form-control" id="inputAddress" placeholder="Heading"
                    value="">
                    <!-- {{$news->slide_h3}} -->
            </div>

            <div class="form-group">
                <label for="">Sliding description</label>
                <input name="slide_d3" type="text" class="form-control" id="inputAddress"
                    placeholder="Contant" value="">
                    <!-- {{$news->slide_d3}} -->
            </div>

            <div class="form-group">
                <label for="" class="label-head">Image Tag</label>
                <input name="slide_d3" type="text" class="form-control" id="inputAddress"
                    placeholder="Tag" value="">
                    <!-- {{$news->slide_d3}} -->
            </div>


            

            

            <div class="row">
                <div class="col-sm">
                    <div class="form-input">
                        <div class="preview">
                          <img id="file-ip-1-preview">
                        </div>
                        <label for="file-ip-1">Upload Image</label>
                        <input type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
                    </div>
                </div>
            </div>

            
            


            <button type="button" class="btn btn-primary">Upload</button>

        </div>
    </form>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

        <script type="text/javascript">
            function showPreview(event){
            if(event.target.files.length > 0){
              var src = URL.createObjectURL(event.target.files[0]);
              var preview = document.getElementById("file-ip-1-preview");
              preview.src = src;
              preview.style.display = "block";
            }
          }
        </script>
</body>

</html>