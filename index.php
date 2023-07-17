<?php $con = new mysqli("localhost","root","","post"); ?>
<?php  if(isset($_SESSION['message'])): ?>

<?php endif ?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Technology Content</title>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
   
    <link href="css/style.css" rel="stylesheet">
    
  </head>
<body>
<div class="banner" id="banner_slide">
    <ul>
        <li class="banner_slide_01" >
            <div class="slide_caption">
                <h1>Artificial Intelligence (AI)</h1>
                <p>AI, has already received a lot of buzz in recent years, but it continues to be a trend to watch because its effects on how we live, work, and play are only in the early stages. In addition, other branches of AI have developed, including Machine Learning, which we will go into below. AI refers to computer systems built to mimic human intelligence and perform tasks such as recognition of images, speech or patterns, and decision making. </p>
				</div>
        </li>
        <li class="banner_slide_02">
            <div class="slide_caption">
                <h1>Machine Learning</h1>
                <p>Machine Learning, computers are programmed to learn to do something they are not programmed to do: they learn by it self with discovering patterns and insights from data. In general, we have two types of learning, supervised and unsupervised.</p>
				</div>
        </li>
        <li class="banner_slide_03">
            <div class="slide_caption">
                <h1>Robotic Process Automation or RPA</h1>
                <p>Like AI and Machine Learning, Robotic Process Automation, or RPA, is another technology that is automating jobs. RPA is the use of software to automate business processes such as interpreting applications, processing transactions, dealing with data, and even replying to emails.</p>
				</div>
		
        </li>
    </ul>
</div>

<div id="mobile_menu">
        <ul class="nav nav-pills nav-stacked">
            <li><a href="#banner_slide"><i class="glyphicon glyphicon-home"></i> &nbsp; Home</a></li>
            <li><a href="#about"><i class="glyphicon glyphicon-briefcase"></i> &nbsp; About</a></li>
            <li><a href="#events"><i class="glyphicon glyphicon-bullhorn"></i> &nbsp; Posts</a></li>
            <li><a href="#timeline"><i class="glyphicon glyphicon-calendar"></i> &nbsp; Timeline</a></li>
            <li><a rel="nofollow" href="http://www.google.com" class="external-link"><i class="glyphicon glyphicon-export"></i> &nbsp; External</a></li>
            <li><a href="#contact"><i class="glyphicon glyphicon-phone-alt"></i> &nbsp; Contact</a></li>
        </ul>
</div>
<div class="container_wapper">
    <div id="banner_menu">
        <div class="container-fluid">
            <div class="col-xs-6">
                	<h1 id="logo_text">Technology<span>Content</span></h1>
                </a>
            </div>
            <div class="col-sm-6 hidden-xs">
                <ul class="nav nav-justified">
                    <li><a href="#banner_slide">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#events">Posts</a></li>
                    <li><a rel="nofollow" href="http://www.google.com" class="external-link">External</a></li>
                    <li><a href="#contact">Contact</a></li>
                 </ul>
            </div>
            <div class="col-xs-8 visible-xs">
                <a href="#" id="mobile_menu"><span class="glyphicon glyphicon-th-list"></span></a>
            </div>
        </div>
    </div>
</div>
<div id="about" class="container_wapper">
    <div class="container-fluid">
        <h1>About This Page</h1>
                    <h2>New Technology</h2>
                    <p>This blog is provide new and trending technology information.User provide honest feedback, improve company culture and discover relevant career information. 
					Every user can add unique thought of new tech.</p>
                </div>
            
        <div class="clearfix testimonial_top_bottom_spacer"></div>
    </div>
</div>
<div id="events" class="container_wapper">
    <div class="container-fluid">
        <h1>Posts</h1>
        <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
            <div class="event_box_wap event_animate_left">
                <div class="event_box_img">
                    <img src="images/event_01.jpg" class="img-responsive" alt="Web Design Trends" />
                </div>
                <div class="event_box_caption">
                    <h1>Web Design Trends</h1>
                    
                    <p>Dark mode web designs not only look ultra modern, but they’re easy on the eyes and make colors and design elements pop.

Sometimes the most visually stunning web design trends have practical beginnings. Dark themes are better for OLED screens—saving power and extending screen lifespans—but that utility doesn’t stop them from looking good.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
            <div class="event_box_wap event_animate_right">
                <div class="event_box_img">
                    <img src="images/event_02.jpg" class="img-responsive" >
                </div>
                <div class="event_box_caption">
                    <h1>Cybersecurity</h1>
                    <p>Cybersecurity might not seem like emerging technology, given that it has been around for a while, but it is evolving just as other technologies are. That’s in part because threats are constantly new.</p>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
            <div class="event_box_wap event_animate_left">
                <div class="event_box_img">
                    <img src="images/event_02.jpg" class="img-responsive" alt="Free Bootstrap Seminar" />
                </div>
                <div class="event_box_caption">
                    <h1>Mobile Designs</h1>
                    <p>Mobile UX design is the design of user experiences for hand-held and wearable devices. Designers create solutions (typically applications) to meet mobile users' unique requirements and restrictions.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-0">
            <div class="event_box_wap event_animate_right">
                <div class="event_box_img">
                    <img src="images/event_01.jpg" class="img-responsive" alt="Web Design Trends" />
                </div>
                <div class="event_box_caption">
                    <h1> Blockchain</h1>
                    <p>Although most people think of blockchain technology in relation to cryptocurrencies such as Bitcoin, blockchain offers security that is useful in many other ways. In the simplest of terms, blockchain can be described as data you can only add to, not take away from or change. Hence the term “chain” because you’re making a chain of data.</p>
                </div>
            </div>
        </div>
		<div class="container-fluid">
		<div class="row-md-4">
		<div class="col-md-2">
		<a><?php echo( "<button onclick= \"location.href='login.php'\">Add post</button>");?></a>
		</div>
		<div class="col-md-2">
		<a><?php echo( "<button onclick= \"location.href='view.php'\">View User post</button>");?></a>
		</div>
		</div>
		</div>
    </div>
</div>

<div id="contact" class="container_wapper">
    <div class="container-fluid">
        <h1>Contact</h1>
        </div>
        <div class="col-md-4">
            <h2>Contact Info.</h2>
            <p><strong>Email:</strong> info@company.com<br /><strong>Phone:</strong> 010-020-0340<br /><strong>Website:</strong> www.company.com<br /><strong>Address:</strong> 123 Thamine Street, Digital Estate, Yangon 10620, Myanmar</p>
           
        </div>
    </div>
</div>
<div id="footer">
    <div>
        <p id="footer">Copyright &copy; 2020 Company Name</p>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.singlePageNav.min.js"></script>
<script src="js/unslider.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
