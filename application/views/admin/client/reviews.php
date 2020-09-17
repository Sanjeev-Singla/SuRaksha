<style type="text/css">
  .select2-container{
    width: 100% !important;
  }
</style>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Basic Tables</h1>
      <p>Basic bootstrap tables</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active"><a href="#">Simple Tables</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <button type="button" id="add_client_review_button" class="btn btn-primary pull-right mb-4" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-plus-circle"></i> Add Review
        </button>

        <table class="table table-hover">
          <thead>
            <tr>
              <th>Client Name</th>
              <th>Position</th>
              <th>Comment</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($data as $value):?>
              <tr>
                <td><?=$value['name']?></td>
                <td><?=$value['position']?></td>
                <td><?=word_limiter($value['comments'],5)?></td>
                <td class="text-center">
                  <a href="<?= base_url('admin/delete-client-review/').$value['id']?>" onClick="return confirm('Are You Sure??')" class="btn btn-danger btn-sm text-white">
                    <i class="fa fa-trash"></i>
                  </a>
                  <a href="#" id="edit_client_review" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-sm text-white" review-url="<?= base_url('admin/edit-client-review/').$value['id']?>">
                    <i class="fa fa-edit"></i>
                  </a>
                </td>
              </tr>
            <?php endforeach;?>
          </tbody>
          <tfoot>
            <tr>
              <th>Client Name</th>
              <th>Position</th>
              <th>Comment</th>
              <th class="text-center">Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Review</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" id="client_review_form" method="POST" enctype="multipart/form-data">
            <div class="form-group" id="property_type">

            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input class="form-control" id="" name="name" type="text" aria-describedby="emailHelp" placeholder="Enter Client Name" required="">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Position</label>
              <input class="form-control" id="property_landark" name="position" type="text" aria-describedby="emailHelp" placeholder="Enter Client Position" required="">
            </div>

            <div class="form-group">
              <label for="exampleTextarea">Comment</label>
              <textarea class="form-control" name="comments" id="exampleTextarea" rows="3" required=""></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Save changes</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

</main>

