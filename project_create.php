<?php
if (is_exists($_GET["project"])) {
system("oc create project {$_GET['project']}");
} else {
echo "<h1> ERROR: Which project to create? </h1>";
}
?>
