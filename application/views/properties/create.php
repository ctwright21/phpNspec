<h2><?= $title ?></h2>

<?php echo validation_errors(); ?>

<div class="row">
  <div class="col-md-12">
   <a href="<?php echo base_url(); ?>">Back</a>
  </div>
</div>

<div id="propForm">
  <h4><i>Property Info</i></h4>
  <?php echo form_open_multipart('properties/create'); ?>
      <div class="form-group row">
        <label for="company-input" class="col-md-12 col-form-label">Property Name</label>
        <div class="col-md-12">
          <input class="form-control" type="text" placeholder="Property" name="property_id" required>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-md-12">
        <label>Upload Image</label>
          <input name="userfile" type="file" size="20">
        </div>
      </div>

      <div class="form-group row">
        <label for="adress-input" class="col-md-12 col-form-label">Address</label>
        <div class="col-md-12">
          <input class="form-control" type="text" placeholder="Address" name="street_address" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="city-input" class="col-md-12 col-form-label">City/ Town</label>
        <div class="col-md-12">
          <input class="form-control" type="text" placeholder="City" name="city" required>
        </div>
      </div>

      <div class="row">
        <div class="form-group col-xs-6 col-sm-6 col-md-6">
          <label for="state-input" class="col-form-label">State/ Province</label>   
            <input class="form-control" type="text" placeholder="State" name="state" required>
        </div>

        <div class="form-group col-xs-6 col-sm-6 col-md-6">
          <label for="zip-input" class="col-form-label">Zip/ Postal Code</label>
            <input class="form-control" type="number" placeholder="Zip" name="zipcode" required>
        </div>
      </div>
      <br>

      <h4><i>Contact Info</i></h4>
      <div class="form-group row">
        <label for="company-input" class="col-md-12 col-form-label">Management Company</label>
        <div class="col-md-12">
          <input class="form-control" type="text" placeholder="Company" name="mgmt_company" required>
        </div>
      </div>  

    <div class="row">
      <div class="form-group col-xs-6 col-sm-6 col-md-6">
        <label for="cont_name-input" class="col-form-label">Contact Name</label>
          <input class="form-control" type="text" placeholder="Name" name="cont_name" required>
      </div>
      <div class="form-group col-xs-6 col-sm-6 col-md-6">
        <label for="job_title-input" class="col-form-label">Job Title</label>
          <input class="form-control" placeholder="Title" name="job_title" required>
      </div>
    </div>
  
    <div class="row">
      <div class="form-group col-xs-6 col-sm-6 col-md-6">
        <label for="email-input" class="col-form-label">Contact Email</label>
          <input class="form-control" type="text" placeholder="Email" name="email" required>
      </div>
      <div class="form-group col-xs-6 col-sm-6 col-md-6">
        <label for="phone-input" class="col-form-label">Phone</label>
          <input class="form-control" placeholder="Phone" name="phone" required>
      </div>
    </div>

        <div class="form-group col-md-12">
          <input type="submit" class="btn btn-primary pull-right">
        </div> 
  </form>
</div>