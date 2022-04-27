<?php
class Student {
	public $scholarship = 0;
	
	public function __construct(
    public string $firstName,
    public string $lastName,
    public string $group,
    public int $mark) {}
	
	public function getScholarship() {
		if ($this->mark == 5) {
			$this->scholarship = 100;
		} else {
			$this->scholarship = 80;
		}
		return $this->scholarship;
	}
}

class Aspirant extends Student {
	public $research = true;
	
	public function getScholarship(){
		if ($this->mark == 5) {
			$this->scholarship = 200;
		} else {
			$this->scholarship = 180;
		}
		return $this->scholarship;
	}
}

$student = new Aspirant('John', 'Dou', 'A123', 3);
// var_dump($student->research);
var_dump($student->getScholarship());

$students[] = new Aspirant('Dwayne', 'Johnson', 'B123', 5);
$students[] = new Aspirant('Chris', 'Rock', 'B123', 4);
$students[] = new Aspirant('Will', 'Smith', 'B123', 3);

$students[] = new Student('Tony', 'Robbins', 'E123', 3);
$students[] = new Student('George', 'Bush', 'E123', 5);
$students[] = new Student('Barack', 'Obama', 'E123', 5);
$students[] = new Student('Bill', 'Clinton', 'E123', 4);

foreach ($students as $student) {
	var_dump($student->getScholarship());
}