<?php
/*
 * Created with <3 By Gautam Krishna R
 * www.github.com/gautamkrishnar
 */
header('Content-type: image/jpeg');
$name = filter_input(INPUT_GET, 'name');
$sex = filter_input(INPUT_GET, 'sex');

// Result array from memelist.php
include 'memelist.php';
// Randomizing results
$ran_mem=array_rand($memlist,1);
$text = $memlist[$ran_mem];

// if user inputs his name
if($name)
{
$name=ucfirst($name);
$text = preg_replace('/\bBill\b/', $name, $text);
$text = preg_replace('/\bbill\b/', $name, $text);
}

// if bill is female
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
      imagejpeg($img);
      imagedestroy($img);
?> 
