

                <?php

                $mysqli = new mysqli('localhost', 'vikrant1989', 'admin@123','momi1');

                if (isset($_POST['rdata'])) {

                    $rdata = trim($_POST['rdata']);

                    $query_string = "INSERT INTO `result` (  `dresult`,`created_at` ) VALUES ( '".$rdata."', CURRENT_TIMESTAMP)";

                    if ($mysqli->query($query_string) === TRUE) {
                        echo "New record created successfully";

                        die();
                      }


                    
                    die();
                }

                

                // if (isset($_POST['contest_form'])) {
                    
                //     if (isset($_POST['email'])) {
                //         $fname = trim($_POST['fname']);
                //         $fphone = trim($_POST['fphone']);
                //         $email = trim($_POST['email']);
                //         $age = trim($_POST['age']);
                //         $type_of_mom = 'norm mom';
                //         $query_string = "INSERT INTO `contest` (  `fname`,`fphone`,`email`, `age`, `type_of_mom`, `created_at` ) VALUES ( '".$fname."','".$fphone."','".$email."','".$age."','".$type_of_mom."', CURRENT_TIMESTAMP)";

                //         if ($mysqli->query($query_string) === TRUE) {
                //             echo "New record created successfully";
                //           }
                //       }

                //   }









                 ?>     
                
          