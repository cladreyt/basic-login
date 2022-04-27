<html>
  <head>
    <title>Login</title>
  </head>
  <body>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

      Username:<br><input type="text" name="username"><br>
      Password:<br><input type="password" name="password"><br>
      <br>
      <input type="submit" name="submit" value = "Login">
      <button type="button" onclick="document.location.href='newAccount.php'">Sign Up</button>

    </form>
    
  </body>
</html>

<?php

$passFile = file('C:\Users\chris\Desktop\Code\Projects\userList.txt', FILE_IGNORE_NEW_LINES);
$recordFile = fopen('C:\Users\chris\Desktop\Code\Projects\records.txt', 'a');

if(isset($_POST['username']) && isset($_POST['password'])){
  $payload = $_POST['username'] . ":" . $_POST['password'];
  if(verify($payload)){
    header("Location: http://google.com");
    fwrite($recordFile, $_POST['username'] . ':' . $_POST['password'] . " - Correct\n");
  }else{
    print("False " . $payload);
    fwrite($recordFile, $_POST['username'] . ':' . $_POST['password'] . "\n");
  }
}

function verify($userPass){
  global $passFile;
  if(array_search($userPass, $passFile) !== false){
    return true;
  }
  return false;
}

?>