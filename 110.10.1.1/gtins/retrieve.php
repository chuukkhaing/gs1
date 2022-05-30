<div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <?php
      include("../../../regs1/connection.php");
      $sql_admin = mysqli_query($con, "SELECT * FROM gtins")or die(mysqli_error($con));
      $sql_admin_num = mysqli_num_rows($sql_admin);
      ?>
      <tr>
        <th scope="col" class="border-0">
          GTINs <span class="text-danger">( Total - <?php echo $sql_admin_num; ?> )</span>
        </th>
      </tr>
      <tr class="text-center">
        <th>
          Name
        </th>
        <th>
          Quantity
        </th>
        <th>
          Yearly
        </th>
        <th>
          Price
        </th>
        <th>
          Member
        </th>
        <th>
          Status
        </th>
        <th>
          Delete
        </th>
      </tr>
    </thead>
    <tbody>
      <?php
      include("../../../regs1/connection.php");
      $sql_gtins = mysqli_query($con, "SELECT * FROM gtins ORDER BY id DESC")or die(mysqli_error($con));
      while($sql_gtins_get = mysqli_fetch_object($sql_gtins))
      {
        //gtins code
        $gtins_code = $sql_gtins_get->code;
        //admin code
        $admin_code = $sql_gtins_get->admin_code;
        $sql_admin = mysqli_query($con, "SELECT * FROM admin where code='$admin_code'")or die(mysqli_error($con));
        $sql_admin_get = mysqli_fetch_object($sql_admin);
        //person
        $username = $sql_admin_get->username;
        //quantity
        $quantity = $sql_gtins_get->quantity;
        //year
        $year = $sql_gtins_get->year;
        //price
        $price = $sql_gtins_get->price;
        //member
        $member = $sql_gtins_get->member;
        //status
        $status = $sql_gtins_get->status;
        ?>
        <tr class="text-center">
          <form id="person_edit_form">
            <td class="align-middle">
              <p class="p-2 m-0">
                <?php echo $username; ?>
              </p>
            </td>
            <td class="align-middle">
              <p class="p-2 m-0">
                <?php echo $quantity; ?>
              </p>
            </td>
            <td class="align-middle">
              <p class="p-2 m-0">
                <?php echo $year; ?>
              </p>
            </td>
            <td class="align-middle">
              <p class="p-2 m-0">
                <?php echo $price; ?>
              </p>
            </td>
            <td class="align-middle">
              <p class="p-2 m-0">
                <?php echo $member; ?>
              </p>
            </td>
            <td class="align-middle">
              <p class="p-2 m-0">
                <?php echo $status; ?>
              </p>
            </td>
            <td class="align-middle">
              <button type="button" name="gtins_remove_btn_<?php echo $gtins_code; ?>" id="gtins_remove_btn_<?php echo $gtins_code; ?>" class="btn btn-sm btn-outline-danger rounded-circle">
                <i class="fa-solid fa-trash"></i>
              </button>
            </td>
          </form>
          <script>
          $('#gtins_remove_btn_<?php echo $gtins_code; ?>').click(function(){
            var gtins_code = "<?php echo $gtins_code; ?>";
            if(gtins_code != ''){
              let text = "Are you sure you want to delete it?";
              if (confirm(text) == true){
                $.ajax({
                  type: 'POST',
                  url: '../../../regs1/110.10.1.1/gtins/delete.php',
                  data: {
                    'gtins_delete_btn': 1,
                    'gtins_code': gtins_code,
                  },
                  success: function(data){
                    if(data == "gtins deleted"){
                      $('#gtins_retrieve').load("../../../regs1/110.10.1.1/gtins/retrieve.php");
                    }
                  }
                });
              }
            }
          });
          </script>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>
<script type="text/javascript">
$(document).ready(function() {
  $('[data-bs-toggle=tooltip]').tooltip();
});
</script>
