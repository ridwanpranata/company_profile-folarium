

<form method = "POST" action = "manage_marketing_c/edit" enctype = "multipart/form-data">
	<div class  = "modal-body">
		<div class = "form-group">
			<input type = "hidden" name = "emarketing-id-input" value = "<?php echo $marketing->user_id; ?>" required = "required" maxlength="30" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Username:</label>
			<input type = "text" name = "emarketing-username-input" value = "<?php echo $marketing->user_username; ?>" required = "required" class = "form-control" readonly/>
		</div>
		<div class = "form-group">
			<label>First Name:</label>
			<input type = "text" name = "emarketing-fname-input" value = "<?php echo $marketing->user_fname; ?>" required = "required" class = "form-control"/>
		</div>
		<div class = "form-group">
			<label>Last Name:</label>
			<input type = "text" name = "emarketing-lname-input" value = "<?php echo $marketing->user_lname; ?>" required = "required" class = "form-control"/>
		</div>
		<div class = "form-group">
			<label>Email:</label>
			<input type = "text" name = "emarketing-email-input" value = "<?php echo $marketing->user_email; ?>" required = "required" class = "form-control"/>
		</div>
		<div class = "form-group">
			<label>Bio:</label>
			<textarea class="form-control editTextarea" name = "emarketing-bio-input" rows="3" placeholder="Describe this marketing" maxlength="200"><?php echo $marketing->user_bio; ?></textarea>
		</div>
		<div class = "form-group">
			<label>Phone:</label>
			<input type = "text" name = "emarketing-phone-input" value = "<?php echo $marketing->user_phone; ?>" required = "required" class = "form-control"/>
		</div>
		<div class = "form-group">
			<label>Contact ID Line:</label>
			<input type = "text" name = "emarketing-line-input" value = "<?php echo $marketing->user_line; ?>" required = "required" class = "form-control"/>
		</div>
		<div class = "form-group">
			<label>Contact Pin BB:</label>
			<input type = "text" name = "emarketing-pinbb-input" value = "<?php echo $marketing->user_pinbb; ?>" required = "required" class = "form-control"/>
		</div>
		<div class = "form-group">
			<label>Picture:</label>
			<input id="emarketing-pict-input" type = "file" name = "emarketing-pict-input" class = "form-control" />
			<img style="display: block; width: 50%; height: 50%;" class="preview-img" src="<?php echo base_url(); ?>assets/admin/img/marketing/<?php echo $marketing->user_pict; ?>" alt="">
		</div>
	</div>
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_marketing"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
	</div>
</form>

<script>
    tinymce.init({
        selector: 'textarea.editTextarea',
        menubar : false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code'
        ],
        toolbar: 'undo redo | bold italic underline | bullist numlist| link',
        content_css: [
              '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
              '//www.tinymce.com/css/codepen.min.css'],
        setup: function (editor) {
            editor.on('change', function () {
                editor.save();
            });
        }
    });
</script>
<script type = "text/javascript">
    $(document).ready(function(){
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.preview-img').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#emarketing-pict-input").change(function(e){
            e.preventDefault;
            readURL(this);
        });
    });
</script>


