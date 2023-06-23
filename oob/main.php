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
$manager->addStudent($student1);
$manager->addStudent($student2);

// تحديث تفاصيل الطالب
$student1->setName('aya');
$manager->updateStudent($student1);

// استرجاع معلومات الطالب
$retrievedStudent = $manager->getStudentById($student1->getId());
if ($retrievedStudent) {
    echo "تم استرجاع الطالب: " . $retrievedStudent->getName() . PHP_EOL;
} else {
    echo "لم يتم العثور على الطالب." . PHP_EOL;
}

// حذف طالب
$manager->deleteStudent($student2);

// عرض محتويات ملف السجل
$logFileContents = file_get_contents('log.txt');
echo "محتويات ملف السجل:" . PHP_EOL;
echo $logFileContents . PHP_EOL;
?>
