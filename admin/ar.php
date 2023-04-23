<!DOCTYPE html>
<html lang="en">
<head>    
<link rel="icon" href="../files/logo.png" type="image/x-icon"/>
<style>.ar {
    font-weight: 700;
    color: #F3525A;
}</style>  
    <link href="../style/Admin/faq.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <?php include('header.php');?>
    <main id="main">
        <div class="block">
        <h2 class="text-primary text-center">Android application Rateing</h2>
        <?php   
            include('../context/db.php');
            if(isset($_GET['delete']))
            {
                $id=$_GET['delete'];
            $database->getReference('App Rating/rating/'."$id")->remove();
            }
            $i=1;
            $getdata = ($database->getReference("App Rating/rating")->getSnapshot())->getValue();
            if($getdata>0){
                ?><table class="fb">
                <thead>
                    <th>#</th>
                    <th>username</th>
                    <th>Rating</th>
                    <th width="50%" >Feedback</th>
                </thead> 
                <tbody>
        
                <?php
                $refrance= $database->getReference("App Rating/rating")->getValue();
                 foreach($refrance as $key=>$row)
                 {  ?><tr>
                    <td style="width:3%;"><?php echo $i;$i++;?></td>
                    <td style="width:9%;"><?php echo $key;?></td>
                    <td style="width:9%;"><?php echo $row['rating'];?></td>
                    <td style="width:7%;"><?php echo $row['Feedback'];?></td>
                    <td style="width:5%;"><a href="ar.php?delete=<?php echo$key?>"><button class="button del">X</button></a></td>
                    </tr>
                    <?php
                 }
                ?>
                </tbody>   
            </table> 
                <?php
            }
            else{
                
            ?>
            <tr><td colspan="7"><h3>No data avaliable</h3><td><tr>
            <?php
        } ?>  
    </div>
    </main>
    <?php include('footer.php');?>
</body>
</html>