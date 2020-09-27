<main class="app-content">

<!-- For Rent -->
  <div class="row">
    <div class="col-md-4">
      <div class="widget-small primary"><i class="icon fa fa-calculator fa-3x"></i>
        <div class="info">
          <h4>For Rent</h4>
          <p><b><?=$data['total_for_rent']?></b></p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="widget-small info"><i class="icon fa fa-check fa-3x"></i>
        <div class="info">
          <h4>Available </h4>
          <p><b><?=$data['available_for_rent']?></b></p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="widget-small danger"><i class="icon fa fa-ban fa-3x"></i>
        <div class="info">
          <h4>Rented</h4>
          <p><b><?=$data['rented']?></b></p>
        </div>
      </div>
    </div>
  </div>

<!-- For Sale -->
  <div class="row">
    <div class="col-md-4">
      <div class="widget-small primary"><i class="icon fa fa-calculator fa-3x"></i>
        <div class="info">
          <h4>For Sale</h4>
          <p><b><?=$data['total_for_sale']?></b></p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="widget-small info"><i class="icon fa fa-check fa-3x"></i>
        <div class="info">
          <h4>Available</h4>
          <p><b><?=$data['available_for_sale']?></b></p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="widget-small danger"><i class="icon fa fa-ban fa-3x"></i>
        <div class="info">
          <h4>Sold</h4>
          <p><b><?=$data['sold']?></b></p>
        </div>
      </div>
    </div>
  </div>
  
</main>