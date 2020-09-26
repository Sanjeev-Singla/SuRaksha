<style type="text/css">
	.select2-container{
		width: 100% !important;
	}
</style>
<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-building"></i> Edit Property</h1>
		</div>
		<ul class="app-breadcrumb breadcrumb">
			<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
			<li class="breadcrumb-item active"><a href="#">Edit Property</a></li>
		</ul>
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="tile">

				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group" id="property_type">
						<label for="exampleSelect1">Property For</label>
						<select class="form-control" name="property_type" id="exampleSelect1" disabled>
							<option value="">Please Select Your Property Type</option>
							<option value="Residential" <?= ($data['property']['property_type']=='Residential')?"selected":""?> >Residential</option>
							<option value="Official" <?= ($data['property']['property_type']=='Official')?"selected":""?> >Official</option>
							<option value="Commercial" <?= ($data['property']['property_type']=='Commercial')?"selected":""?> >Commercial</option>
						</select>
					</div>

					<div class="row">
						<div class="col-md-2">
							<div class="animated-radio-button">
								<label>
									<input type="radio" value="Sale" name="sale_rent" <?= ($data['property']['sale_rent']=='Sale')?"checked":""?> ><span class="label-text">Sale</span>
								</label>
							</div>
						</div>
						<div class="col-md-10">
							<div class="animated-radio-button">
								<label>
									<input type="radio" value="Rent" name="sale_rent" <?= ($data['property']['sale_rent']=='Rent')?"checked":""?> ><span class="label-text">Rent</span>
								</label>
							</div>
						</div>
					</div>

					<div class="form-group" id="residential_type">
						<label for="exampleSelect1">Residential Type</label>
						<select class="form-control" name="residence_type" id="exampleSelect1" disabled>
							<option value="">Please Select Your Residential Type</option>
							<option value="Plot" <?= ($data['property']['residence_type']=='Plot')?"selected":""?> >Plot</option>
							<option value="Flat" <?= ($data['property']['residence_type']=='Flat')?"selected":""?> >Flat</option>
							<option value="House" <?= ($data['property']['residence_type']=='House')?"selected":""?> >House</option>
						</select>
					</div>

					<div class="form-group" id="flat_type">
						<label for="exampleSelect1">Flat Type</label>
						<select class="form-control" name="flat_type" id="exampleSelect1">
							<option value="">Please Select Your Flat Type</option>
							<option value="Fully Furnished" <?= ($data['property']['flat_type']=='Fully Furnished')?"selected":""?>>Fully Furnished</option>
							<option value="Semi Furnished" <?= ($data['property']['flat_type']=='Semi Furnished')?"selected":""?>>Semi Furnished</option>
							<option value="Raw" <?= ($data['property']['flat_type']=='Raw')?"selected":""?>>Raw</option>
						</select>
					</div>

					<div class="form-group" id="flat_bhks">
						<label for="exampleInputEmail1">BHK</label>
						<input class="form-control" value="<?= isset($data['property']['bhk'])?$data['property']['bhk']:""?>" name="bhk" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter BHKs">
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Property Title</label>
						<input class="form-control" id="property_title" name="property_title" type="text" aria-describedby="emailHelp" placeholder="Property Title" value="<?= isset($data['property']['property_title'])?$data['property']['property_title']:""?>">
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Property Size</label>
						<input class="form-control" id="property_size" name="size" type="text" aria-describedby="emailHelp" placeholder="Property Size" value="<?= isset($data['property']['property_title'])?$data['property']['property_title']:""?>">
					</div>

					<div class="form-group">
						<div id="flat_aminities">
							<label for="exampleInputEmail1">Select Aminities</label>
							<select class="form-control" name="aminities[]" id="demoSelect" multiple="">
								<optgroup label="Select Aminities">
									<?php foreach($data['aminities'] as $aminity): ?>
										<option value="<?= $aminity['id']?>"   <?= in_array($aminity['id'],$data['property']['aminities'])?"selected":""?>><?= $aminity['aminities'] ?></option>
									<?php endforeach; ?>
								</optgroup>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label">Price</label>
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-prepend"><span class="input-group-text">₹</span></div>
								<input class="form-control" value="<?= isset($data['property']['price'])?$data['property']['price']:""?>" name="price" id="exampleInputAmount" type="text" placeholder="Enter Amount">
								<div class="input-group-append"><span class="input-group-text">.00</span></div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Location</label>
						<input class="form-control" id="property_location" name="location" type="text" aria-describedby="emailHelp" placeholder="Property Location" value="<?= isset($data['property']['location'])?$data['property']['location']:""?>">
					</div>

					<div class="form-group" id="city">
						<label for="exampleSelect1">City</label>
						<select class="form-control" name="city" id="exampleSelect1">
							<option value="">Please Select City</option>
							<?php foreach($data['cities'] as $city):?>
								<option value="<?=$city['city']?>"  <?= ($data['property']['city']==$city['city'])?"selected":""?>><?=$city['city']?></option>
							<?php endforeach?>
						</select>
					</div>

					<div class="form-group">
						<label for="exampleInputEmail1">Landark</label>
						<input class="form-control" id="property_landark" name="landmark" type="text" aria-describedby="emailHelp" placeholder="Enter Landark"  value="<?= isset($data['property']['landmark'])?$data['property']['landmark']:""?>">
					</div>

					<div class="form-group">
						<label for="exampleInputFile">Upload Image</label>
						<input class="form-control-file" id="exampleInputFile" type="file" name="images[]" aria-describedby="fileHelp" multiple="">
						<small class="form-text text-muted" id="fileHelp">Please Upload Only jpg,jpeg,png Extensions</small>
					</div>

					<div class="form-group">
						<label for="exampleTextarea">Description</label>
						<textarea class="form-control" name="description" id="exampleTextarea" rows="3"><?= isset($data['property']['description'])?$data['property']['description']:""?></textarea>
					</div>

					<button type="submit" class="btn btn-primary">Save changes</button>
				</form>


			</div>
		</div>

	</div>
</main>