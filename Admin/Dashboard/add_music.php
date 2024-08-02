<?php
session_start(); //start session in order to obtain the user variable

//header('Access-Control-Allow-Origin: *');

//check if session['user'] is set
if(isset(($_SESSION['user']))){
  //echo session user set..
  //use this feauture purpose
}
//if fail go back to the login page
else{
  header('location:../login.html');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/admin/add_music.css">
    <title>Add music</title>
</head>
<body>
    <main>

    <div class="form-container">
        <form action="add.php" method="POST" enctype="multipart/form-data" >
            

            <div class="form-group">
                <label for="airtist_name" class="form-label">Artists name</label>
                <input type="text" id="airtist_name" name="airtist_name" class="form-control">

            </div>

            <div class="form-group">
                <label for="Title" class="form-label" >Title</label>
                <input type="text" id="title" name="title" class="form-control" width="50rem" >

            </div>


            <div class="form-group">
                <label for="Title" class="form-label">Song:</label>
                <input type="file" id="song" name="song" class="form-control" accept="audio/mp3" placeholder="Upload song..">

            </div>


            <div class="form-group">
                <label for="Title">Cover image</label>
                <input type="file" id="songImg" name="songImg" class="form-control" accept="image/png, image/jpeg" placeholder="Add cover images" >

            </div>

            <input type="submit" value="Add" id="Add" class="btn btn-primary">

        </form>
    </div>
    </main>
</body>

<script src="/Include/js/jquery-3.7.1.min.js.js"></script>

<script>
    $(document).ready(function(){
        $("#ADD").on('click',function(e){
            e.preventDefault();

            //setting up variable 
            let Artist_name = document.querySelector("#airtist_name").value;
            let title = document.querySelector("#title").value;
            let song = document.querySelector("#song").value;
            let songImg = document.querySelector("#cover").value;
           
            //ajax try to send data to the form

            
        });
    });
       
    

    function add_music(e){
        
    }
</script>



</html>