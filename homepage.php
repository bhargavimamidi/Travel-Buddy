<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="homepage-css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <style>
        /*
  The grid itself needs only 4 CSS declarations:
*/

.myGallery {
  display: grid;
  grid-gap: 10px;
  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  margin-top:14px;
}
.item
{
    padding:6px;
}
.myGallery img {
  width: 100%;
}

/*
  And here are some declarations for the image caption.
  Just hover over one of the last 5 images to see it.
*/

.myGallery .item {
  position: relative;
  overflow: hidden;
}

.myGallery .item img {
  vertical-align: middle;
}

.myGallery .caption {
  margin: 0;
  padding: 1em;
  position: absolute;
  z-index: 1;
  bottom: 0;
  left: 0;
  width: 100%;
  max-height: 100%;
  overflow: auto;
  box-sizing: border-box;
  transition: transform 0.5s;
  transform: translateY(100%);
  background: rgba(0, 0, 0, 0.7);
  color: rgb(255, 255, 255);
}

.myGallery .item:hover .caption {
  transform: translateY(0%);
}

/*
  The rest is only styling for this example page
*/

@import url("https://fonts.googleapis.com/css2?family=Vollkorn:wght@400;900&display=swap");

.myGallery {
  font-size: 1rem;
}


            .bottom-half img{
                border-radius: 50%;
			height: 150px;
			width: 150px;
			background-size: cover;
			background-position: center;
			background-blend-mode: multiply;
			vertical-align: middle;
			text-align: center;
			color: transparent;
			transition: all .3s ease;
			text-decoration: none;
            }
       .map
       {
        width:65%;
        height:80%;
        margin-top: 3%;
        margin-left: 18%;
        border-radius: 4px;
        float: left;
        clear:both;
        display:block;
       }
       .m1{
        display: block;
        margin: 5% 5%;
        text-align: center;
        font-family: sans-serif;
        color: #666;
        clear:both;
}
h1 {
  margin: 1em 0;
  color: goldenrod ;
}


h1 {
  text-align: center;
	overflow: hidden;

	span {
		display: inline-block;
		position: relative;

		&:before,
		&:after {
			content: "";
			border-bottom: 2px solid $headingColor;
			width: 3em;
			margin: 0 1.5em;
			position: absolute;
			bottom: .5em;
		}

		&:before {
			right: 100%;
		}

		&:after {
			left: 100%;
		}
	}
}
footer {
  background: #16222A;
  background: -webkit-linear-gradient(59deg, #3A6073, #16222A);
  background: linear-gradient(59deg, #3A6073, #16222A);
  color: white;
  margin-top:100px;
  display:block;
  clear:both;
}

footer a {
  color: #fff;
  font-size: 14px;
  transition-duration: 0.2s;
}

footer a:hover {
  color: #FA944B;
  text-decoration: none;
}

.copy {
  font-size: 12px;
  padding: 10px;
  border-top: 1px solid #FFFFFF;
}

.footer-middle {
  padding-top: 2em;
  color: white;
  display:block;
}


/SOCİAL İCONS/

/* footer social icons */

ul.social-network {
  list-style: none;
  display: inline;
  margin-left: 0 !important;
  padding: 0;
}

ul.social-network li {
  display: inline;
  margin: 0 5px;
}


/* footer social icons */

.social-network a.icoFacebook:hover {
  background-color: #3B5998;
}

.social-network a.icoLinkedin:hover {
  background-color: #007bb7;
}

.social-network a.icoFacebook:hover i,
.social-network a.icoLinkedin:hover i {
  color: #fff;
}

.social-network a.socialIcon:hover,
.socialHoverClass {
  color: #44BCDD;
}

.social-circle li a {
  display: inline-block;
  position: relative;
  margin: 0 auto 0 auto;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  text-align: center;
  width: 30px;
  height: 30px;
  font-size: 15px;
}

.social-circle li i {
  margin: 0;
  line-height: 30px;
  text-align: center;
}

.social-circle li a:hover i,
.triggeredHover {
  -moz-transform: rotate(360deg);
  -webkit-transform: rotate(360deg);
  -ms--transform: rotate(360deg);
  transform: rotate(360deg);
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  -o-transition: all 0.2s;
  -ms-transition: all 0.2s;
  transition: all 0.2s;
}

.social-circle i {
  color: #595959;
  -webkit-transition: all 0.8s;
  -moz-transition: all 0.8s;
  -o-transition: all 0.8s;
  -ms-transition: all 0.8s;
  transition: all 0.8s;
}

.social-network a {
  background-color: #F9F9F9;
}
img
{
    padding:5px;
}
.col-md-3 col-sm-6
{
    padding:20%;
}
.container
{
    margin-left:140px;
}
    </style>
    <title>Travel Buddy</title>
  </head>
  <body>
<div class="top-half">
  <div class="left">
    <div class="icon-cards" style="
    
    top: 350px;
">
        <div class="icon-cards-content">
            <div class="icon-cards-item" ></div>
            <div class="icon-cards-item"></div>
            <div class="icon-cards-item"></div>
            <div class="icon-cards-item"></div>
            <div class="icon-cards-item"></div>
        </div>
    </div>
    <div class="logo">
        <img class="img" src="logo.png">
    </div>
  </div>
  <div class="right">
    <div class="fancy-buttons" style="
    margin-top: 100px;
">
    <nav>
        <ul>
          
          <li onclick="window.location.href='review/reviews.php'">
            Share memories
            <span></span><span></span><span></span><span></span>
          </li>
          <li onclick="window.location.href='contactus.html'">
            contact
            <span></span><span></span><span></span><span></span>
          </li>
        </ul>
        <ul class="f-buttons">
            <li class="f-buttons" onclick="window.location.href='sign in/index.html'">
              Create Account
              <span></span><span></span><span></span><span></span>
            </li>
            <li class="f-buttons" class="login-trigger" onclick="window.location.href='#container'" data-target="#" data-toggle="modal">
                Log In
              <span></span><span></span><span></span><span></span>
            </li>
          </ul>
        
    </nav>
    </div>
</div>
</div>


<div class="bottom-half" style="margin-top: 100px;">
    <section id="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fas fa-band-aid"></i>
                </div>
                <div class="col-lg-12 login-title">
                    Log In
                </div>
                <div class="col-lg-12 login-title">
                    <?php
                    if(isset($_SESSION['msg'])){
                        $bc=$_SESSION['msg'];
                        echo $bc;
                    }
                   
                    ?>
                </div>
                <img src="images/user.png" class="user" id="user">
                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form action="fauthentication.php" onsubmit="return validation()" method = "POST">
                            <div class="form-group">
                                <label  class="form-control-label">USERNAME</label>
                                <input name="user" id="user" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input name="pass" id="pass" type="password" class="form-control" i>
                            </div>

                            <div class="col-lg-12 loginbttm" style="margin-left: 75px;">
                                
                                <div class="col-lg-6 login-btm login-button">
                                
                                    <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                               
                            </div>
                        </form>
                        <br>
                        <br>
                        <br>
                        <div class="col-lg-12 loginbttm" style="margin-left: 175px;">
                        <div class="col-lg-6 login-btm login-button" >
                                
                            <a href="forgotpassword/forgot.php" class="btn btn-outline-primary">FORGOT <br> PASSWORD</a>
                        </div>
                    </div>
                        <script>  
                            function validation()  
                            {  
                                var id=document.f1.user.value;  
                                var ps=document.f1.pass.value;  
                                if(id.length=="" && ps.length=="") {  
                                    alert("User Name and Password fields are empty");  
                                    return false;  
                                }  
                                else  
                                {  
                                    if(id.length=="") {  
                                        alert("User Name is empty");  
                                        return false;  
                                    }   
                                    if (ps.length=="") {  
                                    alert("Password field is empty");  
                                    return false;  
                                    }  
                                }                             
                            }  
                        </script>  
                        <!-- Optional JavaScript; choose one of the two! -->
                    
                        <!-- Option 1: Bootstrap Bundle with Popper -->
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </section>
        <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
        <!-- Optional JavaScript; choose one of the two! -->
    
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</div>
        
<div class='m1'     style="margin-top: 10px;
    margin-bottom: 10px;">
    <h1><span>Search . Explore . Travel</span></h1>
<div class="map" style="margin-top: 10px;
    margin-bottom: 30px;">
    <iframe width="100%" height="300px" frameborder="0" allowfullscreen src="//umap.openstreetmap.fr/en/map/untitled-map_590838?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=true&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=true&onLoadPanel=undefined&captionBar=false"></iframe>
    
   
  </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<footer class="mainfooter" role="contentinfo">
<div class="myGallery">
  <div class="item">
    <img src="https://picsum.photos/190/190?11" />
    <span class="caption">Explore</span>
  </div>
  <div class="item">
    <img src="https://picsum.photos/190/190?12" />
    <span class="caption">Discover</span>
  </div>
  <div class="item">
    <img src="https://picsum.photos/seed/picsum/190/190?13" />
    <span class="caption">Rejuvinate</span>
  </div>
  <div class="item">
    <img src="https://picsum.photos/190/190?14" />
    <span class="caption">Diversify</span>
  </div>
  <div class="item">
    <img src="https://picsum.photos/190/190?15" />
    <span class="caption">Learn</span>
  </div>
</div>
    <div class="footer-middle">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <!--Column1-->
          <div class="footer-pad">
            <h4>Site Map</h4>
            <ul class="list-unstyled">
              <li><a href="#container">Log In</a></li>
              <li><a href="sign in/index.html">Create Account</a></li>
              <li><a href="review/reviews.php">Share Memories</a></li>
              <li><a href="contactus.html">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <!--Column1-->
          <div class="footer-pad">
            <h4>Events</h4>
            <ul class="list-unstyled">
              <li><a href="https://www.tradefairdates.com/TTF-Travel-Tourism-Fair-M6779/Hyderabad.html">Tourism Fair</a></li>
              <li><a href="https://www.meetup.com/fr-FR/theTIC/events/276753000/">Hidden waterfalls Trek</a></li>
              <li><a href="https://www.eventalways.com/ttf-south-hyderabad-">Travel Trade Show</a></li>
              <li><a href="https://www.eworldtrade.com/events/india-international-travel-exhibition-hyderabad/">Travel Exhibition</a></li>
              <li>
                <a href="#"></a>
              </li>
            </ul>
          </div>
        </div>
          <div class="col-md-3">
              <h4>Follow Us</h4>
              <ul class="social-network social-circle">
               <li><a href="https://instagram.com/travelrealindia?utm_medium=copy_link" class="icoInstagram" title="Facebook"><i class="fa fa-facebook"></i></a></li>
               <li><a href="https://www.linkedin.com/in/ritika-yarlagadda-a756611b8/" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
              </ul>	
            
          
          </div>
      </div>
      <div class="row">
          <div class="col-md-12 copy">
              <p class="text-center">&copy; Copyright 2021 - Travel Buddy.  All rights reserved.</p>
          </div>
      </div>
  
  
    </div>
    </div>

  </footer>
  </body>
</html>