<?php 
function drawLine($kata)
{
	$tes = str_split($kata);
	$batas =count($tes);
	echo "<table>";
	for ($i=0; $i <$batas ; $i++) { 
		echo "<tr>";
		for ($j=0; $j <$batas ; $j++) { 
			if ($i==$j) {
				echo "<td style=text-align:center;border-style:solid;width:20px;height:20px;padding:5px;border-bottom-color: blue;>".$tes[$i]."</td>";
			}else{
				echo "<td style=background:#fafafb></td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";
}
echo drawLine('BOOTCAMP');
echo drawLine('ASIK');
echo drawLine('SEMOGA LOLOS TAHAP BERIKUTNYA');
