<?php
class User {
var $m_sFullname;
var $m_sUsername;
protected $m_sEmail;
protected $m_sPassword;

public function __set($p_sProperty, $p_sValue) {
    switch($p_sProperty)
    {
    case "Fullname":
    $this->m_sFullname = $p_sValue;
    break;
            
    case "Username":
    $this->m_sUsername = $p_sValue;
    break;
            
    case "Password":
    $this->m_sPassword = $p_sValue;
    break;
            
    case "Email":
        if (filter_var($p_sValue, FILTER_VALIDATE_EMAIL)) {
            $this->m_sEmail = $p_sValue;
        }
        else
        {
            echo "Dit is geen geldig email adres";
        }
    $this->m_sEmail = $p_sValue;
    break;
    }
}




 function get_name() {

 return $this->name;

 }
    public function save() {
        $conn = new mysqli("localhost", "root", "", "instagram");
	
	if (!$conn->connect_errno) {
		// prepare the query, protect against SQL injection (real_escape_string)
		$query = "INSERT INTO db_users (username,fullname, password, email) VALUES ('".$conn->real_escape_string($this->m_sUsername)."','".$this->m_sFullname."','".$this->m_sPassword."','".$this->m_sEmail. "')";
		// execute query on connection, returns true/false. 
		// true = success, false = fail.
		// email & password has verification so these can not be rendered. Nickname can, however. 
		if ($conn->query($query)) {
            echo "succes";
			// Redirect to index page while logged in.
//			header("Location: index.php?page=sessionhandler");
		}
	} else {
		echo "fail " . $conn->connect_error;
	}
    }

    public function __construct($p_sFullname, $p_sUsername, $p_sPassword, $p_sEmail) {
        $this->m_sFullname= $p_sFullname;
        $this->m_sUsername= $p_sUsername;
        $this->m_sPassword = $p_sPassword;
        $this->m_sEmail= $p_sEmail;
    }
}


?>
