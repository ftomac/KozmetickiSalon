<!DOCTYPE html>   
<html lang="en">
    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="icon" href="css/imgs/icon.png" type="image/png" sizes="16x16">
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet"> 
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://kit.fontawesome.com/20d8c1d8d5.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="css/index.css">
            <title>Kozmetički salon StudioS</title>
            <nav class="navbar bg-dark navbar-dark fixed-top">
                <div class="container">
                    <li class="nav-item">
                        <a class="nav-link bg-dark fas" href="../dodajZaposlenika.php">DODAJ ZAPOSLENIKA</a>
                        <a class="nav-link bg-dark fas" href="../azurirajZaposlenika.php">AZURIRAJ ZAPOSLENIKA</a>
                        <a class="nav-link bg-dark fas" href="../izbrisiZaposlenika.php">IZBRISI ZAPOSLENIKA</a>
                        <a class="nav-link bg-dark fas" href="../kreirajUslugu.php">DODAJ USLUGU</a>
                        <a class="nav-link bg-dark fas" href="../urediUslugu.php">UREDI USLUGU</a>
                        <a class="nav-link bg-dark fas" href="../popisTermina.php">POPIS TERMINA</a>
                        <a class="nav-link bg-dark fas" href="../logout.php">LOGOUT</a>
                    </li>
                </div>
            </nav>
            <div id="header" class="jumbotron text-center">

                <?php session_start(); 
                if(!isset($_SESSION['AdminUsername'])){
                    echo "No session detected!";
                    return;
                } ?>
                Administrator je prijavljen. <br>
            </div>
        </head>
    </html>

