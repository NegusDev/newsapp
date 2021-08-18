<section class="my-5"> 
    <div class="container">
        <div class="row ">
            <?php foreach($editors as  $editor) {   ?>
                <div class="col-md-4 col-12 my-2">
                    <div class="post-container py-3 px-2 " >
                        <div class="row">
                            <div class="col-md-4 mb-2 me-0 ">
                                <div class="img-content">
                                <img src="./assets/img/<?= $editor['profile_img'] ?>" alt="<?=$editor['profile_img']?>"class="img-fluid w-100 h-100">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h5 class="text-capitalize mb-0"> <?=$editor['first_name']?> <?=$editor['last_name']?></h5>
                                <div class="m-0 fst-italic">@<?=$editor['username']?> </div>
                                <div> <strong>category: </strong><?=$editor['category_name']?> </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <a class="btn button primary-button float-start" 
                            href="./profile.php?id= <?= $editor['id']?>">View Profile</a>
                            <a class="btn button primary-button float-end" 
                            href="./journalists.php?id=<?=$editor['id']?>">Follow Journalist</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- <?= $page['content']  ?> -->
    </div>
</section>