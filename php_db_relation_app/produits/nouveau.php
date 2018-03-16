<?php include '../utils.php'; 
$categories=recuperer_tous("categorie");
 ?>
<?php extract($_GET); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>nouveau produit</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    
<div class="container">
<?php if (isset($add)): ?>
 <div class="alert alert-success"> Ajout effectué avec succès</div>
<?php endif ?>
  <form class="form-horizontal" action="create.php" method="post" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Ajout de produit</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="libelle">Libellé</label>  
  <div class="col-md-4">
  <input id="libelle" name="libelle" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prix">Prix</label>  
  <div class="col-md-4">
  <input id="prix" name="prix" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prix">catégorie</label>  
  <div class="col-md-4">

  <select name="categorie_id">
 
<?php foreach ($categories as $c): ?>
      <option value="<?php echo $c['id'] ?>"><?php echo $c['nom'] ?></option>

<?php endforeach ?>
 

  </select>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="libelle">Photo</label>  
  <div class="col-md-4">
  <input id="photo" name="photo" type="file" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary">Ajouter</button>
  </div>
</div>

</fieldset>
</form>

</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>