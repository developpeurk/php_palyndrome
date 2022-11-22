<?php
$aDeviner = 150;
$erreur=null;
$success=null;
$value=null;
if (isset($_POST['chiffre'])) :
    $value = (int)$_POST['chiffre'];
   if($value > $aDeviner):
      $erreur = "Votre chiffre est trop grand";
   elseif ($value < $aDeviner):
       $erreur = "Votre chiffre est trop petit";
   else:
       $success = "Bravo! vous avez deviné le chiffre <strong>$aDeviner</strong>";
   endif;
endif;
require 'header.php'
?>

<?php if ($erreur) : ?>
    <div class="alert alert-danger"><?= $erreur ?></div>
<?php elseif ($success): ?>
  <div class="alert alert-success"><?= $success ?></div>
<?php endif; ?>

<form action="/jeu.php" method="POST">
    <div class="form-group">
        <input type="number" class="form-control" name="chiffre" placeholder="entre 0 et 1000" value="<?= $value ?>">
    </div>
    <button type="submit" class="btn btn-info">Deviner</button>
</form>

<h2>GET</h2>
<pre>
    <?php var_dump($_GET); ?>
</pre>

<h2>POST</h2>
<pre>
    <?php var_dump($_POST); ?>
</pre>


<?php require 'footer.php'; ?>

