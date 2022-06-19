
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Supermarket</title>
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->Url->build('/frontend/demo/assets/imgs/theme/favicon.svg'); ?>" />
        <link rel="stylesheet" href="<?php echo $this->Url->build('/frontend/demo/assets/css/main.css?v=4.1'); ?>" />
    </head>

    <body>
        <?= $this->fetch('content') ?>
        <!-- Vendor JS-->
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/vendor/modernizr-3.6.0.min.js'); ?>"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/vendor/jquery-3.6.0.min.js'); ?>"></script>

        <!-- Invoice JS -->
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/invoice/jspdf.min.js'); ?>"></script>
        <script src="<?php echo $this->Url->build('/frontend/demo/assets/js/invoice/invoice.js'); ?>"></script>
    </body>
</html>
