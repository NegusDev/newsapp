<section class="my-5">
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-6 shadow-lg p-4">
                <h5 class="text-center text-uppercase fw-bold text-dark">Login</h5>
                <form class="my-4"  method="post">
                      
                    <div class="mb-3">
                        <label for="" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="name" placeholder=""  aria-describedby="validationServerUsernameFeedback" required>
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        </div>
                    </div>
                          
                    <div class="mb-3">
                        <label for="" class="form-label">password</label>
                        <input type="password" name="password" class="form-control" placeholder="" aria-describedby="validationServerUsernameFeedback" required>
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            
                        </div>
                    </div>
                    <!-- button -->
                    <div class="mt-3">
                        <button type="submit" name="login" class="btn button primary-button">Login</button>
                    </div>
                </form>
                <div class="mt-3">
                    <p class="">Don't have an account yet? <a href="index.php">Signup here</a></p>
                </div>
                
            </div>
        </div>
    </div>
</section>