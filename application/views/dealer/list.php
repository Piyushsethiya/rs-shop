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
                <h4>
                    <b><?php print_r($this->session->flashdata('delete')); ?></b>
                </h4>
            <?php } ?>
            <div class="add-btn btn btn-primary mb-3" style="float: right;">
                <a style="color: white;" href="<?php echo base_url('dealerc/form') ?>">Add Client</a>
            </div>
            <table id="datatable" class="table table-striped table-bordered table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th style="text-align: center;">S.no.</th>
                        <th style="text-align: center;">Name</th>
                        <th style="text-align: center;">Email</th>
                        <th style="text-align: center;">Phone Number</th>
                        <th style="text-align: center;">Company name</th>
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
                            <td style="text-align: center;"><?php echo $data['company_name'] ?></td>
                            <td style="text-align: center;"><?php echo $data['address'] ?></td>
                            <td style="text-align: center;"><a
                                    href="<?php echo base_url('dealerc/update_form/') . $data['id']; ?>"
                                    class="btn btn-success">Update</a><a
                                    href="<?php echo base_url('dealerc/delete/') . $data['id'] ?>"
                                    class="btn btn-danger">Delete</a></td>
                        </tr>
                        <?php $i++;
                    } ?>
                </tbody>
            </table>
</div>
</div>

<script type="text/javascript">
    window.onload = function exampleFunction() {
        new DataTable('#datatable', {
            layout: {
                top: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            },
            pagingType: 'simple_numbers',
        });
    }
</script>