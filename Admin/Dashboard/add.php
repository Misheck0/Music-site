<?php
$db = new mysqli('localhost','misheck','5283','tmc');


$artist_name = $_POST['airtist_name'];
$title = $_POST['title'];

$SongName = $_FILES['song']['name'];
$covorImg = $_FILES['songImg']['name'];

$imgsize = $_FILES['songImg']['size'];
$songsize = $_FILES['song']['size'];

$song_tmpname = $_FILES['song']['tmp_name'];
$img_tmpname = $_FILES['songImg']['tmp_name'];

if($imgsize < 5000000)  {
    $imgUpload_ok = move_uploaded_file($img_tmpname,'Images/'.$covorImg);
    $songUpload_ok = move_uploaded_file($song_tmpname,'Songs/'.$SongName);
    if($imgUpload_ok){
       $qry = "INSERT INTO music (artistName,song_title,artistSongUrl,songCover) VALUES (?,?,?,?)";
       $ex = $db->prepare($qry);
       $ex->bind_param('ssss',$artist_name,$title,$SongName,$covorImg);
       if($ex->execute()){
        
        header('location:home.php');
    
        } else{
        echo "checked code again";
        $db->close();
       }
       
    } else{
        "error";
    }
}



