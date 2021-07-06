<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="favicon.png" />
    <title>Default</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="public/css/Bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="public/css/style.css">
</head>
<body>
   <div class="container">
   <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="media">
        <div class="navbar-header active liens">

          <?php
             if(isset($_GET['p'])){
                  $pages = explode('.', $_GET['p']);
             }else{
                $pages = "users";
             }
          ?>
          <?php if($pages[0] === 'admin'){?>
             <a href="index.php?p=admin.etudiant.index" class="active navbar-brand">Home</a>
            
            <a href="index.php?p=admin.matiere.index" class="navbar-brand actif">Matiere</a>
            <a href="index.php?p=admin.Notes.index" class="navbar-brand actif">Notes</a>
            <a href="index.php?p=admin.type.index" class="navbar-brand actif">type</a>
            <a href="index.php?p=admin.filiere.index" class="navbar-brand actif">filiere</a>
            <a href="index.php?p=admin.professeur.index" class="navbar-brand actif">Enseignant</a>

           <?php } else { ?>
                  <a href="index.php" class="active navbar-brand">Home</a>
            <a href="index.php?p=enseignement.index" class="navbar-brand actif">Enseignement</a>
            <a href="index.php?p=<?= isset($etudiant) ? $etudiant :null ?>" class="navbar-brand actif"><?= $lien ?></a>
            <a href="index.php?p=matiere.index" class="navbar-brand actif">Matiere</a>
            <a href="index.php?p=Notes.index" class="navbar-brand actif">Notes</a>
            <a href="index.php?p=type.index" class="navbar-brand actif">type</a>
            <a href="index.php?p=filiere.index" class="navbar-brand actif">filiere</a>
            <a href="index.php?p=enseignant.index" class="navbar-brand actif">Enseignant</a>
           <?php } ?>
    </div>
   </div>
   </nav>
   

      <div class="contenu" style="top: 200px;">
         <div class="starter-template" style="padding-top: 100px;">

            <?= $content; ?>
         </div> 
      </div>

      <script src="public/js/jquery-3.3.1.min.js"></script>
      <script src="public/js/Bootstrap.min.js"></script>
</div>
</body>
</html>