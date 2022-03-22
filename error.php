<?php
/*
Use to show Apache server errors on the main page 

Use by inserting this in main page:

<?php if (isset($_REQUEST['e'])){ include 'error.php';} //use home page for server error page ?>

and add these lines to .htaccess:

ErrorDocument 400 http://example.com/index.php?e=400
ErrorDocument 401 http://example.com/index.php?e=401
ErrorDocument 402 http://example.com/index.php?e=402
ErrorDocument 403 http://example.com/index.php?e=403
ErrorDocument 404 http://example.com/index.php?e=404
ErrorDocument 500 http://example.com/index.php?e=500

*/
?>
<div class="row">
	<div class="large-12 columns">
	<?php 
			$errortext=array (
				'400'=> '<h1>Error 400 &mdash; Bad Request</h1><p>The request cannot be fulfilled due to bad syntax.</p>',
				'401'=> '<h1>Error 401 &mdash; Unauthorized</h1>',
				'402'=> '<h1>Error 402 &mdash; Payment Required</h1>',
				'403'=> '<h1>Error 403 &mdash; Forbidden</h1>',
				'404'=> '<h1>Error 404 &mdash; Page Not Found</h1><p>Please check the link URL for mistakes</p>',
				'500'=> '<h1>Error 500 &mdash; Internal Server Error</h1>'
				);
			$error=$errortext[$_REQUEST['e']];
	?>
		<div class="margins-vertical" style="color:#00a;padding:2em;border:1px solid #aa0;background-color:#a00;"><?php echo $error; ?>
		</div>
	</div>
</div>