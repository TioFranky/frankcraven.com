<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit FranCraven.com feature</title>
	<style TYPE="text/css">
	    <!--
	    .padding{
	    	padding:2rem;
	    }
	    .margin-left{
	    	margin-left:2rem;
	    }
	    .margin{
	    	margin:2rem;
	    }
	    .grey-back{
	    	background-color:#ccc;
	    }
	    .save-button{
	    	margin:1rem 0;padding:1rem;font-size:130%;
	    }
	    .white-box{
	    	background-color:#fff;
	    }
	    .editor{
	    	display:none;
	    }
	    button{
	    	line-height:2;
	    }
	    .alert{
	    	color:red;
	    }
	    -->
    </style> 
	<link rel="stylesheet" href="ckeditor/samples/css/samples.css">
</head>
<body>
	<div id="content" class="padding">
		<?php 
		$file_name = $_SERVER['DOCUMENT_ROOT'] ."/homepage-insert.html"; // file to be edited
		$old_file = file_get_contents( $file_name); //retrieve to old file before overwriting it
		if ($_POST['editor1']){ //if the CKEditor form was submitted
			$edited_file = $_POST['editor1']; //get the new version from the post
			$current_file = $edited_file; // use POST as current version
			file_put_contents( $file_name, $edited_file); //save the new version to disk
			echo '<h3 class="red">(edited)</h3>';
		}else{
			$current_file = $old_file; // if the page is loaded for the first time, give CKEditor the old file
			echo '<h3>(unedited)</h3>';
		} 
		?> 
		<h1>EDIT: FrankCraven.com Homepage Feature</h1>
		<div>
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
				<textarea id="editor1" name="editor1" class="editor">
					<?php  echo $current_file; // put the current version where CKEditor will find it ?>
				</textarea>
				<input class="save-button" type="submit" value="SAVE">
			</form>
		</div>
		<hr>
		<div class="margin">
			<a href="/" target="_blank"><button>view home page</button></a>
			<!-- <a class="margin-left" href="/schedule.html" target="_blank"><button>view schedule page</button></a> -->
		</div>
		<div class="grey-back padding">
			<h2>Previous Version</h2>
			<p>(to undo changes, copy this and paste it into the editor window)</p>
			<div class="white-box padding">
				<?php echo $old_file; //display the last saved version for reference, and as a simple 'undo' option ?>
			</div>
		</div>
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script>if (!window.jQuery) { document.write('<script src="js/jquery-1.11.3.min.js"><\/script>'); }
	</script>
	<script src="ckeditor/ckeditor.js"></script>
	<script>
		$( document ).ready(function() {
			//from ckeditor/samples/js/sample.js
			if ( CKEDITOR.env.ie && CKEDITOR.env.version < 9 )
				CKEDITOR.tools.enableHtml5Elements( document );
		    // replace the dummy textarea in the form with an instance of CKEditor
		    CKEDITOR.replace( 'editor1' );
		});
	</script>

</body>
</html>