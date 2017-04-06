<div>
  <a href="<?php echo base_url(); ?>">Go Back</a>
  <h2 class="page-header" ><?php echo $property['property_name']; ?> <small><?php echo $property['city']; ?>, <?php echo $property['state']; ?></small>
  </h2>
  <div class="row">
    <div class="col-sm-4 col-md-4">
      <img class="thumbnail" id="propimage" src="<?php echo site_url(); ?>assets/images/properties/<?php echo $property['property_image']; ?>">
    </div>
    <div class="col-sm-8 col-md-8">
      <h4> Property Information</h4>
      <ul class="list-group">
        <li class="list-group-item"> Address: <?php echo $property['street_address']; ?></li>
        <li class="list-group-item"> City: <?php echo $property['city']; ?></li>
        <li class="list-group-item"> State: <?php echo $property['state']; ?></li>
        <li class="list-group-item"> Zip: <?php echo $property['zipcode']; ?></li>
      </ul>
    </div>
  </div>

    <div class="row">
      <div class="col-sm-8 col-md-8">
        <h4> Contact Information</h4>
        <ul class="list-group">
          <li class="list-group-item"> Management Company: <?php echo $property['mgmt_company']; ?></li>
          <li class="list-group-item"> Contact Name: <?php echo $property['cont_name']; ?></li>
          <li class="list-group-item"> Job Title: <?php echo $property['job_title']; ?></li>
          <li class="list-group-item"> Email: <?php echo $property['email']; ?></li>
          <li class="list-group-item"> Phone: <?php echo $property['phone']; ?></li>
        </ul>
      </div>
    </div>


      <a class="btn btn-default pull-left" href="edit/<?php echo $property['slug']; ?>">Edit</a>

      <?php echo form_open('/properties/delete/' .$property['id']); ?>
      <input type="submit" value="delete" class="btn btn-danger">
      </form>
</div>