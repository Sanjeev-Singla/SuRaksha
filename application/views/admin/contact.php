<style>
  .widget-small.primary.coloured-icon .icon {
    background-color: #2e5c97!important;
  }
  .info a{
    color:#2e5c97!important;
  }
</style>
<div class="app-title">
  <div>
    <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
    <!--<p>A free and open source Bootstrap 4 admin template</p>-->
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
  </ul>
</div>
<div class="container">
  
  <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th>Name</th>
        <th>E-Mail</th>
        <th>Subject</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
     <?php foreach ($data as $value): ?>
       <tr>
        <td><?=$value['name']?></td>
        <td><?=$value['email']?></td>
        <td><?=$value['subject']?></td>
        <td><?=$value['message']?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
  <tfoot>
    <tr>
      <th>Name</th>
      <th>E-Mail</th>
      <th>Subject</th>
      <th>Message</th>
    </tr>
  </tfoot>
</table>
</div>   
<script type="text/javascript"> 
  function deleteConfirm(url)
  {
    if(confirm('Do you want to Delete this record ?'))
    {
      window.location.href=url;
    }
  }
</script>
