<?php
require "conn.php";


$result = mysqli_query($conn, "Select subject_name from subject");

while($row = mysqli_fetch_assoc($result))
{
	$temp[] = $row;
}

echo json_encode($temp);
mysqli_close($conn);

?>