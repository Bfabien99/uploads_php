<?php
    // if(!empty($_POST)){
    //     echo "post:";
    //     echo "<pre>";
    //     print_r($_POST);
    //     echo "</pre>";
    // }
    if(!empty($_FILES)){
        echo "files:";
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";
    }
    if(!empty($_FILES['images'])){
        $imgs = [];
        $datetime = new DateTime();
        $datetime = $datetime->getTimestamp();
        $allowed_type = ['image/png','image/jpeg','image/jpg'];
        foreach ($_FILES['images']['name'] as $key => $value) {
            if(in_array($_FILES['images']['type'][$key], $allowed_type)){
                move_uploaded_file($_FILES['images']['tmp_name'][$key], './uploads/'.$datetime.$value);
                $imgs[] = $datetime.$value;
            }
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Files</title>
    <style>
        .imgs{
            display: flex;
            gap:1em;
            width:500px;
            min-height:400px;
            border:1px solid red;
            padding:2em;
            flex-wrap: wrap;
        }

        .imgs img{
            width:25%;
        }
    </style>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <!-- <h3>one files</h3>
        <input type="file" name="picture" id="">
        <br>
        <br -->
        <h3>multi files</h3>
        <input type="file" name="images[]" id="" multiple>
        <input type="submit" value="Save">
    </form>
    <?php if(!empty($imgs)):?>
        <div class="imgs">
        <?php foreach($imgs as $img): ?>
            <img src="./uploads/<?php echo $img; ?>" alt="">
        <?php endforeach;?>
        </div>
    <?php endif;?>
</body>
</html>