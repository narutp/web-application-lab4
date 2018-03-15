<?php
    $cft = "cft";
    $cfs = "cfs";
    setcookie($cft, $_POST["input_font_type"]);
    setcookie($cfs, $_POST["input_font_size"]);
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
        
        <form action="index.php" method="post">
            Previous font type <div name="previous_font_type"><?php echo $_COOKIE["cft"]; ?></div>
            Previous font size <div name="previous_font_size"><?php echo $_COOKIE["cfs"]; ?></div>
            Current font type <div name="current_font_type">
                <?php if(!(isset($_COOKIE["cft"]))) { 
                    echo $_COOKIE["cft"];
                    } else {
                        echo $_POST["input_font_type"]; 
                    } ?>
                    </div>
            Current font size <div name="current_font_size"><?php if(!(isset($_COOKIE["cfs"]))) { 
                    echo $_COOKIE["cfs"];
                    } else {
                        echo $_POST["input_font_size"]; 
                    } ?></div>
            Input font type: <input type="text" name="input_font_type"><br>
            Input font size: <input type="text" name="input_font_size"><br>
            <input type="submit">
        </form>
    </div>
</body>
</html>