<div class="container mt-5">

    <h2>Add Client</h2>
    <form action="<?php echo base_url('dealerc/collect_data') ?>" method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
        </div>
        <div class="form-group">
            <label for="company_name">Company name</label>
            <input type="text" class="form-control" id="company_name" placeholder="Enter company_name" name="company_name">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
        </div>
        <div class="form-group">
            <label for="mobile_no">Phone Number</label>
            <input type="number" class="form-control" id="mobile_no" placeholder="Enter Phone Number" name="mobile_no">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>