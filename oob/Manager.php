<?php
namespace My;

use My\APP\Student;
trait Loggable
{
    public function log($message)
    {
        $logFile = fopen('log.txt', 'a');
        if ($logFile) {
            fwrite($logFile, $message . PHP_EOL);
            fclose($logFile);
        } else {
            echo "Failed to open log file.";
        }
    }
}

class Manager{
    use Loggable;
    
        private $students;
    
        public function __construct()
        {
            $this->students = [];
        }
    
        public function addStudent(Student $student)
        {
            $this->students[$student->getId()] = $student;
            $this->log('Added student: ' . $student->getId());
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
                $this->log('Updated student: ' . $student->getId());
            }
        }
    
        public function deleteStudent(Student $student)
        {
            if (isset($this->students[$student->getId()])) {
                unset($this->students[$student->getId()]);
                $this->log('Deleted student: ' . $student->getId());
            }
        }
    }
    ?>