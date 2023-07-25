<?php
$file = 'downloads.txt'; // Change this to a suitable path to store the download count

if (file_exists($file)) {
  $count = (int)file_get_contents($file);
} else {
  $count = 0;
}

$count++;
file_put_contents($file, $count);

echo $count;
?>
