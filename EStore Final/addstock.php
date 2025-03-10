<?php

// filename: addstock.php

	session_start();
	if(!isset($_SESSION['admin'])) {

		header("Location:index.php");
	}

	if(!isset($_SESSION['addstock'])) {
		$_SESSION['addstock']['name']="";
		$_SESSION['addstock']['categoryID']="1";
		$_SESSION['addstock']['price']="";
		$_SESSION['addstock']['topline']="";
		$_SESSION['addstock']['description']="";
		$_SESSION['addstock']['photo']="noimage.jpg";

	} else {
		if($_SESSION['addstock']['photo']!="noimage.jpg"){
			unlink("images/photos".$_SESSION['addstock']['photo']);

		}
	}
?>


<div class="maincontent">

	<p><a href="index.php?page=admin">Back to admin</a></p>
	<h1>Enter details for new stock item</h1>
	<form method="post" action="index.php?page=confirmaddstock" enctype="multipart/form-data">
		<p>Stock item name: <input type="text" name="name" value="<?php echo $_SESSION['addstock']['name']; ?>" /></p>
		<p>Photo image: <input type="file" name="fileToUpload" id="fileToUpload" /></p>
		<p>Category: <select name="categoryID">
			<?php $catlist_sql="SELECT * FROM category";
				$catlist_qry=mysqli_query($db, $catlist_sql);
				$catlist_rs=mysqli_fetch_assoc($catlist_qry);

				do { ?>

					<option value="<?php echo $catlist_rs['categoryID']; ?>"
					<?php 
						if($catlist_rs['categoryID']==$_SESSION['addstock']['categoryID']) {
							echo "selected=selected";
						}
					?>

					><?php echo $catlist_rs['name']; ?></option>
				<?php }	while ($catlist_rs=mysqli_fetch_assoc($catlist_qry));

		?></select>
		</p>

		<p>Price: $ <input type="text" name="price" value="<?php echo $_SESSION['addstock']['price']; ?>" /></p>
		<p>Topline: <input type="text" name="topline" value="<?php echo $_SESSION['addstock']['topline']; ?>" /></p>
		<p>Description: <textarea name="description" cols=60 rows=5><?php echo $_SESSION['addstock']['description']; ?></textarea></p>
		<input type="submit" name="submit" value="Submit" />
	</form>

</div>