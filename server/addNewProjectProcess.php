<?php
require "connection.php";
session_start();

// Check if the request method is POST and contains JSON data
// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SERVER['CONTENT_TYPE']) && $_SERVER['CONTENT_TYPE'] === 'application/json') {
//     // Get the JSON data
//     $data = json_decode(file_get_contents("php://input"));

//     if (empty($data)) {
//         echo ("Invalid JSON data received.");
//     } else {
//         $jsonProject = $data->project;
//         $jsonMainTasks = $data->mainTasks;

//         if ($jsonProject->title == "") {
//             echo ("Please type your project name!");
//         } else if ($jsonProject->description == "") {
//             echo ("Please type your project description!");
//         } else if ($jsonProject->startDate == "") {
//             echo ("Please type your project start date!");
//         } else if ($jsonProject->endDate == "") {
//             echo ("Please type your project ending date!");
//         } else if (count($jsonMainTasks) < 1) {
//             echo ("Please add your project main tasks!");
//         } else {
//             // Insert project data
            
//             $insertProjectQuery = "INSERT INTO `projects` 
//             (`title`,`description`,`start_date`,`end_date`,`project_status_id`,`owner_email`) VALUES 
//             (?, ?, ?, ?, ?, ?)";

//             // Bind parameters
//             $stmt = Database::$connection->prepare($insertProjectQuery);
//             $stmt->bind_param("ssssss", 
//                 $jsonProject->title,
//                 $jsonProject->description,
//                 $jsonProject->startDate,
//                 $jsonProject->endDate,
//                 $jsonProject->status,
//                 "sasindu@gmail.com"
//             );

//             // Execute the query
//             $stmt->execute();

//             if ($stmt->errno) {
//                 echo "Error: " . $stmt->error;
//             } else {
//                 // Get the ID of the inserted project
//                 $insertedProjectId = $stmt->insert_id;
//                 $stmt->close();

//                 // Insert main tasks
//                 foreach ($jsonMainTasks as $task) {
//                     $insertMainTaskQuery = "INSERT INTO `maintasks` 
//                     (`title`,`description`,`project_status_id`,`projects_id`,`startDate`,`endDate`) VALUES 
//                     (?, ?, ?, ?, ?, ?)";
                    
//                     $stmt = Database::$connection->prepare($insertMainTaskQuery);
//                     $stmt->bind_param("ssssss",
//                         $task->title,
//                         $task->description,
//                         1,
//                         $insertedProjectId,
//                         $task->startDate,
//                         $task->endDate
//                     );
                    
//                     $stmt->execute();
                    
//                     if ($stmt->errno) {
//                         echo "Error: " . $stmt->error;
//                     }
                    
//                     $stmt->close();
//                 }

//                 echo "Success";
//             }
//         }
//     }
// } else {
//     echo ("Invalid request.");
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SERVER['CONTENT_TYPE']) && $_SERVER['CONTENT_TYPE'] === 'application/json') {
    // Get the JSON data
    $data = json_decode(file_get_contents("php://input"));

    // Check if the decoding was successful
    if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
        echo ("Invalid JSON data received.");
    } else {
        // Access and display the properties of the JSON object
        $jsonProject =json_decode($data->project);
        $jsonMainTasks = json_decode($data->mainTasks);

        if ($jsonProject->title == "") {
            echo ("Please type your project name!");
        } else if ($jsonProject->description == "") {
            echo ("Please type your project description!");
        } else if ($jsonProject->startDate == "") {
            echo ("Please type your project start date!");
        } else if ($jsonProject->endDate == "") {
            echo ("Please type your project ending date!");
        } else if (count($jsonMainTasks) < 1) {
            echo ("Please add your project main tasks!");
        } else {
            // Insert project data
            
            $insertProjectQuery = "INSERT INTO `projects` 
            (`title`,`description`,`start_date`,`end_date`,`project_status_id`,`owner_email`) VALUES 
            (?, ?, ?, ?, ?, ?)";

            // Bind parameters
            $stmt = Database::$connection->prepare($insertProjectQuery);
            $emailjs = "test@gmail.com";

            $stmt->bind_param("ssssss", 
                $jsonProject->title,
                $jsonProject->description,
                $jsonProject->startDate,
                $jsonProject->endDate,
                $jsonProject->status,
                $emailjs
            );

            // Execute the query
            $stmt->execute();

            if ($stmt->errno) {
                echo "Error: " . $stmt->error;
            } else {
                // Get the ID of the inserted project
                $insertedProjectId = $stmt->insert_id;
                $stmt->close();

                // Insert main tasks
                foreach ($jsonMainTasks as $task) {
                    $insertMainTaskQuery = "INSERT INTO `maintasks` 
                    (`title`,`description`,`project_status_id`,`projects_id`,`startDate`,`endDate`) VALUES 
                    (?, ?, ?, ?, ?, ?)";
                $projectStatus = 1;
                    
                    $stmt = Database::$connection->prepare($insertMainTaskQuery);

                    $stmt->bind_param("ssssss",
                        $task->title,
                        $task->description,
                        $projectStatus,
                        $insertedProjectId,
                        $task->startDate,
                        $task->endDate
                    );
                    
                    $stmt->execute();
                    
                    if ($stmt->errno) {
                        echo "Error: " . $stmt->error;
                    }
                    
                    $stmt->close();
                }

                echo "Success";
            }
        }
        

        // Rest of your code here...
    }
} else {
    echo ("Invalid request.");
}
