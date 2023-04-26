<?php
include('db.php');
$i = 1;
    $getdata = $database->getReference("weblogin/bloodbank")->getValue();
            if($getdata>0){
    ?>



    <table class="" style="width:100%">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Image</td>
                <td>address</td>
                <td>pin</td>
                <td>email</td>
                <td>mono</td>
                <td>time</td>
                <td>delete</td>
            </tr>
        </thead>
        <tbody>

            <?php
            $refrance = $database->getReference("weblogin/bloodbank")->getValue();
            foreach ($refrance as $key => $row) { ?>
                <tr>
                    <td id="<?php echo $i ?>"><?php echo $i; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['name']; ?></td>
                    <td><button data-modal-target="#image<?php echo $i ?>" class="nb"><img src="<?php if(!isset($row['img_blood'])){echo"not given";}else{echo$row['img_blood'];} ?>"
                                class="icon"></button></td>
                    <td id="<?php echo $i ?>"><?php echo $row['address']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['pin']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['email']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['mono']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['time']; ?></td>
                    <td><button data-modal-target="#dlcamp<?php echo $i; ?>" class="btn btn-primary" >Delete</button></td>
                    <!-- <td id="<?php echo $i ?>"><a href="../context/update.php?delcamp=<?php echo$key?>" class="btn btn-primary">delete</a></td> -->
                </tr>
                <div class="modal" id="image<?php echo $i ?>">
                    <div class="modal-header">
                        <div class="title">
                            <h3>Image<h3>
                        </div>
                        <button data-close-button class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <center>
                            <img src="<?php if(!isset($row['img_blood'])){echo"not given";}else{echo$row['img_blood'];} ?>" alt="Image" width="300px">
                            <center>
                    </div>
                    <div id="overlay"></div>
                </div>
                <div class="modal" id="dlcamp<?php echo $i;?>">
                    <div class="modal-header">
                        <div class="title">
                            <h2><h2>
                        </div>
                        <button data-close-button class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <center><h2>Do You Really Want to Delete This bloodbank?</h2><br>
                        <h5><?php echo$row['name'];?></h5>
                        <a href="../context/update.php?delbb=<?php echo$key?>" class="btn btn-primary">delete</a>
                        <center>
                    </div>

                <?php
                 $i++;
            }
            ?>
        </tbody>
    </table>
    <?php
} 
else {

    ?>
     <tr>
         <td colspan="7">
             <h3>No Blood Bank avaliable</h3>
         <td>
     <tr>
  
       <?php
} ?>