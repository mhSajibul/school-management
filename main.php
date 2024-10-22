<?php
// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";


$sutdentID = $_POST['sutdentID'];
$Bangla = $_POST['BanglaMark'];
$English = $_POST['EnglishMark'];
$Math = $_POST['MathMark'];
$Science = $_POST['ScienceMark'];
$Relegion = $_POST['RelegionMark'];





$gpBangla = gp($Bangla);
$gpEnglish = gp($English);
$gpMath = gp($Math);
$gpScience = gp($Science);
$gpRelegion = gp($Relegion);

$totalMark = total($Bangla, $English, $Math, $Science, $Relegion);
$stdGPA = gpa(gp($Bangla), gp($English), gp($Math), gp($Science), gp($Relegion));

echo ('<h3>Student ID : ' . $sutdentID . '</h3>');

 if ($stdGPA != 0){
    
    echo ('<h4>Bangla : Mark is ' . $Bangla . ' </h4>');
    echo ('Gread is: ' . greading($Bangla) . ' and Gtead Point: (' . gp($Bangla) . ')');
    echo ('<h4>English : Mark is ' . $English . ' </h4>');
    echo ('Gread is: ' . greading($English) . ' and Gtead Point: (' . gp($English) . ')');
    echo ('<h4>Math : Mark is ' . $Math . ' </h4>');
    echo ('Gread is: ' . greading($Math) . ' and Gtead Point: (' . gp($Math) . ')');
    echo ('<h4>Science : Mark is ' . $Science . ' </h4>');
    echo ('Gread is: ' . greading($Science) . ' and Gtead Point: (' . gp($Science) . ')');
    echo ('<h4>Relegion : Mark is ' . $Relegion . ' </h4>');
    echo ('Gread is: ' . greading($Relegion) . ' and Gtead Point: (' . gp($Relegion) . ')');
    echo ('<br>');
    echo ('<br>');
    echo ('<br>');
    echo ('Total number: ' . $totalMark . '');
    echo ('<br>');
    echo ('<br>');
    echo ('GPA is: ' . $stdGPA . '');
    echo ('<br>');
    echo ('<br>');
    echo ('Gread: ' . mainGread($stdGPA) . '');
}
else
{
    echo"...You have Failed!";
}

echo ('<br>');
function gp($mark)
{

    $gp = 0;

    if ($mark > 100) {
        echo ('<script>alert("Mark cannot be more than 100. Please check and submit again.");</script>');
    } else if ($mark >= 80 && $mark <= 100) {
        $gp = 5.00;
    } else if ($mark >= 70 && $mark <= 79) {
        $gp = 4.50;
    } else if ($mark >= 60 && $mark <= 69) {
        $gp = 4.00;

    } else if ($mark >= 50 && $mark <= 59) {
        $gp = 3.50;
    } else if ($mark >= 40 && $mark <= 49) {
        $gp = 3.00;
    } else if ($mark > 0 && $mark <= 39) {
        $gp = 0.00;
    } else {
        echo ('<script>alert("Mark cannot be Negative. Please check and submit again.");</script>');
    }
    return $gp;
}

function greading($mark)
{
    $gread = '';

    if ($mark > 100) {
        echo ('<script>alert("Mark cannot be more than 100. Please check and submit again.");</script>');
    } else if ($mark >= 80 && $mark <= 100) {
        $gread = 'A+';
    } else if ($mark >= 70 && $mark <= 79) {
        $gread = 'A';
    } else if ($mark >= 60 && $mark <= 69) {
        $gread = 'A-';
    } else if ($mark >= 50 && $mark <= 59) {
        $gread = 'B';
    } else if ($mark >= 40 && $mark <= 49) {
        $gread = 'C';
    } else if ($mark > 0 && $mark <= 39) {
        $gread = 'F';
    } else {
        echo ('<script>alert("Mark cannot be Negative. Please check and submit again.");</script>');
    }

    return $gread;
}

function gpa($s1, $s2, $s3, $s4, $s5)
{
    if ($s1 * $s2 * $s3 * $s4 * $s5 != 0) {
        $gpa = ($s1 + $s2 + $s3 + $s4 + $s5) / 5;
    } else {
        $gpa = 0;
    }
    return $gpa;
}


function mainGread($GPA)
{
    $mainGread = '';
    if ($GPA == 5)
        $mainGread = 'A+';
    elseif ($GPA < 5.00 && $GPA >= 4.5)
        $mainGread = 'A';
    elseif ($GPA < 4.50 && $GPA >= 4.0)
        $mainGread = 'A-';
    elseif ($GPA < 4.00 && $GPA >= 3.5)
        $mainGread = 'B';
    elseif ($GPA < 3.50 && $GPA >= 3.0)
        $mainGread = 'C';
    else
        $mainGread = 'F';

    return $mainGread;
}

function total($s1, $s2, $s3, $s4, $s5)
{
    $total = ($s1 + $s2 + $s3 + $s4 + $s5);
    return $total;
}


?>