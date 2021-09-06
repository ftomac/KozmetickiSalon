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
                <p class="h1 naslov">Kozmetički salon StudioS</p>

                <?php
                session_start();
                $servername = "ucka.veleri.hr";
                $username = "ftomac";
                $password = "11";
                $dbname = "ftomac";


                $conn = new mysqli($servername, $username, $password, $dbname);


                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }else{


                    $sql = "INSERT INTO Klijenti (Username, Password, Ime_i_prezime, Kontakt) " .
                        "VALUES('" . $_POST['Username'] . "', '" . $_POST['Password']."', '" . $_POST['Ime_i_prezime'] . "', '" . $_POST['Kontakt']."')";

                    if ($conn->query($sql) === TRUE) {
                        echo "Registracija je uspjesno izvrsena. <br />";
                        echo "<a href = 'login.php'>Go to login page</a>";
                    } else {
                        echo "Error updating record: " . $conn->error;
                    }
                }
                $conn->close();
                ?>


            </div>
        </head>   
    </html>
