<?php
require_once('SiteReferrer-Limiter/join.php');
if (CheckReferrer()){
  echo "welcome<br>";
} else {
  echo "denied<br>";
}
$loadS1 = new SiteReferrer;
$getMSG = $loadS1->getMessage();
print $getMSG;
?>

<!-- Powered by, Please do not remove --!>
<br />
<p>The Referrers Conditions are Created by <a href="https://github.com/d2004/SiteReferrer-Limited">Davdie Ramondetti</a></p>
<!-- Behind this box write the page content --!>

<br />
<p>This is an HTML page</p>
