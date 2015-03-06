<?php
    class Contact
    {
        //private properties
        private $first_name;
        private $last_name;
        private $phone_number;
        private $address;

        //constructor
        function __construct($new_first_name, $new_last_name, $new_phone_number, $new_address)
        {
            $this->first_name = $new_first_name;
            $this->last_name = $new_last_name;
            $this->phone_number = $new_phone_number;
            $this->address = $new_address;
        }

        //setters
        function setFirstName($first_name_input)
        {
            $this->first_name = $first_name_input;
        }

        function setLastName($last_name_input)
        {
            $this->last_name = $last_name_input;
        }

        function setPhoneNumer($phone_number_input)
        {
            $this->phone_number = $phone_number_input;
        }

        function setAddress($address_input)
        {
            $this->address = $address_input;
        }

        //getters
        function getFirstName()
        {
            return $this->first_name;
        }

        function getLastName()
        {
            return $this->last_name;
        }

        function getPhoneNumber()
        {
            return $this->phone_number;
        }

        function getAddress()
        {
            return $this->address;
        }

        //static methods
            //save, getAll, deleteAll
        function save()
        {
            array_push($_SESSION['list_of_contacts'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }

        static function deleteAll()
        {
            $_SESSION['list_of_contacts'] = array();
        }
    }
?>
