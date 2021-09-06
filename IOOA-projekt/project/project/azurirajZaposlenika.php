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
            <script type="text/javascript" src="assets/JS/lib/jquery-3.4.1.min.js"></script>
            <script type="text/javascript" src="assets/JS/salon.js"></script>
            <link rel="stylesheet" href="css/stil.css">
            <title>Kozmetički salon StudioS</title>
            <nav class="navbar bg-dark navbar-dark fixed-top">
                <div class="container">

                </div>
            </nav>
            <div id="header" class="jumbotron text-center">
                <p class="h1 naslov">Kozmetički salon StudioS</p>

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

                    $sql = "SELECT * FROM Zaposlenici";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                ?>
                <table border = 1>
                    <tr>
                        <th>ID</th>
                        <th>Ime</th>
                        <th>Zanimanje</th>
                    </tr>
                    <?php

                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $row["ID"]; ?></td>
                        <td><?php echo $row["Ime"]; ?></td>
                        <td><?php echo $row["Zanimanje"]; ?></td>
                    </tr>
                    <?php
                        }

                    ?>
                </table>
                <form form action="azurirajZaposlenikaRezultat.php" method="POST">
                    <br> Upišite ID zaposlenika kojeg želite ažurirati: <br>
                    <input type="text" name="ID"><br>
                    <br> Upišite novo ime zaposlenika: <br>
                    <input type="text" name="Ime"><br>		
                    <br> Odaberite uslugu zaposlenika: <br>
                    <select name="Zanimanje">

                        <?php 

                        $sql = mysqli_query($conn, "SELECT Ime FROM Usluge");
                        while ($row = $sql->fetch_assoc()){
                            $n1 = $row['Ime'];
                            echo "<option value=\"$n1\">" . $row['Ime'] . "</option>";
                        }
                        echo "<p><input type='submit' value='Azuriraj zaposlenika' /></p>";
                        ?>
                    </select>
                </form>
                <?php
                    } else {
                        echo "0 results";
                    }
                }
                $conn->close();
                ?>

            </div>
        </head>

    </html>
