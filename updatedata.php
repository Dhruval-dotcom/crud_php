<?php
$id = intval($_POST['id']);
$name = $_POST['name'];
$email = $_POST['email'];
$doi = implode("|",$_POST['check']);


include_once 'conn.php';
$sql = "SELECT * FROM practiceajax WHERE id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$image = explode("|",$row['image']);
foreach ($image as $img){
    if(file_exists('file/'.$img)==1 && $img!=""){
        unlink('file/'.$img);
    }
}


$co = count($_FILES['file']['name']);
   
for($i=0;$i<$co;$i++){
    $_FILES['file']['name'][$i] = time().$_FILES['file']['name'][$i];
    if(move_uploaded_file($_FILES['file']['tmp_name'][$i],'file/'.basename($_FILES['file']['name'][$i]))){
        // echo realpath($_FILES['file']['tmp_name'][$i])."<br>";
        // echo $_FILES['file']['name'][$i]."uploaded succesfully<br>";
    }else{
        echo $_FILES['file']['error'][$i];
    }
}

$filename = implode ("|",$_FILES['file']['name']);

$sqlinsert = "UPDATE practiceajax SET name='$name',email='$email',doi='$doi',image='$filename' WHERE id=$id";
$res = mysqli_query($conn,$sqlinsert);
if ($res){
    echo "1";
} else {
    echo "0";
}