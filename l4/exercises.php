<?php
declare(strict_types=1);

// Visur sudėkite reikiamus parametrų bei return tipus

/*
1. Parašykite funkciją 'dividesBy5', kuri priimtų int tipo skaičių ir grąžintų jo dalybos iš 5 liekaną.
*/

function dividesBy5(int $number): int
{
    return $number % 5;
}
var_dump(dividesBy5(11));


/*
2. Parašykite funkciją 'arrayPrinter', kuri priimtų array tipo parametrą ir
išspausdintų kiekvieną masyvo elementą naujoje eilutėje.

Funkcijos kvietimas: arrayPrinter(['some text', 'another text'])
Funkcija grąžina: funkcija nieko negrąžina - ji tik išspausdina masyvą į terminalą:
'some text'
'another text'
...
*/

function arrayPrinter(array $texts): void {
    foreach($texts as $text)
    echo $text, PHP_EOL;
}
arrayPrinter(['fist text', 'second text', 'theard text']);


/*
3. Parašykite funkciją 'stringEnhancer', kuri grąžintų pakeistą tekstą.

Funkcijos kvietimas: stringEnhancer('some text', '##')
Funkcija grąžina: '##some text##'

Funkcijos kvietimas: stringEnhancer('some text')
Funkcija grąžina: '**some text**'
*/

function stringEnhancer(string $string, string $enhancer = '**'): string {
    return ($enhancer . $string . $enhancer);
}
echo stringEnhancer('some text', '##'), PHP_EOL;
echo stringEnhancer('some text'), PHP_EOL;

/*
4. Parašykite funkciją 'stringModifier', kuri pamodifikuotų paduotą string tipo kintamąjį. 

Funkcijos kvietimas: 
$x = 'some text';
stringModifier($x, '##');
echo $x; // '##some text##'

Funkcija grąžina: funkcija nieko negrąžina

*/

function stringModifier(string &$string, string $modifier): void {
    $string = $modifier . $string . $modifier;
}
$x = 'some text';
stringModifier($x, '##');
echo $x, PHP_EOL;;

/*
4. Parašykite funkciją 'textReplicator', kuri grąžintų 'padaugintą' tekstą. 

Funkcijos kvietimas: 
textReplicator('some_text', 3);

Funkcija grąžina: 'some_text-some_text-some_text'

Funkcijos kvietimas: 
textReplicator('some_text', null);

Funkcija grąžina: 'some_text'
*/

function textReplicator(string $string, ?int $count = 1):string {
    if($count === null || $count <= 0) {
        return $string;
    } else {
        return str_repeat($string . '-', $count);
    }
}
echo textReplicator('some_text', 3), PHP_EOL;
echo textReplicator('some_text', null), PHP_EOL;

/*
4. Paverskite funkciją 'textReplicator', į veikiančią anoniminę funkciją.
*/

$textReplicatoTwo = function(string $string, ?int $count = null):string {
    if($count === null || $count <= 0) {
        return $string;
    } else {
        return str_repeat($string . '-', $count);
    }
};
echo $textReplicatoTwo('some_text', 2);
