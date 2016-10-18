<?php
class Shru {}
    function Shru($array){
    
    $html = '<table>';
  
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
    array('Project_Id'=>'236678','UPDATED_DATE'=>'6/13/2016', 'Week'=>'25', 'Inspector Name'=>'Bill', 'Status'=>'Pending'),
    array('Project_Id'=>'786987','UPDATED_DATE'=>'6/9/2016', 'Week'=>'26', 'Inspector Name'=>'John', 'Status'=>'Closed'),
    array('Project_Id'=>'989165','UPDATED_DATE'=>'6/1/2016', 'Week'=>'25', 'Inspector Name'=>'Chris', 'Status'=>'Pending'),
    array('Project_Id'=>'934210','UPDATED_DATE'=>'7/27/2016', 'Week'=>'30', 'Inspector Name'=>'Luis', 'Status'=>'Open'),
    array('Project_Id'=>'989165','UPDATED_DATE'=>'2/1/2016', 'Week'=>'11', 'Inspector Name'=>'Chris', 'Status'=>'Open'),
    array('Project_Id'=>'763451','UPDATED_DATE'=>'4/9/2016', 'Week'=>'18', 'Inspector Name'=>'Bill', 'Status'=>'Pending'),
    


);

echo Shru($array);

?>
