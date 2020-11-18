<?php

    $mysqli = new mysqli("localhost","root","","booking_db");

    // Check connection
    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }

    //Add place button clicked
    if(isset($_POST["addPlace"])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } 
        else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

                $name = $_POST['placeName'];
                $desc = $_POST['placeDesc'];
                $category = $_POST['category'];
                $image = htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));


                try {
                    $mysqli -> query("INSERT INTO place VALUES (null, '$name', '$image', '$category', '$desc')");


                    echo "New record created successfully";
                } catch(PDOException $e) {
                    echo $sql . "<br>" . $e->getMessage();
            }
            } else {
              echo "Sorry, there was an error uploading your file.";
            }
        }

    }
?>

<form enctype="multipart/form-data"  method="POST">
    <label for="placeName">Place Name: </label>
    <input type="text" name="placeName">

    <label for="placeDesc">Description: </label>
    <textarea name="placeDesc"></textarea>

    <label for="category">Category: </label>
    <select name="category">
        <option value="Sights and Landmark">Sights and Landmark</option>
        <option value="Shopping Malls">Shopping Malls</option>
        <option value="Water & Amusement Parks">Water & Amusement Parks</option>
        <option value="Nature and Parks">Nature and Parks</option>
    </select>

    <label for="fileToUpload">Image: </label>
    <input type="file" name="fileToUpload" id="fileToUpload">

    <button name="addPlace" type="submit">Add</button>
</form>