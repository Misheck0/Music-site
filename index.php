<?php

include_once('Include/header.php');


?>
<main>
<div class="title">
<h1 id="title">WELCOME TO T.AIM C  MUSIC </h1>
</div>

<div class="role">
    
    <p id="role">Upload your music with us.. <strong>WhatsApp +260761964545</strong></p>
    <p id="percy_line"></p>
</div>
<!--
Later i'll include a search field ..
<section id="music_search" class="main">
    <div class="search">
        <label for="search" class="form-label">Search:</label>
        <form method="post" action="#" id="form">
            <input type="text" id="search" placeholder="search by name" class="form-control" style="width: auto;">
            <input type="submit" value="submit" id="submit">
        </form>
    </div>
</seaction>
-->

<div class="music_container" id="music">
<?php

$query = "SELECT * from music";
$result = $db->query($query);
if($result->num_rows > 0) {
  while ($row = $result->fetch_assoc())

      {
     
   // echo ' <div class="artist_pic" id="artist_pic">';
   // echo '<img src="' . $row['songCover'] . '" alt="name" id="image">';
  //  echo "</div>";
 
?>
 
   <div class="artist_pic" id="artist_pic" > 
        <img src="Admin/Dashboard/Images/<?php echo $row['songCover']; ?>" alt="name"> 
     <br>   <div class="song"> 
            <audio controls>
                <source src="Admin/Dashboard/Songs/<?php echo $row['artistSongUrl'] ?>" type="audio/mpeg" >
            </audio>
            <div class="airtist_name">
            <h2>
            
                <?php echo $row["artistName"] ?>
            </h2>
            <div class="song_title">
            title: <?php echo $row["song_title"] ?> 
            </div>
        </div>
            <a href="Admin/Dashboard/Songs/<?php echo $row['artistSongUrl']; ?>" >
                <button class="btn btn-primary" onclick="count('<?php echo $row['ID']; ?>')" id="count_down" name="id"><i class="fa-solid fa-download"></i>&nbsp; download</button>
                <input type="hidden" name="old_value" id="old_value" value="<?php echo $row['downloads']; ?>">
</a>
            
        </div>
       
    </div>

   <?php
      }
    } ?>

</div>
<!--
include a see more button
<p id="see_more">
    <button class="btn btn-primary">see more</button>
</p> -->
</main>

<?php
include_once('Include/footer.php');


?>