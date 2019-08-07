<?php
if (isset($_GET["project"])) {
shell_exec("oc new-project {$_GET['project']} 2>&1");
} else {
echo "<h1> ERROR: Which project to create? </h1>";
}
?>
