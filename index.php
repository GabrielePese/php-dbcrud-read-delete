<!-- esercizio:
seleziona tutto dalla tabella pagamenti e stampa il risultato in una lista ordinata (fatto in classe)
elimina dalla tabella pagamenti la riga con id 8 (fatto in classe)
elimina dalla tabella pagamenti la riga con pagante_id = 6 e con status = rejected
seleziona dalla tabella pagamenti le colonne id, status e price di tutti i pagamenti con price superiore a 600, stampa il risultato in una lista non ordinata -->


<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbhotel";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn && $conn->$connect_error) {
    echo "connection failed:". $conn->connect_error;
    return;
}
//  ESERCIZIO 1
// $sql = "
//     SELECT *
//     FROM pagamenti
// ";

// $result = $conn->query($sql);
// if ($result && $result->num_rows > 0) {
//     echo "<ul>";
//     while($row = $result->fetch_assoc()){
//     echo "<li>";
//     echo "ospite" . $row['id']. " ". $row['status']." ". $row ["price"]."<br>";
//     echo "</li>";
// } 
//  echo "</ul>";
// }

// ESERCIZIO 2
// $sql = "
//     DELETE 
//     FROM pagamenti
//     WHERE id = 8
// ";

// $result = $conn->query($sql);
// if ($result && $result->num_rows > 0) {
//     echo "<ul>";
//     while($row = $result->fetch_assoc()){
//     echo "<li>";
//     echo "ospite" . $row['id']. " ". $row['status']." ". $row ["price"]."<br>";
//     echo "</li>";
// } 
//  echo "</ul>";
// }


// ESERCIZIO 3
// $sql = "
//     DELETE 
//     FROM pagamenti
//     WHERE pagante_id = 6 AND status LIKE 'rejected'
// ";

// $result = $conn->query($sql);
// if ($result && $result->num_rows > 0) {
//     echo "<ul>";
//     while($row = $result->fetch_assoc()){
//     echo "<li>";
//     echo "ospite" . $row['id']. " ". $row['status']." ". $row ["price"]."<br>";
//     echo "</li>";
// } 
//  echo "</ul>";
// }

//ESERCIZIO 4
$sql = "
    SELECT pagamenti.id, pagamenti.status, pagamenti.price
    FROM pagamenti
    WHERE price > 600
";

$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    
    echo "<ul>";
    while($row = $result->fetch_assoc()){
    echo "<li>";
    echo "ospite" . $row['id']. " ". $row['status']." ". $row ["price"]."<br>";
    echo "</li>";
} 
 echo "</ul>";
}


elseif ($result){
    echo "0 result";
}else {
    echo "query error";
}
$conn -> close();