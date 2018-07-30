<html>
	<head>
		<link rel="stylesheet" href="https://use.typekit.net/iqe2iah.css">
		<title>Haggerty Construction Signature Creator</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<style type="text/css">
			.sig_form{
			width: 520px;
			padding:30px;
			margin-top: 8%;
			margin: 7% auto auto;
			background-color: #ffffff;
			-webkit-border-radius: 15px;
			-moz-border-radius: 15px;
			border-radius: 15px;
			}
			body {
			background-image: linear-gradient( rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6) ), url('/email-signatures/signature-bg.jpg');
			background-size:cover;
			min-width: 0;
			margin:0;
			padding:0;
			color: #4e4d4e;
			font-family: "nimbus-sans", sans-serif;
			font-size: 13px;
			line-height: 1.4em;
			}
			.loginform {
			-moz-box-shadow: none;
			-webkit-box-shadow: none;
			box-shadow: none;
			text-align:left;
			color:#000;
			}
			.form-control{
				border: 0px;
			    box-shadow: inset 0 0 0 !important;
			    border-bottom: 1px solid #f1f1f1;
			    border-radius: 0px;
			}
			.form-control:active{
				border-bottom: 1px solid #F68920;
			}
			table{
				text-align:left;
			}
		</style>
	</head>

	<body>
		<div class="sig_form" style="background-color: #ffffff;"><p style="padding-bottom:20px;text-align:center;"><img src="/email-signatures/haggerty-wide.png"  width="150" style="width:150px;"/></p>
			<form name="loginform"  id="loginform" action="signature.php" method="post">
				<div class="form-group">
					<label for="name" >Name</label>
					<input type="text" name="name" class="form-control" placeholder="ex. Ryan Haggerty">
				</div>

				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" class="form-control" placeholder="ex. President">
				</div>

				<div class="form-group">
					<label for="title">Division</label>
					<select class="form-control" name="division">
						<option>Select...</option>
						<option value="builds">Build</option>
						<option value="restores">Restore</option>
						<option value="advises">Advise</option>
					</select>
				</div>

				<div class="form-group">
					<label for="email">E-mail</label>
					<input type="text" name="email" class="form-control" placeholder="ex. name@haggertybuilds.com">
				</div>
				<div class="form-group">
					<label for="office">Office</label>
					<input type="text" name="office" class="form-control" placeholder="209 123 4567">
				</div>

				<div class="form-group">
					<label for="phone">Mobile</label>
					<input type="text" name="phone" class="form-control" placeholder="209 123 4567">
				</div>

				<p style="text-align:center;"><button type="submit" class="btn btn-primary">Generate Signature</button></p>
			</form>
		</div>
	</body>
</html>
