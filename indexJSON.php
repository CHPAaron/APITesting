<?php
$jsonString = file_get_contents('basic.json');

$user = json_decode($jsonString);

echo "<strong>Name (string):</strong>" . $user->name . "<br />";
echo "<strong>Likes (array):</strong>" . $user->likes[0] . " and " . $user->likes[2] . "<br />";
echo "<strong>Phone Numbers (loop):</strong><br />";
foreach($user->phoneNumbers as $phoneNumber) {
    echo "<strong>Phone:</strong>" . $phoneNumber->number . "<br />";
}






echo "<pre>";
print_r($user);
echo "</pre>";



?>