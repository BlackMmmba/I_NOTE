<?php 
$sevr_name = "localhost";
$username="root";
$password="";
$datab="notes";
// connect mysql 
$roop = mysqli_connect($sevr_name, $username , $password, $datab);
 if ($_SERVER["REQUEST_METHOD"]=="POST") {
     $title=$_POST["in"];
     $dis=$_POST["des"];
     $sql="INSERT INTO `notes`(`title`,`descrption`) VALUES('$title', '$dis')";
     $result=mysqli_query($roop,$sql); 
  # code...}
 }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iNote
    </title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#myTable').DataTable();

    }); 
    </script>
</head>
<body>
    <!-- nav bar  -->
    <!-- Button trigger modal -->

<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">Open modal </button> -->
<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
 <header>    
    <div id="you" >
       <p class="root">iNotes</p>
       <p class="root ">Home</p>
       <p class="root ">About</p>
       <p class="root">Contact us</p>
       <input type="text" class="toto" id="dog">
       <button class="toto " id="fo" te>search</button>  
    </div>
 </header>
 <h1 id="h1">Add a Note to iNotes</h1>
<div>
  <form action="index.php" method="post">
    <p id="ssos">
        New title
    </p><br>
    <input type="text" id="filename" name="in">
    <p id="ssos1">
     Note Description
    </p>
    <textarea id="new" rows="7" cols="123" name="des">

    </textarea >
      <input type="submit" style="display: block; margin-left: 100px; margin-top: 5px;
      background-color: rgb(52, 203, 153); color: whitesmoke; padding: 10px;
      border: none; border-radius: 10px;" value="Add Note">
  </form>
</div>  
<div class="jojo"> 
<table style="margin-left: 100px; margin-top:20px;"  border="1px">
  <thead>
    <th>Sno</th>
    <th>title</th>
    <th colspan="6">descrption</th>
    <th>action</th>
  
  </thead>
  <?php
   $sql="SELECT * FROM notes";
   $result = mysqli_query($roop,$sql);
   $lol=0;
   while($dogs=mysqli_fetch_assoc($result)){
             $lol=$lol+1;
         echo"<tr>";
         echo"<td>".$lol."</td>";
         echo'<td>'.$dogs["title"]."</td>".'</h3>';
         echo'<td>'.$dogs["descrption"]."</td>";
         echo"</tr>"; 
   }
   ?>
</table>
</div>

</body>
</html>