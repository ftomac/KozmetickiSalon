<!DOCTYPE html>   
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
                        <a class="nav-link bg-dark fas" href="../login.php">PRIJAVA</a>
                        <a class="nav-link bg-dark fas" href="../cjenik.html">CJENIK</a>

                    </li>
                </div>
            </nav>
            <div id="header" class="jumbotron text-center">
                <p class="h1 naslov">Kozmetički salon StudioS</p>
                <form action="registerAction.php" method="POST">
                    <p>Username: <input type="text" name="Username" /></p>
                    <p>Password: <input type="password" name="Password" /></p>
                    <p>Ime i prezime: <input type="text" name="Ime_i_prezime" /></p>
                    <p>Kontakt broj: <input type="tel" name="Kontakt" /></p>
                    <p><input type="submit" /></p>
                </form>
            </div>
            </head>
    </html>
    
