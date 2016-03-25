
//dit is een test user class

class User {
var $m_sFirstname;
var $m_sLastname;
var $m_sUsername;
protected $m_sEmail;
protected $m_hpassword;

    public function __construct($p_sFirstname, $m_sLastname, $p_nLeeftijd, $p_sGeboorteplaats) {
        $this->m_sFirstname= $p_sFirstname;
        $this->m_sLastname= $p_sLastname;
        $this->m_sUsername= $p_sUsername;
        $this->m_sMail= $p_sMail;
    }
}
