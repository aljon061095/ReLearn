
<?php require_once('config.php') ?>
<?php
     $code = str_pad(mt_rand(1,99999999),8,'0',STR_PAD_LEFT);
     $code = "ST".(string)$code;
?>

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
                                        <option value="girl">Girl</option>
                                        <option value="boy">Boy</option>
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
                                        <option value="p1">P1</option>
                                        <option value="p2">P2</option>
                                        <option value="p3">P3</option>
                                        <option value="p4">P4</option>
                                        <option value="p5">P5</option>
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
  