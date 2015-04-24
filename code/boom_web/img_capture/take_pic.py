#!/usr/bin/python
import picamera
import time
import os
from subprocess import check_output
pictureNumber = str(len([name for name in os.listdir("/var/www/ELSpring2015/code/boom_web/img_capture")]))

os.system("sudo service motion stop")
with picamera.PiCamera() as camera:
	camera.capture('/var/www/ELSpring2015/code/boom_web/img_capture/' + 'img_' + pictureNumber + '.jpg')
	os.system("sudo service motion start")
	
