<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Muhammad Ardiansyah</title>

</head>
<body>

<div id="container">
	<h2>Nomor 2</h2>
	<a href="<?php echo base_url()?>">Back</a>
	<br><br><br>
	
	<div id="body">
		<?php 
			echo 'i. New format date is '.$newFormat.'<br>';
			echo 'ii. Next 6 months from question date is '.$sixMonthDate.' (using question date format)<br>';
			echo 'iii. My age is '.$myAge;		
		?>
	</div>

</div>

</body>
</html>