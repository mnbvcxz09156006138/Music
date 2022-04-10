<?php
include "header.php" ;
include "database.php" ;
$album_id = $_GET["albums"];
$musics = $db->query("SELECT * FROM artist WHERE album_id=$album_id");

?>

<div class="container">
    <div class ="row">
        <div class ="col-3">
            <ul class="list-group">
                <?php foreach ($musics as $musics):?>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-9">
                        محمد
                    </div>
                    <div class="col-3">
                    <img src="img\2.jpg" class="img-thumbnail" alt="...">
                    </div>
                </div>
            </li>
           <?php endforeach;?>
     </ul>

        </div>
        <div class="col-9">

        </div>
    </div>
</div>

<?php
include "footer.php" ;
?>