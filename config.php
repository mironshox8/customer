<?php
   session_start();
   
   $conn = new mysqli("localhost", "root", "", "mydatabase");
   if ($conn->connect_error) {
       die("Ma'lumotlar bazasiga ulanishda xatolik: " . $conn->connect_error);
   }
   ?>