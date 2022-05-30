<div class="table-responsive">
  <table class="table">
    <thead>
      <?php
      include("../../../regs1/connection.php");
      $sql_admin = mysqli_query($con, "SELECT * FROM admin")or die(mysqli_error($con));
      $sql_admin_num = mysqli_num_rows($sql_admin);
      ?>
      <tr>
        <th scope="col">
          Admins & Viewers <span class="text-danger">( Total - <?php echo $sql_admin_num; ?> )</span>
        </th>
      </tr>
    </thead>
    <tbody>

      <?php
      include("../../../regs1/connection.php");
      $sql_admin = mysqli_query($con, "SELECT * FROM admin ORDER BY id DESC")or die(mysqli_error($con));
      while($sql_admin_get = mysqli_fetch_object($sql_admin))
      {
        //id
        $id = $sql_admin_get->id;
        //code
        $admin_code = $sql_admin_get->code;
        //username
        $username = $sql_admin_get->username;
        //permission
        $permission = $sql_admin_get->permission;
        //date and time
        $date_time = $sql_admin_get->created_at;
        ?>
        <tr>
          <form id="person_edit_form">
            <td>
              <p class="p-2 m-0">
                <?php echo $username; ?> | <span class="text-primary"><?php echo $permission; ?>
                <button type="submit" name="person_delete_btn_<?php echo $username; ?>" id="person_remove_btn_<?php echo $username; ?>" class="btn btn-sm btn-outline-danger rounded-circle float-end">
                  <i class="fa-solid fa-trash"></i>
                </button>
                </p>
              </td>
            </form>
            <script>
            $('#person_remove_btn_<?php echo $username; ?>').click(function(){
              var admin_code = "<?php echo $admin_code; ?>";
              if(admin_code != ''){
                let text = "Are you sure you want to delete it?";
                if (confirm(text) == true) {
                  $.ajax({
                    type: 'POST',
                    url: '../../../regs1/110.10.1.1/users/delete.php',
                    data: {
                      'admin_delete_btn': 1,
                      'admin_code': admin_code,
                    },
                    success:function(data){
                      if(data == "deleted")
                      {
                        $('#users_retrieve').load('../../../regs1/110.10.1.1/users/retrieve.php');
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
