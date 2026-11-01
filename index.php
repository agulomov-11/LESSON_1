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


// PHP operators


// Arithmetic operators

$x = 10;    // x ga 10 yozildi
$x += 5;    // $x = $x + 5;  natija 15
$x -= 3;    // $x = $x - 3;  natija 12
$x *= 2;    // $x = $x * 2;  natija 24
$x /= 4;    // $x = $x / 4;  natija 6
$x %= 4;    // $x = $x % 4;  natija 2
echo $x;

// Assignment operators

$v = 10;    // x ga 10 yozildi
$v += 5;    // $x = $x + 5;  natija 15
$v -= 3;    // $x = $x - 3;  natija 12
$v *= 2;    // $x = $x * 2;  natija 24
$v /= 4;    // $x = $x / 4;  natija 6
$v %= 4;    // $x = $x % 4;  natija 2
echo $v;

// Comparison operators
// 1.   ==	qiymati teng
// 2.  ===	qiymati ham, turi ham teng
// 3.  !=	teng emas 
// 4.  !==	qiymati yoki turi teng emas
// 5.  > <	katta, kichik
// 6.  >= <=	katta yoki teng, kichik yoki teng
// 7.  <=>	“kosmik kema”: chap kichik bo’lsa -1, teng bo’lsa 0, katta bo’lsa 1

// Increment/Decrement operators
$I = 5;
$I++;   // 6 bo'ldi  ($a = $a + 1)
$I--;   // yana 5    ($a = $a - 1)
echo $I;


// Logical operators

$yosh = 20;
$pasport = true;

if ($yosh >= 18 && $pasport) {
    echo "Kirishingiz mumkin";   // ikkala shart ham to'g'ri
}

if (!$pasport) {
    echo "Pasport yo'q";        // pasport bo'lmasa ishlaydi
}
// and bolsa shartlar hammasi tekshiriladi qoshilib ketiladi shartlar
// agar || bu belgi yoki 'or'  bolsa kamida bittasi togri bolsa ishlaydi
// 'xor'	faqat bitta shart togri bolsa ishlaydi
// ! esa teskarisiga almashtiradi

// String operators
$ism = "Ali";
$salom = "Salom, " . $ism;   // "Salom, Ali"

$salom .= "!";               // oxiriga qo'shadi: "Salom, Ali!"
echo $salom;
// Array operators
// $a = ["x" => 1, "y" => 2];
// $b = ["y" => 5, "z" => 3];

// $c = $a + $b;   // ["x" => 1, "y" => 2, "z" => 3]

// Conditional operators
// $yosh = 19;
// echo $yosh >= 18 ? "Katta" : "Kichik";   // Katta
// bu yerda Ternary (? :) shartni tekshiradi bolmasa kichikni qaytaradi

// if ni bir qatorda yozish usuli
if ($yosh >= 18) {
    echo "Katta";
} else {
    echo "Kichik";
}

$ism = $_GET["ism"] ?? "Mehmon";
// $ism = "Ali";
echo "Salom, " . $ism;

echo "<pre>";
print_r($_GET);   // $_GET ichida nima borligini ko'rsatadi
echo "</pre>";
// URL'da ism berilmagan bo'lsa, "Mehmon" ishlatiladi

?>
<?php


// if
//if.... else
// If...elseif...else

$x = 80;
$y = 30;

if ($x == $y) {
    echo "x teng y ga";            // ikkalasi teng bolsa ishlaydi
} elseif ($x > $y) {
    echo "x y dan katta";          // x katta bolsa ishlaydi
} else {
    echo "x y dan kichkina";       // qolgan hamma holatda ishlaydi
}
// if birinchi shartni tekshiradi, togri bolsa shu yerda toxtaydi
// elseif oldingi shart notogri bolsa keyingi shartni tekshiradi
// else hech qaysi shart togri kelmasa ishlaydi

echo "<br>";




// Switch

$rang = "yashil";

switch ($rang) {
    case "qizil":
        echo "rang qizilga teng";   // $rang qizil bolsa
        break;
    case "sariq":
    case "kok":
        echo "rang sariq yoki kok"; // ikkita case bitta javob beradi
        break;
    case "yashil":
        echo "rang yashilga teng";  // $rang yashil bolsa
        break;
    default:
        echo "bu rang bizda yo'q";  // hech qaysi case togri kelmasa
}
// switch bitta ozgaruvchini kop qiymatlar bilan solishtiradi
// break bolmasa keyingi case ham ishlab ketadi
// default bu else ga oxshaydi

echo "<br>";




// Switch ni if bilan yozish

if ($rang == "yashil") {
    echo "rang yashilga teng";
} elseif ($rang == "qizil") {
    echo "rang qizilga teng";
} else {
    echo "bu rang bizda yo'q";
}
// natija switch bilan bir xil chiqadi
// " " qoshtirnoq ishlatsak yo'q ichidagi ' uchun \ kerak emas







// Loops (sikllar)

// for
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";              // 1 2 3 4 5
}
// for da 3 qism bor: boshlanish; shart; qadam
// necha marta aylanishi aniq bolsa ishlatiladi

echo "<br>";

// while
$son = 1;
while ($son <= 3) {
    echo $son . " ";            // 1 2 3
    $son++;                     // buni unutsak cheksiz aylanadi
}
// while avval shartni tekshiradi, keyin ishlaydi

echo "<br>";

// do ... while
$son = 10;
do {
    echo $son;                  // 10 chiqadi, shart notogri bolsa ham
    $son++;
} while ($son <= 3);
// do while kamida 1 marta ishlaydi, shartni keyin tekshiradi

echo "<br>";

// foreach
$mevalar = ["olma", "anor", "uzum"];
foreach ($mevalar as $meva) {
    echo $meva . " ";           // olma anor uzum
}
// foreach massiv ichidagi har bir elementni bittalab oladi

$odam = ["ism" => "Ali", "yosh" => 20];
foreach ($odam as $kalit => $qiymat) {
    echo "$kalit: $qiymat ";    // ism: Ali yosh: 20
}
// kalit va qiymatni ikkalasini ham olsa boladi

echo "<br>";

// break va continue
for ($i = 1; $i <= 10; $i++) {
    if ($i == 3) continue;      // 3 ni tashlab ketadi
    if ($i == 6) break;         // 6 ga kelganda sikl toxtaydi
    echo $i . " ";              // 1 2 4 5
}
// continue shu aylanishni otkazib yuboradi
// break siklni butunlay toxtatadi
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