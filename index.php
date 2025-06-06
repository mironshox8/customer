<?php
   include 'config.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $username = $_POST['username'];
       $password = $_POST['password'];
       
       $sql = "SELECT * FROM xaridorlar WHERE username='$username' AND password='$password'";
       $result = $conn->query($sql);
       
       if ($result->num_rows > 0) {
           $_SESSION['admin'] = $username;
           header("Location: dashboard.php");
       } else {
           echo "<p style='color: red;'>Noto'g'ri login yoki parol!</p>";
       }
   }
   ?>
   <style>
   img {
  
  border-radius: 4px;
  padding: 5px;
  width: 300px;
}
</style>
   <link rel="stylesheet" type="text/css" href="chiroy.css">
   <br>
   <div class="container">
   <img src="images/logo.jpg" alt="Logo" class="logo" hight >
       <h2>Shaxsiy kabinet</h2>
       <form method="POST">
           <input type="text" name="username" placeholder="Login" required>
           <input type="password" name="password" placeholder="Parol" required>
           <button type="submit">Kirish</button>
       </form>
   </div>