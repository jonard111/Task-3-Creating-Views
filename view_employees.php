<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "hrdb";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM employee_full_view";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Employee HR View</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-4">

<h3 class="mb-3 text-center">HR Employee Information</h3>

<table class="table table-bordered table-striped">

<thead class="table-dark">
<tr>
<th>Employee ID</th>
<th>Name</th>
<th>Job Title</th>
<th>Employment Date</th>
<th>Manager Name</th>
<th>Department Name</th>
<th>Location</th>
</tr>
</thead>

<tbody>

<?php

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){

        echo "<tr>";
        echo "<td>".$row['Employee ID']."</td>";
        echo "<td>".$row['Full_name']."</td>";
        echo "<td>".$row['Job Title']."</td>";
        echo "<td>".$row['Employee Date']."</td>";
        echo "<td>".$row['Manager Name']."</td>";
        echo "<td>".$row['Department Name']."</td>";
        echo "<td>".$row['Location']."</td>";
        echo "</tr>";
    }

}else{
    echo "<tr><td colspan='7'>No Data Found</td></tr>";
}

?>

</tbody>
</table>

</body>
</html>