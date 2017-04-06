<h2><?= $title ?></h2>

<div class="row">
  <div class="col-md-12">
   <button class="btn btn-primary"><a href="<?php echo base_url(); ?>properties/create" style="color: inherit; text-decoration: none">Add Property</a></button>
   <button class="btn btn-primary"><a href="<?php echo base_url(); ?>surveys/create" style="color: inherit; text-decoration: none">Create nSpec Section Survey</a></button>
  </div>
</div>

<div>
  <table id="property-table">
    <thead>
      <tr>
        <th>Property</th>
        <th>Contact Name</th>
        <th>City</th>
        <th>State</th>
        <th>Manage Properties</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach($properties as $property) : ?>
      <tr>
        <td><?php echo $property['property_name']; ?></td>
        <td><?php echo $property['cont_name']; ?></td>
        <td><?php echo $property['city']; ?></td>
        <td><?php echo $property['state']; ?></td>
        <td>
          <button class="btn btn-info"><a style="color: inherit; text-decoration: none" href="<?php echo site_url('/properties/'.$property['slug']); ?>">Manage</a></button>
        </td>
        <?php endforeach; ?>
      </tr>
    </tbody>
  </table>
</div>




