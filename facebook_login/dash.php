<?php 
require "with_facebook.php";

if (isset($_SESSION['access_token'])) : ?>
<h1>logged in</h1>

<?php else : ?>
<h1>not logged in</h1>
<?php endif; ?>