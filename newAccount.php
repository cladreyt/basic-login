<html>
  <head>
    <title>Sign Up</title>
  </head>
  <body>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

      Username:<br><input type="text" name="newUsername"><br>
      Password:<br><input type="password" name="newPassword" id="newPassword"><br><br><input type="button" onclick="showPass()"> Show Password </button><br>
      
      <script>
          function showPass(){
              var x = document.getElementById("newPassword");
              if(x.type === "password"){
                  x.type = "text";
              }else{
                  x.type = "password";
              }
          }
      </script>
      <br>
      <input type="submit" name="submit" value="Sign Up">

    </form>
    
  </body>
</html>

<?php

$passFile = file('C:\Users\chris\Desktop\Code\Projects\userList.txt', FILE_IGNORE_NEW_LINES);

if(isset($_POST['newUsername']) && isset($_POST['newPassword'])){
    $user = $_POST['newUsername'];
    $pass = $_POST['newPassword'];
    if(verify($user)){
        addNew($user, $pass);
        header("Location: login.php");
    }else{
      print("Username is already taken.");
    }
  }

function verify($user){
    global $passFile;
    foreach($passFile as $u){
        if(strcmp($user, substr($u, 0, strpos($u, ":"))) == 0){
            return false;
        }
    }
    return true;
}

function addNew($user, $pass){
    $file = fopen('C:\Users\chris\Desktop\Code\Projects\userList.txt', 'a');
    fwrite($file, $user . ":" . $pass . "\n");
    fclose();
}

?>