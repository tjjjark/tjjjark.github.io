<?php
// Path to the counter file
$file = 'counter.txt';

// Check if the file exists
if (file_exists($file)) {
    // Read the current count from the file
    $count = (int)file_get_contents($file);
} else {
    // If the file doesn't exist, start with count 0
    $count = 0;
}

// Increment the count
$count++;

// Write the updated count back to the file
file_put_contents($file, $count);

// Optionally: Output the count (for debugging purposes)
// echo "Page views: " . $count;
?>
