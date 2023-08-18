<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre place est reservé!</title>
    <link rel="icon" type="image/x-icon" href="./images/logo_pdf.png">

    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #F3FDE8!important;
        }

        .child-playing-img {
            height: 300px;
            object-fit: cover;
        }

    </style>
</head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<body>

    <?php
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        // Now you can use the $name variable in anotherfile.php
    }
    ?>

    <div class="px-1 py-5 my-5 text-center">
        <h1 class="display-5 fw-bold text-body-emphasis"> Merci, <?php echo ucfirst($name) ?> </h1>
        <div class="mx-auto">
            <p class="lead mb-4 pb-5">On a bien noté ton nom pour la réservation. Merci encore! <br> Le lien de la conférence suivra dans ta boite e-mail</p>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>