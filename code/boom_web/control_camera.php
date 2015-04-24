<?php

$motor_script_location = "/home/pi/Adafruit-Raspberry-Pi-Python-Code/Adafruit_PWM_Servo_Driver/test_WriteFile.py";
$m1 = 0;
$m2 = 0;
$m3 = 0;

$direction = $_POST['direction'];

if ($direction == 'xup')
{
	$m1 = 0;
	$m2 = 0;
	$m3 = 0;
}
else if ($direction == 'xdown')
{
	$m1 = 0;
	$m2 = 0;
	$m3 = 0;
}
else if ($direction == 'yup')
{
	$m1 = 0;
	$m2 = 0;
	$m3 = 0;
}
else if ($direction == 'ydown')
{
	$m1 = 0;
	$m2 = 0;
	$m3 = 0;
}
else if ($direction == 'zup')
{
	$m1 = 0;
	$m2 = 0;
	$m3 = 0;
}
else if ($direction == 'zdown')
{
	$m1 = 0;
	$m2 = 0;
	$m3 = 0;
}
else 
{
	//error
	$m1 = 0;
	$m2 = 0;
	$m3 = 0;
}

$cmd = "python ".$motor_script_location." ".$m1." ".$m2." ".$m3;
$output = array();
exec($cmd, $output);

?>