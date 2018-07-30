<?php
$email = $_POST["email"];
$phone = $_POST["phone"];
$division = $_POST["division"];
$office = $_POST["office"];
$name = $_POST["name"];
$title = $_POST["title"];


// format phone numbers with spaces
if (strlen($phone) === 10) {
  $phone = substr_replace($phone, " ", 3, 0);
  $phone = substr_replace($phone, " ", 7, 0);
}
if (strlen($office) === 10) {
  $office = substr_replace($office, " ", 3, 0);
  $office = substr_replace($office, " ", 7, 0);
}

?>
<head>
  		<link rel="stylesheet" href="https://use.typekit.net/iqe2iah.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style type="css/text">
    .signature-body {
      font-family: "nimbus-sans", sans-serif;
    }
</style>
<div class="signature-body">
<span style="color:#ffffff">--</span>

<div class="container-fluid">
  <div style="float: left;">
    <img style="margin-right:10px;" src="/email-signatures/haggerty-wide.png" width="168">
  </div>

  <div style="overflow: hidden; display: inline-block">
    <div style="border-bottom: 1px solid black; ">
      <span class="sig-name" style="color: #F68920; font-size:30px; margin-right: 15px;"><strong><?php echo ($name); ?></strong></span> <span style="font-size:30px;"><?php echo ($title); ?></span>
    </div>

    <span style="display: inline-block; margin: 0.5rem 0"><?php echo $email ?></span>

    <br>

    <div>
      <p style="display: inline-flex;">2474 Wigwam Dr. | Stockton, CA 95205 <strong style="margin-left: 15px;">haggerty<?php echo ($division) ?>.com</strong> </p>
      <span style="width:25px; padding: 0 0 0 20px;" width="35px"><a href="https://www.facebook.com/haggertyconstruction/"><img src="/email-signatures/facebook.png" width="30px"/></a></span>
      <span style="width:25px;" width="35px"><a href="https://twitter.com/haggertyconst"><img src="/email-signatures/twitter.png" width="30px"/></a></span>
      <span style="width:25px;" width="35px"><a href="https://www.linkedin.com/company/haggerty-construction-inc-/"><img src="/email-signatures/linkedin.png" width="30px"/></a></span>
    </div>
    
    <div style="display: inline-flex;">
      <p>office <strong style="margin-right: 15px;"><?php echo $office; ?></strong> <?php if ($phone) { ?> mobile <strong style="margin-right: 15px;"><?php echo $phone; ?></strong> <?php } ?> <?php if ($division === "restores") { ?> 24/7 <strong style="margin-right: 15px;">209 323 6200</strong> <?php } ?> fax <strong style="margin-right: 15px;">209 451 0011</strong></p>
    </div>
  </div>


</div>
</div>
