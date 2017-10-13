

<form method = "POST" action = "manage_product_c/edit_demoLink" enctype = "multipart/form-data">
	<div class  = "modal-body">
		<div class = "form-group">
			<input type = "hidden" name = "eproduct-id-input" value = "<?php echo $product->content_product_id; ?>" required = "required" class = "form-control" />
		</div>
		<div class = "form-group">
			<label>Demo Link:</label>
			<input type = "text" name = "eproduct-demoLink-input" value = "<?php echo $product->content_product_ytLink; ?>" class = "form-control" />
		</div>
	</div>
	<div class = "modal-footer">
		<button  class = "btn btn-warning"  name = "edit_admin"><span class = "glyphicon glyphicon-edit"></span> Save Changes</button>
	</div>
</form>	


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

        $("#eproduct-demoLink-input").change(function(e){
            e.preventDefault;
            readURL(this);
        });
    });
</script>