#  Personal Contribution/Action Log for code development portion.
### Contributer: Charles Palsa

#### Date: March 10th, 2015
###### Actions: 
				* Built a preliminary web interface to outline the direction of the web app portion of the project. 
				* Utilizes bootstrap as a convenient framework.
				* Organizes tasks in a visual manner

#### Date: March 24th, 2015
###### Actions: 
				* Assumed responsibility for camera-to-web functionality
				* Assigned tasks to Jose and Shamiul 
				* Jose is to come up with a script that can store metadata and path data of pictures in a database. 
				* Shamiul is to familiarize with bootstrap and build the UI for camera and motor controls. 
				
#### Date: March 24th, 2015
###### Actions:
				* Researched methods of streaming raspberry pi video feed to web.
				* upgraded pi firmware and installed official pi camera drivers
				* A motion-jpeg server was the solution. Installed Motion Jpeg server/Motion tracking software.
				* Used a 3rd party java applet to provide full browser support. Unfortunately the solution is not perfect.
				* Began writing camera functionality scripts ie record/snapshot
				
#### Date: April 2nd, 2015
###### Actions:
				* MJPEG is supported natively in 3/4 major browsers (Safari, FireFox, Chrome) and the java applet has been removed
				* Cleaned up the interface, created buttons to activate camera control scripts.
				* Video feed panel now responds correctly when video feed is offline, and displays an appropriate image.
				
#### Date: April 14th, 2015
###### Actions:
				* Camera functionality is fully operational: Take Pic and Feed work.
				* Web server permissions adjusted, PHP is used to run camera scripts
				* Javascript GUI functionality implemented
				
#### Date: April 24th, 2015
###### Actions:	
				* Motor and website integration begun, web server permissions adjusted
				* Feed pauses and refreshes successfully after picture.
				* Website layout redesign
				
#### Date: May 1st, 2015
###### Actions:
				* Attached camera to Camera Boom.
				* Created start up scripts for camera and server initialization.
				
#### List of Resources:
###### Motion Server
				* http://lavrsen.dk/foswiki/bin/view/Motion/WebHome
				* Used to serve MJPEG feed from Pi Camera
###### Bootstrap Framework
				* www.getbootstrap.com
				* html/CSS framework to implement website design
###### Pi Camera Python Documentation
				* http://picamera.readthedocs.org/en/release-1.10/
				* Documentation for the Pi Camera Module, built in functions, etc.
###### Apache WebServer Documentation
				* http://httpd.apache.org
				* WebServer on the Pi to host website. Documentation for web permissions when using PHP
###### PHP, JQuery/Ajax Documentation
				* php.net/docs.php
				* http://api.jquery.com/jQuery.ajax
				* Used for various GUI-to-Server interaction with Camera and Motor
###### JavaScript Documentation
				* w3schools.com
				* DOM manipulation and feed controls