<!doctype html>
<html lang="UTF-8">

<head>
  <title>Gestion des Stock</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <script src="/JavaScript/monJS.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link type="text/javascript" href="https://code.jquery.com/jquery-3.5.1.js">
  <link type="application/javascript" href="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
  <link type="text/javascript" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type='text/css' href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="/Css/style.css">


</head>
<!-- Barre de navigation -->

<body style="  background-color: #435165;">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="http://localhost/index.php">Gestion Stock</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="../Reception/reception.php" role="button" aria-haspopup="true" aria-expanded="false">Réception</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="../Reception/reception.php">Afficher</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../Reception/createR.php">Ajouter</a>
          </div>
        </li>
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="../Livraison/livraison.php" role="button" aria-haspopup="true" aria-expanded="false">Livraison</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="../Livraison/livraison.php">Afficher</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../Livraison/createL.php">Ajouter</a>
          </div>
        </li>
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="../Retour/retour.php" role="button" aria-haspopup="true" aria-expanded="false">Retour</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="../Retour/retour.php">Afficher</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../Retour/createRe.php">Ajouter</a>
          </div>
        </li>
        <li class="nav-item">
        <li class="nav-item active">
          <a class="nav-link" href="../tiers.php">Tiers</a>
        </li>
        <li class="nav-item">
        <li class="nav-item active">
          <a class="nav-link" href="../insert.php">Ajouter un fichier</a>
        </li>
      </ul>      
      <form class="d-flex">
        <a style=" margin-right: 20px;" href="../Login/profil.php" class="btn btn-primary"> <?php echo $_SESSION['username']; ?> </a>
        <a style=" margin-left: 20px;" href="../Login/logout.php" class="btn btn-danger">Déconnecter</a>
      </form>
    </div>
  </nav>