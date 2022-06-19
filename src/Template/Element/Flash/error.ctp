<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>

<!-- Error Alert -->
<div class="alert alert-danger alert-dismissible d-flex align-items-center fade show">
    <i class="bi-exclamation-octagon-fill" style="font-size: 24px;"></i>
    <strong class="mx-2"><?= $message ?></strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>


<!-- <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong><?= $message ?></strong>
</div> -->
