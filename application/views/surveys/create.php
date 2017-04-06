
<div class="container">
<h2 id="create_section"><?= $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('surveys/create'); ?>

	<div class="col-md-12">
	  <form>
	    <div class="row">
	      <div class="form-group col-sm-6 col-md-6">
	        <label class="col-form-label">Surveyor Name: </label>
	            <input class="form-control" type="text" name="completed_by">
	      </div>

	      <div class="form-group col-xs-6 col-sm-4 col-md-3">
	        <label for="sectionnum-input" class="col-form-label">Date Completed</label>
	        <div>
	          <input class="form-control" type="date" name="survey_date" required>
	        </div>
	      </div>
	    </div>

	    <div class="row">
	      <div class="form-group col-sm-6 col-md-6">
	        <label class="col-form-label">Property Name:</label>
	            <input class="form-control" type="number" name="property_id">
	      </div>

	      <div class="form-group col-xs-6 col-sm-4 col-md-3">
	        <label for="sectionnum-input" class="col-form-label">Property Section #</label>
	        <div>
	          <input class="form-control" type="number" placeholder="Section #" name="section_num" required>
	        </div>
	      </div>
	    </div>
	    <hr>

	    <h3>Pavement Maintenance Defects</h3>
	    <p class="instructions"><i>Enter a severity score (0-3) for each defect below. 0 if the defect is absent and 1-3 depending on the severity, 3 being <b>most</b> severe.</i></p>
	    <div class="row">
	      <div class="form-group">
	        <label for="pavesealwear-input" class="col-xs-12 col-sm-12 col-md-12 col-form-label">Pavement Sealer Wear</label>
	        <div class="col-xs-6 col-sm-6 col-md-2 marg-bot">
	          <select class="form-control" id="psw_sev" onchange="extendPSW()" name="pave_seal_wear_s" required>
	          	<option value="0">0</option>
	          	<option value="1">1</option>
	          	<option value="2">2</option>
	          	<option value="3">3</option>
	          </select>
	        </div>

	        <div id="psw_ext" style="display: none">
		        <div class="col-xs-2 col-sm-2 col-md-4">
		          <input id="image" name="image" type="file">
		        </div>
		        <div class="col-xs-12 col-sm-12 col-md-6 marg-bot">
		          <textarea class="form-control" cols="40" rows="2" type="text" placeholder="Notes" name="pave_seal_wear_n"></textarea>
		        </div>
		      </div>
	        </div>
	    </div>


	    <div class="row">
	      <div class="form-group">
	        <label for="pavesealdelam-input" class="col-xs-12 col-sm-12 col-md-12 col-form-label">Pavement Sealer Delamination</label>
	        <div class="col-xs-6 col-sm-6 col-md-2 marg-bot">
	          <select class="form-control" id="psd_sev" onchange="extendPSD()" name="pave_seal_delam_s" required>
	          	<option value="0">0</option>
	          	<option value="1">1</option>
	          	<option value="2">2</option>
	          	<option value="3">3</option>
	          </select>
	        </div>
		    <div id="psd_ext" style="display: none">
		        <div class="col-xs-2 col-sm-2 col-md-4">
		          <input id="image" name="image" type="file">
		        </div>
		        <div class="col-xs-12 col-sm-12 col-md-6 marg-bot">
		          <textarea class="form-control" cols="40" rows="2" type="text" placeholder="Notes" name="pave_seal_delam_n"></textarea>
		        </div>
		    </div>
	      </div>
	    </div>

	    <div class="row">
	      <div class="form-group">
	        <label for="oilspot-input" class="col-xs-12 col-sm-12 col-md-12 col-form-label">Oil Spots</label>
	        <div class="col-xs-6 col-sm-6 col-md-2 marg-bot">
	          <select class="form-control" id="os_sev" onchange="extendOS()" name="oil_spots_s" required>
	          	<option value="0">0</option>
	          	<option value="1">1</option>
	          	<option value="2">2</option>
	          	<option value="3">3</option>
	          </select>
	        </div>

	        <div id="os_ext" style="display: none">
		        <div class="col-xs-2 col-sm-2 col-md-4">
		          <input id="image" name="image" type="file">
		        </div>
		        <div class="col-xs-12 col-sm-12 col-md-6 marg-bot">
		          <textarea class="form-control" cols="40" rows="2" type="text" placeholder="Notes" name="oil_spots_n"></textarea>
		        </div>
	        </div>
	      </div>
	    </div>

	    <div class="row">
	      <div class="form-group">
	        <label for="linearcracks-input" class="col-xs-12 col-sm-12 col-md-12 col-form-label">Linear Cracks</label>
	        <div class="col-xs-6 col-sm-6 col-md-2 marg-bot">
	          <select class="form-control" id="lc_sev" onchange="extendLC()" name="linear_cracks_s" required>
	          	<option value="0">0</option>
	          	<option value="1">1</option>
	          	<option value="2">2</option>
	          	<option value="3">3</option>
	          </select>
	        </div>
	        <div id="lc_ext" style="display: none">
		        <div class="col-xs-2 col-sm-2 col-md-4">
		          <input id="image" name="image" type="file">
		        </div>
		        <div class="col-xs-12 col-sm-12 col-md-6 marg-bot">
		          <textarea class="form-control" cols="40" rows="2" type="text" placeholder="Notes" name="linear_cracks_n"></textarea>
		        </div>
	        </div>
	      </div>
	    </div>

	    <div class="row">
	      <div class="form-group">
	        <label for="gatorcracks-input" class="col-xs-12 col-sm-12 col-md-12 col-form-label">Alligator Cracks</label>
	        <div class="col-xs-6 col-sm-6 col-md-2 marg-bot">
	          <select class="form-control" id="gc_sev" onchange="extendGC()" name="gator_cracks_s" required>
	          	<option value="0">0</option>
	          	<option value="1">1</option>
	          	<option value="2">2</option>
	          	<option value="3">3</option>
	          </select>
	        </div>
	        <div id="gc_ext" style="display: none">
		        <div class="col-xs-2 col-sm-2 col-md-4">
		          <input id="image" name="image" type="file">
		        </div>
		        <div class="col-xs-12 col-sm-12 col-md-6 marg-bot">
		          <textarea class="form-control" cols="40" rows="2" type="text" placeholder="Notes" name="gator_cracks_n"></textarea>
		        </div>
	        </div>
	      </div>
	    </div>

	    <div class="row">
	      <div class="form-group">
	        <label for="pothole-input" class="col-xs-12 col-sm-12 col-md-12 col-form-label">Pot Holes</label>
	        <div class="col-xs-6 col-sm-6 col-md-2 marg-bot">
	          <select class="form-control" id="ph_sev" onchange="extendPH()" name="pot_holes_s" required>
	          	<option value="0">0</option>
	          	<option value="1">1</option>
	          	<option value="2">2</option>
	          	<option value="3">3</option>
	          </select>
	        </div>
	        <div id="ph_ext" style="display: none">
		        <div class="col-xs-2 col-sm-2 col-md-4">
		          <input id="image" name="image" type="file">
		        </div>
		        <div class="col-xs-12 col-sm-12 col-md-6 marg-bot">
		          <textarea class="form-control" cols="40" rows="2" type="text" placeholder="Notes" name="pot_holes_n"></textarea>
		        </div>
		      </div>
	      </div>
	    </div>

	    <div class="row">
	      <div class="form-group">
	        <label for="raveling-input" class="col-xs-12 col-sm-12 col-md-12 col-form-label">Raveling</label>
	        <div class="col-xs-6 col-sm-6 col-md-2 marg-bot">
	          <select class="form-control" id="ra_sev" onchange="extendRA()" name="raveling_s" required>
	          	<option value="0">0</option>
	          	<option value="1">1</option>
	          	<option value="2">2</option>
	          	<option value="3">3</option>
	          </select>
	        </div>
	        <div id="ra_ext" style="display: none">
		        <div class="col-xs-2 col-sm-2 col-md-4">
		          <input id="image" name="image" type="file">
		        </div>
		        <div class="col-xs-12 col-sm-12 col-md-6 marg-bot">
		          <textarea class="form-control" cols="40" rows="2" type="text" placeholder="Notes" name="raveling_n"></textarea>
		        </div>
		      </div>
	      </div>
	    </div>

	    <div class="row">
	      <div class="form-group">
	        <label for="rutting-input" class="col-xs-12 col-sm-12 col-md-12 col-form-label">Rutting</label>
	        <div class="col-xs-6 col-sm-6 col-md-2 marg-bot">
	          <select class="form-control" id="ru_sev" onchange="extendRU()" name="rutting_s" required>
	          	<option value="0">0</option>
	          	<option value="1">1</option>
	          	<option value="2">2</option>
	          	<option value="3">3</option>
	          </select>
	        </div>
	        <div id="ru_ext" style="display: none">
		        <div class="col-xs-2 col-sm-2 col-md-4">
		          <input id="image" name="image" type="file">
		        </div>
		        <div class="col-xs-12 col-sm-12 col-md-6 marg-bot">
		          <textarea class="form-control" cols="40" rows="2" type="text" placeholder="Notes" name="rutting_n"></textarea>
		        </div>
		      </div>
	      </div>
	    </div>

	    <div class="form-group col-md-12">
	      <input type="submit" class="btn btn-primary pull-right" value="Submit">
	    </div>
	  </form>
	</div>
</div>
