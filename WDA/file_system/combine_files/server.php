
<?php




if(isset($_POST['calc_btn'])):


  $width = $_POST["width"];
  $breadth = $_POST["breadth"];
  $area = area($width, $breadth);

?>

<table class=" table table-bordered">
<thead>
    <tr>
        <th>Width</th>
        <th>Breadth</th>
        <th>Area</th>

    </tr>
</thead>
<tbody>
    <tr>
        <td><?= $width ?> ft</td>
        <td><?= $breadth ?> ft</td>
        <td><?= $area ?> sqft</td>

    </tr>
</tbody>
</table>

<?php

endif;

?>

