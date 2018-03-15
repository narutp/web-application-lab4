<?php
    session_start();
    // $cft = "cft";
    // $cfs = "cfs";
    // setcookie($cft, $_POST["input_font_type"]);
    // setcookie($cfs, $_POST["input_font_size"]);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="container">
        
        <form action="index(session).php" method="post">
            Previous font type <div name="previous_font_type">
                <?php if(isset($_POST["input_font_type"])) {
                    echo $_SESSION["cft"]; 
                } ?></div>
            Previous font size <div name="previous_font_size">
                <?php if(isset($_POST["input_font_size"])) {
                    echo $_SESSION["cfs"]; 
                } ?></div>
            Current font type <div name="current_font_type">
                <?php if(isset($_POST["input_font_type"])) { 
                    echo $_POST["input_font_type"];
                    } else {
                        echo $_SESSION["cft"];
                    } ?>
                </div>
            Current font size <div name="current_font_size">
                <?php if(isset($_POST["input_font_size"])) { 
                    echo $_POST["input_font_size"];
                    } else {
                        echo $_SESSION["cfs"];
                    } ?>
                </div>
            Input font type: <input type="text" name="input_font_type"><br>
            Input font size: <input type="text" name="input_font_size"><br>
            <input type="submit">
        </form>
        <?php $_SESSION["cft"] = $_POST["input_font_type"]; 
        $_SESSION["cfs"] = $_POST["input_font_size"];
        ?>
    </div>
</body>
</html>