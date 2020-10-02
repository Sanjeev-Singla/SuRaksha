<style type="text/css">
  .ftco-navbar-light{
    background: black!important;
    top: 0px;
  }
</style>

<main class="app-content" style="margin-top: 10%;">
  <div class="container">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-heart"></i> Favourite Properties</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Title</th>
                <th>Property Size</th>
                <th>Residence Type</th>
                <th>Sale/Rent</th>
                <th>Location</th>
                <th>Price</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php if(!empty($data['fav_properties']) ):?>
                <?php foreach ($data['fav_properties'] as $value): ?>
                  <tr>
                    <td><?=word_limiter($value['property_title'],5)?></td>
                    <td><?=$value['size']?></td>
                    <td><?=$value['residence_type']?></td>
                    <td><?=$value['sale_rent']?></td>
                    <td><?=$value['location']?></td>
                    <td>₹ <?=$value['price']?></td>
                    <td class="text-center">
                      <a href="<?= base_url('property/').$value['id']?>" target="_blank" class="btn btn-secondary btn-sm"><i class="fa fa-eye text-white"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else:?>
                <tr><td colspan="8" class="text-center">No Property Available...</td></tr>
              <?php endif?>
            </tbody>
            <tfoot>
              <tr>
                <th>Title</th>
                <th>Property Size</th>
                <th>Residence Type</th>
                <th>Sale/Rent</th>
                <th>Location</th>
                <th>Price</th>
                <th class="text-center">Action</th>
              </tr>
            </tfoot>
          </table>
          <div class="pull-right">
            <?=$data['links_pagination']?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>