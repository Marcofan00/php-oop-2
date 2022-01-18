<!-- /**
* 
*      Definire classe Persona:
*          - ATTRIBUTI (private):
*              - nome
*              - cognome
*              - dataNascita (stringa)
*          - METODI:
*              - costruttore che accetta nome e cognome
*              - setter/getter per ogni variabile
*              - printFullPerson: che stampa "nome cognome: dataNascita"
*              - toString: che ritorna "nome cognome: dataNascita"
* 
* 
*      Definire classe Employee che eredita da Persona:
*          - ATTRIBUTI (private):
*              - stipendio
*              - dataAssunzione
*          - METODI:
*              - costruttore che accetta nome, cognome e stipendio
*              - setter/getter per variabili 
*              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
*              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
* 
*/ -->

<?php
    class Person {
        private $name;
        private $surname;
        private $dateOfBirth;

        public function __construct($name, $surname) {
            $this -> setName($name);
            $this -> setSurname($surname); 
        }
    
        public function getName() {
            return $this -> name;
        }

        public function setName($name) {
            $this -> name = $name;
        }

        public function getSurname() {
            return $this -> surname;
        }
        
        public function setSurname($surname) {
            $this -> surname = $surname;
            
        }
        public function getDate() {
            return $this -> dateOfBirth;
        }

        public function setDate($dateOfBirth) {
            $this -> dateOfBirth = $dateOfBirth;
        }

        public function printFullPerson() {
            return $this -> getName() . " ". $this -> getSurname() . " : ". $this -> getDate();
        }

        public function __toString() {
            return $this -> printFullPerson();   
        }

        
    }

    class Employee extends Person {
        private $salary;
        private $assumptionDate;

        public function __construct($name, $surname, $salary) {
            parent::__construct($name, $surname); 
            $this -> setSalary($salary);
        }

        public function getSalary(){
            return $this -> salary;
        }

        public function setSalary($salary){
            $this -> salary = $salary;
        }

        public function getAssumptionDate(){
            return $this -> assumptionDate;
        }

        public function setAssumptionDate($assumptionDate){
            $this -> assumptionDate = $assumptionDate;
        }

        public function printFullEmployer() {
            return parent::printFullPerson()."Stipendio ".$this -> getSalary(). " (" ."Data Assunzione :". $this -> getAssumptionDate().")";
        }

        public function __toString() {
            return  $this -> printFullEmployer();
        }
    }
     
    $person1 = new Person("Anna", "Neri");
    $person2 = new Person("Luca", "Rossi");
    $person3 = new Person ("Antonio", "Abbrescia");

    $person1 -> setDate("07/11/1980");
    $person2 -> setDate("22/01/1993");
    $person3 -> setDate("12/07/1995");

    $employee1 = new Employee($person1 -> getName(), $person1 -> getSurname(), 1400);
    $employee2 = new Employee($person2 -> getName(), $person2 -> getSurname(), 1200);
    $employee3 = new Employee($person3 -> getName(), $person3 -> getSurname(), 1100);

    $employee1 -> setAssumptionDate("27/01/2020");
    $employee2 -> setAssumptionDate("15/09/2020");
    $employee3 -> setAssumptionDate("04/04/2020");


    echo $person1;
    echo $person2;
    echo $person3;
    
    echo "<br>-----------------------------<br><br>";
    
    echo $employee1;
    echo $employee2;
    echo $employee3;

?>