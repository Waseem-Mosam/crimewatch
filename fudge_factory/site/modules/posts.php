<?php

include("connection.php");

$query = "SELECT * FROM posts";
$result=mysqli_query($con, $query);
$text="";

if($result->num_rows > 0){
    
    
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["first_name"];
        $field2name = $row["crime"];
        $field3name = $row["date"];
        $field4name = $row["time"];
        $field5name = $row["location"];
        $field6name = $row["description"];

        $text.="<tr> 
            <td>$field1name</td> 
            <td>$field2name</td> 
            <td>$field3name</td> 
            <td>$field4name</td> 
            <td>$field5name</td> 
            <td>$field6name</td> 
        </tr><br><br><br>";
        
    }
    $p=new Page('Posts');
    $p->setHeading('User Posts');
    $p->setContent($text.'<br>');
    $p->printIt();
}else{
    $p=new Page('Posts');
    $p->setHeading('User Posts');
    $text="No posts added. ";
    $p->setContent($text.'Feel free to add posts.<p/><br/>');
    $p->printIt();
}







