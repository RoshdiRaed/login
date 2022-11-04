<?php

$conn = new mysqli("localhost", "root", "", "types");

$st = $conn->query("select * from news");

if ($st->num_rows > 0) {
    while ($row = $st->fetch_assoc()) {
        echo $row["idno"] . " - " . $row["title"] . " ▶️▶▶️▶ " . $row["txt"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
