<?php
session_start();
session_unset();
//session_destroy();
$_SESSION['msg']="You have logged out successfully..!";
?>
<script language="javascript">
document.location="index.php";
</script>
