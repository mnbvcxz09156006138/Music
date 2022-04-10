
<?php
include "header.php" ;
include "database.php" ;
$album_id = $_GET["albums"];
$album = $db->query("SELECT * FROM albums WHERE id=$album_id")->fetch_assoc();
$artist_id=$album["singer_id"];
$artist =$db->query("SELECT * FROM artist WHERE id= $artist_id")->fetch_assoc();
$musics = $db->query("SELECT * FROM musics WHERE album_id=$album_id");
 ?>
 <body class="bg-black">
 <div class= "container" >
            <div class="row mt-5">
                <hr>
                <h2 class="music-text"> موزیک ها </h2>
                <?php foreach ($musics as $music): ?>
                        <div class = "col-3">
                                <div class =" card mt-3">
                                    <img src="<?php echo $music["image"];?>" class="card-img-top">
                                        <div class="card-body">
                                            <h4><?php echo $music["name"];?></h4>
                                            <h5 class="card-title"><?php echo $music["name"];?></h5>
                                                <div class= "card-body">
                                                <audio src="<?php echo $music["mp3"];?>" class="card-img-top"></audio>
                                                </div>
                                        </div>
                                        
                        
                                </div>
                                
                        </div>
                    <?php endforeach; ?>  
                    
            </div>                                           
    </div>
    

 <?php
include "footer.php" ;
?>

