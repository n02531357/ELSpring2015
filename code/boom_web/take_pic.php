<?php 
exec("python ./img_capture/take_pic.py 2>&1", $output);
print_r($output);
?>