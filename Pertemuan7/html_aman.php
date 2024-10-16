<!DOCTYPE html>
<head>
$input = $_POST['input'];
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

<script>alert('You have been hacked!');</script>

</head>
</html>

<?php
$email = $_POST['email'];
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
}else {

}
?>