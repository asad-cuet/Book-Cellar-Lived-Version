<?php
session_start();
ob_start();

include 'config.php';
include 'function.php';
if(isset($_REQUEST['book_id'])) {
$rec_book_id=filter($_REQUEST['book_id']);
}



$read_query2="SELECT * FROM book_info LEFT JOIN category ON category.Category_id=book_info.Category WHERE Book_id='$rec_book_id'";
$result2=mysqli_query($connection,$read_query2);

while($row=mysqli_fetch_row($result2)) {

    $title=show($row[2]);
    $author=show($row[3]);


}



      ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>


      <meta name="description" content="Feel free to contact">
      <meta name="keywords" content="Contact book cellar bd,book cellar contact,book cellar bd conatct">



      <link rel="stylesheet" href="W3.CSS-my.css">
      <script src="W3.JS.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  <!-- Jquery Library -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="shortcut icon" type="image/x-icon" href="Book cellar bd icon.jpg">
		
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">



  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/slick-theme.css">



      <style>

.my-card {
    margin:10px;
}


.all {
    display:flex;
}
.cl-1 { height:100%;width:auto;margin-left:auto;margin-right:auto; }
.slide-container {
       
       margin-left:90px;
       margin-right:90px;
       margin-top:20px;
       
      
       }
       .my-price { color:red }   
a { text-decoration:none; }    

@media screen and (max-width:400px)
{
      .slide-container {
            margin:0px!important;
      }
      .slick-prev,.slick-next
                       { 
                           
                           display:none!important;
                       }
             
} 
.res-title { font-size:16px; }  
.res-img { height:180px;overflow:hidden; }  
.res-flow { height:200px;overflow:hidden; }  
.res-button { font-size:12px;padding:5px; }    
.text-on-img {  }    
@media screen and (max-width:600px)
{
  .res-button { font-size:12px;padding:5px; }
}




.my-gray {
  background-color:#2C3B42;
}
.my-dark-gray {
  background-color:#1F262C!important;
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
  display:block!important;
}
.hide { display:none; }
.sidebar { position:fixed!important;top:0!important;height:100%!important; }

.sticky + .content {
  padding-top: 102px;
}


@media screen and (max-width:992px) { /* it will active under 600 px */
.my-title { display:block!important;}
}
      @media screen and (max-width:600px) { /* it will active under 600 px */
.my-logo { -ms-flex: 40%!important; /* IE10 */ flex: 40%!important;}
.my-pic { width: 85px!important;padding-top:12px!important; }
.my-title { display:block!important;-ms-flex: 60%!important; /* IE10 */ flex: 60%!important;padding:0!important;}
.my-navbar { -ms-flex: 100%; /* IE10 */ flex: 100%;}
}



/* width */
::-webkit-scrollbar {
  width: 12px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #0F8E7A; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #153C4D; 
}
@media screen and (max-width:290px) {
  .my-mobile {
     width:100%;
  }
}
@media screen and (max-width:290px) {
  .my-mobile {
     width:100%;
  }
}
</style>




<script>   //jquery goes here

//Header element
 $(document).ready(function(){

  
    $("#logo").hide(); 
  

  $(".sidebar_open").click(function(){ 
    $("#sidebar").show(200); 
  });
  $("#sidebar_close").click(function(){ 
    $("#sidebar").hide(200); 
  });
  $("#close_modal").click(function(){ 
    $("#modal").slideUp(200); 
  });
  $(".open_modal").click(function(){ 
    $("#modal").slideDown(200); 
  });
});


</script>
</head>
<body class="w3-sans-serif" style="background-color:#3C415C;color:white;">
<?php include 'header.php' ?>


	<!--main area-->
	<main id="main" class="main-site">

		<div class="container">

			<div class="row">



        <!-- Book show start -->
        <?php


$read_query2="SELECT * FROM book_info LEFT JOIN category ON category.Category_id=book_info.Category WHERE Book_id='$rec_book_id'";
$result2=mysqli_query($connection,$read_query2);
$sr=0;
while($row=mysqli_fetch_row($result2)) {
    $pic=show($row[1]);
    $title=show($row[2]);
    $author=show($row[3]);
    $published=show($row[4]);
    $price=show($row[5]);
    $disc=show($row[6]);
    $f_price=show($row[7]);
    $cat_id=show($row[8]);
    $cat_name=show($row[16]);
    $avail=show($row[9]);
    $comp=show($row[11]);
    $book_id2=show($row[0]);
    $del_charge=show($row[12]);
    $rating=show($row[13]);
    $sr++;




      ?>
                  

				<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="wrap-product-detail">


                  <div class="detail-media" style="position:relative;left:-22px;">
                    <div style="margin-top:40px">
                      <ul class="slids" type="none">

                        <li class="w3-center">
                          <img src="admin/uploads/<?php echo $pic; ?>" style="width:150px" alt="<?php echo $pic; ?>" class="w3-card" />
                        </li>

                      </ul>
                      </div>
                    
                  </div>



                  <div class="detail-info" style="position:relative;left:-20px;">	
                                    <h3 style="color:white"><?php echo $title; ?></h3>
                            <div class="w3-large">
                                <ul>
                                    <?php if(!empty($author)) { echo "<li>Author: ".$author."</li>"; } ?>
                                    <?php if(!empty($published)) { echo "<li>Year: ".$published."</li>"; } ?>
                                    <?php if(!empty($cat_name)) { echo "<li>Category: ".$cat_name."</li>"; } ?>
                                    <?php if(!empty($comp)) { echo "<li>Company Name: ".$comp."</li>"; } ?>
                                    <?php if($del_charge==2) { echo "<li>Delivery Free</li>"; } ?>
                    

                                </ul>
                            </div>


                            <div class="wrap-price">
                                  <span class="product-price" style="color:white"><?php echo $price; ?> TK </span>
                                  <span class="product-price" style="color:white"> <span style="font-size:17px"> সঙ্গে আছে </span> <?php echo $disc; ?>% Discount</span>
                            </div>


                            <div class="stock-info in-stock">
                                
                                <p class="availability" style="color:white">Availability: <b><?php if($avail=="Yes") { echo"In Stock"; } else echo "Out of Stock"; ?></b></p>
                            </div>


                            <div class="quantity">
                                      <span style="color:white">Quantity:</span>
                                    <div class="quantity-input">
                                      <input type="text" style="color:white" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" class="w3-black quant">
                                      
                                      <a class="btn btn-reduce" style="color:white" href="#"></a>
                                      <a class="btn btn-increase" style="color:white" href="#"></a>
                                    </div>
                            </div>


                            <div class="wrap-butons">
                                <button onclick="add_to_cart(<?php echo $book_id2; ?>,0)" style="background-color:tomato;color:white" class="w3-button w3-hover-red w3-round-large w3-block add-to-cart">Add to Cart</button>
                            </div>
                  
                    </div>


                               
					
					</div>
				</div><!--end main products area-->

			

                        <?php
   }


?>     			

			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->

<br>


<div class="slide-container w3-text-white">
<div class="w3-container"><h3>Related Books</h3></div>
<div class="responsive" style="display:flex">
<?php
    $bn=0;
    include 'slide.php';
    $read_query2="SELECT * FROM book_info LEFT JOIN category ON book_info.Category=category.Category_id WHERE book_info.Category='$cat_id'";  //SELECT * FROM table_name ORDER BY column_name(s) ASC|DESC 
    $result2=mysqli_query($connection,$read_query2);
    while($row2=mysqli_fetch_row($result2)) {
  
        slider($row2);
        $bn++;
        if($bn>10) { break; }
  
    }
  
  ?>

</div>
</div>






  <script src="assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
	<script src="assets/js/functions.js"></script>
   
  <script src="cart.js"></script>

  <script type="text/javascript" src="js/slick.min.js"></script>
  <script>
      $('.responsive').slick({
  //dots: true,
  infinite: true,
  speed: 500,
  slidesToShow: 6,
  slidesToScroll: 1,
  centerMode: true,
  centerPadding: '30px',
  autoplay: true,
 autoplaySpeed: 1800,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        speed: 200,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

    
</script>


	<!--footer area-->
  <?php include 'footer.php'; ?>
</body>
</html>