<?php

require_once('common.inc.php');

$smarty->assign('content','

	<div class="container page-header">
		<h1>Forgot Password</h1>
	</div>
	
	<div class="container">
		<div class="readable-width">
			<h3>Are you a St. Mark&rsquo;s student or teacher?</h3>
			
			<p>Please log in with your whole St. Mark&rsquo; email address and password. If you have forgotten your password, please contact the Help Desk at x4001 (students may also visit the Dean of Students&rsquo; office for password lookups).</p>
				
			<h3>Are you non-teaching St. Mark&rsquo;s faculty or staff?</h3>
			
			<p>If you would like access to Canvas, please contact <a href="mailto:CanvasHelp@stmarksschool.org?subject=Canvas%20Access,%20please!">CanvasHelp@stmarksschool.org</a> from your school email address and we&rsquo;ll get you set up!</p>
				
			<h3>Are you a student in an online St. Mark&rsquo;s course?</h3>
			
			<p>Please contact <a href="mailto:CanvasHelp@stmarksschool.org?subject=Canvas%20Password%20Problem">CanvasHelp@stmarksschool.org</a> from the email address that you registered with us for assistance. (If you can&rsquo;t remember which email address you used, please be sure to include your full name and a good explanation of what&rsquo;s going on so we can help you figure it out!)</p>
		</div>
	</div>
');

$smarty->display();

?>