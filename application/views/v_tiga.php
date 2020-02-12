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
	<h2>Nomor 3</h2>
	<a href="<?php echo base_url()?>">Back</a>
	<br><br><br>
	
	<div id="body">
		i. <br>
		<table border=1>
			<?php
				$no = 0;
				foreach($sortedArray as $arr){
					$no++;
					echo 	'<tr>
								<td style="width:20px">'.$no.'</td>
								<td style="width:60px">'.$arr.'</td>
							</tr>';
				}
			?>
		</table>
		<br>
		ii.<br>
		<table border=1>
			<?php
				$no = 0;
				foreach($addedSortedArray as $arr){
					$no++;
					echo 	'<tr>
								<td style="width:20px">'.$no.'</td>
								<td style="width:60px">'.$arr.'</td>
							</tr>';
				}
			?>
		</table>
		<br>
		iii. <br>
		<table border=1>
			<?php
				$no = 0;
				foreach($remove10FromSortedArray as $arr){
					$no++;
					echo 	'<tr>
								<td style="width:20px">'.$no.'</td>
								<td style="width:60px">'.$arr.'</td>
							</tr>';
				}
			?>
		</table>
	</div>

</div>

</body>
</html>