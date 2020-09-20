<style type="text/css">
  .select2-container{
    width: 100% !important;
  }
</style>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-address-book"></i> Address</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item active"><a href="#">Address</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="tile">
        <form action="" id="admin_address_form" method="POST">
          <div class="form-group" id="property_type">

          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input class="form-control" value="<?= $data['email']?>" name="email" type="text" aria-describedby="emailHelp" placeholder="Enter Email" required="">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Mobile</label>
            <input class="form-control" value="<?= $data['mobile']?>" name="mobile" type="text" aria-describedby="emailHelp" placeholder="Enter Mobile" required="">
          </div>

          <div class="form-group">
            <label for="exampleTextarea">Address</label>
            <textarea class="form-control" name="address" id="exampleTextarea" rows="3" required=""><?= $data['address']?></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>

</main>

