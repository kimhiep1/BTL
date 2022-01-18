<?php
// Include the database configuration file
include 'dbConfig.php';

$result = mysqli_query("$db, "SELECT * FROM db_music ORDER BY uploaded_on DESC);

if(mysqli->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $musicURL = 'uploads/'.$row["file_name"];
?>
    <audio src="<?php echo $musicURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No music found...</p>
<?php } ?>