<?php

funtcion connect_to_databse(){
    $servername="localhost";
    $username='root';
    $password='root';
    $databasename='basetest01';
    try{
        $pdo= new PDO ("mysql:host=$servername;dbname=$databasename",$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully<br/>";
        $sql="INSERT INTO produit(id, nom,description,prix,qauntité)"
        VALUES(8,'T-shirt noir','T-shirt coton de couleur noire',15.50;10)";
        $pdo->exec($sql)";
        echo'Entrée ajoutée à la table';
    }
    catch( PDOException $e)
}
echo "Connection Failed : ". $e->getMessage();
    
}
connect_to_databse();
?>