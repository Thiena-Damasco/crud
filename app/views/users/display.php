<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Display with DataTables</title>
    
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <!-- DataTables Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <style>
        .dataTables_filter {
            float: right;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="d-flex justify-content-between mb-4">
        <h2>User Data</h2>
        <!-- Create User Button -->
        <a href="<?= site_url('/users/add'); ?>" class="btn btn-success">Create User</a>
    </div>
    <?php flash_alert() ?>

    <table id="userTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user['tbd_id']?></td>
                    <td><?= $user['tbd_lastname']?></td>
                    <td><?= $user['tbd_firstname']?></td>
                    <td><?= $user['tbd_email']?></td>
                    <td><?= $user['tbd_gender']?></td>
                    <td><?= $user['tbd_address']?></td>
                    <td>
                        <!-- Update Button -->
                        <a href="<?= site_url('/users/update/'. $user['tbd_id']);?>" class="btn btn-primary btn-sm">Update</a>
                        <!-- Delete Button -->
                        <a href="<?= site_url('/users/delete/'. $user['tbd_id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?');">Delete</a>
                    </td>
                </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<!-- DataTables Bootstrap 4 JS -->
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<!-- Bootstrap 4 JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

<script>
    $(document).ready(function() {
        $('#userTable').DataTable({
            // Optional DataTable settings for customization
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true
        });
    });
</script>

</body>
</html>
