<section>
    <div class="banner position-relative" style="height:50vh;
    background-image: linear-gradient(to right, rgba(0,0,0,0.9), 
    rgba(0,0,0,0.5)), url(assets/img/<?= $profile['profile_img'] ?>);
    background-repeat:no-repeat;
    background-size:cover;
    ">

    </div>
    <div class="container">
        <div class="row my-3 justify-content-center">
            <div class="col-md-6 col-12 d-flex justify-content-center shadow">
                <div class="profile-box">
                    <h2 class="text-capitalize text-center mb-0"><?= $profile['first_name'] .' '. $profile['last_name']?></h2>
                    <p class="fst-italic text-center mb-0">@<?= $profile['username'] ?></p>
                    <hr clas="m-0">
                    <p class="fst-italic"><?= $profile['bio'] ?></p>
                    <ul class="list-group list-group-horizontal my-2">
                        <li class="list-group-item me-4"><i class="fas fa-phone"></i> <?= $profile['phone_number']  ?></li>
                        <li class="list-group-item"><i class="fas fa-envelope"></i> <?= $profile['email']  ?></li>
                    </ul>
                    <?php if ( isset($_SESSION['id']) && $_SESSION['id'] == $profile['username']): ?>
                            <a class="btn button primary-button bg-dark float-start border border-dark
                            text-center mb-2" 
                            href="./create_post.php">Make Post</a>
                            <a class="btn button primary-button float-end text-center  mb-2" 
                            href="./edit_profile.php?profile_id=<?= $profile['id'] ?>">Edit Profile</a>
                    <?php  endif;  ?>
                </div>
            </div>
        </div>
        <div class="row">
        
                <?php foreach($posts as $post) { ?>
                <?php if ( $profile['username']  === $post['journalist_id'] ): ?>
                <div class="col-md-12 col-12  my-3">
                    <div class="post-container p-1 pb-2">
                            <div class="row my-2 mx-1 d-flex">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="mb-0 pb-0 text-capitalize text-dark fw-bolder"><?= $post['title']  ?></h5>
                                        <span class="title-content">Posted by <?= $post['first_name'] ?> on: <?= date('F j h:m',strtotime($post['date_created']))  ?> </span><br>
                                        <p class="category text-black mb-1">#<?= $post['category'] ?? "Unknown";?></p>
                                        <hr class="m-0">
                                        <p class="mt-2">
                                        <?= $post['body']  ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        
                        <div>
                        <?php if (isset($_SESSION['id']) && $_SESSION['id'] === $post['journalist_id']): ?>
                            <a class="btn button primary-button float-start" 
                            href="./edit_post.php?post=<?= $post['post_id'] ?>">Edit</a>

                            <form action="" method='post' class="">
                                <input type="hidden" name="del_id" value="<?=$post['post_id'] ?>">
                                <input type="submit" class="btn btn button secondary-button bg-danger float-end" value="Delete" id="delete">
                            </form>
                        <?php  endif;  ?>

                        </div>
                    </div>
                </div>
                <?php  endif;  ?>
                <?php } ?>
                
        </div>

    </div>
  
    
</section>