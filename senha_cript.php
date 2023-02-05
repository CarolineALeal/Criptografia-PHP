<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Criptografia</title>
</head>

<body>
    <!-- Bootstrap  -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- CSS -->
    <style>
        .container {
            width: 100vw;
            height: 100vh;
            background: #6C7A89;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .box {
            width: 300px;
            height: 300px;
            background: #6C7A89;
        }

        body {
            margin: 0px;
        }

        .container2 {
            background-color: none;
            padding: 20px;
            text-align: center;
            justify-content: center;
            margin-top: -115px;
        }
    </style>
    <div class="container">
        <?php
        $senha = $_POST['senha_cript'];
        $senha_cript = base64_encode($senha);
        ?>
        <div class="alert alert-success" role="alert">
            <p><strong>Senha Criptografada</strong></p>
            <hr>
            <p class="mb-0">A Senha Criptografada é <?php echo $senha_cript ?></p>
        </div>
    </div>
    <div class="container2">
        <footer>
            <div class="text-center p-4">
                <a class="text-reset fw-bold">Copyright &copy; Caroline Leal • 2023</a>
            </div>
        </footer>
    </div>
</body>

</html>