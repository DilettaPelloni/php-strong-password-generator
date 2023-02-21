<?php
    session_start();
    include __DIR__.'/functions.php';

    if(
        isset($_GET['pswLen'])
        &&
        (
            $_GET['let'] != null
            ||
            $_GET['num'] != null
            ||
            $_GET['sym'] != null
        )
    ) {
        $_SESSION['psw'] = genPsw($_GET['pswLen'], $_GET['uniqChar'], $_GET['let'], $_GET['num'], $_GET['sym']);
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
                        <input type="number" class="form-control w-25" id="pswLen" name="pswLen" min="6" max="10" value="<?php echo $_GET['pswLen'] ?? '6' ?>">
                        <div class="form-text">Inserisci un numero compreso tra 6 e 10</div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="true" id="let" name="let" checked>
                        <label class="form-check-label" for="let">
                            Includi lettere
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="true" id="num" name="num">
                        <label class="form-check-label" for="num">
                            Includi numeri
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="true" id="sym" name="sym">
                        <label class="form-check-label" for="sym">
                            Includi simboli
                        </label>
                    </div>
                    <div class="form-text">Seleziona almeno un'opzione</div>

                    <?php
                        if(
                            isset($_GET['pswLen']) &&
                            ($_GET['let'] == null && $_GET['num'] == null && $_GET['sym'] == null)
                        ) {
                    ?>
                        <div class="alert alert-danger" role="alert">
                            Devi selezionare almeno un opzione!
                        </div>
                    <?php } ?>
                    <div class="mt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="uniqChar" id="uniqChar1" value="true">
                            <label class="form-check-label" for="uniqChar1">
                                Voglio tutti caratteri diversi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="uniqChar" id="uniqChar2" value="false" checked>
                            <label class="form-check-label" for="uniqChar2">
                                I caratteri si possono ripetere
                            </label>
                        </div>
                    </div>
                    

                    <button type="submit" class="mt-3 btn btn-primary">Genera</button>
                    </form>
                </div>
            </section>
        </main>

    </body>
</html>