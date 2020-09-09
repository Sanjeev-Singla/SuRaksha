
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
        <h3 class="tile-title">Table Hover</h3>
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
            <?php foreach ($data as $value): ?>
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
      <div class="modal-body" id="contact_us_message"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>