<?php

use models\classes\Database;
use models\classes\Users;

 require_once 'includes/header.php' ?>
 
<?php

require_once 'vendor/autoload.php';

\models\classes\Database::startConn();

$token = \models\classes\Database::firstVisit();

$user = new \models\classes\User($token);

$posts = new \models\classes\Posts($user->id);

$posts->renderPosts($user);

\models\classes\Database::closeConn();

?>

<?php require_once 'includes/footer.php' ?>