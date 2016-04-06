<?php 

    class Db 
    {
        private static $db;
        
        public static function getInstance()
        {
            if(self::$db !== null)
            {
                echo "Reusing existing connection";
                return self::$db;
            }
            else
            {
                echo "Creating new connection";
                self::$db = new PDO('mysql:host=localhost;dbname=instagram', 'root', 'root');
                return self::$db;
            }
            // $conn = Db:: getInstance();
        }
    }

?>