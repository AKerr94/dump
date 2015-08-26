<?php
    if (isset($_POST["submit"])) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
		if (ctype_digit($_POST['human'])) {
			$human = intval($_POST['human']);
		}
		else{
			$human = "invalid";
		}
        $from = 'alastairkerr.co.uk Contact Form'; 
        $to = 'kerr.alastairjames@gmail.com'; 
        $subject = 'Message from Contact Form';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 11) {
            $errHuman = 'Please enter the correct answer';
        }
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! Your message has been sent</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later</div>';
    }
}
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Personal website for projects and portfolio">
    <meta name="author" content="Alastair Kerr">
	<meta name="google-site-verification" content="TSRL075OuURShrtL54p46TVB370ae-sZIesUKou5nzw" />

    <title>Alastair Kerr's Site - Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/styling.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://www.alastairkerr.co.uk">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
					<li>
						<a href="../ofc">Open Face Chinese Poker Game vs Intelligent Agent</a>
					</li>
                    <li>
                        <a href="../Dissertation 4177303.pdf" target="_blank">Dissertation Report</a>
                    </li>
					<li>
						<a href="CV Alastair Kerr.pdf" target="_blank">CV</a>
					</li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row centered">
            <div class="col-lg-12">
                <h1 class="page-header">Welcome to my site!</h1>
            </div>
			<div class="col-lg-12">
				<h4>I am an aspiring software engineer who has just finished a degree in Computer Science from the University of Nottingham</h4>
			</div>
        </div>
		
		<hr>
		
        <!-- /.row -->

        <!-- Project Zero -->
        <div class="row">
            <div class="col-md-7">
                <a href="../wp/DevOps_CaseStudy.html" target="_blank">
                    <img class="img-responsive" src="images/infra_digital.png" alt="Whiteboard diagram of the infrastructure we created">
                </a>
            </div>
            <div class="col-md-5">
                <h3>DevOps Case Study</h3>
                <h4>Continuous Delivery Pipeline</h4>
                <p>In this Case Study our team worked on a Continuous Delivery Pipeline using software such as Jenkins, Puppet and Amazon Web Services.</p>
                <p>We created a full pipeline so that a developer's pushes to a git repository triggered a Jenkins build that ran Unit Tests. If these passed, the code would then be deployed to production servers through agents provisioned by a Puppet master server.</p>
                <p>The project also entailed creating a virtual environment for testing with Vagrant, as well as configuring the system for auto-scaling, load-balancing and monitoring.</p>
                <a class="btn btn-primary" href="../wp/DevOps_CaseStudy.html" target="_blank">Read the wordpress! <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project One -->
        <div class="row">
            <div class="col-md-7">
                <a href="../ofc">
                    <img class="img-responsive" src="images/disso_img-min.jpg" alt="Screenshot of the OFC Game">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Dissertation Project</h3>
                <h4>Intelligent Agent for Open Face Chinese Poker Web-Application</h4>
                <p>This project was composed of two main parts. Firstly, I created an HTML5 web-application for Open Face Chinese Poker.</p>
				<p>Secondly, I created a bespoke Intelligent Agent which uses Monte Carlo methods to simulate thousands of games before aggregating the results of these in order to choose its card placements.</p>
                <a class="btn btn-primary" href="../ofc">Play the game <span class="glyphicon glyphicon-chevron-right"></span></a>
				<a class="btn btn-primary" href="../Dissertation 4177303.pdf" target="_blank">Read the report <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Two -->
        <div class="row">
            <div class="col-md-7">
                <a href="http://www.alastairkerr.co.uk/NMD/history-timeline.html" target="_blank">
                    <img class="img-responsive" src="images/robin_hood-min.jpg" alt="Robin Hood Statue at Nottingham Castle">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Nottingham Castle History Timeline</h3>
                <h4>A prototype for a history timeline page for the Nottingham Castle website</h4>
                <p>This prototype web page is a proposed addition/ modification to the <a href="http://www.nottinghamcity.gov.uk/article/22175/Nottingham-Castle" target="_blank">Nottingham Castle City Council website</a> which aims to provide a more engaging medium for telling the narrative of Nottingham Castle's history.</p>
                <a class="btn btn-primary" href="http://www.alastairkerr.co.uk/NMD/history-timeline.html" target="_blank">View Live Implementation <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                <a href="https://drive.google.com/file/d/0Bxt1WLf0xMgHT1Y0Rm52S2hiajQ/view?usp=sharing" target="_blank">
                    <img class="img-responsive" src="images/tuscan_hero.gif" alt="Screenshot of Tuscan Hero Unity/C# game">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Tuscan Hero</h3>
                <h4>Prototyping elements of game design with Unity/ C#</h4>
                <p>Using the Unity game engine and C# scripts, this game explores various elements of game design including difficulty curve, narrative, animation, sound FX etc.</p>
                <a class="btn btn-primary" href="https://drive.google.com/file/d/0Bxt1WLf0xMgHT1Y0Rm52S2hiajQ/view?usp=sharing" target="_blank">Download zip <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Four -->
        <div class="row">

            <div class="col-md-7">
                <a href="https://drive.google.com/file/d/0Bxt1WLf0xMgHQ2Zob3MyQnlNNzg/view?pli=1" target="_blank">
                    <img class="img-responsive" src="images/educraft-min.jpg" alt="EduCraft mod screenshot - crafting numbers with sums">
                </a>
            </div>
            <div class="col-md-5">
                <h3>EduCraft</h3>
                <h4>Collaborative Learning with Minecraft</h4>
                <p>Year 2 Group Project: Creating a mod by modifying and extending existing game code (Java), aiming to engage Key Stage 2 pupils and teach them to learn mathematics collaboratively.</p>
                <a class="btn btn-primary" href="https://drive.google.com/file/d/0Bxt1WLf0xMgHQ2Zob3MyQnlNNzg/view?pli=1" target="_blank">Watch the demo day video <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Project Five -->
        <div class="row">
            <div class="col-md-7">
                <a href="https://github.com/AKerr94/zombies-from-hell/blob/master/Release.zip?raw=true" target="_blank">
                    <img class="img-responsive" src="images/zombie-min.jpg" alt="Screenshot from splash screen of game">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Zombies From Hell</h3>
                <h4>A simple game using a C++ SDL framework</h4>
                <p>This piece of work required understanding and adapting an existing C++ framework, which needed to be modified and optimised to allow for an efficient game implementation.</p>
                <a class="btn btn-primary" href="https://github.com/AKerr94/zombies-from-hell/blob/master/Release.zip?raw=true" target="_blank">Download the game <span class="glyphicon glyphicon-chevron-right"></span></a>
				<a class="btn btn-primary" href="https://github.com/AKerr94/zombies-from-hell" target="_blank">View on github <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
        <!-- /.row -->
		
		<hr>
		
		<!-- Project Six -->
		<div class="row">
			<div class="col-md-7">
				<a href="http://www.alastairkerr.co.uk/DSDAT.zip">
					<img class="img-responsive" src="images/DSDAT.png" alt="Screenshot of the application">
				</a>
			</div>
			<div class="col-md-5">
				<h3>DNA Sequencing Data Analysis Tool</h3>
				<h4>A Python tool for processing and visualising DNA sequence datasets</h4>
				<p>This tool is provided with an example file "big_test.txt" which can be processed and manipulated, for example to find the average qualities of the DNA sequences, to prune the dataset, to order the dataset, and even to plot a graph of the qualities of a given dataset.</p>
				<p>Based off a command-line tool created during a Work Shadowing experience at the Wellcome Trust Sanger Institute, I have extended the functionality of the program and used Tkinter to create a simple graphical interface increasing usability.</p>
				<a class="btn btn-primary" href="http://www.alastairkerr.co.uk/DSDAT.zip">Download <span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
		<!-- /.row -->

        <hr>
		
		<!-- Contact me -->
		<div class="row">
			<a name="form"></a>
  			<div class="col-md-6 col-md-offset-3">
  				<h1 class="page-header text-center">Contact Me</h1>
					<form class="form-horizontal" role="form" method="post" action="index.php#form">
						<div class="form-group">
							<label for="name" class="col-sm-2 control-label">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
								<?php echo "<p class='text-danger'>$errName</p>";?>
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
								<?php echo "<p class='text-danger'>$errEmail</p>";?>
							</div>
						</div>
						<div class="form-group">
							<label for="message" class="col-sm-2 control-label">Message</label>
							<div class="col-sm-10">
								<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
								<?php echo "<p class='text-danger'>$errMessage</p>";?>
							</div>
						</div>
						<div class="form-group">
							<label for="human" class="col-sm-2 control-label">5 + 6 = ?</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
								<?php echo "<p class='text-danger'>$errHuman</p>";?>
							</div>
						</div>
						<div class="form-group">
							<div class="centered">
								<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10 col-sm-offset-2">
								<?php echo $result; ?>    
							</div>
						</div>
					</form> 
			</div>
		</div>
		
		<hr>
		
		<div class="row">
			<div class="col-md-12 centered">
				<h1 class="small_gap">More details</h1>
				<h4 class="small_gap"><a href="mailto:kerr.alastairjames@gmail.com">Email: kerr.alastairjames@gmail.com</a></h4>
				<a class="btn btn-primary" href="CV Alastair Kerr.pdf" target="_blank">Download my CV <span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>
		
		<hr>
		
        <!-- Footer -->
		<footer id="footer1"></footer>

    </div>
    <!-- /.container -->
	
	<!-- Footer js -->
	<script src="js/footer.js"></script>
	
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
