<table>
    <thead>
      <th>Width</th>
      <th>Breadth</th>
      <th>Area</th>
    </thead>
    <tbody>
      <?php 
      foreach ($record as $item) {
        echo "<tr>
                <td>$item[width]</td>
                <td>$item[breadth]</td>
                <td>$item[area]</td>
              </tr>";
      }
      ?>
    </tbody>
  </table>