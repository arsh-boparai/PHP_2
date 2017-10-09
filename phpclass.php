<html>
<body>
<?php
class Employee{

var $Eid;
var $Ename;

function __construct()
{
    echo "<h1>creating employee object</h1>";
}
function setData($id,$name){
    $this->Eid=$id;
    $this->Ename=$name;
}
function getData()
{
    echo "<br>".$this->Eid;
    echo "<br>".$this->Ename;
    // return array($this->sid,$this->sname);
}
function __destruct()
{
    echo "<h1>destruction employee</h1>";
}
}
$s1=new Employee;
$s1->Eid=100;
$s1->Ename="jk";
echo "<br>".$s1->Eid;
echo "<br>".$s1->Ename;
echo "<br>";

$s1->setData(200,"Test Name");
$s1->getData();


class Salary extends Employee
{
    var $basicPay;


function __construct()
{
    echo "<h1>creating salary object</h1>";
}
function setData($EbasicPay){
    $this->basicPay=$EbasicPay;

}
function getData()
{
    echo "<br>".$this->basicPay;
  
    // return array($this->sid,$this->sname);
}
function __destruct()
{
    echo "<h1>destruction salary</h1>";
}
}
?>
</body>
</html>