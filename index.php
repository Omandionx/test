<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css" />
</head>
<body>

<form method="post" action="zapisz.php">
    <label for="imie">Imię:</label>
    <input type="text" name="imie" />
    <label for="nazwisko">Nazwisko:</label>
    <input type="text" name="nazwisko" />
    <label for="wiek">Wiek:</label>
    <input type="text" name="wiek" />
    <input type="submit" value="Dodaj" />
</form>

<?php
  
    include 'connect.php';

    $sqlRead = "SELECT * FROM pracownik";
    $result = $conn->query($sqlRead);

    if ($result->num_rows > 0) {
        echo "<table><tr>";
        echo "<th>Nr.</th>";
        echo "<th>Imię</th>";
        echo "<th>Nazwisko</th>";
        echo "<th>Wiek</th>";
        echo "</tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<th>".$row["id"]."</th><th>".$row["imie"]."</th><th>".$row["nazwisko"]."</th><th>".$row["wiek"]."</th>";
        echo "</tr>";
    }
        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
?>

</body>
</html>