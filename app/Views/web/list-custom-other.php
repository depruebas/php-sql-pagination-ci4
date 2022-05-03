<!-- Page content-->
<div class="container" style="padding-top:50px;">
  <h2>Paginación de resgitros</h2>
  <p>de x en x paginados desde la base de datos:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <?php

          foreach( $rows['fieldsNames'] as $row)
          {
            echo "<th class='text-center'>" . $row . "</th>";
          }

        ?>
      </tr>
    </thead>
    <tbody>
          <?php

            foreach( $rows['values'] as $value)
            {
              echo "<tr>";
              echo "<td>" . $value->customer_id . "</td>";
              echo "<td>" . $value->first_name . "</td>";
              echo "<td>" . $value->last_name . "</td>";
              echo "<td>" . $value->email . "</td>";
              echo "<td class='text-center'>" . $value->active . "</td>";
              echo "<td class='text-center'>" . date("d/m/Y H:s:i", strtotime( $value->create_date)) . "</td>";
              echo "</tr>";

            }

          ?>

    </tbody>
  </table>

  <nav aria-label="Page navigation example" style="padding-top:20px; padding-bottom:100px; display:flex; justify-content: center;">
    <ul class="pagination">

      <?php

          use \App\Libraries\CustomPaging;
          $pp = new CustomPaging(); 
          $html = $pp->GetPagination( $paging);

          echo $html;

      ?>
      
    </ul>
  </nav>

</div>
