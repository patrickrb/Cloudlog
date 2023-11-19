<div class="container lotw">

  <h2><?php echo lang('lotw_title'); ?> - <?php echo lang('lotw_title_adif_import'); ?></h2>
  
<div class="card">
	<div class="card-header"><?php echo lang('lotw_title_adif_import_options'); ?></div>
  <div class="card-body">

    <?php $this->load->view('layout/messages'); ?>

    <?php echo form_open_multipart('lotw/import');?>

    <div class="form-check">
      <input type="radio" id="lotwimport" name="lotwimport" class="form-check-input">
      <label class="form-check-label" for="lotwimport"><?php echo lang('lotw_input_a_file'); ?></label>

      <p><?php echo lang('lotw_upload_exported_adif_file_from_lotw'); ?></p>
      <p><span class="badge text-bg-info"><?php echo lang('general_word_important'); ?></span> <?php echo lang('lotw_upload_type_must_be_adi'); ?></p>
      
      <div class="custom-file">
          <input type="file" class="form-control" id="adiffile" name="userfile" size="20" />
        <label class="form-label" for="adiffile"><?php echo lang('general_word_choose_file'); ?></label>
      </div>

    </div>


		<br><br>

		<div class="form-check">
			<input type="radio" name="lotwimport" id="fetch" class="form-check-input" value="fetch" checked="checked" />
			<label class="form-check-label" for="fetch"><?php echo lang('lotw_pull_lotw_data_for_me'); ?></label>
		</div>
      <p class="card-text"><?php echo lang('gen_from_date'); ?>:</p>
      <div class="row">
          <div class="col-md-3">
            <input name="from" id="from" type="date" class="form-control w-auto">
          </div>
      </div>
      <br/>

		<p class="form-text text-muted"><?php echo lang('lotw_report_download_overview_helptext'); ?></p>

		<input class="btn btn-primary" type="submit" value="<?php echo lang('lotw_btn_import_matches'); ?>" />

	</form>
  </div>
</div>

</div>
