<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Blogs</title>
</head>
<body>
	<!-- NAVBAR -->
  <div>
  <nav>
    <div class="wrapper">
      <div class="logo"><a href="index.html"> <span style="color: yellow;">Rea</span>sons</a></div>
      <input type="radio" name="slider" id="menu-btn">
      <input type="radio" name="slider" id="close-btn">
      <ul class="nav-links">
        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
        <li><a href="../index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li>
          <a href="#" class="desktop-item">Services</a>
          <input type="checkbox" id="showDrop">
          <label for="showDrop" class="mobile-item">Services</label>
          <ul class="drop-menu">
            <li><a href="blogs/webdesign.php">Social media marketing</a></li>
            <li><a href="#">Search engine Optimization</a></li>
            <li><a href="#">Content marketing</a></li>
             <li><a href="#">Web Design</a></li>
            <li><a href="#">Digital marketing strategy</a></li>
          </ul>
        </li>
       
        <li><a href="contactus.php">Contact Us</a></li>
         <li><a href="../Admin/login.php">Admin</a></li>

      </ul>
      <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>
</div>
<div class="bodsizing">
  
</div>

	<div class="bodtitle">
  <h>Latest<span>Blogs</span></h>
   <p style=" color=red;">Reasons Internet Marketing Agency is a full-service digital marketing agency.<br>Attract, Impress,
  <br>
  and Convert more leads online and get results with Reasons <br></p>
  <div class="btnset">
    <button class="btn1"><span>Subscribe to our Blogs</button>
    </div>
</div>
	<div class="content clearfix">
		
		<div class="main-content">
			<h2 class="recent-post-title">Recent post</h2>

			<div class="post">
				<img src="../images/content.jpeg" alt="" class="post-image">
				<div class="post-preview">
					<h2 href="#" >The strongest songs yet to remain to be sung</h2>
					<i class="fas fa-user">Richie</i>&nbsp;
					<i class="far calender">Mar 11,2019</i>
					<p class="preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. </p>
					<a href="#" class="btn readmore">Read More</a>
				</div>
			</div>
			<div class="post">
				<img src="../images/hombg.jpeg" alt="" class="post-image">
				<div class="post-preview">
					<h2 href="#" >The strongest songs yet to remain to be sung</h2>
					<i class="fas fa-user">Richie</i>&nbsp;
					<i class="far calender">Mar 11,2019</i>
					<p class="preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. </p>
					<a href="#" class="btn readmore">Read More</a>
				</div>
			</div>
			<div class="post">
				<img src="../images/bg.jpeg" alt="" class="post-image">
				<div class="post-preview">
					<h2 href="#" >The strongest Digital marketing strategy yet to remain to be Applied</h2>
					<i class="fas fa-user">Richie</i>&nbsp;
					<i class="far calender">Mar 11,2019</i>
					<p class="preview-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. </p>
					<a href="#" class="btn readmore">Read More</a>
				</div>
			</div>
		</div>
		<div class="sidebar">
			<div class="section search" style="width:300px;">
				<h2 class="section-title">Search</h2>
				<form method="post" action="#">
				<input type="text" name="search-term" class="text-input" placeholder="Search...">
			</form>
			</div>

			
			<div class="section topics">
				<h2 class="section-title">Topics</h2>
				<ul>
					<li><a href="#">Poems</a></li>
					<li><a href="#">Social Media marketing</a></li>
					<li><a href="#">Content Marketing</a></li>
					<li><a href="#">Multivation</a></li>
					<li><a href="#">Life on Top</a></li>
					<li><a href="#">Meditation</a></li>
				</ul>
			</div>
				</div>
	</div>



<!-- footer -->
<div class="footer">
  <div class="footer-content">
    <div class="footer-section about">
      <h1 class="logo-text"><span>Rea</span>sons</h1>
        <p>Reasons Internet Marketing Agency is a full-service digital marketing agency. Attract, Impress, and Convert more leads online and get results with Reasons.
      </p>
      <div class="contact">
        <span><i class="fas fa-phone"></i>&nbsp;071840400</span>
        <span><i class="fas fa-envelope"></i>&nbsp;reasonsdigital@gmail.com</span>

      </div>
      <div class="socials">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
     <div class="footer-section links">
       <h2>Quick links</h2>
       <br>
       <ul>
         <a href="index.php"><li>Home</li></a>
         <a href="#"><li>Services</li></a>
         <a href="contactus.php"><li>Contact Us</li></a>
         <a href="blog.php"><li>Blogs</li></a>
         <a href="#"><li>Privacy plolicy</li></a>
       </ul>
     </div>
     <div class="footer-section contact-form" >
       <h2>Contact us</h2>
       <br>
       <form action="blog.php" method="post">
         <input type="email" name="email" class="text-input contact-input" style="width: 100%;" placeholder="Your email address.....">

         <textarea name="message" class="text-input contact-input" style="width: 100%;"  placeholder="Type your message here....."></textarea>

         <button type="submit" name="sendmessage" class="btn btn-big contact-btn">
          <i class="fas fa-envelope"></i> Send</button>
       </form>
     </div>
  </div>
    <div class="footer-bottom">&copy; Reasons | All rights reserved</div>

</div>


</body>
</html>