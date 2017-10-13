

<form method = "POST" action = "manage_product_c/edit" enctype = "multipart/form-data">
	<div class  = "modal-body">
		<div class = "form-group">
			<input type = "hidden" name = "eproduct-id-input" value = "<?php echo $product->content_product_id; ?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Title:</label>
			<input type = "text" name = "eproduct-title-input" value = "<?php echo $product->content_product_title; ?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Short Description:</label>
			<input type = "text" name = "eproduct-desc-input" value = "<?php echo $product->content_product_desc; ?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Detail:</label>
			<textarea class = "form-control editTextarea" name="eproduct-detail-input" id="" required = "required" cols="30" rows="5" ><?php echo $product->content_product_detail; ?></textarea>
		</div>
		<div class = "form-group">
			<label>Picture:</label>
			<input type = "file" id="eproduct-pict-input" name = "eproduct-pict-input" class = "form-control" />
            <img style="display: block; width: 50%; height: 50%; margin: 20px auto;" class="preview-img"  alt="" src="<?php echo base_url(); ?>assets/admin/img/products/<?php echo $product->content_product_pict; ?>">
			<p style="text-align: center;"><?php echo $product->content_product_pict; ?></p>
		</div>
		<div class = "form-group">
			<label>Best Seller:</label>
			<br>
			<?php if ( $product->content_product_best === "yes") { ?>
				<input type = "radio" name = "eproduct-best-input" value="yes" checked="" class = "" /> Yes <br>
				<input type = "radio" name = "eproduct-best-input" value="no" /> No <br>	
			<?php } else {  ?>
				<input type = "radio" name = "eproduct-best-input" value="yes" class = "" /> Yes <br>
				<input type = "radio" name = "eproduct-best-input" value="no" checked=""  class = "" /> No <br>
			<?php } ?>
			<br>
		</div>
	</div>
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_admin"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
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

        $("#eproduct-pict-input").change(function(e){
            e.preventDefault;
            readURL(this);
        });
    });
</script>