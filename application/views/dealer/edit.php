<?php 
// print_r($list);die();
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
    <h2>Update Customer Details</h2>
    <?php foreach($list as $data) { ?>
    <form action="<?php echo base_url('dealerc/update_dealer/').$data['id'] ?>" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" value="<?php echo $data['name'] ?>" placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" value="<?php echo $data['email'] ?>" placeholder="Enter Email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" value="" placeholder="Enter Password" name="password">
        </div>
        <div class="form-group">
            <label for="company_name">Company Name</label>
            <input type="company_name" class="form-control" id="company_name" value="<?php echo $data['company_name'] ?>" placeholder="Enter company_name" name="company_name">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" value="<?php echo $data['address'] ?>" placeholder="Enter Address" name="address">
        </div>
				<div class="form-group">
            <label for="area">Area</label>
            <input type="text" class="form-control" id="area" value="<?php echo $data['area'] ?>" placeholder="Enter Area" name="area">
        </div>
        <div class="form-group">
            <label for="mobile_no">Phone Number</label>
            <input type="number" class="form-control" id="mobile_no" value="<?php echo $data['mobile_no'] ?>" placeholder="Enter Phone Number" name="mobile_no">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <?php } ?>
</div>
