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
	<h2>Nomor 1</h2>
	<a href="<?php echo base_url()?>">Back</a>
	<br><br><br>

	<div id="body">
		<?php 
			echo implode(", ",$arrOddNumbers);		
		?>
	</div>
	
</div>

</body>
</html>