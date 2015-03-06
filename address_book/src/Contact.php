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
        //getters
        //static methods
            //save, getAll, deleteAll
    }
?>
