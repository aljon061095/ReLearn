
<?php require_once('config.php') ?>
<?php
     $code = str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT);
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ReLearn</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .success-message{
            color:green
        }
        .error-message{
            color:#dc3545;
        }
        .invalid {
            border-color: #dc3545;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ReLearn</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Sign Up
                </button>
            </div>
        </div>
    </nav>

    <div class="modal modal-lg fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">User Registration</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="submit_form" method="post">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nickname"
                                            placeholder="Enter username" name="nickname" required>
                                        <label class="form-label">Nick Name</label>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                                            required>
                                        <label for="email">Email</label>
                                        <div class="invalid-feedback">Please input valid email address.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-floating">
                                        <select class="form-select" id="age" name="age" required>
                                            <option selected disabled value="">Choose your age</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                        </select>
                                        <label for="age">Age</label>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <select class="form-select" id="gender" name="gender" required>
                                            <option selected disabled value="">Choose your gender</option>
                                            <option value="1">Girl</option>
                                            <option value="2">Boy</option>
                                        </select>
                                        <label for="gender">Gender</label>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating">
                                        <select class="form-select" id="grade" name="grade" required>
                                            <option selected disabled value="">Choose your grade</option>
                                            <option value="1">P1</option>
                                            <option value="2">P2</option>
                                            <option value="3">P3</option>
                                            <option value="4">P4</option>
                                            <option value="5">P5</option>
                                        </select>
                                        <label for="grade">Grade</label>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="referral_code" value="<?php echo $code; ?>" name="referral_code" placeholder="(optional)" readonly>
                                        <label for="code">Referral Code (optional)</label>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="row mb-3">
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                                            required>
                                        <label for="password">Enter your password</label>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="confirmPassword"
                                            placeholder="Confirm Password" required>
                                        <label for="confirmPassword">Re-enter to confirm</label>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                        <div class="form-text confirm-message"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-center">
                        <div class="d-grid gap-2 col-4 mx-auto">
                            <button type="submit" id="submit_register" class="btn btn-primary" type="button">Registration</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('#password, #confirmPassword').on('keyup', function () {
                $('.confirm-message').removeClass('success-message').removeClass('error-message');

                let password = $('#password').val();
                let confirm_password = $('#confirmPassword').val();

                if (confirm_password === password) {
                    $('.confirm-message').text('Password Match!').addClass('success-message');
                    $('#confirmPassword').removeClass('invalid');
                }
                else {
                    $('.confirm-message').text("Password Doesn't Match!").addClass('error-message');
                    $('#confirmPassword').addClass('invalid');
                }

            });
            (function () {
                'use strict'

                $("#submit_register").click(function (e) { 
                    var _this = $(e.currentTarget);
                    var form = _this.closest('form')[0];

                    if (form.checkValidity()) {
                        var nickname = $("#nickname").val();
                        var email = $("#email").val();
                        var age = $("#age").val();
                        var gender = $("#gender").val();
                        var grade = $("#grade").val();
                        var referral_code = $("#referral_code").val();
                        var password = $("#password").val();
                        e.preventDefault();

                         $.ajax({
                            type: 'POST',
                            url:'process.php',
                            data: {
                                nickname: nickname,
                                email: email,
                                age: age,
                                gender: gender,
                                grade: grade,
                                referral_code: referral_code,
                                password: password
                            },
                            success: function(data) {
                                Swal.fire(
                                    'Successful',
                                    'Your account is sucessfully registered!',
                                    'success'
                                );
                                
                                $("#staticBackdrop").modal('hide');
                            }, 
                            error: function(data) {
                                Swal.fire(
                                    'Errors',
                                    'There were errors while saving the data',
                                    'error'
                                );
                            }
                         });  
                    }
                });
            })();
    </script>
</body>

</html>