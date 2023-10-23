<?php

require_once 'connectDB.php';
class Employee {
    // Properties
    public $name;
    public $email;
    public $bankdetails;
    public $address;
    public $postalcode;
    public $telnumber;



    // Constructor
    public function __construct($name = NULL, $email= NULL, $bankdetails = NULL, $address = NULL, $postalcode = NULL, $telnumber= NULL) {
        $this->name = $name;
        $this->email = $email;
        $this->bankdetails = $bankdetails;
        $this->address = $address;
        $this->postalcode = $postalcode;
        $this->telnumber = $telnumber;
    }

    // Setters


    public function set_Name($name) {
        $this->name = $name;
    }


    public function set_Email($email) {
        $this->email = $email;
    }
    public function set_Bankdetails($bankdetails) {
        $this->bankdetails = $bankdetails;
        
    }public function set_Address($address) {
        $this->address = $address;

    }public function set_Postalcode($postalcode) {
        $this->postalcode = $postalcode;
    }

    public function set_Telnumber($telnumber) {
        $this->telnumber = $telnumber;
    }

    // Getters
   

    public function get_Name() {
        return $this->name;
    }
    public function get_Email() {
        return $this->email;
    }

    public function get_Bankdetails() {
        return $this->bankdetails;
    }

    public function get_Address() {
        return $this->address;
    }

    public function get_Postalcode() {
        return $this->postalcode;
    }


    public function get_Telnumber() {
        return $this->telnumber;
    }

    public function afdrukken()
		{
			echo "employee name: " . $this->get_Name();
			echo "<br/>";
            echo "employee email: " . $this->get_Email();
            echo "<br/>";
            echo "employee bankdetails: " . $this->get_Bankdetails();
            echo "<br/>";
            echo "employee address: " . $this->get_Address();
            echo "<br/>";
            echo "employee postalcode: " . $this->get_Postalcode();
            echo "<br/>";
            echo "employee telephone number: " . $this->get_Telnumber();
            echo "<br/>";

		}

   public function createEmployee() {
    $employeeId = null;
    $name = $this->get_Name();
    $email = $this->get_Email();
    $bankdetails = $this->get_Bankdetails();
    $address = $this->get_Address();
    $postalcode = $this->get_Postalcode();
    $telnumber = $this->get_Telnumber();
    global $conn;

    $sql = $conn->prepare("INSERT INTO employees VALUES (:employeeId, :name, :email, :bankdetails, :address, :postalcode, :telnumber)");
    
        $sql->bindParam(":employeeId", $employeeId);
        $sql->bindParam(":name", $name);
        $sql->bindParam(":email", $email);
        $sql->bindParam(":bankdetails", $bankdetails);
        $sql->bindParam(":address", $address);
        $sql->bindParam(":postalcode", $postalcode);
        $sql->bindParam(":telnumber", $telnumber);
        ;

    if ($sql->execute()) {
        echo "The employee is added to the database";
    } else {
        echo "Error: " . $sql->errorInfo()[2];
    }
}
public function readEmployee(){
    global $conn;
    $sql = $conn->Prepare(" SELECT * FROM employees
    
    
    ");

    $sql->execute();
    foreach($sql as $employee)
    {
        echo "employee id: " . $employee ["employeeId"] . " - ";
        echo "employee name: " . $this->name= $employee ["name"]. " - ";
        echo "employee email: " . $this->email= $employee ["email"]. " - ";
        echo "employee bankdetails: " . $this->bankdetails= $employee ["bankDetails"]. " - ";
        echo "employee address: " . $this->address = $employee ["address"];
        echo "employee postalcode: " . $this->postalcode= $employee ["postalCode"]. " - ";
        echo "employee telephone number: " . $this->telnumber= $employee ["telNumber"]. " - " . "<br>";
        
    }

}
public function searchEmployee($employeeId){
    require "connectDB.php";
    $sql = $conn->Prepare("SELECT * FROM employees WHERE employeeId = :employeeId");
    $sql->bindParam(":employeeId", $employeeId);
    $sql->execute();

    foreach($sql as $employee){
        echo "employee id: " . $employee["employeeId"] . "<br>";
        echo "employee name: " . $employee["name"] . "<br>";
        $this->name=$employee["name"];
        echo "employee email: " . $employee["email"] . "<br>";
        $this->email=$employee["email"];
        echo "employee bankdetails: " . $employee["bankDetails"] . "<br>";
        $this->bankdetails=$employee["bankDetails"];
        echo "employee address: " . $employee["address"] . "<br>";
        $this->address=$employee["address"];
        echo "employee postalcode: " . $employee["postalCode"] . "<br>";
        $this->postalcode=$employee["postalCode"];
        echo "employee telephone number: " . $employee["telNumber"] . "<br>";
        $this->telnumber=$employee["telNumber"];


    }

    
}

public function deleteEmployee($employeeId)
{
    require "connectDB.php";
    // statement maken
    $sql = $conn->prepare("
                            delete from employees
                            where employeeId = :employeeId
                         ");
    // variabele in de statement zetten
    $sql->bindParam(":employeeId", $employeeId);
    $sql->execute();
}


public function updateEmployee($employeeId)
{
    require "connectDB.php";
    // gegevens uit het object in variabelen zetten 
    $employeeId;
    $name		= $this->get_name();
    $email     = $this->get_email();
    $bankdetails = $this->get_Email();
    $address = $this->get_Address();
    $postalcode = $this->get_Postalcode();
    $telnumber = $this->get_Telnumber();
 

    // statement maken
    $sql = $conn->prepare("
                            update employees
                            set name=:name, email=:email, bankDetails=:bankdetails , address=:address , postalCode=:postalcode , telNumber=:telnumber
                            where employeeId=:employeeId
                         ");
    // variabelen in de statement zetten
    $sql->bindParam(":employeeId", $employeeId);
    $sql->bindParam(":name", $name);
    $sql->bindParam(":email", $email);
    $sql->bindParam(":bankdetails", $bankdetails);
    $sql->bindParam(":address", $address);
    $sql->bindParam(":postalcode", $postalcode);
    $sql->bindParam(":telnumber", $telnumber);
    $sql->execute();
}







}
    