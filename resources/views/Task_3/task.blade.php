<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task-3</title>
</head>

<body>
    <h2>Answer:</h2>
    @php
         class Employee{

            private  $name;
            private  $salary;

            public function getName(){
              return $this->$name;
            }
            public function setName($name){
             $this->$name = $name;
             echo('Name is '.$name);
            }

            public function getSalary(){
                return $this->$salary;
            }
            public function setSalary($salary){
                  $this->$salary = $salary;
                  echo('Salary is '.$salary);
                  echo("<br>");
            }

        }
$employee = new Employee;
$employee->setName('suhail');
$employee->setSalary(20000);
        echo(getName()) ;         //suhail
        echo(getSalary())         //20000
    @endphp
</body>
</html>
