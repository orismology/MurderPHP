<?php 

/* 

MurderPHP  - Copyright (C) 2012-14 Adam D. and Dominic M. 
=============================================================

MurderPHP is a PHP framework for bloodying up your PHP scripts. 

Well, when we say framework, we really just mean function set.

And when we say function set, we really mean that we've just renamed
a whole bunch of existing PHP functions so that they're more gruesome.


*/

// Here it is, the original and the best
function murder($murder = null){
	if ($murder == null){
		die(); // Added, becuase we don't want blank marquee tags, do we?
	}else{
 		 die('<marquee style="font-family: \'Comic Sans MS\'; font-size: 100px;"><blink>'.$murder.'</blink></marquee>');
 		 // Adapted from adamd's implementation on 16 Jul 12, 12:36 AM
 		 // Should probably think about changing this from marquee and blink to css3 animations
}

// Kill script with PHP error
function assassinate($message,$type){
  trigger_error($message,$type);
}

// Because we can't have ! in function names, ahh by itself will have to do
function print_ahh($expression, $return = false ){
	print_r($expression, $return);
}

function amputate($string='',$start=0,$length=NULL){ //~ad catch incase we don't have parameters specified.
	if($string!="" && is_numeric($length) && is_numeric($start)){ //~ad we should be checking for a number where numbers are required
		substr($string,$start,$length);
	}else{
		assassinate('amputate() requires a minimum of 2 parameters, one string and one numeric.', E_USER_ERROR);
	}
}
?>
