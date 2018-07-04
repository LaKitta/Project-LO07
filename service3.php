<?php
require_once('dbconnect.php');

global $_POST;



//calculer revenue
if ($_POST['type']=="babysit") {
    $horaire = 7 + ($_POST[enfants]-1)*4;
}
elseif ($_POST['type']=="langue") {
    $horaire = $_POST['enfants']*15;
}
elseif ($_POST['type']=="reguliere") {
    $horaire = 10 + ($_POST['enfants']-1)*5;
}


$revenue = $horaire * $_POST[hour];//get revenue
//echo $revenue;

$sql1="select id_parents from parents where email='$_COOKIE[email]'";
$result=$mydb->query($sql1);
$row=$result->fetch_row();//get id_parent which is $row[0]


$sql="insert into service (id_nounous, id_parents, revenue, type) values('$_POST[id_nounou]', '$row[0]', '$revenue', '$_POST[type]')";
            $lol=$mydb->query($sql);
if($lol) echo "succedd";

echo "<br>";
echo "Faire evaluation quand fini";
?>
<form method="post" name="service" action ="./parent.php">
    <fieldset>
      <div class="Nom form_left form_l1">
          le note:
     <input type="number" name="note" style="width:200px;">
      </div>
      <div class="Ville form_left form_l2">
            evaluation:
          <input type="textera" name="evaluation" style="width:200px;">
      </div>
   
      <div class="form_left form_l12">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-danger">Reset</button>
      </div>
  </fieldset>
    </form>
