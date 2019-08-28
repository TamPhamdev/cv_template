<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->SetDisplayMode('fullpage');
$html = file_get_contents('./testmpdf.html');
//  Set HTML header
$mpdf->SetHTMLHeader('
<div style="border-top: 1px solid #fff;width:36,33333%;background-color:#24142c;">
  <div style="width:100%; height: 100%;" >
  <div class="header-slogan">
  <a class="" href="https://www.jojobee.ph">
  <img src="Jojobee logo_white.svg" alt="Logo"  class="logo-company" />
  </a>
  <p class="slogan-jojobee text-uppercase mv-10">
  super <i>faaaaaaast</i> hiring!!</p>
  </div>
  </div>
</<div>
');

$mpdf->SetHTMLFooter('
<div class="" style="width: 36,33333%;height:80px;">
<ul style="width:100%;">
<li style="text-align:center;">
<a href="https://play.google.com/store/apps/details?id=com.sugamobile.jojobee" style="color:#24142c;">
<img src="google-play-logo.png" alt="" class="cv__template__logo-store" style="width:100px;"/>
</a>
<a href="https://apps.apple.com/ph/app/jojobee/id1455074927" style="color:#24142c;">
<img src="appstore-logo.png" alt="" class="cv__template__logo-store" style="width:100px;"/></a></li></ul></div>
');
$mpdf->WriteHTML($html);
$mpdf->Output();
// $mpdf->Output('CV.pdf', 'D');
?>