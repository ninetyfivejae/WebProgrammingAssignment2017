<?php
$conn = mysqli_connect("localhost", "root", "000000");
mysqli_select_db($conn, "webprogramming");
$result = mysqli_query($conn, "SELECT * FROM comment");
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Double Volante Team Eleven</title>
    <link rel="stylesheet" href="http://localhost:8080/WebAssignmentTeam11/style.css">
  </head>
  <body id="mainBody">
    <div class="mainCover"></div>

    <div class="l-wrapper">
      <h1 class="header">Comments about Psy</h1>

      <div class="changeBackgroundColor">
        <ul class="menuUnorderedList">
          <li class="menuList"><a href="http://localhost:8080/WebAssignmentTeam11/index.html">Home</a></li>
          <li class="menuList"><a href="http://localhost:8080/WebAssignmentTeam11/AboutUs.html">About Us</a></li>
          <li class="menuList"><a href="http://localhost:8080/WebAssignmentTeam11/Contact.html">Contact</a></li>
          <input type="button" value="black" onclick="document.getElementById('mainBody').className='black' " />
          <input type="button" value="white" onclick="document.getElementById('mainBody').className='white' " />
        </ul>
      </div>

      <article class="comments">
        <?php
        while($row=mysqli_fetch_assoc($result)){
          echo '<li>'.$row['commenttime']." ".$row['username']." : ".$row['comment'].'</li>'."\n";
        }
        ?>
      </article>

      <article class="feedback">
        <form action="process.php" method="post">
          <p><input id="username" type="text" name="username" placeholder="username"></p>
          <p><textarea id="comment" name="comment" rows="5" cols="50" placeholder="Comments"></textarea></p>
          <input type="submit">
        </form>
      </article>

    </div>

  </body>
</html>
