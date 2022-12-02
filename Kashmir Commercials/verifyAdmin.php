<?php
 
 $conn = "";
  
 try {
     $servername = "localhost:3306";
     $dbname = "kashmir commercials";
     $username = "root";
     $password = "";
   
     $conn = new PDO(
         "mysql:host=$servername; dbname=kashmir commercials",
         $username, $password
     );
    $conn->setAttribute(PDO::ATTR_ERRMODE,
                     PDO::ERRMODE_EXCEPTION);
 }
 catch(PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
 }
  
?>
<?php
  function test_input($data) {   
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
    
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
      $username = test_input($_POST["email"]);
      $password = test_input($_POST["password"]);
      $stmt = $conn->prepare("SELECT * FROM admin");
      $stmt->execute();
      $users = $stmt->fetchAll();
       
      foreach($users as $user) {
           
          if(($user['Email'] == $username) &&
              ($user['Password'] == $password)) {
                  header("location: adminpage.php");
          }
          else {
              echo "<script language='javascript'>";
              echo "alert('WRONG INFORMATION')";
              echo "</script>";
              die();
          }
      }
  }
   ?>