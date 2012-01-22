<?php 
# SCRIPT PROVIDED BY WEBUNE.COM 
# PHP HOSTING AND MORE 

$example = parse_url($_SERVER['REQUEST_URI']); 
print_r(array_values($example)); 

?>