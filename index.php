
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
        </div>
    </nav>

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">ReLearn</h1>
        <p class="col-md-8 fs-4">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
         printer took a galley of type and scrambled it to make a type specimen book.
        </p>
        <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Sign Up</button>
      </div>
    </div>

    <?php include "register.php" ?>
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