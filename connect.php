 <?php
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];

    //Database connection
    $conn = new mysqli('sql309.epizy.com','epiz_28251059','rJ9dNrx30T','epiz_28251059_portfolio');
    if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
    }else{
    $stmt = $conn->prepare("insert into message(name, email, subject) values(?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $subject);
    $stmt->execute();
    echo("Message has been sent successfully...");
    $stmt->close();
    $conn->close();
    }   
?>