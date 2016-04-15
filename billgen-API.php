<?php
/*
 * Created with <3 By Gautam Krishna R
 * www.github.com/gautamkrishnar
 * Be like bill API
 */
header('Content-type: image/jpeg');
$text="Use:\nbillgen-API.php?default=1 :- To generate meme from \ndefault text.\n\n"
        . "billgen-API.php?default=1&name=anu&sex=f :- specifies \nthe name\n"
        . "and sex. Generate the input based default memes.\n\n"
        . "billgen-API.php?text=your text here :- Generate meme \nusing"
        . " your own text. use '%0D%0A' for newline. \n"
        . "eg:billgen-API.php?text=Bill is smart%0D%0ABe like Bill";
$def = filter_input(INPUT_GET, 'default');
if($def==1)
{
$name = filter_input(INPUT_GET, 'name');
$sex = filter_input(INPUT_GET, 'sex');

// Including result array from memelist.php file
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
}
 else if(filter_input(INPUT_GET, 'text')) {
    $text=filter_input(INPUT_GET, 'text');
    $text=wordwrap($text,40,"\n",true);
}
      
      $img = imagecreatefromjpeg('bill-ovl.jpg');
      $clr = imagecolorallocate($img, 0, 0, 0);
      $font_path = 'arialbd.ttf';
      imagettftext($img, 18, 0, 30, 100, $clr,$font_path, $text);
      imagejpeg($img);
      imagedestroy($img);
?>
