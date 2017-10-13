

<form method = "POST" action = "manage_benefit_c/edit" enctype = "multipart/form-data">
	<div class  = "modal-body">
		<div class = "form-group">
			<input type = "hidden" name = "ebenefit-id-input" value = "<?php echo $benefit->content_benefit_id; ?>" required = "required" maxlength="30" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Title:</label>
			<input type = "text" name = "ebenefit-title-input" value = "<?php echo $benefit->content_benefit_title; ?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Describe:</label>
			<textarea class="form-control editTextarea" name = "ebenefit-desc-input" rows="3" placeholder="Describe this Benefit" maxlength="200"><?php echo $benefit->content_benefit_desc; ?></textarea>
		</div>
		<div class = "form-group">
			<label>Picture:</label>
			<input id="ebenefit-pict-input" type = "file" name = "ebenefit-pict-input" class = "form-control" />
			<img style="display: block; width: 40%; height: 40%; padding:10px; margin: 10px auto;" class="preview-img" src="<?php echo base_url(); ?>assets/admin/img/benefit/<?php echo $benefit->content_benefit_pict; ?>" alt="">
			<p style="text-align: center;" ><?php echo $benefit->content_benefit_pict; ?></p>
		</div>
	</div>
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_benefit"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
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

        $("#ebenefit-pict-input").change(function(e){
            e.preventDefault;
            readURL(this);
        });
    });
</script>



