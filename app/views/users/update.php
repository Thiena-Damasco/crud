<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Form with Flash Alert</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Flash Alert: only shown after form submission -->
                <?php flash_alert(); ?>
                
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>Fill Your Details</h3>
                    </div>
                    <div class="card-body p-4">
                        <form action="<?= site_url("/users/update") ?>" method="post">
                            <!-- First Name -->
                            <div class="mb-3">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" class="form-control"   value="<?= $users['tbd_firstname'] ?>"id="firstname" name="firstname" placeholder="Enter your first name" required>
                            </div>

                            <!-- Last Name -->
                            <div class="mb-3">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" class="form-control"  value="<?= $users['tbd_lastname'] ?>"id="lastname" name="lastname" placeholder="Enter your last name" required>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control"  value="<?= $users['tbd_email'] ?>"id="email" name="email" placeholder="Enter your email" required>
                            </div>

                            <!-- Gender -->
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" id="gender" name="gender" required>
                                    <option disabled>Select your gender</option>
                                    <option value="Male" <?= $users['tbd_gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
                                    <option value="Female" <?= $users['tbd_gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
                                    <option value="Other" <?= $users['tbd_gender'] == 'Other' ? 'selected' : '' ?>>Other</option>
                                </select>
                            </div>

                            <!-- Address -->
                            <div class="mb-4">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" id="address" name="address" rows="3" placeholder="<?= $users['tbd_address'] ?>" required></textarea>
                            </div>

                            <!-- Submit and Cancel Buttons -->
                            <div class="d-flex justify-content-between">
                                <a href="<?= site_url("/users/display") ?>" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
