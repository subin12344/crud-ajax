<?php 

include 'db.php';

$data = '<table>
<tr>
<td>id</td>
<td>title</td>
<td>des</td>
<td>time</td>
</tr>';

$sql = "SELECT * FROM `std_info`";
$result = $db->query($sql);

$i=1;
while($row = $result->fetch_assoc()){

    $data.= '<tr>
        <td>'.$i.'</td>
        <td>'.$row['id'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['email'].'</td>
        <td>'.$row['phone'].'</td>
    </tr>';
$i++;
}

$data.= '</table>';

header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=download.xls");
echo $data;

exit;

?>