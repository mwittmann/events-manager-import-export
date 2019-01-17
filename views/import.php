<?php
// event import form

if (!defined('ABSPATH')) {
	exit;
}
?>

<div class='wrap'>
	<h2>Import Events</h2>

	<p>Import a file of events exported from Events Manager Import/Export plugin on another website.</p>
	<form action="<?php echo esc_url($url); ?>" method="post" enctype="multipart/form-data">
	<table class="form-table">

		<tr>
			<th>File format:</th>
			<td>
				<label><input type="radio" name="imp_format" id="imp_format_xcal" value="xCal" checked="checked" /> xCal / Events Manager</label>
				<br />
				<label><input type="radio" name="imp_format" id="imp_format_csv" value="csv" /> CSV in Events Manager Import/Export format</label>
			</td>
		</tr>

		<tr>
			<th>Detecting duplicates:</th>
			<td>
				<label><input type="checkbox" name="imp_usepguid" id="imp_usepguid" value="1" checked="checked" /> Use the event post GUID to de-duplicate events</label><br/>
				<small>If unchecked, a custom event attribute <em>em_impexp_uid</em> is used to detect duplicates. This may not work for some installations. <br/> 
				If checked, the imported event <em>uid</em> will be saved as the GUID for a new event post, and subsequent imports will check whether an event post with the same GUID already exists, and if so update it.</small>
			</td>
		</tr>

		<tr valign='top'>
			<th>File:</th>
			<td>
				<input type="file" class="regular-text" name="import_file" />
			</td>
		</tr>

		<tr>
			<th>&nbsp;</th>
			<td>
				<input type="submit" class="button-primary" value="upload" />
				<input type="hidden" name="action" value="em_impexp_import" />
			</td>
		</tr>

	</table>
	</form>
</div>

