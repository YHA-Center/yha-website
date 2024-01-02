<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <title>Student Information Form</title>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h4 style="color:#ff6c0f;">Student Registration Form</h4>
                    <img style="width: 10%;" src="{{asset('image/logo/logo.png')}}" alt="">
                </div>
                <div class="card-body">
                    <form action="  " method="post" enctype="multipart/form-data">
                        @csrf

                        <!-- First Name and Last Name -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="first_name">First Name:</label>
                                <input type="text" name="first_name" id="first_name" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last_name">Last Name:</label>
                                <input type="text" name="last_name" id="last_name" class="form-control" required>
                            </div>
                        </div>

                        <!-- Register Date, Enroll Date, End Date -->
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="register_date">Register Date:</label>
                                <input type="date" name="register_date" id="register_date" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="enroll_date">Enroll Date:</label>
                                <input type="date" name="enroll_date" id="enroll_date" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="end_date">End Date:</label>
                                <input type="date" name="end_date" id="end_date" class="form-control" required>
                            </div>
                        </div>

                        <!-- Father Name and Mother Name -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="father_name">Father Name:</label>
                                <input type="text" name="father_name" id="father_name" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mother_name">Mother Name:</label>
                                <input type="text" name="mother_name" id="mother_name" class="form-control" required>
                            </div>
                        </div>

                        <!-- Phone Number and Email -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="phone_number">Phone Number:</label>
                                <input type="tel" name="phone_number" id="phone_number" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                        </div>

                        <!-- City and Date of Birth -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="city">City:</label>
                                <input type="text" name="city" id="city" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="dob">Date of Birth:</label>
                                <input type="date" name="dob" id="dob" class="form-control" required>
                            </div>
                        </div>

                        <!-- NRC, Gender, Image -->
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="nrc">NRC:</label>
                                <input type="text" name="nrc" id="nrc" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="gender">Gender:</label>
                                <select name="gender" id="gender" class="form-control" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="image">Image:</label>
                                <input type="file" name="image" id="image" class="form-control-file" required>
                            </div>
                        </div>

                        <!-- Education and Status -->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="education">Education:</label>
                                <input type="text" name="education" id="education" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="status">Status:</label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group">
                            <button type="submit" class="btn" style="background: #ff6c0f; color:white;">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
