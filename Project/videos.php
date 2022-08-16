<?php 		
include('database.php');
$sql=" SELECT * FROM video ";
$rs=mysqli_query($connect,$sql);?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewpoint" content="width=device-width" , initial-scale="1.0">
        <title>Education  portal</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <!-- Navigation -->
        <nav>
            <img src="images/2.png" alt="logo">
            <div class="navigation">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#course">Courses</a></li>
                    <li><a href="#footer">Contact</a></li>
                </ul>
                <!-- <img id="menu" src="images/menu.jpg" alt=""> -->
            </div>
        </nav>
    <?php			$count=1;
 	while($row=mysqli_fetch_array($rs))
	{ 
	?>
	<div class="course-box">
          <div class="courses">
              <a href="data.html"><img src="images/data.jpg" alt=""></a>
                 <div class="details">
                    <span>Updated15/08/2022</span>
                       <h6 href="data.html"><?php echo $row['V_Title']?></h6>
                       <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span>(239)</span>
                        </div>
                    </div>
                    <div class="cost">
                        FREE
                    </div>
                </div>
		<?php
		$count++;}
		?>	
		</table>
		
	</div>

		
	</div>
	<?php include('allfoot.php');  ?>