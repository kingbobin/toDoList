<?php
include_once "db.php";
include_once "query.php";

$sql = selectDone('list');
$result = mq($sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
?>

<li>
    <span class = "text"><?php echo $row['content'];?></span>
    <i data-id = "<?php echo $row['id'];?>" id = "delBtn" class = "fas fa-trash-alt" ></i>
</li>

<?php
    }
} 
?>