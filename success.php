<?
$fb=$_GET['fb'];
$fb = preg_replace ("/[^a-zA-ZА-Яа-я0-9\s]/",".",$fb);
$g1=$_GET['g1'];
$g1 = preg_replace ("/[^a-zA-ZА-Яа-я0-9-\s]/",".",$g1);
$g2=$_GET['g2'];
$g2 = preg_replace ("/[^a-zA-ZА-Яа-я0-9\s]/",".",$g2);
?>
<!DOCTYPE html>
<html lang="">

<head>
	<meta charset="UTF-8">
	<meta name="referrer" content="no-referrer">
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '<? echo"$fb";?>');
fbq('track', 'Lead');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=<? echo"$fb";?>&ev=Lead&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
</head>


</html>
