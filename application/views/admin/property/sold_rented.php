<style type="text/css">
  .select2-container{
    width: 100% !important;
  }
</style>
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-user"></i>Properties</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active"><a href="#">Residence</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
       <input type="text" class="searchBox" id="searchBox"> </input>
        <input type="submit" value="Search" class="btnInput" id="btnInput"> </input>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Property Type</th>
              <th>Residence Type</th>
              <th>Sale/Rent</th>
              <th>Location</th>
              <th>Price</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php if(!empty($data['properties'])):?>
              <?php foreach ($data['properties'] as $value): ?>
                <tr>
                  <td><?=$value['id']?></td>
                  <td><?=word_limiter($value['property_title'],5)?></td>
                  <td><?=$value['property_type']?></td>
                  <td><?=$value['residence_type']?></td>
                  <td><?=$value['sale_rent']?></td>
                  <td><?=$value['location']?></td>
                  <td><?=$value['price']?></td>
                  <td class="text-center">
                    <a href="<?= base_url("admin/unblock-property/").$value['id']; ?>" class="btn btn-success btn-sm">
                      <i class="fa fa-check-circle text-white"></i>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else:?>
              <tr><td colspan="8" class="text-center">No Property Available...</td></tr>
            <?php endif?>
          </tbody>
          <tfoot>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Property Type</th>
              <th>Residence Type</th>
              <th>Sale/Rent</th>
              <th>Location</th>
              <th>Price</th>
              <th class="text-center">Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
      <?= ($data['links_pagination']); ?>
    </div>
  </div>

</main>