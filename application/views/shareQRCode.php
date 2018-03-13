<html>
<head>
  <title>Scan & Pay</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="<?php echo base_url();?>wallet/<?php echo $this->uri->segment(2);?>" />
  <meta property="og:type"          content="Scan & Pay" />
  <meta property="og:title"         content="Scan & Pay" />
  <meta property="og:description"   content="Instant Pay" />
  <meta property="og:image"         content="<?php echo base_url();?>QR_CODES/<?php echo $qrCodeImage;?>" />
</head>
<body>

<center>
  <h1>Scan & Pay</h1>
 <img src="<?php echo base_url();?>QR_CODES/<?php echo $qrCodeImage;?>" /> 
</center>

</body>
</html>
