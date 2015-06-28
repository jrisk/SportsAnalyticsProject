<?php

// class and function definitions

function gameStatMaker($gamefile) {

	$statsarray = [];

	$gamefile = "./" .$gamefile . "";

	$content = file_get_contents($gamefile);

	$stats = explode("\n", $content);

	$counter = (sizeof($stats));

for ($i=0; $i<=$counter; $i++)
{
	$statstring = $stats[$i];
	$statstemp = explode("\t", $statstring);
	$statstemp = preg_grep('/^\s*\z/', $statstemp, PREG_GREP_INVERT);
	$statstemp = array_values($statstemp);
	array_push($statsarray, $statstemp);


}

$statsarray = array_values(array_filter($statsarray));

echo "<br><br>";

print_r($statsarray);

echo "<br><br>";

$counter2 = (sizeof($statsarray));

for ($i=0; $i<=$counter2; $i++)
{
	print_r($statsarray[$i]);
	echo "<br><br>";
}

/* $counter = (sizeof($statsarray));

for ($i=0; $i<=$counter; $i++)
{
	for ($t=0; $t<=$counter; $t++)
	{
	$statsarray[$i][$t];
	echo "<br><br>";
}
}
*/

}


gameStatMaker("GameApril172015");

?>