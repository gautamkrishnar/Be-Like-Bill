<html>
    <head>
        <title>Be like Bill</title>
        <link rel="shortcut icon" href="icon.png" />
		<!-- Facebook API -->
        <script>
		  window.fbAsyncInit = function() {
			FB.init({
			  appId      : '293143591037696',
			  xfbml      : true,
			  version    : 'v2.8'
			});
		  };

		  (function(d, s, id){
			 var js, fjs = d.getElementsByTagName(s)[0];
			 if (d.getElementById(id)) {return;}
			 js = d.createElement(s); js.id = id;
			 js.src = "//connect.facebook.net/en_US/sdk.js";
			 fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut" src="icon.png" />
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
     <body>
    <center>
        <?php
        require_once('billgen.php');
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
        // Echoing the image url to src tag of img
        echo '<img src="';
		genbill();
		echo $path;
        echo '" class="billimg"/>';
		echo '<br/><br/>';
		echo '<a class="btn" onclick="share_prompt()">Share on Facebook</a>';
        }
		else if($_SERVER['REQUEST_METHOD'] === 'GET'){
        echo '<img src="';
		if (isset($_GET['name']))
		{
			genbill();
		}
		echo $path;
        echo '" class="billimg"/>';
		echo '<br/><br/>';
		echo '<a class="btn" href="index.php">Create your own</a>';
        }

 else {
     echo '<img src="';
     genbill();
	 echo $path;
     echo '" class="billimg"/>';
	}
         ?>
		<br/><br/><br/>
        <?php
         echo '<a class="btn" href="'.$path.'" download="'.$path.'">Download</a>';
        ?>
		<br/>
        <br/><br/><b>
        Created with <img src="https://www.clker.com/cliparts/V/a/r/B/D/o/love-md.png" width="15px" height="inherit"/>
        By <a href="http://github.com/gautamkrishnar/" target="_blank">Gautam krishna R.</a><br/>
        API documentation and source code is available <a href="https://github.com/gautamkrishnar/Be-Like-Bill" target="_blank"> here. </a></b>
    </center>
	<!-- Facebook Share -->
	<script>
			function share_prompt() {
				FB.ui(
				  {
					method: 'share',
					href: encodeURI('<?php echo $siteurl."/make_bill.php?name=".$name."&sex=".$sex."&tdir=".$tdir."&rand=".$ran_mem; ?>'),
					title: 'Be Like <?php echo $name; ?>',
					picture: '<?php echo $full_image_path; ?>',
					caption: '<?php echo $siteurl ?>',
					description: 'Check out the Be-Like-Bill Meme generator',
				  },
				  // callback
				  function(response) {
					if (response && !response.error_message) {
					  alert("Thanks for sharing...");
					} else {
					  alert("Error, Can't share the Bill...");
					}
				  }
				);
			}
			</script>
    </body>
</html>
