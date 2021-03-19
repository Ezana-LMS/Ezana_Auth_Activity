<?php
session_start();
session_unset();
$_SESSION['msg'] = "You have logged out successfully..!";
?>
<script language="javascript">
    document.location = "index.php";
</script>