<?php

if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>

<!-- Success Alert -->
<div class="alert alert-success alert-dismissible d-flex align-items-center fade show">
    <i class="bi-check-circle-fill" style="font-size: 24px;"></i>
    <strong class="mx-2"><?= $message ?></strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>

<!-- <div class="alert alert-right alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong><?= $message ?></strong>
</div> -->


<!-- <div class="alert alert-success background-success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <i class="icofont icofont-close-line-circled text-white"></i>
    </button>
    <strong><?= $message ?></strong> 
</div> -->