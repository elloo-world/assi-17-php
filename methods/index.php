<?php
class Student {
    public $status;
    public $student_name;
    public $assignment;

    public function __construct($student_name,  $assignment, $status) {
        $this->student_name = $student_name;
        $this->assignment = $assignment;
        $this->status = $status;
    }
}

$students = [
    new Student("Ellaha", "grapic designer" , true),
    new Student("karim", "software dev" , true),
    new Student("fawzia", "scientist" ,true),
    new Student("ghezala", "engeener", false),
    new Student("zarifa", "front end dev" , false)
];

// $result = array_filter($students,function($student) {
//     return ! $student->status;
// });
// echo "<pre>";
// var_dump($result);

// $result = array_map(function($student) {
//     return [
//         'student_name' => "<h1>".$student->student_name."</h1>"
//     ];
// }, $students);

// $result = array_map(function($student) {
//     return (array) $student;
// }, $students);

// echo "<pre>";
// var_dump($result);

$result = array_column($students, 'student_name','assignment');

echo "<pre>";
var_dump($result);

