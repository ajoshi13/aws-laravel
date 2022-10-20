<!doctype html>
<html lang="en">

<head>
    <title>Slider Advertisement</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{url('backend/style.css')}}">
    <link rel="stylesheet" href="{{url('backend/scss/styel.css')}}">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

</head>

<body>



    <form action="" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="slider-advpost">
            <div class="container">
                <button type="button" class="btn btn-primary slider">Slider Advertising Post</button>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Slider One Advertising</label>
                    <input name="image1" class="form-control" type="file" id="formFile">
                </div>
                <br>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Slider Two Advertising</label>
                    <input name="image2" class="form-control" type="file" id="formFile">
                </div>
                <br>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Slider Three Advertising</label>
                    <input name="image3" class="form-control" type="file" id="formFile">
                </div>
                <br>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Slider Four Advertising</label>
                    <input name="image4" class="form-control" type="file" id="formFile">
                </div>

                <button type="submit" name="submit" class="btn btn-primary slider-upload">Upload</button>

            </div>
        </div>


    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>


</body>

</html>
