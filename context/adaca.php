<?php
include('db.php');
$i = 1;
$getdata = $database->getReference("campaign/notapprove")->getValue();
if ($getdata > 0) {
    ?>



    <table class="" style="width:100%">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>address</td>
                <td>pin</td>
                <td>map</td>
                <td>mono</td>
                <td>tag</td>
                <td>image</td>
                <td>date</td>
                <td>time</td>
                <td>update</td>
                <td>delete</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_GET['map'])) {
                $map = $_GET['map'];
                if (str_contains($map, "https://goo")) {
                    ?>
                    <script>window.open('<?php echo $map; ?>', '_blank');</script>
                    <?php

                } elseif (str_contains($map, ",")) {
                    ?>
                    <script>window.open('https://www.google.com/maps/place/<?php echo $map; ?>', '_blank');</script>

                    <?php
                } else {
                    ?>
                    <script>NolertNotify.trigger({ type: 'danger', iconType: 'info', message: 'Given Maplink Is Invalid' })</script>
                    <?php
                }
            }
            ?>

            <?php
            $refrance = $database->getReference("campaign/notapprove")->getValue();
            foreach ($refrance as $key => $row) { ?>
                <tr>
                    <td id="<?php echo $i ?>"><?php echo $i; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['name']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['address']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['pin']; ?></td>
                    <td id="<?php echo $i ?>"><a href="campaign.php?map=<?php echo $row['map']; ?>"><img src="../img/location.png"
                                class="icon"></a></td>
                    <td id="<?php echo $i ?>"><?php echo $row['mono']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['tag']; ?></td>
                    <td><button data-modal-target="#image<?php echo $i ?>" class="nb"><img src="<?php echo $row['image']; ?>"
                                class="icon"></button></td>
                    <td id="<?php echo $i ?>"><?php echo $row['date']; ?></td>
                    <td id="<?php echo $i ?>"><?php echo $row['time']; ?></td>
                    <td><button data-modal-target="#upcamp<?php echo $i; ?>" class="btn btn-outline-primary">update</button>
                    </td>
                    <td><button data-modal-target="#dlcamp<?php echo $i; ?>" class="btn btn-primary">Delete</button></td>
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
                            <img src="<?php echo $row['image'] ?>" alt="Image" width="300px">
                            <center>
                    </div>
                    <div id="overlay"></div>
                </div>
                <div class="modal" id="upcamp<?php echo $i; ?>">
                    <div class="modal-header">
                        <div class="title">
                            <h2>Update Campaign<h2>
                        </div>
                        <button data-close-button class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">

                        <center>
                            <form action="../context/update.php" method="post">
                                <input type="hidden" name="key" value="<?php echo $key ?>">
                                <div class="inputBox">
                                    <span>Name</span>
                                    <input type="text" name="name" class="design" required value="<?php echo $row['name'] ?>">
                                </div>
                                <div class="inputBox">
                                    <span>Address</span>
                                    <textarea name="address" class="design" required><?php echo $row['address'] ?></textarea>

                                </div>
                                <div class="inputBox">
                                    <span>Pincode</span>

                                    <input type="number" name="pin" class="design" required value="<?php echo $row['pin'] ?>"
                                        TextMode="Number">
                                </div>
                                <div class="inputBox">
                                    <span>Map Link</span>

                                    <input type="text" name="map" class="design" value="<?php echo $row['map'] ?>">
                                </div>
                                <div class="inputBox">
                                    <span>Mobile</span>
                                    <input type="number" name="mono" class="design" required value="<?php echo $row['mono'] ?>">
                                </div>
                                <div class="inputBox">
                                    <span>Tag Line</span>
                                    <input type="text" name="tag" class="design" required value="<?php echo $row['tag'] ?>">
                                </div>
                                <div class="inputBox">
                                    <span>Image</span>
                                    <input type="text" name="image" class="design" required value="<?php echo $row['image'] ?>">
                                </div>
                                <div class="inputBox">
                                    <span>Date</span>
                                    <input type="text" name="date" class="design" required value="<?php echo $row['date'] ?>">
                                </div>
                                <div class="inputBox">
                                    <span>Time</span>
                                    <input type="text" name="time" class="design" required value="<?php echo $row['time'] ?>">
                                    <input type="hidden" name="userid" class="design" value="<?php echo $row['userid'] ?>">

                                </div>
                                <div class="inputBox">
                                    <span>
                                        <input type="submit" Class="btn btn-primary" name="upcamp"
                                            value="update Campaign"></span>
                                </div>
                            </form>
                        </center>
                    </div>
                </div>
                <div id="overlay"></div>
                <div class="modal" id="dlcamp<?php echo $i; ?>">
                    <div class="modal-header">
                        <div class="title">
                            <h2>
                                <h2>
                        </div>
                        <button data-close-button class="close-button">&times;</button>
                    </div>
                    <div class="modal-body">
                        <center>
                            <h1>Do You Really Want to Delete This?</h1><br>
                            <a href="../context/update.php?delcamp=<?php echo $key ?>" class="btn btn-primary">delete</a>
                            <center>
                    </div>
                    <div id="overlay"></div>
                </div>
                    <?php
                    $i++;
            }
            ?>
        </tbody>
    </table>
    <?php
} else {

    ?>
    <tr>
        <td colspan="7">
            <h3>No data avaliable</h3>
        <td>
    <tr>

        <?php
} ?>