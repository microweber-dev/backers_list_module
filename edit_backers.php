<?php $backers = get_backers("no_limit=true"); ?>
<?php if($backers): ?>

<table width="100%" border="0" class="mw-ui-table" style="table-layout:fixed">
  <thead>
    <tr>
      <th>Backer Name</th>
      <th>Email</th>
      <th>Amount</th>
      <th width="140px">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($backers as $backer): ?>
    <tr id="baker-<?php print $backer['id']; ?>">
      <td><input type="text" class="mw-ui-field" name="backer_name" value="<?php print $backer['backer_name']; ?>" /></td>
      <td><input type="text" class="mw-ui-field" name="backer_email" value="<?php print $backer['backer_email']; ?>" /></td>
      <td><input type="text" class="mw-ui-field" name="backer_amount" value="<?php print $backer['backer_amount']; ?>" /></td>
      <td><input type="hidden" name="id" value="<?php print $backer['id']; ?>" />
        <button class="mw-ui-btn" onclick="edit_backer('#baker-<?php print $backer['id']; ?>')">Save</button>
        <a class="mw-ui-btn mw-ui-btn-icon" href="javascript:;" onclick="delete_backer('<?php print $backer['id']; ?>')">
        <span class="mw-icon-bin"></span>
        </a>

      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>
