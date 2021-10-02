<html>
<head>
<!--//css -->
<style>
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 2px solid black;
        }
        th, td {
            padding: 10px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
</style>
</head>

<body bgcolor="#EEFDEF">
<?php
$con = mysqli_connect("localhost","root","","websensor");

$result = mysqli_query($con, "SELECT * FROM outscale");
echo "<table align='center' border='5'>
<tr>
<th style='font-size:85px'>Scale No.</th>
<th style='font-size:85px'>Weight</th>
<th style='font-size:85px'>Unit</th>
</tr>";
while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td style='font-size:85px'>" . $row['id'] . "</td>";
  echo "<td style='font-size:85px'>" . $row['weight'] . "</td>";
  echo "<td style='font-size:85px'>" . $row['unit'] . "</td>";
  echo "</tr>";
  }

echo "</table>";
mysqli_close($con);
?>
</body>
</html>