<?php

    class BookingSystemClass{
        
        //Create Account Function
        function createUser($conn, $data){
            $fullname = $data['name'];
            $email = $data['email'];
            $pass = password_hash($data['pass'], PASSWORD_DEFAULT);

            try {
                $stmts = $conn->prepare("SELECT * FROM user_tbl WHERE email = ?");
                $stmts->execute([$email]);
                $users = $stmt->fetchObject();

                if ($stmts->rowCount() > 0) {
                    echo "email@foUnd";
                }
                else{
                    
                    $sql = "INSERT INTO user_tbl (name, email, password) VALUES (?,?,?)";
                    $stmt = $conn->prepare($sql)->execute([$fullname, $email, $pass]);


                    echo "New record created successfully";
                }
            } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
        }

        //Login User Function
        function loginUser($conn, $data){        
            $pass = $data['password']; 
            try{
                $stmt = $conn->prepare("SELECT * FROM user_tbl WHERE email = ?");
                $stmt->execute([$data['email']]);
                $users = $stmt->fetchObject();
                if ($stmt->rowCount() > 0) {
                    if (password_verify($data['password'], $users->password)) {
                        echo "Welcome, ".$users->name;

                    } else {
                        echo "Invalid Password";
                    }
                } else {
                    echo "Invalid Email";
                }
            }
            catch(PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
            }
        }

        //Get all places
        function getAllPlace($conn){
            try{
                $stmt = $conn->prepare("SELECT * FROM place");
                $stmt->execute();

                $arr = array();
                while($result = $stmt->fetchObject())  array_push($arr, $result);
                return json_encode($arr);
                
            }
            catch(PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
            }
        }

        //Get place by category
        function getPlacesByCat($conn, $data){
            $category = $data['category'];
            try{
                $stmt = $conn->prepare("SELECT * FROM place WHERE category LIKE '$category'");
                $stmt->execute();

                $arr = array();
                while($result = $stmt->fetchObject())  array_push($arr, $result);
                return json_encode($arr);
                
            }
            catch(PDOException $e){
                echo $sql . "<br>" . $e->getMessage();
            }
        }

        //Submit a booking
        function submitBokking($conn, $data){
            $person = $data['person'];
            $date = $data['date'];
            $email = $data['email'];
            $placeID = $data['placeID'];

            try {
                $stmts = $conn->prepare("SELECT * FROM booking_tbl WHERE date = ? AND id_place = ?");
                $stmts->execute([$date, $placeID]);
                $res = $stmts->fetchObject();

                if ($stmts->rowCount() > 0) {
                    echo "Date is already been picked, try a new one";
                }
                else{
                    
                    $sql = "INSERT INTO booking_tbl (email, id_place, date, no_person) VALUES (?,?,?,?)";
                    $stmt = $conn->prepare($sql)->execute([$email, $placeID, $date, $person]);


                    echo "Your booking is already set!";
                }
            } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
        }
    }