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
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="tile">

        <form action="" id="admin_address_form" method="POST">
          <div class="form-group" id="property_type">

            <div class="form-group">
              <label for="exampleInputEmail1">Facebook</label>
              <input class="form-control" name="facebook" type="url" value="<?= isset($data['facebook']) ?$data['facebook']:'' ?>" aria-describedby="emailHelp" placeholder="Enter Facebook Link" required="">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Instagram</label>
              <input class="form-control" name="instagram" type="url" aria-describedby="emailHelp"  value="<?= isset($data['instagram']) ?$data['instagram']:'' ?>" placeholder="Enter Instagram Link" required="">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Twitter</label>
              <input class="form-control" name="twitter" type="url" aria-describedby="emailHelp"  value="<?= isset($data['twitter']) ?$data['twitter']:'' ?>" placeholder="Enter Twitter Link" required="">
            </div>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </form>


        </div>
      </div>

    </div>
  </main>

