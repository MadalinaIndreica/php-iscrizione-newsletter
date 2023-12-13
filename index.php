<?php 
include_once __DIR__ . "/functions.php"

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newsletter</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
 <section>
    <div class="container mt-5 text-center">
        <h1 class=" mt-5 mb-5">Iscriviti alla nostra newsletter</h1>
        <form method="post" action="index.php">
            <div class="mb-2">
                <label for="email">Inserisci la tua mail</label>
                <input type="text" id="email" name="email" value="<?php echo $useremail; ?>" placeholder="user@email.com">
                <p class=" mt-4 alert <?php echo $alert; ?>"><?php echo $message ?></p>
            </div>
            <button class="btn btn-primary" type="submit">Invia</button>
        </form>
    </div>
</section>

</body>

</html>