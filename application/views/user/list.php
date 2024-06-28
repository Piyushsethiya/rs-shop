<?php
// echo"<pre>";print_r($list);die();
?>
<div class="container mt-5">
<?php if (!empty($this->session->flashdata('add'))) { ?>
    <h4 class="alert alert-success" style="text-align: center">
      <b><?php print_r($this->session->flashdata('add')); ?></b>
    </h4>
  <?php } else { ?>
    <h4">
      <b><?php print_r($this->session->flashdata('error')); ?></b>
    </h4>
  <?php } ?>
<?php if (!empty($this->session->flashdata('edit'))) { ?>
    <h4 class="alert alert-success" style="text-align: center">
      <b><?php print_r($this->session->flashdata('edit')); ?></b>
    </h4>
  <?php } else { ?>
    <h4">
      <b><?php print_r($this->session->flashdata('error')); ?></b>
    </h4>
  <?php } ?>
  <?php
  if (!empty($this->session->flashdata('success'))) { ?>
    <h4 class="alert alert-success" style="text-align: center">
      <b><?php print_r($this->session->flashdata('success')); ?></b>
    </h4>

  <?php } else { ?>
    <h4 >
      <b><?php print_r($this->session->flashdata('delete')); ?></b>
    </h4>
  <?php } ?>
  <div>
    <label><b>Search here</b></label>
    <br>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search here..">
    <br>
  </div>
  <div class="add-btn btn btn-primary mb-3" style="float: right;">
    <a style="color: white;" href="<?php echo base_url('userc/form') ?>">Add User</a>
  </div>
  <table id="datatable" class="table table-striped table-bordered table-hover" style="width:100%">
    <thead>
      <tr>
        <th style="text-align: center;">S.no.</th>
        <th style="text-align: center;">Name</th>
        <th style="text-align: center;">Email</th>
        <th style="text-align: center;">Phone Number</th>
        <th style="text-align: center;">Address</th>
        <th style="text-align: center;">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($list as $data) { ?>
        <tr>
          <td style="text-align: center;"><?php echo $i ?></td>
          <td style="text-align: center;"><?php echo $data['name'] ?></td>
          <td style="text-align: center;"><?php echo $data['email'] ?></td>
          <td style="text-align: center;"><?php echo $data['mobile_no'] ?></td>
          <td style="text-align: center;"><?php echo $data['address'] ?></td>
          <td style="text-align: center;"><a href="<?php echo base_url('userc/update_form/').$data['id']; ?>" class="btn btn-success">Update</a><a
              href="<?php echo base_url('userc/delete/') . $data['id'] ?>" class="btn btn-danger">Delete</a></td>
        </tr>
        <?php $i++;
      } ?>
    </tbody>
  </table>
</div>

<script>
  $(document).ready(function () {
    $('#datatable').DataTable();
  });
</script>
<script>
  function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("datatable");
    tr = table.getElementsByTagName("tr");
    console.log(tr);
    for (i = 0; i < tr.length; i++) {
      td1 = tr[i].getElementsByTagName("td")[1];
      td2 = tr[i].getElementsByTagName("td")[2];
      td3 = tr[i].getElementsByTagName("td")[3];
      td4 = tr[i].getElementsByTagName("td")[4];

      if (td1 || td2 || td3 || td4) {

        txtValue1 = td1.textContent || td1.innerText;
        txtValue2 = td2.textContent || td2.innerText;
        txtValue3 = td3.textContent || td3.innerText;
        txtValue4 = td4.textContent || td4.innerText;
        if (txtValue1.toUpperCase().indexOf(filter) > -1 || txtValue2.toUpperCase().indexOf(filter) > -1 || txtValue3.toUpperCase().indexOf(filter) > -1 || txtValue4.toUpperCase().indexOf(filter) > -1) {

          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }

  }
</script>