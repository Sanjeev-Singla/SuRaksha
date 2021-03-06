<main class="app-content">
	<div class="app-title">
		<div>
			<h1><i class="fa fa-user"></i>Cities</h1>
		</div>
		<ul class="app-breadcrumb breadcrumb">
			<li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
			<li class="breadcrumb-item active"><a href="#">Add City</a></li>
		</ul>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="tile">
				<button type="button" class="btn btn-primary pull-right mb-4" data-toggle="modal" data-target="#exampleModal">
					<i class="fa fa-plus-circle"></i> Add City
				</button>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>City</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php if(!empty($data)):?>
							<?php foreach ($data['cities'] as $value): ?>
								<tr>
									<td><?=$value['id']?></td>
									<td><?=$value['city']?></td>
									<td>
										<a onClick="return confirm('Are you Sure??')" href="<?= base_url('admin/delete-city/').$value['id'] ?>" class="btn btn-danger btn-sm">
											<i class="fa fa-trash text-white"></i>
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
							<?php else:?>
								<tr><td colspan="3" class="text-center">No City Available...</td></tr>
							<?php endif?>
						</tbody>
						<tfoot>
							<tr>
								<th>ID</th>
								<th>City</th>
								<th>Action</th>
							</tr>
						</tfoot>
					</table>
					<?= $data['links_pagination']?>
				</div>
			</div>
		</div>
	</main>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="contact_us_subject">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" id="contact_us_message">

					<form action="" method="POST">
						<div class="form-group">
							<label for="exampleInputEmail1">City</label>
							<input class="form-control" id="cities" name="city" type="text" aria-describedby="emailHelp" placeholder="Enter City" required="">
						</div>
						<button type="submit" class="btn btn-primary">Save City</button>
					</form>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>