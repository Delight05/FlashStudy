<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="Project.css">
    <link rel="stylesheet" href="mdb5/css/mdb.min.css">
</head>
<body>

  <section class="signupbody">
    <main>
        <div class="imgdiv">
          <img src="images/OIP2.png">
        </div>
                <h1>Sign up to FlashStudy</h1>
         
        <div>
                <form method="POST">

                     <label>Username</label>
                     <input type="text" name="name" id="name" required>
                     <label>Email</label>
                     <input type="email" name="email" id="email" required>
                     <label>Password</label>
                     <input type="text" name="Password" id="password" required>
                </form>
              
                                     <button class="signup-btn">Sign Up</button>
                                    <p class="last-text">Already have an account?<a href="login.html" class="login2">Log in</a></p>
              </div>
        
        <hr>
    
  </main>
  </section>


  <?php

      //database connection

        $servername  = "localhost";
        $username = "root";
        $password = "";
        $dbname = "Register";

        //create connection

        $conn = new mysqli($servername, $username, $password, $dbname);

        //check connection
        if($conn->connect_errno){
          die("connection fail" . $conn->connecton_errno);
        }

        //process form submission
        if($_SERVER["REQUEST_METHOD"]=="POST"){
          $username = $_POST["username"];
          $email = $_POST["email"];
          $password = $_POST["password"];
        }

        //insert data into database
        $sql = "INSERT INTO user(id,name,email,password,role) VALUES('$id', '$name', '$email', '$password', '$role')";

        if($conn->query($sql)===TRUE){
          echo "Sign up successful";
        }
        else{
          echo "Error:" .$sql. "<br>". $conn->error;
        }

        //close database connection
        $conn->close();






?>

<style>

  /* signup page */

.signupbody{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

main{
    display: flex;
    width: 60%;
    height: 60%;
    color: black;
    justify-content: center;
}

img{
    width: 25em;
    height: 40em;
    position: relative;
    top: -1em;
}

main form{
    /* background-image: linear-gradient(white, peru); */
    box-shadow: inset;
    margin: 15px;
    padding: 40px;
    height: 40vh;
    width: 50vh;
    position: relative;
    left: 3em;
    
}

label{
  font-size: 1.5em;
}

p{
  font-size: 1.5em;
  position: relative;
  left: 5em;
  top: -2.5em;
}

h1{
  font-size: 4em;

}

.signup-btn{
    background-color: peru;
    color: white;
    cursor: pointer;
    padding: 13px 140px;
    font-size: 1.5rem;
    border-radius: 0.5rem;
    border: none;
    margin: 4%;  
    position: relative;
    left: 4.5em;
    top: -2em;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}



/* *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
 */
</style>
 </body>
</html>