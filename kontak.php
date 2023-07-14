<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Kontak</title>

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>
    <?php
    include 'navbar.php'
    ?>

    <h1 class="display-5 fs-2 fw-semibold text-center text-dark mt-3">Hubungi kami:</h1>


    <div class="container d-flex justify-content-center align-items-center flex-column mt-5">

        <a class="kontak border shadow rounded d-flex align-items-center px-3 py-2 text-decoration-none text-dark" href="https://wa.me/6281111111" target="_blank" style="width: 20em;">
            <div>
                <img src="img/icons8-whatsapp.svg" alt="wa" width="100">
            </div>
            <div>
                <p class="fs-4 fw-semibold m-0">Whatsapp</p>
                <p class="fs-5 " href="#">+62 81111111</p>
            </div>
        </a>

        <a class="kontak border shadow rounded d-flex align-items-center px-3 py-2 mt-4 text-decoration-none text-dark" href="#" target="_blank" style="width: 20em;">
            <div>
                <img src="img/icons8-telephone-100.png" alt="wa" width="100">
            </div>
            <div>
                <p class="fs-4 fw-semibold m-0">Telepon</p>
                <p class="fs-5 " href="#">0251 1234 5678</p>
            </div>
        </a>

        <a class="kontak border shadow rounded d-flex align-items-center justify-content-around px-1 py-2 mt-4 text-decoration-none text-dark" href="mailto:situdaun@tenjolaya.go.id" target="_blank" style="width: 24em;">
            <div>
                <img src="img/icons8-gmail.svg" alt="wa" width="100">
            </div>
            <div>
                <p class="fs-4 fw-semibold m-0">Email</p>
                <p class="fs-5 " href="#">situdaun@tenjolaya.go.id</p>
            </div>
        </a>



    </div>


    <?php
    include 'footer.php'
    ?>


</body>

</html>