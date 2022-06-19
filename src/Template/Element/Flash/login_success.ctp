<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<!-- <div class="message success" onclick="this.classList.add('hidden')"><?= $message ?></div> -->


<!-- 
<div class="alert alert-icon-right alert-info alert-dismissible mb-2" role="alert">
<span class="alert-icon"><i class="fa fa-info"></i></span>
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">×</span>
</button>
<strong><?= $message ?></strong>
</div> -->

<div class="alert alert-success alert-dismissible mb-2" role="alert">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong><?= $message ?></strong>
</div>