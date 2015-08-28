<?php

require_once('common.inc.php');

if (empty($_REQUEST['no_cookie'])) {
	if (isset($_COOKIE['visited-once'])) {
		header('Location: http://www.myschoolbuilding.com/myschoolbuilding/msbdefault_email.asp?frompage=myrequest.asp');
		exit;
	} else {
		setcookie('visited-once');
	}
}

$smarty->assign('content', '
	<div class="container page-header">
		<h1>School Dude <small>Facilities Requests</small></h1>
	</div>

	<div class="container">
		<div class="readable-width">
			<p>When you arrive at School Dude</a> for the first time, you will be asked to enter our organization account number:
			<p style="text-align: center;"><code style="font-size:.5in;">' . (string) $secrets->schooldude->account . '</code></p>
			<p>Please make a note (or copy-and-paste) this number and then click below to continue. (And recall that the password to submit a School Dude ticket is our founder&rsquo;s initials and our founding year: <code>' . (string) $secrets->schooldude->password . '</code>)</p>
			<p style="text-align: center;"><a class="btn btn-lg btn-primary" href="http://www.myschoolbuilding.com/myschoolbuilding/msbdefault_email.asp?frompage=myrequest.asp">Continue to School Dude</a></p>
		</div>
	</div>
	
');

$smarty->display();

?>