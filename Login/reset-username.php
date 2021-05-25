<?php

// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: ../www/index.php");
    exit;
}

// Include config file
require_once "../Connexion/db.php";

// Define variables and initialize with empty values
$new_username = $confirm_username = "";
$new_username_err = $confirm_username_err = "";

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate new password
    if (empty(trim($_POST["new_username"]))) {
        $new_username_err = "Entrer un nouveau nom d'Utilisateur .";
    } elseif (strlen(trim($_POST["new_username"])) < 3) {
        $new_username_err = "Le nom de l'Utilisateur doit contenir au moins 3 caractère.";
    } else {
        $new_username = trim($_POST["new_username"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_username"]))) {
        $confirm_username_err = "Veuillez comfirmer le nom de l'Utilisateur  .";
    } else {
        $confirm_username = trim($_POST["confirm_username"]);
        if (empty($new_username_err) && ($new_username != $confirm_username)) {
            $confirm_username_err = "Le nom de l'Utilisateur ne correspond pas.";
        }
    }

    // Check input errors before updating the database
    if (empty($new_username_err) && empty($confirm_username_err)) {
        // Prepare an update statement
        $sql = "UPDATE utilisateur SET nom_utilisateur = :username WHERE id = :id";

        if ($stmt = $connection->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":id", $param_id, PDO::PARAM_INT);

            // Set parameters
            $param_username = $new_username;            
            $param_id = $_SESSION["id"];

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Password updated successfully. Destroy the session, and redirect to login page
                session_destroy();
                header("location: ../Login/login.php");
                exit();
            } else {
                echo "Quelque chose ne va pas veuillez, réessayer plus tard .";
            }

            // Close statement
            unset($stmt);
        }
    }

    // Close connection
    unset($connection);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reset Username</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 350px;
            padding: 20px;
        }

        body {
            background-color: #435165;
        }

        .wrapper {
            width: 400px;
            background-color: #ffffff;
            box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
            margin: 100px auto;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>Changer le nom d'Utilisateur</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($new_username_err)) ? 'has-error' : ''; ?>">
                <label>Nouveau Nom d'Utilisateur</label>
                <input type="text" name="new_username" class="form-control" value="<?php echo $new_username; ?>">
                <span class="help-block"><?php echo $new_username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_username_err)) ? 'has-error' : ''; ?>">
                <label>Confirmer le nom d'Utilisateur</label>
                <input type="text" name="confirm_username" class="form-control">
                <span class="help-block"><?php echo $confirm_username_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Changer">
                <a class="btn btn-link" href="../Login/profil.php">Annulé</a>
            </div>
        </form>
    </div>
</body>


</html>