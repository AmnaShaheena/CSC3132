<?php
function GetBookCoverPrice($connect){
    $arr=array();
    try{
        $sql="SELECT Book_name,image_name,price FROM books";
        $result = mysqli_query($connect, $sql);
        while($row=mysqli_fetch_assoc($result)){
            array_push($arr,$row);
        }
    }
    catch (Exception $e) {
        die($e->getMessage());
    }
    return $arr;
    
}
?>