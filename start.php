<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?
  $title = 'Start';
  require_once("parts/global-tags.php"); 
?>

<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script>
<script type="text/javascript" src="js/jquery.wt-rotator.min.js"></script>
<script type="text/javascript" src="js/rotator-settings.js"></script>

<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>

</head>

<body onload="MM_preloadImages('images/button-car-roll.gif','images/button-fleet-roll.gif','images/button-moto-roll.gif','images/button-marine-roll.gif')">

<div id="container">
  <? require_once('parts/header.php'); ?>
  <div class="banner">
    <div class="container">
      <div class="wt-rotator">
        <div class="screen">
          <noscript>
            <!-- placeholder 1st image when javascript is off -->
            <img src="images/auto-home-banner.jpg" alt="banner" border="0"/>
          </noscript>
        </div>
        <div class="c-panel">
          <div class="buttons">
            <div class="prev-btn"></div>
            <div class="play-btn"></div>
            <div class="next-btn"></div>
          </div>
          <div class="thumbnails">
            <ul>
              <li><a href="images/miamiboatshow_banner.jpg" title="Special"><img src=""/></a> <a href="/marinetrac" target=""></a></li>
              <li><a href="images/auto-home-banner.jpg" title="AutoTrac"><img src=""/></a> <a href="/autotrac" target=""></a></li>
              <li><a href="images/fleet-home-banner.jpg" title="FleetTrac"><img src=""/></a> <a href="/fleettrac" target=""></a></li>
              <li><a href="images/moto-home-banner.jpg" title="MotoTrac"><img src=""/></a> <a href="/mototrac" target=""></a></li>
              <li><a href="images/marine-home-banner.jpg" title="MarineTrac"><img src=""/></a> <a href="/marinetrac" target=""></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <table width="945" border="0" cellspacing="0" cellpadding="0">
    <tbody>
      <tr>
        <td width="237" height="57" valign="middle">
          <p>
            <a href="/autotrac" class="link_logo">
              <span id="textauto">Auto</span>Trac<span id="registered"><sup>®</sup></span>
              <img src="images/signal.gif" alt="wave" width="25" height="20" border="0"/>
              <br />
            </a>
            <span class="featuresboxes">Automobile Tracking</span>
          </p>
        </td>
        <td width="236">
          <p>
            <a href="/fleettrac" class="link_logo">
              <span id="textfleet">Fleet</span>Trac<span id="registered"><sup>®</sup></span>
              <img src="images/signal.gif" alt="wave" width="25" height="20" border="0"/>
            </a>
            <br />
            <span class="featuresboxes">Commercial Fleet Tracking</span>
          </p>
        </td>
        <td width="235">
          <p>
            <a href="/mototrac" class="link_logo">
              <span id="textmoto">Moto</span>Trac<span id="registered"><sup>®</sup></span>
              <img src="images/signal.gif" alt="wave" width="25" height="20" border="0"/>
              <br />
            </a>
            <span class="featuresboxes">Motorcycle Tracking</span>
          </p>
        </td>
        <td width="237">
          <p>
            <a href="/marinetrac" class="link_logo">
              <span id="textmarine">Marine</span>Trac<span id="registered"><sup>®</sup></span>
              <img src="images/signal.gif" alt="wave" width="25" height="20" border="0"/>
              <br/>
            </a>
            <span class="featuresboxes">Boat &amp; Watercraft Tracking</span>
          </p>
        </td>
      </tr>
      <tr>
        <td valign="top" id="autotracc">
          <p class="textboxes">AutoTrac features the latest advances in satellite technology, and our industry-leading proprietary software, including our powerful <span class="textboxes_purple"><a href="autotrac.html">Theft</a></span><a href="autotrac.html"><span class="textboxes_purple"> Deterrence System</span></a>, and <span class="textboxes_purple"><a href="autotrac.html">Virtual Fence</a></span><a href="autotrac.html"><span class="textboxes_orange">.</span></a> Our affordable annual or monthly airtime service plans are the lowest you will find available. <span class="textboxes_purple"><a href="autotrac.html">Flat rate. No Hidden Fees. Unlimited Dynamic Reporting</a></span> up to every 3 seconds.
          </p>
          <p></p>
        </td>
        <td valign="top" id="fleettrac">
          <p><span  class="textboxes">Whatever the size of your fleet, installing an inexpensive Guard Dog FleetTrac® tracking and security device will improve your operations and help achieve substantial, quantifiable <span class="textboxes_green"><a href="fleettrac.html">bottom-line saving</a>s.</span> Track employee driving habits using our <span class="textboxes_green"><a href="fleettrac.html">Speed Alert</a></span> functionality. You willl save money as well with our <span class="textboxes_green"><a href="plans.html">low-cost annual airtime plans</a></span> with unlimited phone / web usage and <span class="textboxes_green"><a href="fleettrac.html">Dynamic Reporting.</a></span></span>
          </p>
        </td>
        <td valign="top" id="mototrac">
          <p><span class="textboxes"> The  industry’s highest quality, inexpensive tracking and security device available. MotoTrac features the latest advances in satellite technology, and our industry-leading proprietary software, including our powerful <span class="textboxes_orange"><a href="mototrac.html">Anti-theft Security System</a></span>,<span class="textboxes_orange"> <a href="mototrac.html">Instant Accident Notification</a></span>, and <span class="textboxes_orange"><a href="mototrac.html">Vibration Alert</a>.</span> Enjoy our annual or monthly service plan with <a href="mototrac.html"><span class="textboxes_orange">No  Extra Charges</span>.</a></span>
          </p>
          <p>&nbsp;</p>
        </td>
        <td valign="top" id="marinetrac">
          <p><span class="textboxes">Easy to use, Guard Dog MarineTrac safety and security features includes a <span class="textboxes_blue"><a href="marinetrac.html">Dock/storage Fence</a></span> to alert you if the craft is being moved without authorization, as well as a powerful<span class="textboxes_blue"> <a href="marinetrac.html">Integrated Battery Backup</a></span><a href="marinetrac.html">.</a> Position, speed and direction are just a few of the robust tracking functions reported in real time to handheld devices or computers. Everything with a <span class="textboxes_blue"><a href="plans.html">low-cost annual or monthly airtime service plans.</a></span></span>
          </p>
          <p>&nbsp;</p>
        </td>
      </tr>
      <tr>
        <td valign="top" id="autotracc">
          <a href="/autotrac" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('AutoTrac','','images/button-car-roll.gif',1)"></a>
          <a href="/autotrac" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('AutoTrac','','images/button-car-roll.gif',1)">
            <img src="images/button-car.gif" alt="AutoTrac" name="AutoTrac" width="230" height="125" border="0" align="bottom" id="AutoTrac" />
          </a>
        </td>
        <td id="fleettrac">
          <a href="/fleettrac" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image11','','images/button-fleet-roll.gif',1)">
            <img src="images/button-fleet.gif" alt="FleetTrac" name="Image11" width="230" height="125" border="0" align="bottom" id="Image11" />
          </a>
        </td>
        <td valign="top" id="mototrac">
          <a href="/mototrac" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image12','','images/button-moto-roll.gif',1)">
            <img src="images/button-moto.gif" alt="MotoTrac" name="Image12" width="230" height="125" border="0" id="Image12" />
          </a>
        </td>
        <td valign="top" id="marinetrac">
          <a href="/marinetrac" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image13','','images/button-marine-roll.gif',1)">
            <img src="images/button-marine.gif" alt="MarineTrac" name="Image13" width="230" height="125" border="0" id="Image13" />
          </a>
        </td>
      </tr>
    </tbody>
  </table>
  <br /><br />
</div>

<? require_once('parts/footer.php'); ?>

</body>
</html>