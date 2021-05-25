<?php session_start(); ?>
<?php require '../header.php'; ?> 
<link rel="stylesheet" href="/Css/style.css">
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<div class="wrapper">
        <h2>Profile</h2>
        <form action="#" method="post">
            <div class="form-group ">                           
                <label>Utilisateur : <?php echo  $_SESSION['username'] ?> </label>
                <a href="../Login/reset-username.php">Changer</a><br>        
            </div>
            <div class="form-group ">
                <label>Mot de passe : </label>                
                    <input type="password" value="<?php echo $_SESSION['password'] ?>" id="myInput">
                    <a href="../Login/reset-password.php">Changer</a><br><br>
                    <input type="checkbox" onclick="myFunction()">Afficher le mot de passe                 
            </div>                   
        </form>
    </div>