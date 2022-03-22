<?php
declare(strict_types=1);

/*
1. Apskaičiuokite PHP pagalba ir išveskite į terminalą. Kiekvienas rezultatas turi būti naujoje eilutėje:

987 + 545 - 32 * 94
32 pakelkite laipsniu 3 ir pridėkite 18
120 padalinkite iš 4 ir dar karta padalinkite iš 3
kokia liekana lieka po skaičiaus 187 dalybos iš 5
skaičiui 3 tris kartus pritaikykite increment operatorių - koki skaičių gaunate?
skaičiui 12 keturis kartus pritaikykite decrement operatorių - koki skaičių gaunate?
*/

echo 987 + 545 - 32 * 94, PHP_EOL;
echo 32 ** 3 + 18, PHP_EOL;
echo 120 / 4 / 3, PHP_EOL;
echo 187 % 5, PHP_EOL;

$numberOne = 3;
for ($i = 0; $i < 3; $i++) {
    $numberOne++;
}
echo $numberOne, PHP_EOL;

$numberTwo = 12;
for ($i = 0; $i < 3; $i++) {
    $numberTwo--;
}
echo $numberTwo, PHP_EOL;

/*
2. Išspausdinkite skaičius nuo 1 iki 10 naudodamiesi ciklu. Panaudokite visus 4 būdus ciklams aprašyti.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje. 
*/

// do while loop
$a = 0;
do {
    echo $a, PHP_EOL;
    $a++;
} while ($a <= 10);

// while loop
$b = 0;
while ($b <= 10) {
    echo $b, PHP_EOL;
    $b++;
}

// for loop
for ($c=0; $c <= 10; $c++) { 
    echo $c, PHP_EOL;  
}

// forEach loop
$numbersArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numbersArray as $value) {
    echo $value, PHP_EOL;
}

/*
3. Išspausdinkite skaičius nuo 15 iki 3 naudodamiesi ciklu. Panaudokite sau patogiausią ciklą.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje. 
*/

for ($number = 15; $number > 2; $number--) { 
    echo $number, PHP_EOL;
}

/*
4. Išspausdinkite kas antrą skaičių nuo 1 iki 20 naudodamiesi ciklu.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje.

*/

for ($numberSecond = 1; $numberSecond < 21; $numberSecond += 2) { 
    echo $numberSecond, PHP_EOL;
}

/*
5. Išspausdinkite skaičius, nuo 1 iki 20, kurie dalijasi iš 3.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje. 
*/

for ($numberModal = 1; $numberModal < 21; $numberModal++) { 
    if ($numberModal % 3 === 0) {
        echo $numberModal, PHP_EOL;
    }
}

/*
6. Išspausdinkite skaičius, nuo 1 iki 20, kurie dalijasi iš 3 arba iš 5.
Kiekvienas skaičius turi išspausdintas naujoje eilutėje. 
*/

for ($threeOrFive = 1; $threeOrFive < 21; $threeOrFive++) { 
    if ($threeOrFive % 3 === 0 || $threeOrFive % 5 === 0) {
        echo $threeOrFive, PHP_EOL;
    }
}

/*
7. Iteruokite per skaičius, nuo 1 iki 20.
Jeigu skaičius dalijasi iš 3, išspausdinkite žodį 'Hey'.
Jeigu skaičius dalijasi iš 5, išspausdinkite žodį Ho'.
Jeigu skaičius dalijasi ir iš 5, ir iš 3, išspausdinkite žodį 'HeyHo'.
Kitu atveju išspausdinkite skaičių.
Viskas turi būti atspausdinti vienoje eilutėje su tarpais:
1 2 Hey 4 Ho Hey 7 8 Hey Ho 11 Hey 13 14 HeyHo 16 17 Hey 19 Ho
*/

for ($phrase = 1; $phrase  < 21; $phrase++) { 
    if ($phrase % 3 === 0 && $phrase % 5 === 0) {
        echo 'HeyHo ';
    } elseif ($phrase % 3 === 0) {
        echo 'Hey ';
    } elseif ($phrase % 5 === 0) {
        echo 'Ho ';
    } else {
        echo "$phrase ";
    }   
}
echo PHP_EOL;

/*
8. Raskite sveikų skaičių nuo 1 iki 100 sumą.
*/
$sum = 0;

for ($i = 1; $i <= 100; $i++) {
   $sum += $i;
}
echo 'The sum: ' . $sum, PHP_EOL;

/*
9. Pasinaudodami ciklu išspausdinkite savaitės dienas iš masyvo $days vienoje eilutėje:
monday-tuesday-wednesday-thursday-friday-saturday-sunday-
*/

$days = [
    'monday',
    'tuesday',
    'wednesday',
    'thursday',
    'friday',
    'saturday',
    'sunday',
];

foreach($days as $day) {
    echo "$day-";
};
echo PHP_EOL;

/*
10. Iteruokite sveikus skaičius nuo -5 iki 5.
Išspausdinkite skaičių dvejopai:
1. Pasinaudojant paprastu echo
2. Pasinaudojant funkcija var_dump ir prieš tai pavertus į 'bool' tipo reikšmę

-5
bool(true)
-4
bool(true)
...

HINT: atkreipkite dėmesį į ką pavirsta skaičius 0
*/

for($d=-5; $d<6; $d++ ) {
    echo "$d ", PHP_EOL;
    var_dump((bool) ($d));
};
echo PHP_EOL;

function divideNumbers(int $numberA, int $numberB = 1): int
{
return $numberA / $numberB;
}
var_dump(divideNumbers(5, 5));
