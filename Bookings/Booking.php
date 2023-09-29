<?php
require_once "../connect.php";
    class Booking   {
        public $startDate;
        public $endDate;
        public $bookingPin;

        function __construct($startDate = NULL, $endDate = NULL, $bookingPin = NULL)     {
            $this->startDate = $startDate;
            $this->endDate = $endDate;
            $this->bookingPin = $bookingPin;
        }

        public function set_startDate($startDate)
        {
            $this->startDate = $startDate;
        }

        public function set_endDate($endDate)
        {
            $this->endDate = $endDate;
        }

        public function set_bookingPin($bookingPin)
        {
            $this->bookingPin = $bookingPin;
        }


        public function get_startDate()
        {
            return $this->startDate;
        }

        public function get_endDate()
        {
            return $this->endDate;
        }

        public function get_bookingPin()
        {
            return $this->bookingPin;
        }

        public function createBooking() {
            try {
                global $conn;
                $startDate = $this->get_startDate();
                $endDate = $this->get_endDate();
                $bookingPin = $this->get_bookingPin();

                $sql = "INSERT INTO booking ( startDate, endDate, bookingPin)
            VALUES ('$startDate', '$endDate', '$bookingPin')";

                $conn->exec($sql);
                echo "<h1>Trip successfully booked!</h1>";
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
        }

        public function printBooking()  {
            require "../connect.php";
            echo "Starting Date: " . $this->get_startDate();
            echo "<br/>";
            echo "End Date: " . $this->get_endDate();
            echo "<br/>";
            echo "PIN: " . $this->get_bookingPin();
            echo "<br/>" . "<br/>";
        }

        function readBooking()
        {
            global $conn;
            require "../connect.php";
            $sql = $conn->prepare('SELECT * FROM booking');
            $sql->execute();

            foreach ($sql as $booking) {
                echo '<tr>';
                echo '<td> <th>Starting Date: </th>' . $booking['startDate'] . '</td> <br>';
                echo '<td> <th>End Date: </th>' . $booking['endDate'] . '</td> <br>';
                echo '<td> <th>PIN: </th>' . $booking['bookingPin'] . '</td> <br>';
                echo '</tr> <br>';
            }

            echo '</table></div>';
        }

        public function updateBooking($bookingPin)
        {
            global $conn;
            try {
                require "../connect.php";
                $startDate = $this->get_startDate();
                $endDate = $this->get_endDate();
                $bookingPin = $this->get_bookingPin();

                $sql = "UPDATE booking SET startDate = '$startDate', endDate = '$endDate', bookingPin = '$bookingPin' 
                    WHERE bookingPin = '$bookingPin'";
                $conn->exec($sql);

                echo "Donkey Travel successfully updated!" . "<br/>" . "<br/>";
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
        }

        public function searchBooking($bookingPin)
        {
            require "../connect.php";
            global $conn;

            try {
                $sql = $conn->prepare("
                    SELECT startDate, endDate, bookingPin FROM booking WHERE bookingPin = :bookingPin");
                $sql->bindParam(':bookingPin', $bookingPin);
                $sql->execute();

                $result = $sql->fetchAll(PDO::FETCH_ASSOC);

                if ($booking=$result[0]) {
                    $this->set_startDate($booking["startDate"]);
                    $this->set_endDate($booking["endDate"]);
                    $this->set_bookingPin($booking["bookingPin"]);
                } else {
                    throw new PDOException("Donkey Travel not found");
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
                echo '<a href="../homepage.php">Back to main menu</a>' .
                    '</div>';
                exit;
            }
        }

        public function deleteBooking($bookingPin)
        {
            global $conn;
            try {
                require "../connect.php";
                $sql = "DELETE FROM booking
                    WHERE bookingPin = '$bookingPin'";
                $conn->exec($sql);

                echo "Booking successfully canceled!" . "<br/>" . "<br/>";
            } catch (PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
        }

    }