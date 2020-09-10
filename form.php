<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    
<?php include("nav.php");?>
</html>
<form>
 

  <div class="form-group col-md-4 container">
    <label for="inputText">Name</label>
    <input type="text" class="form-control" id="inputText">
  </div>

  <div class="form-group col-md-4 container">
    <label for="inputAddress">Adresse</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="n° rue">
  <div class="form-row ">
    <div class="form-group col-md-4">
      <label for="inputCity">Ville</label>
      <input type="text" class="form-control" id="inputCity">
    </div>   
     <div class="form-group col-md-4">
      <label for="inputZip">code postal</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Département</label>
      <input type="text" class="form-control" id="inputState">
    </div>
  </div>
  <div class="form-row container form-group col-md-12">
      <label for="inputEmail6">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-12">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
    <div class="form-group col-md-12 text-center">
  <button type="submit" class="btn btn-primary ">cliquez-ici</button>
    </div>
</div>
</form>
<script src="vendor/components/jquery/jquery.min.js"></script>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>