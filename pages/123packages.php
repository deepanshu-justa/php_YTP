<?php

// Read the JSON file contents
$jsonData = file_get_contents('../assets/json/packages.json');

// Parse the JSON data into an associative array
$data = json_decode($jsonData, true);

// Access the packages array
$packages = $data['packages'];

// Loop through each package and display the details
foreach ($packages as $package) {
    echo "Package ID: " . $package['id'] . "<br>";
    echo "Name: " . $package['name'] . "<br>";
    echo "Duration: " . $package['duration'] . "<br>";
    echo "Cost: $" . $package['cost'] . "<br>";
    echo "Type: " . $package['type'] . "<br><br><br>";
    // echo "Itinerary: <br>";
    // echo "<ol>";
    // foreach ($package['itinerary'] as $day) {
    //     echo "<li>Day " . $day['day'] . ": " . $day['description'] . "</li>";
    // }
    // echo "</ol>";
    // echo "Highlights: <ul>";
    // foreach ($package['highlights'] as $highlight) {
    //     echo "<li>" . $highlight . "</li>";
    // }
    // echo "</ul><br>";
}

?>
