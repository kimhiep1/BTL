<?php

include 'dbConfig.php';
$statusMsg = '';



$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    
    if (file_exists($targetfileFath)) {
        echo "Sorry, file already exists.";   
    }else{
        $allowTypes = array('mp3');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server    
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only mp3 files are allowed to upload.';
    }
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

echo $statusMsg;
?>