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
            <div id="header" class="jumbotron text-center">
                <p class="h1 naslov">Kozmetički salon StudioS</p><html>
                <body>

                    <?php
                    session_start(); 
                    if(!isset($_SESSION['AdminUsername'])){
                        echo "No session detected!";
                        return;
                    } 
                    $servername = "ucka.veleri.hr";
                    $username = "ftomac";
                    $password = "11";
                    $dbname = "ftomac";


                    $conn = new mysqli($servername, $username, $password, $dbname);


                    if ($conn->connect_error) {

                        die("Connection failed: " . $conn->connect_error);
                    }else{
                    ?>
                    <form action="kreirajUsluguRezultat.php" method="POST">
                        <p>Usluga: <input type="text" name="Ime" /></p>
                        <p>Cijena: <input type="number" name="Cijena" /></p>
                        <p><input type='submit' value="Dodaj uslugu" /></p>
                    </form>

                    <?php
                    }
                    $conn->close();
                    ?>

                </body>
                </html>
