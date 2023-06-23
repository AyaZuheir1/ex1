<?php
namespace My;

use My\APP\Student;
trait Write
{
    public function write($message)
    {
        $printFile = fopen('print.txt', 'a');
        if ($printFile) {
            fwrite($printFile, $message . PHP_EOL);
            fclose($printFile);
        } else {
            echo "Failed to open print file.";
        }
    }
}

class Manager{
    use Write;
    
        private $students;
    
        public function __construct()
        {
            $this->students = [];
        }
    
        public function addStudent(Student $student)
        {
            $this->students[$student->getId()] = $student;
            $this->write('Add student: ' . $student->getId());
        }
    
        public function getStudentById($id)
        {
            if (isset($this->students[$id])) {
                return $this->students[$id];
            }
            return null;
        }
    
        public function updateStudent(Student $student)
        {
            if (isset($this->students[$student->getId()])) {
                $this->students[$student->getId()] = $student;
                $this->write('Update student: ' . $student->getId());
            }
        }
    
        public function deleteStudent(Student $student)
        {
            if (isset($this->students[$student->getId()])) {
                unset($this->students[$student->getId()]);
                $this->write('Delete student: ' . $student->getId());
            }
        }
    }
    ?>