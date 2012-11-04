
Rec koju ste uneli je: <?php echo $_GET["input1"]; ?>.




<?php
$input1 = $_REQUEST['input1'];

if (strlen($input1)<=2){ echo ' GRESKA! Uneli ste neispravne podatke! Molimo Vas da unesete prave podatke i pokusate ponovo!';

die();

}
$input=$input1;
$rec = substr("$input", -2);
if ($rec=="ka"){
	echo "KALADONT!";
	die();
	
	}


$file = 'listareci.txt';

$searchfor = $rec;


header('Content-Type: text/plain');

$contents = file_get_contents($file);
$pattern = preg_quote($searchfor, '/');
$pattern = "/^$rec.*\$/m";
if(preg_match_all($pattern, $contents, $matches)){
   echo "Ponudjene reci su:\n";
   echo implode("\n", $matches[0]);
}
else{
   echo "\nNazalost, pretraga je neuspesna! U bazi nemamo rec da Vam ponudimo.";
}  

die();

?>



