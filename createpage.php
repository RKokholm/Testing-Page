<?php include_once('includes/header.php'); ?>

	
<form action="createpage.php" method="POST" id="teamsform">

	<input type="number" name="teamamount" id="teamamount" placeholder="How many teams"><br/><br/>
	<input type="submit" name="amountnext" value="next">

</form>

<?php

$teamamount = $_POST['teamamount'];

if ($_POST){

	if ($teamamount = 16){

	}

} else {
	echo 'specify amount of teams';
}


?>


<?php include_once('includes/footer.php'); ?>