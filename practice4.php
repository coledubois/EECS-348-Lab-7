<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php

function multiplicationTable($size) {
    echo "<h2>Multiplication Table ($size x $size)</h2>";
    echo "<table>";

    echo "<tr><th>*</th>";
    for ($j = 1; $j <= $size; $j++) {
        echo "<th>$j</th>";
    }
    echo "</tr>";

    for ($i = 1; $i <= $size; $i++) {
        echo "<tr>";
        echo "<th>$i</th>"; 
        for ($j = 1; $j <= $size; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}


if (isset($_POST['size'])) {
    $size = intval($_POST['size']); 
    if ($size > 0) {
        multiplicationTable($size);
    } else {
        echo "Please enter a valid positive integer size for the multiplication table.";
    }
} else {
    echo "Please enter a size for the multiplication table.";
}
?>

</body>
</html>
