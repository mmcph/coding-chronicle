<!doctype html>
<html lang="en">
	<head>
		<!-- META -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

		<!--Google Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Anonymous+Pro" rel="stylesheet">

		<!--FontAwesome-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

		<!-- Google reCAPTCHA -->
		<script src="https://www.google.com/recaptcha/api.js"></script>

		<!--form-validate-->
		<script src="js/form-validate.js"></script>

		<!--favicon-->
		<link rel="icon" href="https://i.imgur.com/KJbr2SL.png">

		<title>Coding Chronicle</title>
	</head>
	<body>
		<!--NAVBAR-->
		<nav class="navbar navbar-expand-lg navbar-default fixed-top">
			<a id="homeLink" class="navbar-brand" href="#top">coding-chronicle:~$ </a><span id="titleText" class="d-none d-xl-inline-block navbar-brand">Marlon <span id="mAlign">M</span><span id="supC">c</span>Pherson's course through the web dev world<span id="blockChar">&#9616;</span></span>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"><i class="navIcon fas fa-bars"></i></span>
			</button>
<!--NAV LINKS-->

<!--			todo URL redirect when ready to deploy!-->
<!--			todo change resume email to marlon@codingchronicle.com-->
<!--			todo create email acct on cpanel if I want to send mail from cc.com - use mozilla thunderbird-->

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="https://github.com/mmcph" target="_blank"><i class="navIcon fab fa-github-square"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://www.linkedin.com/in/mmcph" target="_blank"><i class="navIcon fab fa-linkedin"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://twitter.com/mmcphdev" target="_blank"><i class="navIcon fab fa-twitter-square"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#posts" data-toggle="tooltip" data-placement="bottom" title="Blog Posts"><i class="navIcon fas fa-pen-square"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact"><i class="navIcon fas fa-envelope-square"></i></a>
					</li>
			</div>
		</nav>

<!--ABOUT ME-->
		<div class="container">
			<div class="postContainer container-fluid">
				<h1 id="contentTitle">About Me</h1>
				<p class="postContent">I am a web developer and writer. I completed my web development certification at Deep Dive Coding, part of CNM’s Ingenuity program. This ten-week bootcamp-style course familiarized me with HTML, CSS, Javascript, Angular, Bootstrap, PHP, and mySQL, and prepared me to enter the industry as a full-stack developer. I graduated from UNM in 2015 with a bachelor’s in English and a minor in art studio. My language, communication, and design skills, combined with my newfound passion for coding, enable me to create sleek, professional web content for a variety of applications.</p>
			</div>
		</div>
		<div class="contentSpacer"></div>

<!--PROJECTS-->
		<div class="container">
			<div class="postContainer container-fluid">
				<h1 id="contentTitle">Coding Projects</h1>
			</div>
		</div>
		<div class="container">
			<div class="postContainer container-fluid">
				<h1 class="postTitle">Food Truck Found</h1><h1 class="postDate d-none d-lg-inline-block">4 June 2018</h1>
				<div class="row container-fluid">
					<div class="thumbContainer col-lg-4 col-md-3"><img src="https://i.imgur.com/ETGr3aA.png" class="img-fluid"></div>
					<div class="textContainer col-lg-8 col-md-9">
						<p class="postContent"><a href="https://www.github.com/mmcph/food-truck-finder" title="capstone repository">Github Repository</a></p>
						<br>
						<p class="postContent">This is my group's capstone project for Deep Dive Coding's full-stack web development bootcamp. Food Truck Found is an app that connects potential customers to food trucks in the Albuquerque area. Food truck owners are able to post their business information, let users know when they're open for business, and post their location to a live Google Map. Users are able to search for food trucks based on the type(s) of food they serve, add food trucks to a list of personal favorites, and upvote/downvote a food truck. My group (Yvette Johnson-Rodgers, G Cordova, and Manuel Escobar) and I coded this app from the ground up using all of the technologies that we've learned over the past 9 weeks. We built a full back-end in PHP and MySQL, wrote RESTful APIs, and crafted a front-end with Angular, HTML, CSS, Bootstrap, and Google Maps API.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="postContainer container-fluid">
				<h1 class="postTitle">Personal Site</h1><h1 class="postDate d-none d-lg-inline-block">4 June 2018</h1>
				<div class="row container-fluid">
					<div class="thumbContainer col-lg-4 col-md-3"><img src="https://i.imgur.com/KJbr2SL.png" class="img-fluid"></div>
					<div class="textContainer col-lg-8 col-md-9">
						<p class="postContent"><a href="http://www.marlonmc.com/testsite/index.html" title="my first site">marlonmc.com</a></p>
						<br>
						<p class="postContent">Prior to joining Deep Dive Coding's full-stack web development bootcamp, I was enrolled in a bootcamp-style course on <a href="https://www.udemy.com/" title="shameless Udemy plug">Udemy</a>. I had a passing familiarity with the basic concepts of front-end technology before enrolling, but this course was my first time truly immersing myself in the coding world. With the knowledge I gained, I built this site. Though it's a work in progress (and will likely remain that way until I re-purpose the domain), I was nonetheless satisfied with my ability to get this much done after so short a time (at the time of this posting, I've been coding for about six months). Shortly after coding this up, I joined the Deep Dive Coding bootcamp - the site you're currently on is the successor to this first venture into the world of web development. I learned a lot from tinkering with this site, just as I've learned from creating coding chronicle. One day I'll be able to look back at this project and see how far I've come. It's all uphill from here, and I'm looking forward to the climb.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="postContainer container-fluid">
				<h1 class="postTitle">jQuery To-Do List</h1><h1 class="postDate d-none d-lg-inline-block">4 June 2018</h1>
				<div class="row container-fluid">
					<div class="thumbContainer col-lg-4 col-md-3"><img src="https://i.imgur.com/eTKFGru.png" class="img-fluid"></div>
					<div class="textContainer col-lg-8 col-md-9">
						<p class="postContent"><a href="http://www.marlonmc.com/ToDo/index.html" title="my first jQuery project">jQuery To-Do List</a></p>
						<br>
						<p class="postContent">The Udemy web development bootcamp that I was enrolled in when I first started coding focused on jQuery rather than vanilla JS. In order to practice with and understand the basic concepts behind JS/jQuery scripts, I wrote this simple to-do list. I enjoy how succinct and feature-rich jQuery is, but I get the impression that its ubiquity is waning. Considering the demand for JavaScript developers, I will mainly be focused on JS after I get my certificate and enter the coding world as a junior developer.</p>
					</div>
				</div>
			</div>
		</div>
		<div id="posts"></div>
		<div class="contentSpacer"></div>

		<!--BLOG POSTS-->
		<div class="container">
			<div class="postContainer container-fluid">
				<h1 id="contentTitle">Reflections</h1>
			</div>
		</div>

		<div class="container">
			<div class="postContainer container-fluid">
				<h1 class="postTitle">Bootcamp Week 1</h1><h1 class="postDate d-none d-lg-inline-block">20 April 2018</h1>
				<div class="row container-fluid">
					<p class="postContent">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The week went about as I expected it to go (like the first week in any course). Reviewing the syllabus, settling into routines, and meeting peers took up the first couple days. Since I had previous front-end experience coming into the course, almost all of the front-end centered lectures and activities were review for me. The review didn’t last long, since we jumped into mySQL and data design fairly soon after. This is all unfamiliar territory to me, so my previous experience means nothing. I expected more front-end review in a full stack course, so it was a bit surprising when we made the jump straight into databases. I feel the anxiety that comes with the pressure of learning new material (especially in a bootcamp setting), but I still feel confident in my ability to learn and apply the material. In other words, I haven’t stumbled off the ‘cliff of confusion’ yet, but I’m certainly open to the possibility - in fact, I welcome it. You’ve gotta fall down to learn how to stand up. Of course, I’ll do what I can to mitigate the fall, but I’m definitely expecting it. I first felt my toes poke over the edge when we discussed logarithms and bits/bytes. I don’t have a good understanding of math, so any math-oriented material will present an extra hurdle for me, but if I continue to devote 100% of my attention and effort in class, I know I’ll pull through.</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="postContainer container-fluid">
				<h1 class="postTitle">Bootcamp Week 2</h1><h1 class="postDate d-none d-lg-inline-block">27 April 2018</h1>
				<div class="row container-fluid">
					<p class="postContent">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The second week of class has been a definite step up in terms of difficulty, a trend that I’m sure will continue. I’m still adapting, and there are some really important topics we covered that will apply to everything we do down the road - as long as I can understand those basic concepts, I’ll be able to fill in the cracks with logic and some Google-fu. Object-oriented programming was the focus of this week, and the analogy of ‘blueprint / building’ makes sense, as does encapsulation keeping data secure. Doc blocks are great because they’re right up my alley - keeping them short and sweet is imperative, and I can write well in shorthand to describe my code.</p>
					<p class="postContent">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From a personal development perspective, the week brought some big changes. Until (very) recently, I didn’t have much of an online presence. I had a Linkedin profile (only searchable if you know my full name) with only the barest of customization. I didn’t have a Twitter account either (I do now; still settling on an @ handle though). I don’t have any other social media, since I maintain contact with friends via Discord / phone. I’ve always preferred to keep searchable personal info off the web, for what some might call paranoid reasons (in a world where people are fired for social media posts, I reckon it’s best to stay away). Professionally, though, I needed to bite the bullet and sign up for a few sites to bolster my online presence. I’ve also reconsidered my goal in this course. I thought about what makes me feel passionate about web development, and while I was browsing the internet because I had reached a mental block, I thought of how much I dislike bad site design. Youtube is a recent offender (in my opinion) with the links that pop up at the end of videos, blocking the view for the last ten seconds of the video. The alignment of the suggested video links that pop up in a grid after the video stops is also aligned such that the titles of the first row of videos are off-screen. UI/UX is definitely appealing when I think of glaring front-end issues like those. Of course, this is tempered with realism (“Who’s this newbie coder throwing shade at Youtube?”) - I’m know the embarrassment of being wrong about something I claimed to know. Sometimes “bad design” is “design for a reason of which you’re unaware”. Regardless, I enjoy design and like the idea of making the web more usable for everyone. The picture activity we did was helpful in discovering this possible motivation for advancing my career in coding - it solidified my thoughts about who I was, am, and want to be.</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="postContainer container-fluid">
				<h1 class="postTitle">Bootcamp Week 3</h1><h1 class="postDate d-none d-lg-inline-block">4 May 2018</h1>
				<div class="row container-fluid">
					<p class="postContent">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Capstone is finally here. Now that my final project has been assigned, I have a clear vision of the finish line for the first time. I don’t want to get headstrong; I just feel confident in my.group’s ability to finish strong and put together a polished product for capstone. I’m the github repo owner, which is a relief (I like to maintain a good level of control, especially in group projects - nothing against my current group, I’ve just had enough negative experiences to plan ahead. I’m not gonna be ‘that guy’ who does everyone’s work for them. All I want to do is give the project my full attention. I’m looking forward to seeing how the dynamic of our group works going forward. Our project idea is interesting (it came from a conversation between me and Yvette) because its analogs are not very robust - if we really go to town on this, it could be a huge success. I’m a food lover, so I’m really excited to discover what Albuquerque has to offer in terms of food trucks (I haven’t really checked). I know that we still have a lot to learn, but I definitely have a good grasp of what we’ve covered so far, and I’m ready to move forward.</p>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="postContainer container-fluid">
				<h1 class="postTitle">Bootcamp Week 4</h1><h1 class="postDate d-none d-lg-inline-block">11 May 2018</h1>
					<div class="row container-fluid">
						<p class="postContent">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Capstone phase is in full swing from this week onward. Our vision for the Food Truck Finder app is becoming clearer as we progress through the data design stages. Our project is of middling complexity (for a capstone, at least) - we’ve got six entities, so we’ll be writing six classes next week. Our DDL is finished, and Yvette is working on getting our database configured this weekend. We’ve got a great concept to be working with, so hopefully the project turns out well. Of course, I have my concerns, as anyone should when working in a group (especially for something as important as capstone) but I remain confident that we’ll be able to cobble together something serviceable for demo day. I’ll contribute as much as I can to the group effort and try to be available to answer questions or help out whenever I can.</p>
					</div>
			</div>
		</div>
		<div class="contentSpacer"></div>

<!--CONTACT FORM-->
		<div id="posts" class="container">
			<div class="postContainer container-fluid">
				<h1 id="contentTitle">Contact</h1>
			</div>
		</div>

		<div class="spacer"></div>
		<div class="footer">
			<div class="container">
				<form id="pwp-form" method="post" action="php/mailer.php">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="pwpName">Name</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="formIcon fa fa-user"></i></span>
									</div>
									<input class="form-control" type="text" name="pwpName" id="pwpName" placeholder="Your Name">
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="pwpEmail">Email</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="formIcon fa fa-envelope"></i></span>
									</div>
									<input class="form-control" type="email" name="pwpEmail" id="pwpEmail" placeholder="Your Email">
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="pwpSubject">Subject</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="formIcon fa fa-comment"></i></span>
									</div>
									<input class="form-control" type="text" name="pwpSubject" id="pwpSubject" placeholder="Subject">
								</div>
							</div>
						</div>
					</div>

					<div class="form-group messageDiv">
						<label for="pwpMessage">Message</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="formIcon fas fa-edit"></i></span>
							</div>
							<textarea name="pwpMessage" rows="6" id="pwpMessage" class="form-control" placeholder="Your Message (2000 characters max)"></textarea>
						</div>
					</div>

					<!--							RECAPTCHA-->
					<div class="g-recaptcha" data-sitekey="6LenZlwUAAAAACHelIgj395loGCGGoFSmmm1IGUq"></div>

					<button class="btn btn-info" type="submit">Send</button>
					<button class="btn btn-default" type="reset">Reset</button>

				</form>
				<div id="output-area"></div>
			</div>
		</div>

	<div id="contact"></div>
</body>
</html>