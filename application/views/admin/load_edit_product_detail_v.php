

<form method = "POST" action = "manage_product_c/edit_detail" enctype = "multipart/form-data">
	<div class  = "modal-body">
		<div class = "form-group">
			<input type = "hidden" name = "eproduct-id-input" value = "<?php echo $product->content_product_id; ?>" required = "required" class = "form-control" />
		</div>
		
		<div class = "form-group">
			<label>Detail Picture:</label>
			<input type = "file" id="eproduct-pict2-input" name = "eproduct-pict2-input" class = "form-control" />
			<br>
			<img style="display: block; width: 50%; height: 50%; margin: 20px auto;" class="preview-img" src="<?php echo base_url(); ?>assets/admin/img/products/detail-pict/<?php echo $product->content_product_pict2; ?>" alt="">
			<p style="text-align: center;" ><?php echo $product->content_product_pict2; ?></p>

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

        $("#eproduct-pict2-input").change(function(e){
            e.preventDefault;
            readURL(this);
        });
    });
</script>