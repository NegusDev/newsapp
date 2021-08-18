<section class="my-3">
    <div class="container">
        <div class="row">
                <?php foreach($posts as $post) { ?>
                <div class="col-md-12 col-12  my-3">
                    <div class="post-container p-1 pb-2">
                        
                        <div class="row my-2 mx-1 d-flex">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="mb-0 pb-0 text-capitalize text-dark fw-bolder"><?= $post['title']  ?></h5>
                                    <span class="title-content">Article by <?= $post['first_name'] ?> on: <?= date('F j H:m',strtotime($post['date_created']))  ?> </span><br>
                                    <p class="category text-black mb-1">#<?= $post['category'] ?? "Unknown";?></p>
                                    <hr class="m-0">
                                    <p class="mt-2">
                                    <?= $post['body']  ?>
                                    </p>
                                </div>
                                <div>
                                    <a href="like.php?type=post&post_id=<?= $post['post_id'] ?>" id="like">
                                    <i class="fas fa-thumbs-up"></i></a>
                                    <p>x people liked this</p>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div>
                        <?php if (isset($_SESSION['id']) && $_SESSION['id'] === $post['journalist_id']): ?>
                            <a class="btn button primary-button float-end" 
                            href="./edit_post.php?post=<?= $post['post_id'] ?>">Edit</a>

                            <form action="" method='post' class="">
                                <input type="hidden" name="del_id" value="<?=$post['post_id'] ?>">
                                <input type="submit" class="btn btn button secondary-button bg-danger text-white float-end" value="Delete" id="delete">
                            </form>
                        <?php  endif;  ?>

                        </div>
                    </div>
                </div>
                <?php } ?>
        </div>

    </div>
</section>