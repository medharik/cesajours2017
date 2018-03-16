<?php 
include_once '../utils.php';
 $produits=recuperer_tous("produit");
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Liste de produit</title>

<link rel="stylesheet" type="text/css" href="../css/datatables.css">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php 
extract($_GET);

     ?>
      <?php if (isset($add)): ?>
       <div class="alert alert-success">Produit ajouté avec succès</div>
     <?php endif ?>
     <?php if (isset($del)): ?>
       <div class="alert alert-danger">Produit Supprimé avec succès</div>
     <?php endif ?>
     <?php if (isset($upd)): ?>
       <div class="alert alert-warning">Produit modifié avec succès</div>
     <?php endif ?>
    <div class="container">
        <a href="nouveau.php" class="btn btn-sm btn-primary">Nouveau</a>
      <table class="tab table table-striped">
            <thead>
              <tr>
                <th>Photo</th>
                <th>#</th>
                <th>Libellé</th>
                <th>Prix</th>
                <th>Catégorie</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
            
              <?php foreach ($produits as $c => $ligne): ?>
                 <tr>
                  <td><img src="<?php echo $ligne['photo'] ?>" width="100"></td>  
                <td><?php echo $ligne['id'] ?></td>
                <td><?php echo $ligne['libelle'] ?></td>
                <td><?php echo $ligne['prix'] ?></td>
                 <td><?php

                 $categorie=recuperer_par_id($ligne['categorie_id'] , "categorie");
                 echo $categorie['nom'];

                 ?></td>

<td><a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo $ligne['id'] ?>" onclick="return confirm('voulez vous vraiment supprimer cet élément ?')">Supprimer</a>
    <a class="btn btn-sm btn-warning"  href="edit.php?id=<?php echo $ligne['id'] ?>" >Editer</a>
<a href="show.php?id=<?php echo $ligne['id'] ?>" class="btn btn-sm btn-info">Consulter</a>
                </td>
              </tr>

              <?php endforeach ?>
             
            </tbody>
          </table>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="../js/datatables.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>

   <script type="text/javascript">
    $(document).ready(function() {
        $('.tab').dataTable( {
            "language": {
    "sEmptyTable":      "Keine Daten in der Tabelle vorhanden",
    "sInfo":            "_START_ bis _END_ von _TOTAL_ Einträgen",
    "sInfoEmpty":       "0 bis 0 von 0 Einträgen",
    "sInfoFiltered":    "(gefiltert von _MAX_ Einträgen)",
    "sInfoPostFix":     "",
    "sInfoThousands":   ".",
    "sLengthMenu":      "_MENU_ Einträge anzeigen",
    "sLoadingRecords":  "Wird geladen...",
    "sProcessing":      "Bitte warten...",
    "sSearch":          "Suchen",
    "sZeroRecords":     "Keine Einträge vorhanden.",
    "oPaginate": {
        "sFirst":       "Erste",
        "sPrevious":    "Zurück",
        "sNext":        "Nächste",
        "sLast":        "Letzte"
    },
    "oAria": {
        "sSortAscending":  ": aktivieren, um Spalte aufsteigend zu sortieren",
        "sSortDescending": ": aktivieren, um Spalte absteigend zu sortieren"
    },
    select: {
            rows: {
            _: '%d Zeilen ausgewählt',
            0: 'Zum Auswählen auf eine Zeile klicken',
            1: '1 Zeile ausgewählt'
            }
    }
}
        } );
    } );
</script>
  </body>
</html>