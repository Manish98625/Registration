<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>


<body>
    <div class="container-fluid">
        <div class="card">
            <div class="cardy-body bg-light">
                <div class="row justify-content-center">
                    <div class="h3 text-center text-primary">Registration</div>
                    <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label for="validationCustom01" class="form-label">Name</label>
                                <div class="input-group has-validation">
                                    <input type="text" class="form-control" id="validationCustom01" name="name"
                                        value=" " placeholder=" " required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustomUsername" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <input type="text" class="form-control" id="validationCustomUsername"
                                        aria-describedby="inputGroupPrepend" name="username" placeholder=" " required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom02" class="form-label">Email</label>
                                <input type="text" class="form-control" id="validation" name="email" value=" "
                                    placeholder="  " required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            </fieldset>
                            <div class="col-md-3">
                                <label for="validationCustom04" class="form-label" name="gender">Gender</label>
                                <select class="form-select" name="gender" id="validationCustom04" required>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option Value="prefer not to say">prefer not to say</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid gender.
                                </div>
                            </div>
                            </fieldset>
                            <div class="col-md-3">
                                <label for="validationCustom04" class="form-label" name="state">State</label>
                                <select class="form-select" id="validationCustom04" name="state" required>
                                    <option value="Provision No 1">Provision No 1</option>
                                    <option value="Madhesh">Madhesh</option>
                                    <option value="Bagmati">Bagmati</option>
                                    <option value="Gandaki">Gandaki</option>
                                    <option value="Lumbini">Lumbini</option>
                                    <option value="karnali">karnali</option>
                                    <option value="Sudar Paschim">Sudar Paschim</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom03" class="form-label">Address</label>
                                <input type="text" class="form-control" id="validationCustom03" name="address"
                                    placeholder=" " required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>

                            <div class="col-md-3 Py-3">
                                <label for="validationCustom05" class="form-label">PhoneNumber</label>
                                <input type="text" class="form-control" id="validationCustom05" name="phonenumber"
                                    placeholder=" " required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-md-3 Py-3">
                                <label for="validationCustom05" class="form-label">Password</label>
                                <input type="password" class="form-control" id="validationCustom05" name="password"
                                    placeholder=" " required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-6">
                                <fieldset>
                                    <legend class="text-primary" name="skill[]">Skill</legend>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="python"
                                            name="skill[]" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Python
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Php"
                                            name="skill[]" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Php
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="C++"
                                            name="skill[]" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            C++
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Java"
                                            name="skill[]" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Java
                                        </label>
                                    </div>
                                </fieldset>
                                <div class="col-md-6">
                                    <label for="validationCustom03" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="ImageUpload" name="image"
                                        accept="image">
                                </div>
                            </div>
                            <div class="d-grid gap-2 ">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>

</html>
