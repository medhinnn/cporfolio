<?php
//Parent class
class Employee{

//Parent class variables
public $name;
public $department;

//Initialize basic data
public function setData()
{
$this->name = "Medhin Mulat";
$this->department = "HR";


}
}


//Child Class
class Executive extends Employee{

//Child class variable
public $designation = "Programmer";
public $salary= "1000";
//Print employee details
public function showDetails()
{
if($this->name != "" && $this->designation != "" && $this->department != "" && $this->salary != "")
{
echo "<b>Employee Details: </b><br/>";
echo "Name: ".$this->name."<br/>";
echo "Role: ".$this->designation."<br/>";
echo "Department: ".$this->department."<br/>";
echo "Salary: ".$this->salary."<br/>";
}
}
}

//Create object the child class
$objEmp=new Executive();
//Call parent class method
$objEmp->setData();
//Call child class method
$objEmp->showDetails();

?>