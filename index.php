<?php
/* GPA Grading system */
$mark = 67;

if( $mark >= 0 && $mark < 33 ){
    $gpa = 0;
    $grade = 'F';
}else if( $mark >= 33 && $mark < 40 ){
    $gpa = 1;
    $grade = 'D';
}else if( $mark >= 40 && $mark < 50 ){
    $gpa = 2;
    $grade = 'C';
}else if( $mark >= 50 && $mark < 60 ){
    $gpa = 3;
    $grade = 'B';
}else if( $mark >= 60 && $mark < 70 ){
    $gpa = 3.5;
    $grade = 'A-';
}else if( $mark >= 70 && $mark < 80 ){
    $gpa = 4;
    $grade = 'A';
}else if( $mark >= 80 && $mark <= 100 ){
    $gpa = 5;
    $grade = 'A+';
}else{
    $gpa = 'invalid';
    $grade = 'invalid';
}

print "<br><br>Grade Point Average(GPA) = {$gpa} <br> <br> Graded Evaluation = {$grade}<hr>";

?>

<?php
/* Currency Converter System */
$amount = 236;
$currency = 'euro';

if( $currency = 'dollar' ){
    echo ( $amount * 86.01 ) . "BDT<hr>";
}else if( $currency = 'pound' ){
    echo ( $amount * 112.15 ) . "BDT<hr>";
}else if( $currency = 'euro' ){
    echo ( $amount * 98.45 ) . "BDT<hr>";
}

?>

<?php

/* Age recognition system */

$age = 15;

if( $age < 5 ){
    echo "You are an infant";
} else if( $age >= 5 && $age < 10 ){
    echo "You are a kid";
} else if( $age >= 10 && $age < 15 ){
    echo "You are a teenager";
} else if( $age >= 15 && $age < 20 ){
    echo "You are young adult";
} else if( $age >= 20 && $age < 60 ){
    echo "You are in employment or business";
} else if( $age >= 20 && $age < 60 ){
    echo "You are retired and elder person.";
}

?>

<?php

/** Birth year function */

$year = 1985;
$result = 2022 - $year;

echo "<hr>{$result}";

?>

<?php

/* Area of rectangle,square and circle function */

function area($type, $length, $width = null ){
    if( $type == 'r' ){
        $area = ($length * $width);
        return "The area of this rectangle = {$area}";
    } else if( $type == 's' ){
        $area = ($length * $length);
        return "The area of this square = {$area}";
    } else if( $type == 't' ){
        $area = (.5 * $length * $width);
        return "The area of this circle = {$area}";
    } else if( $type == 'c' ){
        $area = (3.1416 * ($length * $width));
        return "The area of this circle = {$area}";
    }
}

echo area('c', 50, 13);

?>
<?php

/* Heading function */

function heading($type, $txt){
    return "<hr><{$type}>{$txt}</{$type}><hr>";
}

echo heading('h1','Zarifpro.com')
?>

<?php

/* reverse function */

function name($string){
    $len = strlen($string);
    for( $i = $len - 1; $i >= 0; $i-- ){
        echo ("$string[$i]");
    }
}
name('zarifpro')

?>

<?php

/* Image uploading function */

function image($src, $w = 'auto', $h = 'auto'){
    return "<hr><img src=\"{$src}\" alt=\"\">";
}

echo image('a-linkedin.jpeg')

?>
<?php


/* Color changing function */

function color($color, $txt){
    return "<h1 style=\"color:{$color}\">{$txt}</h1>";
}

echo color('blue', 'I am zarif, a programmer')

?>