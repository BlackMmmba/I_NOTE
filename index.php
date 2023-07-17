<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding: 0px;
            margin: 0px;

        }
        body{
            background-color: aquamarine;
        }
        .rootsp{
            width:300px;
            height:300px;
            border: solid;
            position: absolute;
            top: 50%;
            left:50%;
            transform: translate(-50%,-50%);
            border-radius: 20px;
            background-image: url(404-tick.png);
            background-repeat: no-repeat;
            background-size: contain;
            color: rgb(21, 121, 209);
        }
        .rootsp h1{
            position: relative;
            left:20%;
            color: #ff1288;
            
        }
        .rootsp p{
            margin-top: 20px;
            margin-left: 10px;
            font-size: 20px;
        }
        .rootsp input{
            margin-top: 15px;
            margin-left: 10%;
            width:200px;
            padding-left: 10px;
            border-radius: 10px;
            height:20px;
            font-size: 22px;
        }
        .rootsp a{
            display: inline-block;
            text-decoration: none;
            margin-left: 60%;
            position: relative;
            bottom:-40px;
            padding:15px,20px;
            color:#ff1286;
            font-weight:bolder;
        }
    </style>
</head>
<body>
    <div class="rootsp">
    <form method="post" action="new.html">
        <h1>Inote</h1>
        <p>Username</p>
        <input type="text" autocomplete="none">
        <p>Password</p>
        <input type="password"><br>
        <a href="signup.php">LOG IN</a>

    </form>
    </div>
    </form>
</body>
</html>