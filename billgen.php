<?php
require './gd-text/Box.php';
require './gd-text/Color.php';
require './gd-text/TextWrapping.php';
require './gd-text/VerticalAlignment.php';
require './gd-text/HorizontalAlignment.php';
require './gd-text/Struct/Point.php';
require './gd-text/Struct/Rectangle.php';
use GDText\Struct\Point;
use GDText\Box;
use GDText\Color;

function genbill(){
	global $path;
	global $name;
	global $sex;
	global $ran_mem;
	global $path;
	global $siteurl;
	global $full_image_path;
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
	foreach (glob($dir."*.jpg") as $billfile) 
	{
		if (filemtime($billfile) < time() - $deltime) 
		{
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
	if($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		$name = filter_input(INPUT_POST, 'name');
		if($name=="")
		{
			$name="Bill";
		}
		$sex = filter_input(INPUT_POST, 'sex');
		$tdir = filter_input(INPUT_POST, 'tdir');
	}
	else if($_SERVER['REQUEST_METHOD'] === 'GET')
	{
		$name = filter_input(INPUT_GET, 'name');
		$sex = filter_input(INPUT_GET, 'sex');
		$tdir = filter_input(INPUT_GET, 'tdir');
	}

	if(isset($name))
	{
		$name=ucfirst($name);
		$text = preg_replace('/\bBill\b/', $name, $text);
		$text = preg_replace('/\bbill\b/', $name, $text);
	}
	else
	{
		$name="Bill";
	}
	//Just fot preventing a notice when $sesx is not found when the billgen.php is called via browser for debugging purposes
	if (!isset($sex)){$sex='m';}


	// if bill is female then changing the sentences by replacing the words
	if($sex=='f')
	{
		$text = preg_replace('/\bhis\b/', 'her', $text);
		$text = preg_replace('/\bHis\b/', 'Her', $text);
		$text = preg_replace('/\bhe\b/', 'she', $text);
		$text = preg_replace('/\bHe\b/', 'She', $text);
		$text = preg_replace('/\bhim\b/', 'her', $text);
		$text = preg_replace('/\bHim\b/', 'Her', $text);
		$text = preg_replace('/\bHimself\b/', 'Herself', $text);
		$text = preg_replace('/\bhimself\b/', 'herself', $text);
		$img = imagecreatefromjpeg('bill-ovl-f.jpg');
	}
	else
	{
		$img = imagecreatefromjpeg('bill-ovl.jpg');
	}

	$textBox = new Box($img);
	$textBox->setFontSize(24);
	$textBox->setFontFace('arialbd.ttf');
	$textBox->setFontColor(new Color(0,0,0));
	switch($tdir)
	{

		case "rightToLeft":
			imageflip($img,IMG_FLIP_HORIZONTAL);
			$textBox->setBox(
				150, 
				30,
				imagesx($img) - 150,
				imagesy($img)
			);
			$textBox->setTextAlign('right','center');
			break;

		case "leftToRight":
		default:
			$textBox->setBox(
				40, 
				30,
				imagesx($img) - 150,
				imagesy($img) - 60
			);
			$textBox->setTextAlign('left','center');
			break;
	}
	

	$text = wordwrap($text,200,"\n",true);
	$textBox->draw($text);
	
	$filename = ".jpg";
	$siteurl = "https://$_SERVER[HTTP_HOST]";
	if($name=="Bill")
	{
		$path = "./tmpbill/BeLikeBill_" . $billpath . "_" . $filename;
		$full_image_path = $siteurl."/tmpbill/BeLikeBill_" . $billpath . "_" . $filename;
	}
	else
	{
		if(preg_match('/([^\x00-\x7F])/',$name))
		{
			//Name is not ASCII and therefore will create a URL which can't be browsed to properly and will make a weird file name
			$path = "./tmpbill/BeLikeBill_" . $billpath . $filename;
			$full_image_path = $siteurl."/tmpbill/BeLikeBill_" . $billpath . $filename;
		}
		else
		{
			$path = "./tmpbill/BeLikeBill_" . $name . $billpath . $filename;
			$full_image_path = $siteurl."/tmpbill/BeLikeBill_" . $name . $billpath . $filename;
		}
	}

	// To replace space in name
	$path	= str_replace(' ', '_', $path);
	$full_image_path = str_replace(' ', '_', $full_image_path);
	imagejpeg($img,$path);
}
?>
