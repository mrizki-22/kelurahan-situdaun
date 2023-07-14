<?php
include 'process/show-berita.php'

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Kelurahan Situdaun</title>
    <!-- Quill js -->
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

    <!-- Theme included stylesheets -->
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body>
    <?php
    include("navbar.php");
    ?>
    <div class="container col-md-7 mx-auto mt-5">
        <div class="w-100">


            <div>
                <h1 class="fs-2"><?= $result['judul']; ?></h1>
                <p class="fs-5">
                    <?php
                    // tanggal bulan waktu indonesia
                    setlocale(LC_ALL, 'id-ID', 'id_ID');
                    echo strftime("%d %B %Y", strtotime($result['created_at']));

                    ?>
                </p>
            </div>
            <div>
                <img src="img/uploads/<?= $result['gambar']; ?>" class="img-fluid w-100" alt="thumbnail">
            </div>
            <?php
            $konten = $result['konten'];
            ?>

            <div id="editor" class="fs-5 fw-medium">
            </div>

        </div>
    </div>


    <?php
    include 'footer.php'
    ?>



    <script>
        var options = {
            debug: 'info',
            modules: {
                toolbar: false
            },
            readOnly: true,
            theme: 'snow'
        };
        var editor = new Quill('#editor', options);
        var content = <?= json_encode($konten); ?>;

        content = content.replace(/\n/g, '\\n');

        var delta = JSON.parse(content);


        editor.setContents(delta);
    </script>





</body>