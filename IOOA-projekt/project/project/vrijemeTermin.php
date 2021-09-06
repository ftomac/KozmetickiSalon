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
                    $servername = "ucka.veleri.hr";
                    $username = "ftomac";
                    $password = "11";
                    $dbname = "ftomac";

                    $con = new mysqli($servername, $username, $password, $dbname);
                    session_start();
                    if(!isset($_SESSION['Username'])){
                        echo "No session detected!";
                        return;
                    }
                    if (mysqli_connect_errno($con))
                    {
                        echo "MySql Error: " . mysqli_connect_error();
                    }
                    $radioVal = $_POST["Zaposlenici"];

                    $_SESSION['Ime'] = $radioVal;
                    echo "Izabrali ste zaposlenika : " . $radioVal . "<br><br>";
                    echo "Izaberite datum i vrijeme (Vrijeme mora biti puni sat npr. 13.00) : <br><br>";
                    ?>
                    <form action="checkResult.php" method="POST">
                        <input type="datetime-local" name="DateTime" min="2021-09-07T14:30">
                        <input type="submit" value="Enter">
                    </form>
                    <?php
                    echo "<a href = 'rezervirajTermin.php'>Go back</a>";
                    mysqli_close($con);
                    ?>
                </body>
                </html>
