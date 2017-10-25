<?php

 		//host
        $host = 'localhost';

        //usuario
        $usuario = 'root';

        //senha
        $senha = '';

        //banco de dados
        $database = 'os';

$conn = new PDO("mysql:dbname=".$database . "; host=".$host, $usuario, $senha);

$stmt = $conn->prepare("SELECT * FROM pessoa");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

/*foreach ($results as $row){

   foreach ($row as $key => $value){
       echo "<strong>" . $key . ":</strong>" . $value . "<br/>";
   }
   echo "=====================================================<br>";
}*/
echo json_encode($results);

?>