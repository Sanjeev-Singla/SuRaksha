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
        <button type="button" class="btn btn-primary pull-right mb-4" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-plus-circle"></i> Add Property
        </button>

        <table class="table table-hover">
          <thead>
            <tr>
              <th>Name</th>
              <th>E-Mail</th>
              <th>Subject</th>
              <th>Message</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php if(!empty($data['properties'])):?>
              <?php foreach ($data['properties'] as $value): ?>
                <tr>
                  <td><?=$value['name']?></td>
                  <td><?=$value['email']?></td>
                  <td><?= word_limiter($value['subject'],5); ?></td>
                  <td><?= word_limiter($value['message'],10); ?></td>
                  <td>
                    <a href="#" id="view_contact_us_details" data-toggle="modal" data-target="#exampleModal" contact-us-id="<?=$value['id']?>" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Details">
                      <i class="fa fa-eye text-white"></i>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else:?>
              <tr><td colspan="5" class="text-center">No Property Available...</td></tr>
            <?php endif?>
          </tbody>
          <tfoot>
            <tr>
              <th>Name</th>
              <th>E-Mail</th>
              <th>Subject</th>
              <th>Message</th>
              <th>Action</th>
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
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group" id="property_type">
              <label for="exampleSelect1">Property For</label>
              <select class="form-control" name="property_type" id="exampleSelect1">
                <option value="">Please Select Your Property Type</option>
                <option value="Residencial">Residencial</option>
                <option value="Official">Official</option>
                <option value="Commercial">Commercial</option>
              </select>
            </div>

            <div class="row">
              <div class="col-md-2">
                <div class="animated-radio-button">
                  <label>
                    <input type="radio" value="Sale" name="sale_rent"><span class="label-text">Sale</span>
                  </label>
                </div>
              </div>
              <div class="col-md-10">
                <div class="animated-radio-button">
                  <label>
                    <input type="radio" value="Rent" name="sale_rent"><span class="label-text">Rent</span>
                  </label>
                </div>
              </div>
            </div>

            <div class="form-group" id="residential_type">
              <label for="exampleSelect1">Residential Type</label>
              <select class="form-control" name="residential_type" id="exampleSelect1">
                <option value="">Please Select Your Residential Type</option>
                <option value="Plot">Plot</option>
                <option value="Flat">Flat</option>
                <option value="House">House</option>
              </select>
            </div>

            <div class="form-group" id="flat_type">
              <label for="exampleSelect1">Flat Type</label>
              <select class="form-control" name="flat_type" id="exampleSelect1">
                <option value="">Please Select Your Flat Type</option>
                <option value="Fully Furnished">Fully Furnished</option>
                <option value="Semi Furnished">Semi Furnished</option>
                <option value="Raw">Raw</option>
              </select>
            </div>

            <div class="form-group" id="flat_bhks">
              <label for="exampleInputEmail1">BHK</label>
              <input class="form-control" name="flat_bhks" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter BHKs">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Property Size</label>
              <input class="form-control" id="property_size" name="property_size" type="text" aria-describedby="emailHelp" placeholder="Property Size">
            </div>

            <div class="form-group">
              <div id="flat_aminities">
                <label for="exampleInputEmail1">Select Aminities</label>
                <select class="form-control" name="aminites[]" id="demoSelect" multiple="">
                  <optgroup label="Select Aminities">
                    <?php foreach($data['aminities'] as $aminity): ?>
                      <option class="<?= $aminity['id']?>"><?= $aminity['aminities'] ?></option>
                    <?php endforeach; ?>
                  </optgroup>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Location</label>
              <input class="form-control" id="property_location" name="location" type="text" aria-describedby="emailHelp" placeholder="Property Location">
            </div>

            <div class="form-group">
              <label for="exampleInputFile">Upload Image</label>
              <input class="form-control-file" id="exampleInputFile" type="file" name="images[]" aria-describedby="fileHelp" multiple="">
              <small class="form-text text-muted" id="fileHelp">Please Upload Only jpg,jpeg,png Extensions</small>
            </div>

            <div class="form-group">
              <label for="exampleTextarea">Description</label>
              <textarea class="form-control" name="description" id="exampleTextarea" rows="3"></textarea>
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

