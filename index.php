<?php $backers = get_backers("no_limit=true"); ?>
<?php if($backers): ?>
<div class="mw-ui-box mw-ui-box-content">
  <ul>
    <?php foreach($backers as $backer): ?>
    <li><?php print $backer['backer_name']; ?> - <?php print currency_format($backer['backer_amount']); ?></li>
    <?php endforeach; ?>
  </ul>
</div>
<?php endif; ?>
