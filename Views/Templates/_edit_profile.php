<section class="my-5">
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-8 shadow-lg p-4">
                <div class="mt-3">
                    <p class="btn btn-success"><a href="./profile.php?id=<?= $profile['id']?>" class="text-white">Go Back</a></p>
                </div>
                <h5 class="text-center text-uppercase fw-bold text-dark">Make Changes</h5>
                <form class=" my-4"  method="post">
                    <input type="hidden" name="id" value="<?= $profile['id'] ?>">
                        <div class="row gx-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="" class="form-label">Firstname</label>
                                <input type="text" name="firstname" class="form-control"  
                                value="<?= $profile['first_name'] ?>"  aria-describedby="validationServerUsernameFeedback" required>
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    
                                </div>
                                
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="" class="form-label">Lastname</label>
                                <input type="text" name="lastname" class="form-control" id="email" 
                                value="<?= $profile['last_name'] ?>" aria-describedby="validationServerUsernameFeedback" required>
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    
                                </div>
                            </div>
                        </div>
                        <div>
                        <div class="row gx-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="name" 
                                value="<?= $profile['username'] ?>"  aria-describedby="validationServerUsernameFeedback" required>
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" 
                                value="<?= $profile['email'] ?>" aria-describedby="validationServerUsernameFeedback" required>
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Bio</label>
                            <textarea class="form-control" name="bio" id="" 
                            aria-describedby="validationServerUsernameFeedback" required>
                            <?= $profile['bio'] ?>
                            </textarea>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    
                            </div>
                      
                        </div>
                        <div class="row gx-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">News Category</label>
                                    <select name="category" id="" class="form-select">
                                        <?= $page['content']  ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="mb-3">
                                <label for="" class="form-label">Phone Number</label>
                                <input type="tel" name="phone" class="form-control" id="email" 
                                value="<?= $profile['phone_number'] ?>" aria-describedby="validationServerUsernameFeedback" required>
                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                    
                                </div>
                            </div>
                        </div>
                        <div>
                        <!-- button -->
                        <div class="mt-3">
                            <input type="submit" name="update" class="btn button primary-button" value="update">
                        </div>
                </form>
               
                
            </div>
        </div>
    </div>
</section>









                           
                            
                           
                            
                            