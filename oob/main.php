<?php
require_once 'Student.php';
require_once 'course.php';
require_once 'Manager.php';

use My\APP\Student;
use My\APP\Course;
use My\Manager;

$manager = new Manager();

$student1 = new Student('rozan', 'rozan@example.com');
$student2 = new Student('aya', 'aya@example.com');
$student3 = new Student('mayss', 'mayss@example.com');

$manager->addStudent($student1);
$manager->addStudent($student2);
$manager->addStudent($student3);



$student1->setName('aya');
$manager->updateStudent($student1);


$findStudent = $manager->getStudentById($student1->getId());
if ($findStudent) {
    echo "تم استرجاع الطالب: " . $findStudent->getName() . PHP_EOL;
} else {
    echo "لم يتم العثور على الطالب." . PHP_EOL;
}


$manager->deleteStudent($student2);

$PrintFileContents = file_get_contents('print.txt');
echo "محتويات الملف:" . PHP_EOL;
echo $PrintFileContents . PHP_EOL;
?>
