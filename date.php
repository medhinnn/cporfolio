<?php
//Parent class
class class1{

function showMethod1()
{
echo "<font color='red' size='5px'>It is the parent class</font><br/>";
}
}

//Child Class
class class2 extends class1{

function showMethod2()
{
echo "<font color='green' size='4px'>It is the child class</font><br/>";
}
}

//Grand Child Class
class class3 extends class2{

function showMethod3()
{
echo "<font color='blue' size='2px'>It is the grand child class</font>";
}
}

$object = new class3();

$object->showMethod1();
$object->showMethod2();
$object->showMethod3();
?>