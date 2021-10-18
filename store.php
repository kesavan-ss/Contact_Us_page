<?php
echo "<b>done<b>";
/*$email = $_POST['mail'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$query = $_POST['query'];
 
$conn =new msqli('localhost','root','','project1');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into storedata(email,name,subject,message,query)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$email,$name,$subject,$message,$query);
    $stmt->execute();
    echo "Successfully sent";
    $stmt->close();
    $conn->close();
} */
?>