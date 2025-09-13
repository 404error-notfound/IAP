<?php
// Include the ClassAutoLoad Method
require_once 'ClassAutoLoad.php';
$layout->header($conf);
print $hello->today();
$form->signup();
echo "<br><a href='users.php'>View All Users</a> | <a href='signin.php'>Already have an account? Log in</a>";
$layout->footer($conf);