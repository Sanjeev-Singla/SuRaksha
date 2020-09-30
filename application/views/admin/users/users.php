
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-user"></i>Contacts</h1>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active"><a href="#">Contacts</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <h3 class="tile-title">Table Hover</h3>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>UserID</th>
              <th>Name</th>
              <th>E-Mail</th>
              <th>Phone</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $value): ?>
              <tr>
                <td><?=$value['id']?></td>
                <td><?=$value['first_name'].$value['last_name']?></td>
                <td><?=$value['email']?></td>
                <td><?=$value['phone']?></td>
                <td>
                  <a href="<?= base_url('admin/user/').$value['id']?>" id="view_contact_us_details" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="" data-original-title="View Details">
                    <i class="fa fa-eye text-white"></i>
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
          <tfoot>
            <tr>
               <th>UserID</th>
              <th>Name</th>
              <th>E-Mail</th>
              <th>Phone</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</main>

