<?php
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
$ran_mem=array_rand($memlist,1);
$text = $memlist[$ran_mem];

// if user inputs his name
if(isset($name))
{
$name=ucfirst($name);
$text = preg_replace('/\bBill\b/', $name, $text);
$text = preg_replace('/\bbill\b/', $name, $text);
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

}
      $img = imagecreatefromjpeg('bill-ovl.jpg');
      $clr = imagecolorallocate($img, 0, 0, 0);
      $font_path = 'arialbd.ttf';
      imagettftext($img, 18, 0, 30, 100, $clr,$font_path, $text);
      $billpath = rand(1,100000);
      $filename = ".jpg";
      $path = "./tmpbill/BeLikeBill_" . $billpath . "_" . $filename;
      imagejpeg($img,$path);
      echo $path;
?> 