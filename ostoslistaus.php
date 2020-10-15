<?php
$host='localhost';
$dbname='t9hape00';
$username='t9hape00';
$password='';
 $con = mysqli_connect($host,$username,$password,$dbname);
 if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

$result = mysqli_query($con,"SELECT * FROM NaytaOstokset");
 echo "<table border='1'>
 <tr>
 <th>Etunimi</th>
 <th>Sukunimi</th>
 <th>Tuote</th>
 <th>Ostos_pvm</th>
 </tr>";
 while($row = mysqli_fetch_array($result)) {
 echo "<tr>";
 echo "<td>" . $row['Etunimi'] . "</td>";
 echo "<td>" . $row['Sukunimi'] . "</td>";
 echo "<td>" . $row['Nimi'] . "</td>";
 echo "<td>" . $row['Ostos_pvm'] . "</td>";
 echo "</tr>";
 }
 echo "</table>";
 mysqli_close($con);

?>