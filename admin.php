<?php only_admin_access(); ?>
<script>
function edit_backer(form){
	 var data = mw.serializeFields(form);
	 $.ajax({
        url: mw.settings.api_url + 'save_backer',
        type: 'POST',
        data: data,
        success: function (result) {
			mw.notification.success('Backer saved');
			$('#add-backer-form').hide();
			$('#add-backer-form')[0].reset();
			
			//reload the modules
			mw.reload_module('backers_list/edit_backers')
			mw.reload_module_parent('backers_list'); 
         }
    });
	return false;
}
function delete_backer(id){
	var ask = confirm("Are you sure you want to delete this backer?");
	if (ask == true) {
		 var data = {};
		 data.id = id;
		 $.ajax({
			url: mw.settings.api_url + 'delete_backer',
			type: 'POST',
			data: data,
			success: function (result) {
				mw.notification.success('Backer deleted');
				
				//reload the modules
				mw.reload_module('backers_list/edit_backers')
				mw.reload_module_parent('backers_list')
			 }
		});	 
	}
	 
	 
	return false;
}
</script>

<div class="module-live-edit-settings"> <a class="mw-ui-btn mw-ui-btn-icon" href="javascript:;" onclick="$('#add-backer-form').show()"> <span class="mw-icon-plus">Add new backer</span> </a>
  <form id="add-backer-form" onSubmit="edit_backer(this); return false;" style="display:none">
    <div class="mw-ui-field-holder">
      <label class="mw-ui-label">Backer Name</label>
      <input name="backer_name" type="text" class="mw-ui-field" />
    </div>
    <div class="mw-ui-field-holder">
      <label class="mw-ui-label">Backer Email</label>
      <input name="backer_email" type="text" class="mw-ui-field" />
    </div>
    <div class="mw-ui-field-holder">
      <label class="mw-ui-label">Backer Amount</label>
      <input name="backer_amount" type="text" class="mw-ui-field" />
    </div>
    <button type="submit" class="mw-ui-btn">Save</button>
  </form>
  <div class="mw-clear"></div>
  <br />
  <module type="backers_list/edit_backers" />
</div>
