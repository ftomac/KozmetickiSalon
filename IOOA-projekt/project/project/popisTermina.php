
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">
        <link rel="icon" href="css/imgs/icon.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/20d8c1d8d5.js" crossorigin="anonymous"></script>
        <link rel="icon" href="/assets/css/imgs/icon.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" href="css/stil.css">
        <title>Kozmetički salon StudioS</title>
    </head>
    <nav class="navbar bg-dark navbar-dark fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand"><i class="fas"></i>Kozmetički salon StudioS</a>
        </div>
    </nav>
    <div id="header" class="jumbotron text-center">
        <p class="h1 naslov">Kozmetički salon StudioS</p>
    </div>
    <body>
        <div class="container">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Klijent</th>
                    <th>Zaposlenik</th>
                    <th>Vrijeme</th>
                </tr>
                <?php
                $conn = mysqli_connect('ucka.veleri.hr', 'ftomac', '11', 'ftomac');
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "select * FROM Termini ";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo  "<tr><td>" . $row["ID"]. "</td><td>" .$row["Klijent"] . "</td><td>" . $row["Zaposlenik"]. "</td><td>" . $row["Vrijeme"] . "</td><td>" ."</td></tr>";
                    }
                    echo "</table>";
                } else { echo "0 results"; }

                $conn->close();

                ?>
            </table>
        </div>
    </body>
</html>