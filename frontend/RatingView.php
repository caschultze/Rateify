<?php
  session_start();
  $_SESSION['notify'];
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Rateify - Rating Page</title>
    <meta name="description"
          content="Rateify is a music service that allows users to rate songs"/>

    <!--Inter UI font-->
    <link href="https://rsms.me/inter/inter-ui.css" rel="stylesheet">

    <!--vendors styles-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <!-- Bootstrap CSS / Color Scheme -->
    <link rel="stylesheet" href="css/default.css" id="theme-color">
</head>
<body>


<!--navigation-->
<section class="smart-scroll">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark">
            <a class="navbar-brand heading-black" href="index.php">
                Rateify
            </a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span data-feather="grid"></span>
            </button>
            
        </nav>
    </div>
</section>

<?php
  if($_SESSION['notify'] == 1)
    echo "<script>alert('Comment added sucessfully');</script>";
  if($_SESSION['notify'] == 2)
    echo "<script>alert('Failed to add comment');</script>";
  $_SESSION['notify'] = 0;
?>

<!--Search Song-->
<section class="py-7 py-md-0 bg-hero" id="login">
    <div class="container">
        <div class="row vh-md-100">
            <div class="col-md-8 col-sm-10 col-12 mx-auto my-auto text-center">
                
              <!-- header -->
              <div class="col text-center">
                <h2>Write something about <?php echo $_SESSION['song_choosing'];?></h2>
              </div>
              

                <form action="../APIs/RatingConnection.php" method="post">
                    <!-- Search field -->
                    <div class="form-group">
                      <input name = "comment" type="search" class="form-control" id="SongName" aria-describedby="SearchSongHelp" placeholder="Enter your comment">
                    </div>
                    <div style="position: absolute; right: 15px; top: 135px;">  
                    <button type = "submit"><img src="Images/comment.jpg" width="auto" height="41" onclick='window.location.reload();'/></button>
                    </div>
                    <p>
                        Rate This Song?
                        <select name="star">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        </select>
                    </p>
                   
                </form>
                
                <!-- <div class="form-group">
                    Employee List :  
                        <select>  
                        <option value="Select">Select</option>}  
                        <option value="Vineet">Vineet Saini</option>  
                        <option value="Sumit">Sumit Sharma</option>  
                        <option value="Dorilal">Dorilal Agarwal</option>  
                        <option value="Omveer">Omveer Singh</option>  
                        <option value="Rohtash">Rohtash Kumar</option>  
                        <option value="Maneesh">Maneesh Tewatia</option>  
                        <option value="Priyanka">Priyanka Sachan</option>  
                        <option value="Neha">Neha Saini</option>  
                        </select>  
                </div> -->

                <!--GO Back Button [idk how to move it further down]-->
                <div class = "positioning">
                    <a href="listenerSongs.php" class="btn btn-primary" role="button" aria-pressed="true">
                        <- Go Back
                      </a>
                </div>
            </div>
        </div>
       
       
    </div>
   
</section>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>