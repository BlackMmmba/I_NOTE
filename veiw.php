<?php
$server_name="localhost";
$user="root";
$password="";
$database="utsav";
$root=mysqli_connect($server_name,$user,$password,$database);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="text.css">
</head>
<body>
    <div class="bluepu">    
        <table border="1px">
            <tr>
                <th>
                    Tittle
                </th>
                <th>
                    Notes
                </th>
            </tr>
            <hr>
            <tr>
                <?php
                $sql="SELECT * FROM mytable";
                $result = mysqli_query($root,$sql);
                $lol=0;
                while($dogs=mysqli_fetch_assoc($result)){
                          $lol=$lol+1;
                          echo "<tr>";
                          echo "<td>".$dogs['title']."</td>";
                          echo "<td>".var_dump((int)$dogs['notes'])."</td>";
                          echo "</tr>";

                }
                ?>
                <button onclick="fx()">DELETE</button>
            </tr>
        </table>
        <a href="signup.php">back to home page </a>
        <div class="popup" id="popup">
            <h2>Thank you</h2>
            <p>
                you requst is submit
            </p>
            <br><br>
            <button onclick="closepopup()">Ok</button>
        </div>
    </div>
    <script>
       function fx(){
        let x =2
            document.cookie="cname="+x;
       } 
       
        
    </script>
   <?php echo $_COOKIE['cname']; ?>     
</body>
</html>