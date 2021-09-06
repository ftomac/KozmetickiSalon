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
            <link rel="stylesheet" href="css/stil.css">
            <title>Kozmetički salon StudioS</title>
            <div id="header" class="jumbotron text-center">
                <p class="h1 naslov">Kozmetički salon StudioS</p>
                <head>
                    <title>Otkaži rezervaciju termina</title>
                </head>
                <body>

                    <?php
                    session_start();
                    if(!isset($_SESSION['Username'])){
                        echo "No session detected!";
                        return;
                    }
                    $servername = "ucka.veleri.hr";
                    $username = "ftomac";
                    $password = "11";
                    $dbname = "ftomac";

                    $Username = $_SESSION['Username'];

                    $conn = new mysqli($servername, $username, $password, $dbname);


                    if ($conn->connect_error) {

                        die("Connection failed: " . $conn->connect_error);
                    }else{

                        $sql = "SELECT * FROM Termini WHERE Klijent='$Username'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                    ?>
                    <table border = 1>
                        <tr>
                            <th>ID</th>
                            <th>Klijent</th>
                            <th>Zaposlenik</th>
                            <th>Vrijeme</th>
                        </tr>
                        <?php


                            while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["ID"]; ?></td>
                            <td><?php echo $row["Klijent"]; ?></td>
                            <td><?php echo $row["Zaposlenik"]; ?></td>
                            <td><?php echo $row["Vrijeme"]; ?></td>
                        </tr>
                        <?php
                            }

                        ?>
                    </table>
                    <form form action="obrisiTermin.php" method="POST">
                        <br> Upišite ID termina koji želite otkazati: <br>
                        <input type="text" name="ID"><br>	
                        <p><input type="submit" /></p>
                    </form>
                    <?php
                        } else {
                            echo "0 results";
                        }
                    }
                    $conn->close();
                    ?>

                </body>
            </div>
        </head>
    </html>
