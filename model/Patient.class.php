<?php
class Patient {
    private $id;
    private $firstName;
    private $lastName;
    private $phone;
    private $pesel;
    private $db;

    function __construct()
    {
        global $db;
        $this->db = $db;
    }
    function getId() : int {
        return $this->id;
    }
    function setFirstName(string $firstName) {
        $this->firstName = $firstName;
    }
    function setLastName(string $lastName) {
        $this->lastName = $lastName;
    }
    function setPhone(string $phone) {
        $this->phone = $phone;
    }
    function setPesel(string $pesel) {
        if(strlen($pesel) == 11) {
            $this->pesel = $pesel;
        } else {
            throw new LengthException("Pesel ma nieprawidlowa ilosc");
        }
    }

    function save() : bool {
        $q = $this->db->prepare("INSERT INTO patient VALUES (NULL, ?, ?, ?, ?)");
        $q->bind_param("ssss", $this->firstName, $this->lastName, $this->phone, $this->pesel);
        return $q->execute();
    }
    function load() {
        $q = $this->db->prepare("SELECT * FROM patient WHERE id = ? LIMIT 1");
        $q->bind_param("i", $this->id);
        $q->execute();
        $result = $q->get_result();
        $row = $result->fetch_assoc();
        $this->firstName = $row['firstName'];
        $this->lastName = $row['lastName'];
        $this->phone = $row['phone'];
        $this->pesel = $row['pesel'];
    }
    function findByPesel(string $pesel) {
        $q = $this->db->prepare("SELECT id FROM patient WHERE pesel = ? LIMIT 1");
        $q->bind_param("s", $pesel);
        $q->execute();
        //chainujemy metody
        $this->id = $q->get_result()->fetch_assoc()['id'];
        //ładujemy dane funkcją load
        $this->load();
    }
}



?>