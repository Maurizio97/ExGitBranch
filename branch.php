<?php
// M1: leggere tramite PHP i campi inviati dal form;
// M2: aggiungere i dati del form in un file di testo (note.txt). Le note precedenti non devono essere perse;
// M3: leggere le note salvate sul file e visualizzarle nel layout (dove indicato);
// M4: aggiungere sul file l’orario di invio al salvataggio di una nota.

$name = $_GET['containerName'];
$text = $_GET['containerText'];

$filename = 'note.txt';
$handler = fopen($filename, 'w');


fwrite($handler, "mmm"); // Scrive la stringa nel file 100 volte


fclose($handler);
?>

<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Note</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <style>
            fieldset {
                border: none;
                border-top: 1px solid rgba(0, 0, 0, .125);
            }
            legend {
                text-align: center;
                font-size: 16px;
                padding: 40px 20px;
                float: none;
                width: auto;
                position: relative;
                top: -3px;
                font-weight: bold;
            }
            </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-6 offset-3">
                    <p class="notes">
                        <!-- stampare qui le note salvate -->
                    </p>
                    <fieldset>
                        <legend>Inserisci una nota</legend>
                    </fieldset>
                    <form method="GET">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">

                                <input type="text" class="form-control" name="containerName" autocomplete="off">

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <textarea class="form-control" name="containerText" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary w-100">Invia</button>
                            </div>
                            <div>
                                <?php
                                    echo '<br>' . $name . ' ' . $text;
                                ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
