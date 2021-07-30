<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "Korisničko ime može sadržavati jedino slova, brojeve i podvlake.";
    } else{

        $sql = "SELECT id FROM Korisnici WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = trim($_POST["username"]);

            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Ovo korisničko ime je već zauzeto.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Pokušajte ponovno kasnije.";
            }

            mysqli_stmt_close($stmt);
        }
    }


    if(empty(trim($_POST["password"]))){
        $password_err = "Molimo Vas unesite lozinku.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Lozinka mora sadržavati najmanje 6 znakova.";
    } else{
        $password = trim($_POST["password"]);
    }


    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Molimo Vas da potvrdite lozinku.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Lozinke se ne podudaraju.";
        }
    }

    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        $sql = "INSERT INTO Korisnici (username, password) VALUES (?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); 


            if(mysqli_stmt_execute($stmt)){
                header("location: login.php");
            } else{
                echo "Oops! Pokušajte ponovno kasnije.";
            }

            mysqli_stmt_close($stmt);
        }
    }

    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registracija</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="icon" href="/assets/css/imgs/icon.png" type="image/png" sizes="16x16">
        <style>
            body{ font: 14px sans-serif; }
            .wrapper{ width: 360px; padding: 20px; }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <h2>Registracija</h2>
            <p>Molimo Vas da ispunite ovaj obrazac kako bi se registrirali.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Koirsničko ime</label>
                    <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                </div>    
                <div class="form-group">
                    <label>Lozinka</label>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group">
                    <label>Potvrdi lozinku</label>
                    <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                    <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Potvrdi">
                    <input type="reset" class="btn btn-secondary ml-2" value="Resetiraj">
                </div>
                <p>Već imate korisnički račun? <a href="login.php">Prijavite se ovdje</a>.</p>
            </form>
        </div>    
    </body>