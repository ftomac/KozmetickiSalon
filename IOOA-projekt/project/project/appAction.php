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
                $servername = "ucka.veleri.hr";
                $username = "ftomac";
                $password = "11";
                $dbname = "ftomac";
                session_start();
                if(!isset($_SESSION['Username'])){
                    echo "No session detected!";
                    return;
                }
                $con = new mysqli($servername, $username, $password, $dbname);

                if (mysqli_connect_errno($con))
                {
                    echo "MySql Error: " . mysqli_connect_error();
                }
                $sql = "SELECT * FROM Zaposlenici WHERE Zanimanje='$_POST[Usluge]'";

                $query=mysqli_query($con,$sql);
                $result = $con->query($sql);
                $count=mysqli_num_rows($query);
                $row=mysqli_fetch_array($query);


                if ($result->num_rows > 0) {

                    echo "<form action='vrijemeTermin.php' method='POST'>";
                    echo "Odaberite zaposlenika <br>"; 
                    while($row = $result->fetch_assoc()) {
                        echo "<input type='radio' name='Zaposlenici' value=" .$row["Ime"]. "> ".$row["Ime"]." <br>"; 

                    }

                    echo "<p><input type='submit' value='Rezerviraj termin' /></p>";
                    echo "</form>";
                    echo "<a href = 'rezervirajTermin.php'>Go back</a>";
                } else {
                    echo "0 results";
                }

                mysqli_close($con);
                ?>

            </div>
        </head>

    </html>
