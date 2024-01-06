<?php
$email = $_POST['email'] ?? 'abc';
$user = get_user($email);