<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select document to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload" name="submit">
</form>


</body>
</html>



<?php

class html_table {}
    function html_table($array){
        
	    $html = '<table border=1>';
	      
	          $html .= '<tr>';
		      foreach($array[0] as $key=>$value){
		                  $html .= '<th>' . $key . '</th>';
				          }
					      $html .= '</tr>';
					         
						     foreach( $array as $key=>$value){
						             $html .= '<tr>';
							             foreach($value as $key2=>$value2){
								                 $html .= '<td>' . $value2 . '</td>';
										         }
											         $html .= '</tr>';
												     }
												       
												           $html .= '</table>';
													       return $html;
													       }
													       $array = array(
													       array('Project_Id'=>'236678','UPDATED_DATE'=>'6/13/2016',
													       'Week'=>'25', 'Inspector Name'=>'Bill',
													       'Status'=>'Pending'),
													           array('Project_Id'=>'786987','UPDATED_DATE'=>'6/9/2016',
														   'Week'=>'26', 'Inspector Name'=>'John',
														   'Status'=>'Closed'),
														       array('Project_Id'=>'989165','UPDATED_DATE'=>'6/1/2016',
														       'Week'=>'25', 'Inspector
														       Name'=>'Chris', 'Status'=>'Pending'),
														           array('Project_Id'=>'934210','UPDATED_DATE'=>'7/27/2016',
															   'Week'=>'30', 'Inspector
															   Name'=>'Luis', 'Status'=>'Open'),
															       array('Project_Id'=>'989165','UPDATED_DATE'=>'2/1/2016',
															       'Week'=>'11', 'Inspector
															       Name'=>'Chris',
															       'Status'=>'Open'),
															           array('Project_Id'=>'763451','UPDATED_DATE'=>'4/9/2016',
																   'Week'=>'18', 'Inspector
																   Name'=>'Bill',
																   'Status'=>'Pending'),
																   );
																   echo html_table($array);
																   ?>
<?php
$html = '<table border=1>';
echo "<html><body><table border=1>\n\n";
$f = fopen("carSamples.csv", "r");
while (($line = fgetcsv($f)) !== false) {
        echo "<tr>";
        foreach ($line as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>\n";
}
fclose($f);
echo "\n</table border=1></body></html>";



    
?>



