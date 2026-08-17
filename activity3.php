<?php

$grade = 85;

if ($grade >= 90 && $grade <= 100) {
    $letterGrade = "A";
    $remarks = "Passed";
} elseif ($grade >= 80 && $grade <= 89) {
    $letterGrade = "B";
    $remarks = "Passed";
} elseif ($grade >= 70 && $grade <= 79) {
    $letterGrade = "C";
    $remarks = "Passed";
} elseif ($grade >= 60 && $grade <= 69) {
    $letterGrade = "D";
    $remarks = "Failed";
} elseif ($grade >= 0 && $grade <= 59) {
    $letterGrade = "F";
    $remarks = "Failed";
} else {
    $letterGrade = "Invalid";
    $remarks = "Invalid grade";
}

echo "Grade Evaluation\n";
echo "Numeric Grade: " . $grade . "\n";
echo "Letter Grade: " . $letterGrade . "\n";
echo "Remarks: " . $remarks;

?>
