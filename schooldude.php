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
	<p>When you arrive at School Dude</a> for the first time, you will be asked to enter our organization account number:
	<blockquote><code style="font-size:.5in;">615666807</code></blockquote>
	<p>Please make a note (or copy-and-paste) this number and then <a href="http://www.myschoolbuilding.com/myschoolbuilding/msbdefault_email.asp?frompage=myrequest.asp">click this link to continue.</a> (And recall that the password to submit a School Dude ticket is our founder&rsquo;s initials and our founding year.)</p>
');

$smarty->display();

?>