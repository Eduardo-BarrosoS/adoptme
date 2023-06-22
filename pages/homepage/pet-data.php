<?php

$pets = [
    [
        "name" => "Bruno",
        "img-url" => "https://i.ibb.co/prPTC8g/image-19.png",
        "pet-age" => "1.2 years old",
        "date-waiting" => "180 days waiting",
    ],
    [
        "name" => "Max",
        "img-url" => "https://i.ibb.co/JjtgmbD/image-20.png",
        "pet-age" => "2 years old",
        "date-waiting" => "100 days waiting",
    ],
    [
        "name" => "Lucy",
        "img-url" => "https://i.ibb.co/j6CmGkw/image-21.png",
        "pet-age" => "6 months old",
        "date-waiting" => "50 days waiting",
    ],
    [
        "name" => "Buddy",
        "img-url" => "https://i.ibb.co/tL1bjMy/image-23.png",
        "pet-age" => "3 years old",
        "date-waiting" => "200 days waiting",
    ],
    [
        "name" => "Daisy",
        "img-url" => "https://i.ibb.co/VWQSh6m/image-24.png",
        "pet-age" => "1 year old",
        "date-waiting" => "120 days waiting",
    ],
    [
        "name" => "Milo",
        "img-url" => "https://i.ibb.co/sFSY3gn/image-25.png",
        "pet-age" => "4 months old",
        "date-waiting" => "40 days waiting",
    ],
    [
        "name" => "Bella",
        "img-url" => "https://i.ibb.co/PCyP8ND/image-2.png",
        "pet-age" => "2 years old",
        "date-waiting" => "190 days waiting",
    ],
    [
        "name" => "Charlie",
        "img-url" => "https://i.ibb.co/NZq2pQp/image-4.png",
        "pet-age" => "3 years old",
        "date-waiting" => "210 days waiting",
    ],
    [
        "name" => "Lola",
        "img-url" => "https://i.ibb.co/84R7g7P/image-5.png",
        "pet-age" => "1.5 years old",
        "date-waiting" => "160 days waiting",
    ],
    [
        "name" => "Rocky",
        "img-url" => "https://i.ibb.co/K7hcCBD/image-12.png",
        "pet-age" => "4 years old",
        "date-waiting" => "220 days waiting",
    ],
];

// Save the JSON formatted data to a file
file_put_contents('pets.json', json_encode($pets));