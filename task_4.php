<!-- Create a multidimensional array called $studentGrades to store the grades of three students. Each student has grades for three subjects: Math, English, and Science. Write a PHP function which takes "$studentGrades" as an argument to calculate and print the average grade for each student. -->

<?php

$studentGrades = [
    'Student1' => ['Math' => 85, 'English' => 92, 'Science' => 78],
    'Student2' => ['Math' => 88, 'English' => 95, 'Science' => 90],
    'Student3' => ['Math' => 75, 'English' => 84, 'Science' => 70],
];

function calculateAndPrintAverageGrades($grades) {
    foreach ($grades as $student => $subjects) {
        $total = array_sum($subjects);
        $count = count($subjects);
        $average = $total / $count;
        echo "Average grade for $student: $average\n";
    }
}

calculateAndPrintAverageGrades($studentGrades);

