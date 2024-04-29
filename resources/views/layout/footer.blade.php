<style>
    
.footer {
background: linear-gradient(105deg,#b90808 ,#c50000);
padding-top: 80px;
padding-bottom: 40px;
}
/*END FOOTER SOCIAL DESIGN*/

@media only screen and (max-width:768px) { 
.single_footer{margin-bottom:30px;}
}
.single_footer h4 {
color: #fff;
margin-top: 0;
margin-bottom: 25px;
font-weight: 700;
text-transform: uppercase;
font-size: 20px;
}
.single_footer h4::after {
content: "";
display: block;
height: 2px;
width: 40px;
background: #fff;
margin-top: 20px;
}
.single_footer p{color:#fff;}
.single_footer ul {
margin: 0;
padding: 0;
list-style: none;
}

.single_footer ul li a {
color: #fff;
-webkit-transition: all 0.3s ease 0s;
transition: all 0.3s ease 0s;
line-height: 36px;
font-size: 15px;
text-transform: capitalize;
text-decoration: none;
}
.single_footer ul li a:hover { color: #000000; }


.single_footer_address ul li{color:#fff;}
.single_footer_address ul li span {
font-weight: 400;
color: #fff;
line-height: 28px;
}
.contact_social ul {
list-style: outside none none;
margin: 0;
padding: 0;
}


.subscribe {
display: block;
position: relative;
margin-top: 15px;
width: 100%;
}
.subscribe__input {
background-color: #fff;
border: medium none;
border-radius: 5px;
color: #333;
display: block;
font-size: 15px;
font-weight: 500;
height: 60px;
letter-spacing: 0.4px;
margin: 0;
padding: 0 150px 0 20px;
/* text-align: center; */
text-transform: capitalize;
width: 100%;
}
@media only screen and (max-width:768px) { 
.subscribe__input{padding: 0 50px 0 20px;}
}

.subscribe__btn {
background-color: transparent;
border-radius: 0 25px 25px 0;
color: #c50000;
cursor: pointer;
display: block;
font-size: 20px;
height: 60px;
position: absolute;
right: 0;
top: 0;
width: 60px;
}
.subscribe__btn i{transition: all 0.3s ease 0s;}
@media only screen and (max-width:768px) { 
.subscribe__btn{right:0px;}
}

.subscribe__btn:hover i{
color:#000000;
}
button {
padding: 0;
border: none;
background-color: transparent;
-webkit-border-radius: 0;
border-radius: 0;
}

.social_profile {margin-top:40px;}
.social_profile ul{
list-style: outside none none;
margin: 0;
padding: 0;
}
.social_profile ul li{float:left;}
.social_profile ul li a {
text-align: center;
border: 0px;
text-decoration: none;
text-transform: uppercase;
transition: all 0.3s ease 0s;
margin: 0px 5px;
font-size: 18px;
color: #fff;
border-radius: 30px;
width: 50px;
height: 50px;
line-height: 50px;
display: block;
border: 1px solid rgba(255,255,255,0.2);
}
@media only screen and (max-width:768px) { 
.social_profile ul li a{margin-right:10px;margin-bottom:10px;}
}
@media only screen and (max-width:480px) { 
.social_profile ul li a{
width:40px;
height:40px;
line-height:40px;
}
}
.social_profile ul li a:hover{
background:#000000;
border: 1px solid #000000;
color:#fff;
border:0px;
}

.copyright {
margin-top: 70px;
padding-top: 40px;
color:#fff;
font-size: 15px;
border-top: 1px solid rgba(255,255,255,0.4);
text-align: center;
}
.copyright a{color:#000000;transition: all 0.2s ease 0s;}
.copyright a:hover{color:#000000;}

</style>





  <!-- Footer -->
  <div class="footer" style="overflow: hidden;">
    <div class="container">     
        <div class="row">                       
            <div class="col-lg-4 col-sm-4 col-xs-12">
                <div class="single_footer">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#">Delivery Options</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Return A Product </a></li>
                        <li><a href="#">Visit Our Shop</a></li>
                       
                    </ul>
                </div>
            </div><!--- END COL --> 
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single_footer single_footer_address">
                    <h4>Page Link</h4>
                    <ul>
                        <li><a href="collection.html">All Collection</a></li>
                        <li><a href="collectionreebok.html">Rebook Collection</a></li>
                        <li><a href="collectionnike.html">Nike Collection </a></li>
                        <li><a href="collectionpuma.html">Puma Collection</a></li>
                        <li><a href="collectionadidas.html">Adidas Collection</a></li>
                        <li><a href="collectionwillsion.html">Willsion Collection</a></li>
                    </ul>
                </div>
            </div><!--- END COL -->
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="single_footer single_footer_address">
                    <h4>Subscribe today</h4>
                    <div class="signup_form">                           
                        <form action="#" class="subscribe">
                            <input type="text" class="subscribe__input" placeholder="Enter Email Address">
                            <a href="mailto:info@gmail.com"><button type="button" class="subscribe__btn"><i class="fas fa-paper-plane"></i></button></a>
                        </form>
                    </div>
                </div>
                <div class="social_profile">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>                          
            </div><!--- END COL -->         
        </div><!--- END ROW --> 
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <p class="copyright">Copyright © by SK Designsz 2024.</p>
            </div><!--- END COL -->                 
        </div><!--- END ROW -->                 
    </div><!--- END CONTAINER -->
  </div>
  