<?php
//// Magic constants
//echo __DIR__.'<br>';
//echo __FILE__.'<br>';
//
//echo __LINE__.'<br>';
//// Create directory
//mkdir('sandeep');
//
//// Rename directory
//rename ('sandeep','test');
//
////// Delete directory
//rmdir ('test');
// Read files and folders inside directory
$files = scandir('../');
echo '<pre>';
var_dump($files);
echo'</pre>';

// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt');
file_put_contents('sample.text', 'here is some Content');

// file_get_contents from URL
$usersJson = file_get_contents('https://jsonplaceholder.typicode.com/users');
echo $usersJson;
$users = json_decode($usersJson, true);
echo '<pre>';
var_dump($users);
echo '</pre>';

file_exists ('$sample.txt'); //true

is_dir ('$sandeep'); //false
// https://www.php.net/manual/en/book.filesystem.php
// file_exists
// is_dir
// filemtime
// filesize
// disk_free_space
// file

//$time = $time();
//if (touch($time)) {
//    echo $time . ' modification time has been changed to present time';
//} else {
//    echo 'Sorry, could not change modification time of ' . $time;
//}


// This is the touch time, we'll set it to one hour in the past.
$time = time() - 3600;

// Touch the file
if (!touch('some_file.txt', $time)) {
    echo 'Whoops, something went wrong...';
} else {
    echo 'Touched file with success';
}


//for loops example.
//for ($x=0; $x < 10; $x++)
//{
//    echo $x .'</br>';
//}
//?>

