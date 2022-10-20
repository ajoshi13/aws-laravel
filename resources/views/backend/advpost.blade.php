<!doctype html>
<html lang="en">

<head>
    <title>main ad post</title>
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



    <form action="/advpage/advpost" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="container">

           <div class="main-advpost">
                    <br>
                    <h2>Main Advertisement</h2>
                    <br>


                     <br>

                     <br>


                        <label for="" class="label-head" >New Advertisiment</label>
                        <div class="row">
                            <div class="col-sm">
                                <div class="form-input">
                                    <div class="preview">
                                            <img id="file-ip-1-preview">
                                    </div>
                                            <label for="file-ip-1" >Choose Image</label>
                                            <input required name="image" type="file" id="file-ip-1"  onchange="showPreview(event);">
                                </div>
                            </div>
                        </div>


            <div>
                <button name="submit" type="submit" class="btn btn-primary">Upload</button>
            </div>




        </div>
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
