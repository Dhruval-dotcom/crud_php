<table class="table table-striped ">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">img</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Gallery</th>
            <th scope="col">DOI</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
                    include 'conn.php';
                    $sql = "SELECT * FROM practiceajax";
                    $result = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $doi = explode("|",$row['doi']);
                        $image = explode("|",$row['image']);
                ?>
        <tr>
            <th scope="row"><?php echo $row['id']; ?></th>
            <td><?php if(file_exists('file/'.$image[0])==1 && $image[0]!=""){ ?><img src="file/<?php echo $image[0]; ?>"><?php } ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td>
                <?php 
                    for($i=0;$i<count($image);$i++){
                        if(file_exists('file/'.$image[$i])==1 && $image[$i]!=""){
                ?>
                <div class="galleryouter" >
                    <div class="galleryinner" >
                        <button onclick="deleteimage(<?php echo $row['id']; ?>,'<?php echo $image[$i]; ?>')" class="deleteimage">X</button>
                        <img class="gallery" src="file/<?php echo $image[$i]; ?>">
                    </div>
                </div>
                <?php  }} ?>
            </td>
            <td><span class="badge bg-primary"><?php if(isset($doi[0])){ echo $doi[0]; } ?></span>
                <span class="badge bg-secondary"><?php if(isset($doi[1])){ echo $doi[1]; } ?></span>
                <span class="badge bg-success"><?php if(isset($doi[2])){ echo $doi[2]; } ?></span>
            </td>
            <td><button class="update" data-id="<?php echo $row['id']; ?>"
                    onclick='updaterow(<?php echo $row['id']; ?>)'><i style="color:Lightskyblue;"
                        class="material-icons">&#xE254;</i></button>
                <button class="delete" data-id="<?php echo $row['id']; ?>"
                    onclick='deleterow(<?php echo $row['id']; ?>)'></a><i style="color:orange;"
                        class="material-icons">&#xE872;</i></button>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item">
        <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item active">
        <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
        <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>