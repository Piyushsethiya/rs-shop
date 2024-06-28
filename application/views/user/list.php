<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Bootstrap DataTable</title>
</head>
<body>
   <div class="container mt-5">
    <div  class="add-btn btn btn-primary"><a style="color: black;" href="<?php echo base_url('userc/form') ?>">Add User</a></div>
     <table class="table table-striped table-bordered">
       <thead>
         <tr>
           <th>S.no.</th>
           <th>Name</th>
           <th>Email</th>
           <th>Phone Number</th>
           <th>Address</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <th></th>
           <th></th>
           <th></th>
           <th></th>
           <th></th>
         </tr>
       </tbody>
     </table>
   </div>

 
   <script>
     $(document).ready(function() {
       $('.table').DataTable();
     });
   </script>
</body>
</html>
