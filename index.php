<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
echo "Сборник задач по программированию_Златопольский Д.М_2011.
Задачи на рекурсии.<br/> <br>";
function a($x)
{	
	$x = sqrt($x)+$x;
	return $x;
}
echo "<br><br>";
echo  sprintf("%.2f",(a(6)+a(13)+a(21))/2);
echo "<br><br>";
echo  sprintf("%.2f",(a(5)/a(7)+a(12)/a(8)+a(31)/a(2)));
echo "<br><br>";

function b($x,$y)
{	
	$x =($x+sqrt($y))/($y+sqrt($x));
	return $x;
}
echo  sprintf("%.2f",b(15,8)+b(6,12)+b(7,21));
echo "<br><br>";
echo  sprintf("%.2f",b(13,7)+b(15,12)+b(32,21));
echo "<br><br>";
//10.2
function s($x)
{	
	$x =$x+sin($x);
	return $x;
}
echo  sprintf("%.2f",(s(1)+s(5)+s(3))/3);
echo "<br><br>";
echo  sprintf("%.2f",s(2)/s(5)+s(6)/s(3)+s(1)/s(4));
echo "<br><br>";
function ss($x,$y)
{	
	$x =($x+sin($y))/($y+sin($x));
	return $x;
}
echo  sprintf("%.2f",ss(1,4)+ss(7,5)+ss(3,2));
echo "<br><br>";
function sx($x,$y)
{	
	$x =sin($y)+$x;
	return $x;
}
echo  sprintf("%.2f",ss(2,3)+ss(1,5)+(sx(7,4)/sx(3,7)));
echo "<br><br>";
//10.3
function maxab($x,$y)
{	
	if ($x>$y) {
		return $max=$x;
	}else return $max=$y;
}
echo "a=".$a=rand(1,10);
echo "<br><br>";
echo "b=".$b=rand(1,10);
$x=$a;
$y=$b;
echo "<br><br>";
echo "max(a,2b)*max(2a-b,b)= ". maxab($x,2*$y)*maxab(2*$x-$y,$y);
echo "<br><br>";
echo "max(a,2b)*max(2a-b,b)= ". max($x,2*$y)*max(2*$x-$y,$y);
echo "<br><br>";
//10,4
function minab($x,$y)
{	
	if ($x<$y) {
		return $min=$x;
	}else return $min=$y;
}
echo "min(a,3b)*min(2a-b,2b)= ". minab($x,3*$y)*minab(2*$x-$y,2*$y);
echo "<br><br>";
echo "min(a,3b)*min(2a-b,2b)= ". min($x,3*$y)*min(2*$x-$y,2*$y);
echo "<br><br>";
//10.5
function signx($x)
{	
	if ($x<0) {
		return $x=-1;
	}elseif ($x>0) {
		return $x=1;
	}else return $x=0;
}
echo "x= ". $x=rand(-10,10);
echo "<br><br>";
echo "y= ". $y=rand(-10,10);
echo "<br><br>";
$z=signx($x)+signx($y);
echo "sign x + sign y = ". $z;
echo "<br><br>";
function nodab($a,$b)
{	
	while (( $a!=0) & ($b!=0)) {
		if ($a>=$b) {
			 $a=$a%$b;		
		}else
			 $b=$b%$a;
	} 
	return $z=$a+$b;
}
echo nodab(nodab(55,24),36);
echo "<br><br>";
function f($f)
{	
	if ($f<=1) {
			return 1;
	}
	return $f*f($f-1);
}
echo f(9);
echo "<br><br>";
function st($a,$n)
{	
	if ($n<=0) {
		return 1;
	}
	return $a*st($a,($n-1));
}
echo st(2,10);
?>