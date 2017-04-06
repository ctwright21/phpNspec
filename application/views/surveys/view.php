<div>
  <h2 class="page-header">Property #: <?php echo $survey['property_id']; ?> <small> Section <?php echo $survey['section_num']; ?></small></h2>

  <h4>Property Surveyed by <?php echo $survey['completed_by']; ?> on <?php echo $survey['survey_date']; ?></h4>


  <h3>Pavement Maintenance Defects</h3>
  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
      <h4>Pavement Sealer Wear<br /><br /> <small> Severity Score: <?php echo $survey['pave_seal_wear_s']; ?></small></h4>
      <p>Notes: <?php echo $survey['pave_seal_wear_n']; ?></p>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-4">
      <img style="width: 60%" class="thumbnail">
    </div>
  </div>
  <hr>

  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
      <h4>Pavement Sealer Delamination<br /><br /> <small> Severity Score: <?php echo $survey['pave_seal_delam_s']; ?></small></h4>
      <p>Notes: <?php echo $survey['pave_seal_delam_n']; ?></p>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-4">
      <img style="width: 60%" class="thumbnail">
    </div>
  </div>
  <hr>

  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
      <h4>Oil Spots<br /><br /> <small> Severity Score: <?php echo $survey['oil_spots_s']; ?></small></h4>
      <p>Notes: <?php echo $survey['oil_spots_n']; ?></p>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-4">
      <img style="width: 60%" class="thumbnail">
    </div>
  </div>
  <hr>

  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
      <h4>Linear Cracks<br /><br /> <small> Severity Score: <?php echo $survey['linear_cracks_s']; ?></small></h4>
      <p>Notes: <?php echo $survey['linear_cracks_n']; ?></p>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-4">
      <img style="width: 60%" class="thumbnail">
    </div>
  </div>
  <hr>

  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
      <h4>Gator Cracks<br /><br /> <small> Severity Score: <?php echo $survey['gator_cracks_s']; ?></small></h4>
      <p>Notes: <?php echo $survey['gator_cracks_n']; ?></p>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-4">
      <img style="width: 60%" class="thumbnail">
    </div>
  </div>
  <hr>

  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
      <h4>Pot Holes<br /><br /> <small> Severity Score: <?php echo $survey['pot_holes_s']; ?></small></h4>
      <p>Notes: <?php echo $survey['pot_holes_n']; ?></p>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-4">
      <img style="width: 60%" class="thumbnail">
    </div>
  </div>
  <hr>

  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
      <h4>Raveling<br /><br /> <small> Severity Score: <?php echo $survey['raveling_s']; ?></small></h4>
      <p>Notes: <?php echo $survey['raveling_n']; ?></p>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-4">
      <img style="width: 60%" class="thumbnail">
    </div>
  </div>
  <hr>

  <div class="row">
    <div class="col-xs-6 col-sm-6 col-md-6">
      <h4>Rutting<br /><br /> <small> Severity Score: <?php echo $survey['rutting_s']; ?></small></h4>
      <p>Notes: <?php echo $survey['rutting_n']; ?></p>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-4">
      <img style="width: 60%" class="thumbnail">
    </div>
  </div>
  <hr>

</div>
