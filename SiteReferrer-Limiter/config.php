<?php
/******* CONFIGURATION FILE ******/
/* CREDITS: 
This file is a configuration file,
please stay attention to this file
beacause the stups enter in the code.
*/

$message_true = ""; // insert the message if the referrer site is ok (eg. if the referrer is http://google.it and the user come from http://google.it the site show an a message)
$message_false = ""; // insert the message if the referrer site is false
$referrer_true = array( // write here the referrers show the true message and access to the page
  '' => true, // Write style: 'http://THEWEBSITEALLOWED.com/' => true and if the sites is up to 1 site add the ,
  '' => true
);
$referrer_false = array( // write here the referrers show the false message and no access to the page
  '' => false, // Write style: 'http://THEWEBSITENOTALLOWED.com/' => false and if the sites is up to 1 site add the ,
  '' => false
);
?>
