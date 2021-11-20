<?
	include_once("config.php");
	include_once("classes/Event.php");
	include_once("classes/Common.php");	
	
	$Category = $_REQUEST['category'];
	//echo $Category;
	$limit = 10;
	if($_REQUEST['limitstart'])
	{
		$limitstart = 	$_REQUEST['limitstart'];
	}
	else
	{
		$limitstart = 0;
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Event, Event Registration System, Event Mananagement System, Running Event">
<meta name="description" content="Event Registration System - A powerful tool to manage your event registration easily. Pay as you use.">
<title>RegisterEvent.com - Event Registration System</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #CCCCCC;
}
-->
</style>
<link href="css/styles.css" rel="stylesheet">
<style type="text/css">
<!--
.style1 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
</style>
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>

<body onload="MM_preloadImages('images/button_new_user2.gif','images/button_login2.gif','images/button_search2.gif')">
<table width="998" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td><div align="center"><? include("includes/top.php")?></div></td>
  </tr>
  
  <tr>
    <td height="5"><table width="978" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="1" bgcolor="#666666"></td>
      </tr>
    </table></td>
  </tr>
    <tr>
    <td height="2"></td>
  </tr>
  <tr>
    <td valign="top"><table width="998" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="240" valign="top"><div align="center">
            <table width="243" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><div align="center"><? include("includes/login_box.php") ?></div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div class="fb-like" data-href="http://www.registerevent.com" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false" align="center"><a href="https://www.facebook.com/pages/RegisterEventcom/263620317053822" target="_blank"><a href="https://www.facebook.com/pages/RegisterEventcom/263620317053822" target="_blank"><img src="images/likeus2.jpg" alt="Like us on Facebook" width="200" height="65" border="0" /></a></div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="center">
                  <? include("includes/quick_link.php") ?></div></td>   
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="center"><? 	include_once("ads/right_ads3.php"); ?>
                </div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td><div align="center"><a href="http://www.registerconference.com" target="_blank"><img src="images/Ads_RegConf.gif" alt="RegisterConference.com" width="200" height="200" border="0" longdesc="http://www.registerconference.com" /></a></div></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
              </tr>
            </table>
        </div></td>
        <td width="758" valign="top"><div align="center">
            <table width="738" border="0" cellspacing="0" cellpadding="0">
              
              <tr>
                <td colspan="3"><table width="738" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td><img src="images/heading_event_listing2.jpg" alt="Event Listing" width="738" height="31" /></td>
                    </tr>
                    <tr>
                      <td></td>
                    </tr>
                    <tr>
                      <td><table width="738" border="0" cellpadding="1" cellspacing="1" bgcolor="#740202">
                        <tr>
                          <td bgcolor="#FFFFFF"><? include("includes/list_all_events.php") ?></td>
                        </tr>
                      </table></td>
                    </tr>
                </table></td>
              </tr>
              <tr>
                <td width="250">&nbsp;</td>
                <td width="5">&nbsp;</td>
                <td width="250">&nbsp;</td>
              </tr>
            </table>
        </div></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#000000">
    <div align="center"><? include("includes/footer.php") ?></div></td>
  </tr>
</table>
</body>
</html>
