

<html>
	<head>
		<title>first Pager</title>
		<meta charset="utf-8" />

	</head>
	<body>

		<h1> "hello world"</h1>
		<?php
$x = 5;
$y = 4;
echo "Value of variables is mentioned as ";
echo "<br>";
echo "x= " . $x ." and y= ".$y."<br>";

function test(){
	global $x,$y;
	static $x=99;
	$y= $x+$y;
	$x= $y-$x;
	echo "Now x= " . $x ." and y= ".$y."<br>";

}

test();

print "Study PHP at " . "w3school"."<br>";
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br>";
for($i=0;$i<3;$i++)
{
	echo 'cars['.$i.'] = '.$cars[$i]."<br>";
}
$age = array("Arshdeep"=>"23", "Nancy"=>"23", "Joe"=>"43");
foreach($age as $x => $x_value) {
    echo "Name=" . $x . ", Age=" . $x_value;
    echo "<br>";
}



?>
	</body>
	
</html>