<?php
function get_safe_value($con, $str)
{
	if ($str != '') {
		$str = trim($str);
		return mysqli_real_escape_string($con, $str);
	}
}

function redirect($url)
{
?>
	<script>
		window.location.href = "<?php echo $url ?>";
	</script>
	<?php
}



function isAdmin()
{
	if (!isset($_SESSION['ADMIN_LOGIN'])) {
	?>
		<script>
			window.location.href = 'login.php';
		</script>
	<?php
	}
	if ($_SESSION['ADMIN_ROLE'] == 1) {
	?>
		<script>
			window.location.href = 'product.php';
		</script>
<?php
	}
}

function imageCompress($source, $path, $quality = 60)
{
	$info = getimagesize($source);

	if ($info['mime'] == 'image/jpeg')
		$image = imagecreatefromjpeg($source);

	elseif ($info['mime'] == 'image/gif')
		$image = imagecreatefromgif($source);

	elseif ($info['mime'] == 'image/png')
		$image = imagecreatefrompng($source);

	imagejpeg($image, $path, $quality);
}
?>