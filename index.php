<?php
require_once('SiteReferrer-Limiter/join.php');
$loadS1 = new SiteReferrer;
$getMSG = $loadS1->getMessage();
if (CheckReferrer()){
  echo $getMSG;
} else {
  exit($getMSG);
}
?>

<!-- Powered by, Please do not remove --!>
<br />
<p>The Referrers Conditions are Created by <a href="https://github.com/d2004/SiteReferrer-Limited">Davdie Ramondetti</a></p>
<!-- Behind this box write the page content --!>

<br />
<p>This is an HTML page</p>
<!-- E --!>
