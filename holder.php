<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->SetDisplayMode('fullpage');
$html = file_get_contents('./testmpdf.html');
//  Set HTML header
$mpdf->SetHTMLHeader('
<div style="position: absolute;width:250px;top: 150px;">
<div style="margin-left: 30px;">
<a class="" href="https://www.jojobee.ph">
<img src="Jojobee logo_white.svg" alt="Logo" style="width:150px;" />
</a>
<p class="slogan-jojobee text-uppercase mv-10">
super <i>faaaaaaast</i> hiring!!</p>
</div>
</div>
<div style="clear: both;"></div>
');
$mpdf->SetHTMLFooter('
<!-- Start logo Store -->
<div style="width:100%" >
  <div class="col-6 logo-store"  style="width:50%;">
    <a href="https://apps.apple.com/ph/app/jojobee/id1455074927">
      <img src="appstore-logo.png" alt="" class="cv__template__logo-store" style="width:100px;"/>
    </a>
  </div>
  <div class="col-6 logo-store " style="width:50%;float:left;">
    <a href="https://play.google.com/store/apps/details?id=com.sugamobile.jojobee">
      <img src="google-play-logo.png" alt="" class="cv__template__logo-store" style="width:100px;"/>
    </a>
  </div>
  <div class="clear-both"></div>
</div>
<!-- End logo Store -->');
$mpdf->WriteHTML($html);
$mpdf->Output();
?>