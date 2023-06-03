<?php
session_start();
if($_POST) 
{
$user = $_POST['firstname'];
$_SESSION['usname'] = $user;
header("Location:swayam.php");
}
?>

<!Doctype html>
<html>

<head>
    <style>
        body {
            background-image: url('fg.png');
        }

        div.sec {
            background-image: url('skb.png');
            height: 420px;
            width: 20%;
            margin-left: 600px;
            margin-top: 160px;
            padding-top: 40px;
            border-radius: 15%;
        }

        .center {
            margin-top: 100px;
            position: absolute;
            top: 430px;
            left: 760px;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .tfield {
            margin-top: 30px;
            margin-left: 70px;
            text-align: left;
        }

        #lbl{
            margin-top: 10px;
        }
        
        .first{
            width: 280px;
            height: 100px;
            border-style: solid;
            border-color: white;
            border-width: 8px;
            background-color: rgb(216, 34, 39);
            margin-left: 5px;
            border-radius: 20px;
            
        }

        .second{
            width: 280px;
            height: 100px;
            border-style: solid;
            border-color: white;
            border-width: 8px;
            background-color: rgb(255, 227, 74);
            margin-left: 5px;
            border-radius: 20px;
        }

        #intex{
            font-size: 25px;
            color: white;
            margin-left: 10px;
            margin-top: 30px;
            position: absolute;
            font-family: arial black;
        }
        
        #below{
            font-size: 25px;
            color: black;
            margin-left: 30px;
            margin-top: 20px;
            position: absolute;
            font-family: Trebuchet MS;
        }

        #sub{
            padding-top: 8px;
            padding-bottom: 8px;
            padding-left: 18px;
            padding-right: 18px;
            background-image: linear-gradient(#e7e7e7, #e9e9e9, #e2e2e2, #d1d1d1, #cacaca, #cdcdcd);
            border-color: azure;
            font-family: “Comic Sans MS”, “Comic Sans”, cursive;
            border-radius: 90%;
        }
        
        #fn{
            font-family: “Comic Sans MS”, “Comic Sans”, cursive;
        }
    </style>
</head>

<body>
    <form method="post" action="">
        <div class="sec">
        <div class = "first"><span id="intex">Country Flags Quiz</span></div>
        <div class = "second"><span id="below">&nbsp;Guess the flags of <br> &nbsp;&nbsp;&nbsp; 197 countries</span></div>
            <div class="tfield"><label id="fn">UserName:</label><input type="text" name="firstname" required id="firstname"></div>
        </div>
        <div class="center"><input type="submit" id= "sub" name="submit" value="SUBMIT" /></div>
        </div>
    </form>
    </div>
    <script>
        var en = document.getElementById('firstname')
        en.addEventListener("keypress", function(event){
            if (event.key === "Enter") {
                event.preventDefault();
                document.getElementById('sub').click()
            }
        })
    </script>
</body>

</html>

