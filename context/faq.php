<html>

<head>

</head>
<body>
<?php   
            include('db.php');
            if(isset($_GET['all']))
            {
            $database->getReference('feedback')->remove();
            setcookie("delete", "Whole feedback data cleared", time() + 5, "/");
            header('location:faq.php');
            // echo"<script>window.location.href ='faq.php';</script>";
            }
            if(isset($_GET['delete']))
            {
                $id=$_GET['delete'];
            $database->getReference('feedback/'."$id")->remove();
            setcookie("delete", "Selected feedback deleted", time() + 5, "/");
            echo"<script>window.location.href ='faq.php';</script>";
            }
            $i=1;
            $getdata = ($database->getReference("feedback")->getSnapshot())->getValue();
            if($getdata>0){
                ?><table class="fb">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>e-mail</th>
                    <th>type</th>
                    <th>subject</th>
                    <th>message</th>
                    <th><a href="faq.php?all=yes"><button class="button del">delete all</button></a></th>
                </thead> 
                <tbody>
        
                <?php
                $refrance= $database->getReference("feedback")->getValue();
                 foreach($refrance as $key=>$row)
                 {  ?><tr>
                    <td style="width:3%;"><?php echo $i;$i++;?></td>
                    <td style="width:9%;"><?php echo $row['name'];?></td>
                    <td style="width:9%;"><?php echo $row['email'];?></td>
                    <td style="width:7%;"><?php echo $row['type'];?></td>
                    <td style="width:7%;"><?php echo $row['subject'];?></td>
                    <td style="width:60%;"><?php echo $row['message'];?></td>
                    <td style="width:5%;"><a href="faq.php?delete=<?php echo$row['name']." ".$row['subject']?>"><button class="button del">delete</button></a></td>
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
</body>
</html>