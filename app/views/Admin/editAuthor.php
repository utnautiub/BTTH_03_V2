<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT AUTHOR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
      <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body>
            <?php
            include "{$_SERVER['DOCUMENT_ROOT']}/CSE485_0923/BTTH_03_V2/app/views/share/header.php";
            ?>
    <div class="container-fluid p-5">
        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
             if(isset($_GET['token'])){
                  $json_token = $_GET['token'];
                  $token = json_decode($json_token, true);
                  // print_r($token);
                  $id = $token['id'];
                  $authorName = $token['authorName'];
             }
        ?>
        <h3 style="text-align: center; font-weight: 700;" class="my-3">EDIT INFO AUTHOR</h3>
        <form method="post" action="<?php $_SERVER['DOCUMENT_ROOT']?>/CSE485_0923/BTTH_03_V2/public/index.php?controller=Admin&action=EditAuthor">
            <div class="input-group flex-nowrap my-2">
                <span class="input-group-text" id="addon-wrapping">ID</span>
                <input name="id" readonly value="<?= $id ?>" type="text" class="form-control"
                    aria-label="id" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap my-2">
                <span class="input-group-text" id="addon-wrapping">Author Name</span>
                <input name="authorName"  value="<?= $authorName ?>" type="text" class="form-control"
                    aria-label="tenLop" aria-describedby="addon-wrapping">
            </div>
            <div class="button-add-back">
                <button name="submitEditAuthor" type="submit" class="btn btn-success m-2">Save</button>
                <a href="#">
                    <button type="button" class="btn btn-warning m-2">Back</button>
                </a>
            </div>
        </form>
    </div>

</body>

</html>