<?php
    session_start();
    include __DIR__.'/functions.php';

    if(isset($_GET['pswLen'])) {
        $_SESSION['psw'] = genPsw($_GET['pswLen'], $genString);
        header('Location: ./result.php');
    };
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <title>PHP Strong Password Generator</title>
    </head>
    <body>
        
        <?php include __DIR__.'/header.php'; ?>

        <main class="py-5">
            <section class="mb-5">
                <div class="container">
                    <h2 class="mb-4">
                        Genera la tua password
                    </h2>

                    <form method="GET">
                    <div class="mb-3">
                        <label for="pswLen" class="form-label">Quanto deve essere lunga?</label>
                        <input type="number" class="form-control w-25" id="pswLen" name="pswLen" min="6" max="12" value="6">
                        <div class="form-text">Inserisci un numero compreso tra 6 e 12</div>
                    </div>
                    <button type="submit" class="btn btn-primary">Genera</button>
                    </form>
                </div>
            </section>
        </main>

    </body>
</html>