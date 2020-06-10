<?php

namespace app\db;

class Database
{
    /**
     * @var \PDO
     */
    public $pdo;

    public function __construct()
    {
        $config = require __DIR__ . '/../config.php';
        $servername = $config['host'];
        $username = $config['username'];
        $password = $config['password'];
        $database = $config['database'];

        $this->pdo = new \PDO("mysql:host=$servername;dbname=$database", $username, $password);
    }


    public function insertUser($dbfirstname, $dblastname, $dbemail, $dbpassword)
    {

        $statement = $this->pdo->prepare("insert into users (firstname,lastname,email,password) 
                                                    Values (:firstname, :lastname, :email, :password)");
        $statement->bindParam(':firstname', $dbfirstname);
        $statement->bindParam(':lastname', $dblastname);
        $statement->bindParam(':email', $dbemail);
        $statement->bindParam(':password', $dbpassword);
        return $statement->execute();
    }

    public function insertprofile($dbfirstname, $dblastname, $dbemail, $dbcountry, $dbcity, $dbphonenumber, $dbeducation, $dbexperience)
    {

        $statement = $this->pdo->prepare("insert into profile (firstname,lastname,email,country,city,phonenumber,education,experience) 
                                                    Values (:firstname, :lastname, :email, :country,:city,:phonenumber,:education,:experience)");
        $statement->bindParam(':firstname', $dbfirstname);
        $statement->bindParam(':lastname', $dblastname);
        $statement->bindParam(':email', $dbemail);
        $statement->bindParam(':country', $dbcountry);
        $statement->bindParam(':city', $dbcity);
        $statement->bindParam(':phonenumber', $dbphonenumber);
        $statement->bindParam(':education', $dbeducation);
        $statement->bindParam(':experience', $dbexperience);

        return $statement->execute();
    }


    public function login($email, $password, &$user = null)
    {
        $statement = $this->pdo->prepare("SELECT * FROM users WHERE email = :email");
        $statement->bindValue(':email', $email);
        $statement->execute();
        $user = $statement->fetch(\PDO::FETCH_ASSOC);
        if (!$user) {
            return [false, 'User does not exist'];
        }
        if (!password_verify($password, $user['password'])) {
            return [false, 'Password is incorrect'];
        }

        return [true, ''];
    }

}