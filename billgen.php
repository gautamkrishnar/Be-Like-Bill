<?php
function genbill(){
	global $path;
	global $name;
	global $sex;
	global $ran_mem;
	global $path;
	global $siteurl;
/*
 * Created with <3 By Gautam Krishna R
 * www.github.com/gautamkrishnar
 */

/*
 * Clearing all old generated images on the server to free up disk space, based on time.
 * Value given as $deltime is the time. The image which is older than $deltime will get deleted
 * Current value = 1 hour
 * Modify the value of $deltime to your preference
 */

// $deltime is in seconds. 3600s=1hr
      $deltime=3600;

      $dir = "./tmpbill/";
      foreach (glob($dir."*.jpg") as $billfile) {
          if (filemtime($billfile) < time() - $deltime) {
              unlink($billfile);
          }
          }

          
/*
 * Bill Generation module
 */
          
// Including result array from memelist.php file
include 'memelist.php';
// Randomizing results
if(filter_input(INPUT_GET, 'rand'))
{
	$ran_mem=filter_input(INPUT_GET, 'rand');
}
else
{
	$ran_mem=array_rand($memlist,1);
}
$text = $memlist[$ran_mem];
$billpath = rand(1,100000);
// if user inputs his name
 if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = filter_input(INPUT_POST, 'name');
		if($name=="")
		{
			$name="Bill";
		}
        $sex = filter_input(INPUT_POST, 'sex');
        }
else if($_SERVER['REQUEST_METHOD'] === 'GET'){
        $name = filter_input(INPUT_GET, 'name');
        $sex = filter_input(INPUT_GET, 'sex');
        }
if(isset($name))
{
$name=ucfirst($name);
$text = preg_replace('/\bBill\b/', $name, $text);
$text = preg_replace('/\bbill\b/', $name, $text);
}
else{
	$name="Bill";
}
//Just fot preventing a notice when $sesx is not found when the billgen.php is called via browser for debugging purposes
if (!isset($sex)){$sex='m';}


// if bill is female} then changing the sentences by replacing the words
if($sex=='f')
{
$text = preg_replace('/\bhis\b/', 'her', $text);
$text = preg_replace('/\bHis\b/', 'Her', $text);
$text = preg_replace('/\bhe\b/', 'she', $text);
$text = preg_replace('/\bHe\b/', 'She', $text);
$text = preg_replace('/\bhimself\b/', 'herself', $text);
$img = imagecreatefromjpeg('bill-ovl-f.jpg');
}
else{
      $img = imagecreatefromjpeg('bill-ovl.jpg');}
      $clr = imagecolorallocate($img, 0, 0, 0);
      $font_path = 'arialbd.ttf';
	  $text = wordwrap($text,40,"\n",true);
      imagettftext($img, 18, 0, 30, 100, $clr,$font_path, $text);
      $filename = ".jpg";
	  if($name=="Bill")
		{			
			$path = "./tmpbill/BeLikeBill_" . $billpath . "_" . $filename;
		}
	  else
	  {
		$path = "./tmpbill/BeLikeBill_" . $name . $billpath . $filename;
	  }

      // To replace space in name
	  $path	= str_replace(' ', '_', $path);
	  imagejpeg($img,$path);
	  $siteurl="http://".$_SERVER['SERVER_NAME']."/Be-Like-Bill/"; //Website url
      $path=$siteurl.$path;
	  $path=str_replace('/./','/',$path);
	 }


	 
	 ?>
