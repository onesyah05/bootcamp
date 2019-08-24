<?php 
function prima($kolom,$baris)
{
	
	$panjang = ($kolom*$baris)*5-10;
	$prim=array();
	
	for ($i=0; $i < $panjang; $i++) { 
		$a=0;
		for ($j=0; $j <$i ; $j++) {
			$sisa = fmod($i, $j);
			if (is_nan($sisa)) {
			 	$sisa =0;
			} 
			if ($sisa==0) {
				$a+=1;
			}
		}

		if ($a==2) {

			$prim[] =$i;
		}
	}
	echo "<table border=1>";
	$b =-1;
	for ($x=0; $x <$baris ; $x++) { 
		echo "<tr>";
		for ($y=0; $y <$kolom ; $y++) { 
			$b++;
			if ($b<count($prim)) {
				echo "<td style=padding:5px;text-align: center> ". $prim[$b]. "</td> ";
			}
		}
		echo "</tr>";
	}
	echo "</table>";
	

}
//(kolom,baris)
echo prima(4,3);

?>