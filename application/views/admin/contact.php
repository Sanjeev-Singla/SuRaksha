<style type="text/css">
  th,td{
    text-align: center;
  }
</style>
  <?php 

  ?>
  <div class="container">
    <table id="example" class="display nowrap" style="width:100%">
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