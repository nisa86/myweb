<?php
echo "<body bgcolor='ff0077'>";

$r1 = $_POST['r1'];
$r2 = $_POST['r2'];
$r3 = $_POST['r3'];
$r4 = $_POST['r4'];
$r5 = $_POST['r5'];
$r6 = $_POST['r6'];
$r7 = $_POST['r7'];
$r8 = $_POST['r8'];
$r9 = $_POST['r9'];
$r10 = $_POST['r10'];

if ($r1 =="a2")
{
	$a=10;
}
else
{
	$a=0;
}

if ($r2 =="b3")
{
	$b=10;
}
else
{
	$b=0;
}

if ($r3 =="c3")
{
	$c=10;
}
else
{
	$c=0;
}

if ($r4 =="d5")
{
	$d=10;
}
else
{
	$d=0;
}
if ($r5 =="e4")
{
	$e=10;
}
else
{
	$e=0;
}
if ($r6 =="f1")
{
	$f=10;
}
else
{
	$f=0;
}
if ($r7 =="g1")
{
	$g=10;
}
else
{
	$g=0;
}
if ($r8 =="h2")
{
	$h=10;
}
else
{
	$h=0;
}
if ($r9 =="i1")
{
	$i=10;
}
else
{
	$i=0;
}
if ($r10 =="j5")
{
	$j=10;
}
else
{
	$j=0;
}
echo "<center><h1>Nilai kamu ".($a+$b+$c+$d+$e+$f+$g+$h+$i+$j);
echo "<br/>";
echo "<br/>";
echo "<a href='../home.php'>home</a>";
?>