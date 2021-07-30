
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/20d8c1d8d5.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="assets/JS/lib/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" href="assets/css/baza.css">
        <script type="text/javascript" src="assets/JS/salon.js"></script>
        <link rel="icon" href="/assets/css/imgs/icon.png" type="image/png" sizes="16x16">
        <title>Kozmetički salon StudioS</title>
    </head>
    <nav class="navbar bg-dark navbar-dark fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand"><i class="fas"></i>Kozmetički salon StudioS</a>
            <li class="nav-item">
                <a class="nav-link bg-dark fas" href="../index.html">POČETNA</a>
                <a class="nav-link bg-dark fas" href="../Cjenik.html">CJENIK</a>
            </li>
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
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Brojmobitela</th>
                    <th>vUsluge</th>
                    <th>vPlacanja</th>
                    <th>DatumTermina</th>

                </tr>
                <?php
                $conn = mysqli_connect('ucka.veleri.hr', 'ftomac', '11', 'ftomac');
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "select * FROM Podaci_o_terminima";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo  "<tr><td>" . $row["ID_korisnika"]. "</td><td>" .$row["Ime"] . "</td><td>" . $row["Prezime"]. "</td><td>" . $row["Brojmobitela"] . "</td><td>". $row["vUsluge"]. "</td><td>" . $row["vPlacanja"] . "</td><td>" . $row["DatumTermina"] . "</td><td>" ."</td></tr>";
                    }
                    echo "</table>";
                } else { echo "0 results"; }
                $conn->close();

                ?>
            </table>
        </div>
    </body>
</html>



