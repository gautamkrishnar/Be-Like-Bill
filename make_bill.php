<html>
    <head>
        <title>Be like Bill</title>
        <link rel="shortcut icon" href="icon.png" />
        
        <meta charset="UTF-8">
        <meta name="description" content="Be like Bill is an online platform that allows you to create your own "Be like Bill" Memes. Its really simple and easy to use. It also has an API to create and use Be like Bill memes on your website.">
        <meta name="keywords" content="">
        <meta name="author" content="Gautam krishna R">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut" src="icon.png" />
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
     <body>
    <center>
        <?php
        
        if(filter_input(INPUT_POST, 'name')){
        $name = filter_input(INPUT_POST, 'name');
        $sex = filter_input(INPUT_POST, 'sex');
        echo '<img src="billgen.php?name='.$name.'&sex='.$sex.'" />';
        }
 else {
     echo '<img src="billgen.php" />';
 }
         ?>
        <br/><br/>
        Right click the image to and select the "save as" option to save.
        <br/><br/><b>
        Created with <img src="http://www.clker.com/cliparts/V/a/r/B/D/o/love-md.png" width="15px" height="inherit"/> 
        By <a href="http://github.com/gautamkrishnar/" target="_blank">Gautam krishna R.</a><br/>
        API documentation and source code is available <a href="https://github.com/gautamkrishnar/Be-Like-Bill" target="_blank"> here. </a></b>
    </center>
    </body>
</html>