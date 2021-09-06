<!DOCTYPE html>   
<html lang="en">
    <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="icon" href="/assets/css/imgs/icon.png" type="image/png" sizes="16x16">
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet"> 
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://kit.fontawesome.com/20d8c1d8d5.js" crossorigin="anonymous"></script>
            <script type="text/javascript" src="assets/JS/lib/jquery-3.4.1.min.js"></script>
            <script type="text/javascript" src="assets/JS/salon.js"></script>
            <link rel="stylesheet" href="css/front.css">
            <title>Kozmetički salon StudioS</title>


            <nav class="navbar bg-dark navbar-dark fixed-top">
                <div class="container">

                </div>
            </nav>
            <div id="header" class="jumbotron text-center">
                <p class="h1 naslov">Kozmetički salon StudioS</p>


                <?php
                $servername = "ucka.veleri.hr";
                $username = "ftomac";
                $password = "11";
                $dbname = "ftomac";

                $con = new mysqli($servername, $username, $password, $dbname);

                if (mysqli_connect_errno($con))
                {
                    echo "MySql Error: " . mysqli_connect_error();
                }
                session_start();
                if(!isset($_SESSION['Username'])){
                    echo "No session detected!";
                    return;
                }
                $Ime = $_SESSION['Ime'];
                $sql = "SELECT * FROM Termini WHERE Zaposlenik='$Ime' && Vrijeme='$_POST[DateTime]'";

                $query=mysqli_query($con,$sql);
                $result = $con->query($sql);	
                if ($result->num_rows <1 ) {
                    $time = strtotime($_POST['DateTime']);
                    $min = date('i', $time);

                    if($min%60 != '0'){
                        echo "Mogu se odabrati samo puni satovi (npr.13.00)!";	}
                    else {
                        $username = $_SESSION['Username'];
                        $sql = "INSERT INTO Termini(Klijent, Zaposlenik, Vrijeme) " .
                            "VALUES('$username', '$Ime','" . $_POST['DateTime'] . "')";


                        if ($con->query($sql) === TRUE) {
                            echo "Termin je uspjesno rezerviran. <br />";
                            echo "<a href = 'loginSuccess.php'>Go back</a>";
                        } else {
                            echo "Error updating record: " . $con->error;
                        }
                    }

                } else {
                    echo "Zaposlenik nije slobodan u tom terminu.";
                    echo "<a href = 'loginSuccess.php'>Go back</a>";
                }

                mysqli_close($con);
                ?>
            </div>
        </head>
    </html>
