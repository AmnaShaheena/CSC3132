<?php
require_once "conf/dbconf.php";
require_once "myfunc/func.php";


    $books=GetBookCoverPrice($connect);
    foreach($books as $key => $value){
        $cover = $value['image_name'];
        $price=$value['price'];
        $name=$value['Book_name'];
    
?>

<div class="card float-start" style="width: 12rem; margin: 5px;">
  <img class="card-img-top img-thumbnail" src="img/coverimage/<?php echo $cover; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Price:<?php echo $price ?></p>
    <a href="#" class="btn btn-primary">Buy</a>
  </div>
</div>
<?php

}
?>
