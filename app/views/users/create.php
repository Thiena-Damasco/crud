<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <!-- Correct Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h3>Add New User</h3>
                    </div>

                    <div class="card-body p-4">
                        <!-- Flash Alert: only shown after form submission -->
                        <?php flash_alert(); ?>

                        <form action="<?php site_url("/users/add") ?>" method="post">
                            <!-- First Name & Last Name Row -->
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="firstname" name="firstname"
                                            placeholder="John" required>
                                        <label for="firstname">First Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="lastname" name="lastname"
                                            placeholder="Doe" required>
                                        <label for="lastname">Last Name</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="name@example.com" required>
                                <label for="email">Email address</label>
                            </div>

                            <!-- Gender -->
                            <div class="form-floating mb-3">
                                <select class="form-select" id="gender" name="gender" required>
                                    <option value="" disabled selected>Select gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>
                                <label for="gender">Gender</label>
                            </div>

                            <!-- Address -->
                            <div class="form-floating mb-4">
                                <textarea class="form-control" id="address" name="address" placeholder="Enter address"
                                    style="height: 100px;" required></textarea>
                                <label for="address">Address</label>
                            </div>

                            <!-- Submit and Cancel Buttons -->
                            <div class="d-flex justify-content-between">
                                <a href="<?= site_url("/users/display"); session_destroy(); ?>" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Correct Bootstrap 5 JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
