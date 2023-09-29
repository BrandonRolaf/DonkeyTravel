<?php

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

    }