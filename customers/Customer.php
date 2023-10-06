<?php
    require_once "../connect.php";
    class Customer {
        public $name;
        public $address;
        public $email;
        public $cellNumber;

        function __construct($name, $address, $email, $cellNumber)  {
            $this->name = $name;
            $this->address = $address;
            $this->email = $email;
            $this->cellNumber = $cellNumber;
        }

        public function set_name($name)
        {
            $this->name = $name;
        }

        public function set_address($address)
        {
            $this->address = $address;
        }

        public function set_email($email)
        {
            $this->email = $email;
        }

        public function set_cellNumber($cellNumber)
        {
            $this->cellNumber = $cellNumber;
        }

        public function get_name()    {
            return $this->name;
        }

        public function get_address()    {
            return $this->address;
        }

        public function get_email()     {
            return $this->email;
        }

        public function get_cellNumber()    {
            return $this->cellNumber;
        }

        public function createCustomer()
        {
            global $conn;
            try {
                $name = $this->get_name();
                $address = $this->get_address();
                $email = $this->get_email();
                $cellNumber = $this->get_cellNumber();

                $sql = "INSERT INTO customer ( name, address, email, cellNumber)
                    VALUES ('$name', '$address', '$email', '$cellNumber')";

                $conn->exec($sql);
                echo "<h1>Customer created!</h1>";
            }   catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
        }

        public function printCustomer()  {
            require "../connect.php";
            echo "Name: " . $this->get_name();
            echo "<br/>";
            echo "Address: " . $this->get_address();
            echo "<br/>";
            echo "Email: " . $this->get_email();
            echo "<br/>" . "<br/>";
            echo "Phone Number: " . $this->get_cellNumber();
            echo "<br/>" . "<br/>";
        }

        function readCustomer()
        {
            global $conn;

            $sql = $conn->prepare('SELECT * FROM customer');
            $sql->execute();

            foreach ($sql as $customer) {
                echo '<tr>';
                echo '<td> <th>Name: </th>' . $customer['name'] . '</td> <br>';
                echo '<td> <th>Address: </th>' . $customer['address'] . '</td> <br>';
                echo '<td> <th>Email: </th>' . $customer['email'] . '</td> <br>';
                echo '<td> <th>Phone Number: </th>' . $customer['cellNumber'] . '</td> <br>';
                echo '</tr> <br>';
            }

            echo '</table></div>';
        }

        public function updateCustomer($name)
        {
            global $conn;
            try {
                require "../connect.php";
                $name = $this->get_name();
                $address = $this->get_address();
                $email = $this->get_email();
                $cellNumber = $this->get_cellNumber();

                $sql = "UPDATE customer SET name = '$name', address = '$address', email = '$email', cellNumber '$cellNumber'
                    WHERE name = '$name'";
                $conn->exec($sql);

                echo "Customer updated!" . "<br/>" . "<br/>";
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
        }

        public function searchCustomer($name)
        {
            require "../connect.php";
            global $conn;

            try {
                $sql = $conn->prepare("
                    SELECT name, address, email, cellNumber FROM customer WHERE name = :name");
                $sql->bindParam(':name', $name);
                $sql->execute();

                $result = $sql->fetchAll(PDO::FETCH_ASSOC);

                if ($customer=$result[0]) {
                    $this->set_name($customer["name"]);
                    $this->set_address($customer["address"]);
                    $this->set_email($customer["email"]);
                    $this->set_cellNumber($customer["cellNumber"]);
                } else {
                    throw new PDOException("Customer not found");
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
                echo '<a href="../homepage.php">Back to main menu</a>' .
                    '</div>';
                exit;
            }
        }

        public function deleteCustomer($name)
        {
            global $conn;
            try {
                require "../connect.php";
                $sql = "DELETE FROM customer
                    WHERE name = '$name'";
                $conn->exec($sql);

                echo "Customer Deleted!" . "<br/>" . "<br/>";
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
        }

    }