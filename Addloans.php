<?php
    $fname = ''; $lname = ''; $uname = ''; $email = ''; $password = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fname = Trimer($_POST['firstname']);
        $lname = Trimer($_POST['lastname']);
        $uname = Trimer($_POST['username']);
        $email = Trimer($_POST['email']);
        $password = Trimer($_POST['password']);
    }
    function Trimer($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $server = 'localhost'; $username = 'mnrashford@10'; $_password = 'mnrashford@10@nasonnia'; $database = 'MyAdministrators';
    $connect = new mysqli($server, $username, $_password, $database);
    if ($connect->connect_error) {
        die("Failed to connect");
    } else {
        echo "";
    }
    $statement = $connect->prepare("INSERT INTO Administrators (
        Firstname, Lastname, Username, Email, Password
    ) VALUES (?, ?, ?, ?, ?)");
    $statement->bind_param('sssss', $_fname, $_lname, $_uname, $_email, $__password);
    $_fname = $fname; $_lname = $lname; $_uname = $uname; $_email = $email; $__password = $password;
    $statement->execute();
    $statement->close();
    $delete_repeated_rows = "DELETE FROM Administrators WHERE Email = '$email'";
    $connect->close();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body style="display: flex; flex-direction: column; justify-content: center;">
        <h2>
            Added new Administrator:
            <br>
                <?php
                    echo $fname." ".$lname."<br>"."@".$uname;
                 ?>
            </br>
        </h2>
        <button type="button" style="padding: 10px; margin: 10px; width: 25%;"><a href="Login.php">Login</a></button>
    </body>
</html>
