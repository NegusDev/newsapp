<section class="my-5">
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-6 shadow-lg p-4">
                <h5 class="text-center text-uppercase fw-bold text-dark">Signup for Reader</h5>
                <form class=" my-4"  method="post" enctype="multipart/form-data">
                        <div class="row gx-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="" class="form-label">Firstname</label>
                                <input type="text" name="firstname" class="form-control"  placeholder=""  aria-describedby="validationServerUsernameFeedback" required>
                                <?php 
                                if ($errors != '') {
                                    echo '
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        '.$errors.'
                                    </div>';
                                }else {
                                    echo '';
                                }
                                ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="" class="form-label">Lastname</label>
                                <input type="text" name="lastname" class="form-control" id="email" placeholder="" aria-describedby="validationServerUsernameFeedback" required>
                                <?php 
                                if ($errors != '') {
                                    echo '
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        '.$errors.'
                                    </div>';
                                }else {
                                    echo '';
                                }
                                ?>
                            </div>
                        </div>
                        <div>
                        <div class="row gx-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="name" placeholder=""  aria-describedby="validationServerUsernameFeedback" required>
                                <?php 
                                if ($errors != '') {
                                    echo '
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        '.$errors.'
                                    </div>';
                                }else {
                                    echo '';
                                }
                                ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="" aria-describedby="validationServerUsernameFeedback" required>
                                <?php 
                                if ($errors != '') {
                                    echo '
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        '.$errors.'
                                    </div>';
                                }else {
                                    echo '';
                                }
                                ?>
                            </div>
                        </div>
                        </div>
                        <div class="row gx-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="name" placeholder=""  aria-describedby="validationServerUsernameFeedback" required>
                                <?php 
                                if ($errors != '') {
                                    echo '
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        '.$errors.'
                                    </div>';
                                }else {
                                    echo '';
                                }
                                ?>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="" class="form-label">Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" id="email" placeholder="" aria-describedby="validationServerUsernameFeedback" required>
                                <?php 
                                if ($errors != '') {
                                    echo '
                                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                        '.$errors.'
                                    </div>';
                                }else {
                                    echo '';
                                }
                                ?>
                            </div>
                        </div>
                        <div class="row gx-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="" class="form-label">Profile image</label>
                                <input type="file" name="image" class="form-control" id="name" placeholder=""  aria-describedby="validationServerUsernameFeedback" required>
                                
                            </div>
                            
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Gender</label>
                                    <select name="gender" id="" class="form-select">
                                        <option value="" disabled selected>--Select Gender--</option>
                                        <option value="male" >Male</option>
                                        <option value="female" >Female</option>
                                        <option value="homo" >Homo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                       
                        <!-- button -->
                        <div class="mt-3">
                            <input type="submit" name="submit" class="btn button primary-button" value="Submit">
                        </div>
                </form>
                <div class="mt-3">
                    <p class="">Already have an account? <a href="Login_user.php">Login here</a></p>
                </div>
                
            </div>
        </div>
    </div>
</section>