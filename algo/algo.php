<?php

$conn= mysqli_connect("localhost","root","","dbTable");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows=[];
    while($row = mysqli_fetch_assoc($result)){

        $rows[] =$row;
    }
    return $rows;
}
function input($data){
    global $conn;
    $name =$data["name"];
    $email=$data["email"];
    $matkul=$data["matkul"];
    $query = "INSERT INTO tbAdmin
     VALUES
    ('','$name','$email','$matkul')";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

?>