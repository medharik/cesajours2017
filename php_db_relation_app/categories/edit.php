<?php 
include '../utils.php';
extract($_GET);//$id
$ligne=recuperer_par_id($id,"categorie" );
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>modification de la catégorie</title>
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
 <div class="alert alert-success"> Modification effectuée avec succès</div>
<?php endif ?>
  <form class="form-horizontal" action="update.php" method="post" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend> Edition de catégorie</legend>
<input type="hidden" name="id" value="<?php echo $ligne['id'] ?>">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nom">nom</label>  
  <div class="col-md-4">
  <input id="nom" name="nom" type="text" placeholder="" class="form-control input-md" required="" value="<?php echo $ligne['nom'] ?>">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="photo">photo</label>  
  <div class="col-md-4">
  <input id="photo" name="photo" type="file" placeholder="" class="form-control input-md" required="" value="<?php echo $ligne['photo'] ?>">
    
  </div>
</div>



<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button id="" name="" class="btn btn-primary">Modifier</button>
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