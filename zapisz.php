<?php
    include 'connect.php';
   
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $wiek = $_POST['wiek'];
    
    if($imie==''){
      echo "<p>Nie podano imienia</p>";
    }
    else if ($nazwisko==''){
      echo "<p>Nie podano nazwiska</p>";
    }
    else if($wiek==''){
      echo "<p>Nie podano wieku</p>";
    }
    else {
      $sql = "INSERT INTO pracownik (imie, nazwisko, wiek) VALUES ('$imie','$nazwisko','$wiek')";

      if ($conn->query($sql) === TRUE) {
          echo "Dodano nowego pracownika<br>";
      } else {
          echo "Błąd: " . $sql . "<br>" . $conn->error;
      }
    }
    echo('<a href="index.php">Wróć</a>');
?>