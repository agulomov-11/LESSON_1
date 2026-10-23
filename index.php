<?php
// php code
// if, else, while, echo


/* 
echo 'salom'
echo 'dunyo'
 */

// variable
$variable = "o'zgaruvchilar";
$rang = "yashil<br>";
$ism = "suhrob";
$text = "Learn Php";

function qoshish()
{
    $a = "5";
    $b = "5";
    return $a + $b;
}
qoshish();
echo qoshish();


print $rang . $ism;
echo "<h2>" . $text . "</h2>";

// malumot turlari.... Data types
/* string (text values)
int (whole numbers)
float (decimal numbers)
bool (true or false)
array (multiple values)
object (stores data as objects)
null (empty variable)
resource (references external resources) 
*/

$srting = "hello";
$int = 1234;
$float = 1234.1234;
$bolean = true . false; // true =1 , false = 0
echo $bolean;
$array = [
    $name = "Abdulloh Gulomov",
    $age = 23,
    $number = +4571512402,
    $email = "abdulloh.@gmail.com <br>"
];
print_r($array);
$array2 = array();

class index
{
    public function __construct() {}
};

$s = null; // yoq 

// string function

$gap = "men yaxshi dasturchiman olim";
echo strlen($gap);  // uzunligini aniqlaydi
echo str_replace("men", "u", $gap); // gapni ornini almashtiradi
echo str_word_count($gap); // gapda nechta soz bor 
echo strrev($gap); // teskari qaytaradi 
echo strpos($gap, "olim"); // soz nechinchidan boshlyanyabdi
echo str_contains($gap, "kim"); // ichidan qidiradi va true false qaytaradi
echo str_ends_with($gap, "olim"); // true tugashi 
echo str_starts_with($gap, "men"); // true boshlanishi 

?>

<br>
<br>
<br>
<br>
<br>
<?php
// matematik funksiyalar 

$pi = pi();

echo $pi;
$min = min(0, 20, 40, 33, 150); // kichik qiymay
$max = max(0, 20, 40, 33, 150); // katta qiymat
$math = abs(-6.7); // musbat qiladiu
$sqrt = sqrt(100); //ildiz hisoblaydi
$round = round(100.5); // yaxlitlaydi
$rand = rand();
echo $min;
echo $max;
echo $math;
echo $sqrt;
echo $round;
echo $rand;



// konstantalar
define('RANG', 'Yashil');
define('DASHTURLASH_TILI', 'php');
echo DASHTURLASH_TILI;
echo RANG;


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color: grey;">
    <br>
    <br>
    <br>
    <br>
    <br>

    <div>salom</div>
    <?php
    echo $rang;

    echo $ism;

    ?>
</body>

</html>