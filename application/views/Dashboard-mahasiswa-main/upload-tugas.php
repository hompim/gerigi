<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?=$title ?></title>
	<link rel="icon" href="<?php echo base_url() ?>assets/img/LogoGerigi.png">
</head>
<body>
	<form action="<?=base_url('Mahasiswa/upload_link/').$id ?>" method="post" accept-charset="utf-8">
		<input type="text" name="link" autocomplete="off" autofocus="on">
		<button type="submit">SUBMIT</button>
		<?=form_error('link') ?>
	</form>
</body>
</html>