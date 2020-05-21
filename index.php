<?php 
error_reporting(0);

$name = 'Wiranata'; 

?>

<!DOCTYPE html>
	<head>
		<title><?=$name?> | Cermati.com Front-end Developer Entry Test</title>
		<link rel="stylesheet" href="reset.css">
		<link rel="stylesheet" href="style.css">		
		<link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css"></link>
		<script src="node_modules/jquery/dist/jquery.min.js"></script>
		<script src="index.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<div id="page">			
			<div class="notifikasi_panel">
				<div class="container">
					<div class="notifikasi">
						<div class="notify-text">
						<p>
							By accessing and using this website, you acknowledge that you have read and
							understand our <a href="#">Cookie Policy</a>, <a href="#">Privacy Policy</a>, and our <a href="#">Terms of Service</a>.
						</p>
						</div>
						<div class="notify-btn">
						<div class="btn-primary btn">
							<a href="#">Got It</a>
						</div>
						</div>
					</div>
				</div>	
			</div>
			<header>
				<div class="banner">
					<div class="banner-wrapper" style="background-image:url('images/work-desk__dustin-lee.jpg')">
						<div class="logo-brand">
							<div class="logo">
								<img src="images/y-logo-white.png" alt="logo">
							</div>
						</div>
						<div class="banner-text">
							<h1 style="color:#fff">Hello! I'm <?=$name?></h1>
							<h2 style="color:#fff">Consult, Design, and Develop Websites</h2>
							<p style="color:rgba(255, 255, 255, 0.788235294117647)">Have something great in mind? Feel free to contact me.<br>
								I'll help you to make it happen.</p>
								<div class="btn btn-transparent contact-btn">
									<a href="#">LET'S MAKE CONTACT</a>
								</div>
							
						</div>						
					</div>
				</div>
			</header>
			<section id="services" style="background-color:#e5e5e5">
				<div class="container">
					<div class="services-grid">
				<div class="service-heading">
					<h3>How Can I Help You?</h3>
					<p>
						Our work then targeted, best practices outcomes social innovation synergy. <br>
						Venture philanthropy, revolutionary inclusive policymaker relief. User-centered <br>
						program areas scale.
					</p>
				</div>
				<div class="service-content">
					<div class="services">
						<div class="box">
							<div class="box-wrapper">
								<div class="box-head">
									<h3>Consult</h3>
									<i class="far fa-comments"></i>
								</div>
								<div class="box-text">
								<p>Co-create, design thinking; strengthen infrastructure resist granular.
    Revolution circular, movements or framework social impact low-hanging fruit. 
    Save the world compelling revolutionary progress.</p>
    </div>
							</div>
						</div>
						<div class="box">
							<div class="box-wrapper">
								<div class="box-head">
									<h3>Design</h3>
									<i class="fa fa-paint-brush"></i>
								</div>
								<div class="box-text">
								<p>Policymaker collaborates collective impact humanitarian shared value
    vocabulary inspire issue outcomes agile. Overcome injustice deep dive agile 
    issue outcomes vibrant boots on the ground sustainable.</p>
    </div>
							</div>
						</div>
						<div class="box">
							<div class="box-wrapper">
								<div class="box-head">
									<h3>Develop</h3>
									<i class="fa fa-cubes"></i>
								</div>
								<div class="box-text">
								<p>Revolutionary circular, movements a or impact framework social impact low-
    hanging. Save the compelling revolutionary inspire progress. Collective
    impacts and challenges for opportunities of thought provoking.</p>
    						</div>
							</div>
						</div>
						<div class="box">
							<div class="box-wrapper">
								<div class="box-head">
									<h3>Marketing</h3>
									<i class="fa fa-chart-bar"></i>
								</div>
								<div class="box-text">
								<p>Peaceful; vibrant paradigm, collaborative cities. Shared vocabulary agile,
    replicable, effective altruism youth. Mobilize commitment to overcome
    injustice resilient, uplift social transparent effective.</p>
</div>
							</div>
						</div>
						<div class="box">
							<div class="box-wrapper">
								<div class="box-head">
									<h3>Manage</h3>
									<i class="fa fa-user-friends"></i>
								</div>
								<div class="box-text">
								<p>Change-makers innovation or shared unit of analysis. Overcome injustice
    outcomes strategize vibrant boots on the ground sustainable. Optimism,
    effective altruism invest optimism corporate social.</p>
								</div>
							</div>
						</div>
						<div class="box">
							<div class="box-wrapper">
								<div class="box-head">
									<h3>Evolve</h3>
									<i class="fa fa-chart-line"></i>
								</div>
								<div class="box-text">
								<p>Activate catalyze and impact contextualize humanitarian. Unit of analysis
    overcome injustice storytelling altruism. Thought leadership mass 
    incarceration. Outcomes big data, fairness, social game-changer.</p>
							</div>
							</div>
						</div>
					</div>
					</div>
				</div>
				</div>
			</section>
			<footer>
				<div class="copyright">
					<p>&copy; 2020 <?=$name?>. All rights reserved</p>
				</div>
			</footer>
			<div class="get-latest-update">
				<div class="get-lastest-wrap">
					<h3>Get latest updates in web technologies</h3>
					<p>I write articles related to web technologies, such as design trends, development
tools, UI/UX case studies and reviews, and more. Sign up to my newsletter to get
them all.</p>
				</div>
				<div class="newsletter">
					<form action="/cermati" method="POST">
					<div class="subcriber">
						<div class="email">
							<label for="email"></label>
							<input type="email" name="email-38hbobvi" placeholder="Email Address" id="newsletter">
						</div>
						<div class="btn count">
							<input type="submit" value="Count me in!">
						</div>
					</div>

					</form>					
				</div>
				<div class="close">
						<span>x</span>
					</div>
			</div>
		</div>
	</body>
</html>