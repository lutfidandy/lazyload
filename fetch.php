<?php
if(isset($_POST["limit"], $_POST["start"]))
{
 $connect = mysqli_connect("localhost", "root", "", "school");
 $query = "SELECT * FROM user ORDER BY id DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
  echo '
  <div class="user">
  <h3>'.$row["name"].'</h3>
  <p>'.$row["email"].'</p>
  <p>'.$row["phone"].'</p>
  <hr />
  </div>
  ';
 }
}

?>