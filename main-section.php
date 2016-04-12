<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jamilpointer.io</title>
	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/projects.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
	<script type='text/javascript' src='js/modernizr.js'></script>

</head>
<body>
	<h1 class="center"><span>PROJECTS</span></h1>

	<div id="content" class="container">
		<div id="leftBar" class="col-sm-6">
			<!--List of Projects will go here--> 
			<ul id="projectLinks">
				<li><a href="checkedin.php">CHECKEDIN</a></li>
				<li><a href="grua.php">GRUA</a></li>
				<li><a href="insurenow.php">INSURE NOW<a/></li>
				<li><a href="learningacademy.php">LEARNING ACADEMY</a></li>
			</ul>
		</div>		

		<div id="rightBar" class="col-sm-6">
			<!--Project Descriptions will be here--> 
		
				<!--Images/Media for each project will be held here--> 
				<img id="projectImg" class="img-fluid" src="/images/project_screen.png">
		
			<div id="projectDescrip">
				<!--Description and details of each project will be held here--> 
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, commodi accusantium maxime officiis quia assumenda quaerat ab id consequuntur voluptate itaque consequatur nemo, repudiandae quas necessitatibus voluptates saepe, omnis dolore. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis a sint mollitia pariatur? Consequatur mollitia illo corporis porro, aut, animi ipsam dolore nulla, obcaecati temporibus iure blanditiis veritatis accusamus magnam!
			</div>

		</div>

	</div>
	<div id="buttonHolder" class="center">
		<button type="submit">CONTACT ME</button>
	</div>

	<script type="text/javascript">
		$(function() {
			if(Modernizr.history) {
				console.log("History is supported");
				$("#projectLinks").delegate("a", "click", function() {
					_href = $(this).attr("href");
					history.pushState(null,null, _href);
					loadContent(_href);
				});

			var $mainContent = $("#main-content"),
    		$pageWrap    = $("#page-wrap"),
    		baseHeight   = 0,
    		$el;

			// calculate wrapper heights to prevent jumping when loading new content
			$pageWrap.height($pageWrap.height());
			baseHeight = $pageWrap.height() - $mainContent.height();
			
			function loadContent(href) {
			
			  $mainContent
			    .find("#rightBar")
			    .fadeOut(200, function() { // fade out the content of the current page
			      $mainContent
			        .hide()
			        .load(href + " #guts", function() { // load the contents of whatever href is
			          $mainContent.fadeIn(200, function() {
			            $pageWrap.animate({
			              height: baseHeight + $mainContent.height() + &quot;px&quot;
			            });
			         });
			      
			      $("nav a").removeClass("current");
			
			      $("nav a[href$='" + href + "']").addClass("current");
			
			    });
			
			  });

}
			}
			else {
				console.log("History is NOT supported!");
			}
		});
	</script>
	

</body>
</html>