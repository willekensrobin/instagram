<?php
require_once('view/header.php');
?>

<?php
if(isset($_SESSION['username']) && isset($_SESSION['user_id'])){
    
    echo $_SESSION['username'], $_SESSION['user_id'];
}
?>

<?php
require_once('view/footer.php');
?>