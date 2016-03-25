
//dit is een test user class

class User {
var $m_sFirstname;
var $m_sLastname;
var $m_sUsername;
protected $m_sEmail;
protected $m_hpassword;

public function __set($p_sProperty, $p_sValue) {
    switch($p_sProperty)
    {
    case "Firstname":
    $this->m_sFirstname = $p_sValue;
    break;

    case "Lastname":
    $this->m_sLastname = $p_sValue;
    break;

    case "Username":
    $this->m_sUsername = $p_sValue;
    break;

    case "Email":
        if (filter_var($p_sValue, FILTER_VALIDATE_EMAIL)) {
            $this->m_sEmail = $p_sValue;
        }
        else
        {
            echo "Dit is geen geldog email adres"
        }
    $this->m_sEmail = $p_sValue;
    break;
    }
}




 function get_name() {

 return $this->name;

 }

    public function __construct($p_sFirstname, $m_sLastname, $p_nLeeftijd, $p_sGeboorteplaats) {
        $this->m_sFirstname= $p_sFirstname;
        $this->m_sLastname= $p_sLastname;
        $this->m_sUsername= $p_sUsername;
        $this->m_sMail= $p_sMail;
    }
}
