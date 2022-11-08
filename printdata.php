
<?php 

include 'db.php';

$data = '<table border=1>
<tr>
<td>id</td>
<td>title</td>
<td>des</td>
<td>time</td>
<td>print</td>
</tr>';

$sql = "SELECT * FROM `std_info` Where 1 limit 0,10";
$result = $db->query($sql);
while($row = $result->fetch_assoc()){

    $data.= '<tr>
     <td>'.$row['id'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['email'].'</td>
        <td>'.$row['phone'].'</td>
        <td>'.$row['native'].'</td>
        <td><button data-id="'.$row['id'].'" class="print">print</button></td>
    </tr>';

}

$data.= '</table>';

echo $data;

?>