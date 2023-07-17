<?php
   $server_name="localhost";
   $user="root";
   $password="";
   $database="utsav";
   $op=false;
   $root=mysqli_connect($server_name,$user,$password,$database);
   $title=false;
   $notes=false;
   if(isset($_POST['in'])&&isset($_POST['des'])){
   $title=$_POST["in"];
   $notes=$_POST["des"];}
   $op=false;
   if ($_SERVER["REQUEST_METHOD"]=="POST"&&isset($title)&&isset($notes)) {
    $sql="INSERT INTO `mytable`(`title`,`notes`)VALUES('$title','$notes')";
     $op=mysqli_query($root,$sql);
   } 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saveyournotes</title>
    <link rel="stylesheet" href="text.css">
    <link rel="stylesheet" href="style.css">
    <link rel="websiteicon" href="404-tick.png">
    <style>

    </style>
</head>
<body>
<div id="you" >
       <p class="root">iNotes</p>
       <p class="root ">Home</p>
       <p class="root ">About</p>
       <p class="root">Contact us</p>
       <input type="text" class="toto" id="dog">
       <button class="toto " id="fo" te>search</button>  
    </div>
<div class="bluepu">    
    <form action="signup.php" method="post">
        <p>
            Enter your title
        </p>
        <textarea role="10" cols="70" name="in">

        </textarea>
        <p>Enter you note</p>
        <textarea rows="15" cols="70" name="des"></textarea>
        <button type="submit" id="butt" onclick="openpopup()">Click</button>
        
    </form>
    <a href="veiw.php">see your notes</a>
    <div class="popup" id="popup">
        <img src="404-tick.png">
        <h2>Thank you</h2>
        <p>
            you requst is submit
        </p>
        <br><br>
        <button onclick="closepopup()">Ok</button>
    </div>
</div>
<?php
echo $op ;?>

    
</div>
<script>
        let popup= document.getElementById("butt");
        function openpopup(){
            popup.classList.add("open-popup");
        }
        function closepopup(){
            popup.classList.remove("open-popup");
        }
    let root=45;
    document.cookie="cname="+root; 
</script>
</body>
</html>
