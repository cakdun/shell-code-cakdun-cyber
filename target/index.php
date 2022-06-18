<?php

if ($_FILES['file']) {
    // var_dump($_FILES['file']);

    $from = $_FILES['file']['tmp_name'];
    $fileName = $_FILES['file']['name'];
    $to = "./file";

    // var_dump($fileName);
    // var_dump($to);
    move_uploaded_file($from, "$to/$fileName");

    $msg = true;
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Welcome To My Website</title>
</head>

<body>



    <div class="container mt-5">
        <div class="card">
            <p class="card-header text-center bg-dark text-light">Silahkan Upload File Anda</p>
            <?php if ($msg) : ?>
                <span class="alert alert-success text-center">File Berhasil Di upload</span>
            <?php endif; ?>
            <form class="p-5" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">File <code class="text-success"></code></label>
                    <input type="file" id="file" class="form-control" name="file" aria-describedby="emailHelp" placeholder="Enter email">

                </div>


                <button type="submit" name="upload" class="btn btn-primary btn-block">Upload File</button>
            </form>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script>
        $(document).ready(function() {
            $("#file").on("change", function() {
                const file = this.files[0];
                $("code").html(file.name);
            })
        })
    </script>
</body>

</html>