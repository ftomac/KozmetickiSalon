<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">
        <link rel="icon" href="/assets/css/imgs/icon.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/20d8c1d8d5.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="assets/JS/lib/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" href="assets/css/front.css">
        <script type="text/javascript" src="assets/JS/salon.js"></script>
        <title>Kozmetički salon StudioS</title>
    </head>

    <body>

        <?php error_reporting (E_ALL ^ E_NOTICE); ?>
        <?php
        $Ime = $_POST['name'];
        $Prezime = $_POST['prezime'];
        $Brojmobitela= $_POST['brojMobitela'];
        $Emailadresa=$_POST['emailAdresa'];
        $vUsluge = $_POST['vrUsluge'];
        $vPlacanja = $_POST['vrstaPlacanja'];
        $DatumTermina= $_POST['Datumtermina'];


        $mysqli = new mysqli ('ucka.veleri.hr', 'ftomac', '11', 'ftomac');
        if( $mysqli -> connect_error ) {
            die('Connect error: ' . $mysqli->connect_errno);
        }

        $sql = "INSERT INTO Podaci_o_terminima (Ime, Prezime, Brojmobitela, Emailadresa, vUsluge, vPlacanja, DatumTermina) VALUES ('$Ime','$Prezime', '$Brojmobitela', '$Emailadresa', '$vUsluge', '$vPlacanja','$DatumTermina')";
        $insert = $mysqli->query($sql);
        ?>


        <nav class="navbar bg-dark navbar-dark fixed-top">
            <div class="container">
                <a href="#" class="navbar-brand"><i class="fas"></i>Kozmetički salon StudioS</a>
                <li class="nav-item">
                    <a class="nav-link bg-dark fas" href="../index.html">Početna</a>
                    <a class="nav-link bg-dark fas" href="../cjenik.html">Cjenik</a>
                    <a class="nav-link bg-dark fas" href="../prikazBaze.php">Pregled klijenata i termina</a>
                </li>
            </div>
        </nav>

        <div id="header" class="jumbotron text-center">
            <p class="h1 naslov">Kozmetički salon StudioS</p>
        </div>
        <section id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Termin 1</h5>
                                <p>Korisnik: <span></span></p>
                                <p>Vrsta usluge: <span></span></p>
                                <p>Datum termina: <span></span></p>
                                <p>Vrijeme trajanja usluge: <span></span></p>   <!--https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_countdown -->
                                <div class="mt-auto tipke">
                                    <div class="btn btn-outline-success btn-small">Rezerviraj</div>
                                    <div class="btn btn-outline-danger btn-small" value="true">Makni rezervaciju</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Termin 2</h5>
                                <p>Korisnik: <span></span></p>
                                <p>Vrsta usluge: <span></span></p>
                                <p>Datum termina: <span></span></p>
                                <p>Vrijeme trajanja usluge: <span></span></p>   
                                <div class="mt-auto tipke">
                                    <div class="btn btn-outline-success btn-small">Rezerviraj</div>
                                    <div class="btn btn-outline-danger btn-small">Makni rezervaciju</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Termin 3</h5>
                                <p>Korisnik: <span></span></p>
                                <p>Vrsta usluge: <span></span></p>
                                <p>Datum termina: <span></span></p>
                                <p>Vrijeme trajanja usluge: <span></span></p>  
                                <div class="mt-auto tipke">
                                    <div class="btn btn-outline-success btn-small">Rezerviraj</div>
                                    <div class="btn btn-outline-danger btn-small">Makni rezervaciju</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Termin 4</h5>
                                <p>Korisnik: <span></span></p>
                                <p>Vrsta usluge: <span></span></p>
                                <p>Datum termina: <span></span></p>
                                <p>Vrijeme trajanja usluge: <span></span></p>   
                                <div class="mt-auto tipke">
                                    <div class="btn btn-outline-success btn-small">Rezerviraj</div>
                                    <div class="btn btn-outline-danger btn-small">Makni rezervaciju</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Termin 5</h5>
                                <p>Korisnik: <span></span></p>
                                <p>Vrsta usluge: <span></span></p>
                                <p>Datum termina: <span></span></p>
                                <p>Vrijeme trajanja usluge: <span></span></p>  
                                <div class="mt-auto tipke">
                                    <div class="btn btn-outline-success btn-small">Rezerviraj</div>
                                    <div class="btn btn-outline-danger btn-small">Makni rezervaciju</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Termin 6</h5>
                                <p>Korisnik: <span></span></p>
                                <p>Vrsta usluge: <span></span></p>
                                <p>Datum termina: <span></span></p>
                                <p>Vrijeme trajanja usluge: <span></span></p>   
                                <div class="mt-auto tipke">
                                    <div class="btn btn-outline-success btn-small">Rezerviraj</div>
                                    <div class="btn btn-outline-danger btn-small">Makni rezervaciju</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src="assets/JS/salon.js"></script>
    </body>
</html>
