<main class="app-content">
 	<div class="app-title">
 		<div>
 			<h1><i class="fa fa-gavel"></i> Terms & Conditions</h1>
 		</div>
 		<ul class="app-breadcrumb breadcrumb">
 			<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
 			<li class="breadcrumb-item">Tables</li>
 			<li class="breadcrumb-item active"><a href="#">Terms & Conditions</a></li>
 		</ul>
 	</div>
 	<div class="row">
 		<div class="col-md-12">
 			<form action="" id="admin_address_form" method="POST">
			 		<div class="form-group">
              			<label for="exampleTextarea"><h4>Terms & Conditions</h4></label>
              			<textarea class="form-control" name="terms_condition" id="editor" rows="10"><?= $data['terms_condition']?></textarea>
            		</div>
			 		<button type="submit" class="btn btn-primary">Save changes</button>
			 </form>
 		</div>
 	</div>
</main>
<script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>