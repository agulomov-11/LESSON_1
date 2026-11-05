<?php
// php code
// if, else, while, echo


/* 
echo 'salom'
echo 'dunyo'
 */

// variable
// $variable = "o'zgaruvchilar";   // hech qayerda ishlatilmagan
$rang = "yashil<br>";
$ism = "suhrob";
$text = "Learn Php";

function qoshish()
{
    $a = "5";
    $b = "5";
    return $a + $b;
}
// qoshish();       // natijasi hech qayerga ketmaydi, pastdagi echo yetarli
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

// bu uchtasi faqat misol, hech qayerda ishlatilmagan
// $srting = "hello";
// $int = 1234;
// $float = 1234.1234;
$bolean = true . false; // true =1 , false = 0
echo $bolean;
$array = [
    "name"   => "Abdulloh Gulomov",
    "age"    => 23,
    "number" => +4571512402,
    "email"  => "abdulloh.@gmail.com <br>"
];
// oldin $name = ... deb yozilgan edi, u keraksiz 4 ta ozgaruvchi yaratib qoyardi
print_r($array);
// $array2 = array();   // bosh massiv, ishlatilmagan

// class index           // bosh class, ishlatilmagan
// {
//     public function __construct() {}
// };

// $s = null; // yoq    // ishlatilmagan

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

$birinchi = 10;
$ikkinchi = 3;
echo $birinchi + $ikkinchi;     // 13  qoshish
echo $birinchi - $ikkinchi;     // 7   ayirish
echo $birinchi * $ikkinchi;     // 30  kopaytirish
echo $birinchi / $ikkinchi;     // 3.33  bolish
echo $birinchi % $ikkinchi;     // 1   qoldiq
echo $birinchi ** $ikkinchi;    // 1000  daraja (10 * 10 * 10)
// oldin bu yerda pastdagi Assignment bilan bir xil kod turgan edi

// Assignment operators

$v = 10;    // v ga 10 yozildi
$v += 5;    // $v = $v + 5;  natija 15
$v -= 3;    // $v = $v - 3;  natija 12
$v *= 2;    // $v = $v * 2;  natija 24
$v /= 4;    // $v = $v / 4;  natija 6
$v %= 4;    // $v = $v % 4;  natija 2
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
$hisoblagich = 5;
$hisoblagich++;   // 6 bo'ldi  ($hisoblagich = $hisoblagich + 1)
$hisoblagich--;   // yana 5    ($hisoblagich = $hisoblagich - 1)
echo $hisoblagich;


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
$dost = "Ali";
$salom = "Salom, " . $dost;  // "Salom, Ali"

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

$mehmon = $_GET["ism"] ?? "Mehmon";
echo "Salom, " . $mehmon;

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

$rangim = "yashil";

switch ($rangim) {
    case "qizil":
        echo "rang qizilga teng";   // $rangim qizil bolsa
        break;
    case "sariq":
    case "kok":
        echo "rang sariq yoki kok"; // ikkita case bitta javob beradi
        break;
    case "yashil":
        echo "rang yashilga teng";  // $rangim yashil bolsa
        break;
    default:
        echo "bu rang bizda yo'q";  // hech qaysi case togri kelmasa
}
// switch bitta ozgaruvchini kop qiymatlar bilan solishtiradi
// break bolmasa keyingi case ham ishlab ketadi
// default bu else ga oxshaydi

echo "<br>";




// Switch ni if bilan yozish

if ($rangim == "yashil") {
    echo "rang yashilga teng";
} elseif ($rangim == "qizil") {
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
$sanoq = 10;
do {
    echo $sanoq;                // 10 chiqadi, shart notogri bolsa ham
    $sanoq++;
} while ($sanoq <= 3);
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



echo "<br>";



// Functions (funksiyalar)

// oddiy funksiya
function salomBer()
{
    echo "Salom dunyo";         // chaqirilganda shu ishlaydi
}
salomBer();                     // Salom dunyo
// function sozi bilan yaratiladi, nomi bilan chaqiriladi
// chaqirmasak hech narsa ishlamaydi

echo "<br>";

// parametrli funksiya
function salomlash($ism)
{
    echo "Salom, " . $ism;      // $ism ga nima bersak shuni yozadi
}
salomlash("Ali");               // Salom, Ali
salomlash("Vali");              // Salom, Vali
// qavs ichidagi $ism bu parametr, unga qiymat beramiz

echo "<br>";

// default qiymatli parametr
function davlat($nomi = "Ozbekiston")
{
    echo "Men " . $nomi . "danman";
}
davlat("Turkiya");              // Men Turkiyadanman
davlat();                       // Men Ozbekistondanman
// qiymat bermasak default qiymat ishlatiladi

echo "<br>";

// return qaytaradigan funksiya
function kopaytir($a, $b)
{
    return $a * $b;             // natijani qaytaradi
}
$natija = kopaytir(4, 5);       // natija 20
echo $natija;
// echo ekranga chiqaradi, return esa natijani qaytarib beradi
// return dan keyin funksiya toxtaydi

echo "<br>";

// tur bilan yozish (type)
function qosh(int $a, int $b): int
{
    return $a + $b;
}
echo qosh(5, 5);                // 10
// int $a  bu kirishi kerak bolgan tur
// : int   bu qaytadigan tur

echo "<br>";

// global va local ozgaruvchi
$shahar = "Toshkent";           // tashqarida yaratildi (global)
function shaharim()
{
    global $shahar;             // tashqaridagini ichkariga olib kiradi
    echo $shahar;               // Toshkent
}
shaharim();
// funksiya ichidan tashqi ozgaruvchini kormaydi, global kerak

echo "<br>";



// Arrays (massivlar)

// 1. indexed array (raqamli)
$ranglar = ["qizil", "yashil", "kok"];
echo $ranglar[0];               // qizil  (sanash 0 dan boshlanadi)
echo $ranglar[2];               // kok
// [0] [1] [2] bu index, birinchisi har doim 0

echo "<br>";

// 2. associative array (kalitli)
$talaba = [
    "ism"  => "Abdulloh",
    "yosh" => 23,
    "shahar" => "Toshkent"
];
echo $talaba["ism"];            // Abdulloh
// => belgisi bilan kalit va qiymat beriladi
// raqam orniga nom bilan olamiz

echo "<br>";

// 3. multidimensional array (massiv ichida massiv)
$talabalar = [
    ["Ali", 20],
    ["Vali", 22],
];
echo $talabalar[1][0];          // Vali
// birinchi [1] qaysi massiv, ikkinchi [0] uning ichidagi qaysi element

echo "<br>";

// massiv bilan ishlash
$ranglar[] = "sariq";           // oxiriga qoshadi
$ranglar[0] = "qora";           // 0 dagi qiymatni almashtiradi
unset($ranglar[1]);             // 1 dagi elementni ochiradi
echo count($ranglar);           // 3  (nechta element bor)

echo "<br>";

// array funksiyalari
$sonlar = [5, 2, 8, 1];
array_push($sonlar, 10);        // oxiriga qoshadi
array_pop($sonlar);             // oxirgisini ochiradi
array_unshift($sonlar, 0);      // boshiga qoshadi
array_shift($sonlar);           // birinchisini ochiradi
sort($sonlar);                  // kichikdan kattaga tartiblaydi: 1 2 5 8
rsort($sonlar);                 // kattadan kichikka: 8 5 2 1
echo in_array(8, $sonlar);      // 1  (8 bor bolsa true)
echo implode(", ", $sonlar);    // 8, 5, 2, 1  (massivni matnga aylantiradi)
// explode esa teskarisi: matnni massivga aylantiradi
$sozlar = explode(" ", "men php organyapman");   // ["men", "php", "organyapman"]

echo "<br>";

// massivni foreach bilan chiqarish
foreach ($talaba as $nom => $malumot) {
    echo $nom . ": " . $malumot . " ";    // ism: Abdulloh yosh: 23 shahar: Toshkent
}

echo "<br>";



// var_dump

$butunSon = 25;
$matn = "salom";
$haqiqat = true;

var_dump($butunSon);            // int(25)
var_dump($matn);                // string(5) "salom"
var_dump($haqiqat);             // bool(true)
// var_dump qiymatni va uning turini korsatadi
// string bolsa nechta harf ekanini ham yozadi

echo "<pre>";
var_dump($talaba);              // massiv ichidagi hammasini turlari bilan korsatadi
echo "</pre>";
// <pre> chiroyli qilib qatorma-qator chiqaradi
// print_r faqat qiymatni korsatadi, var_dump esa turini ham

echo "<br>";



// die (exit)

$login = true;

if (!$login) {
    die("Kirish taqiqlangan");  // shu yerda butun kod toxtaydi
}
echo "Xush kelibsiz";           // $login true bolgani uchun ishlaydi
// die xabar chiqaradi va keyingi kodni umuman ishlatmaydi
// exit ham xuddi shunday ishlaydi
// die("...") ni pastroqqa yozsak, undan keyingi HTML ham chiqmaydi

// tekshirish uchun kop ishlatiladi: var_dump + die
// var_dump($talaba); die;     // qiymatni korsatib, kodni toxtatadi

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