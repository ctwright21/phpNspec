<h2><?= $title ?></h2>

<div class="row">
  <div class="col-md-12">
   <button class="btn btn-primary"><a href="<?php echo base_url(); ?>surveys/create" style="color: inherit; text-decoration: none">Create nSpec Section Survey</a></button>
  </div>
</div>

<div>
  <table id="property-table">
    <thead>
      <tr>
        <th>Completion Date</th>
        <th>Surveyor</th>
        <th>Property Id</th>
        <th>Section #</th>
        <th>Full Report</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($surveys as $survey) : ?>
      <tr>
        <td><?php echo $survey['survey_date']; ?></td>
        <td><?php echo $survey['completed_by']; ?></td>
        <td><?php echo $survey['property_id']; ?></td>
        <td><?php echo $survey['section_num']; ?></td>
        <td>
          <button class="btn btn-info"><a style="color: inherit; text-decoration: none" href="<?php echo site_url('/surveys/'.$survey['slug']); ?>">View</a></button>
        </td>
        <?php endforeach; ?>
      </tr>
    </tbody>
  </table>
</div>



