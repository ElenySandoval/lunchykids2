<?php
session_start();
$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'lunchy_kids'

) or die(mysqli_erro($mysqli));

?>