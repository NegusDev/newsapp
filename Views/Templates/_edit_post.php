"<section class="my-5">
    <div class="container">
        <div class="row justify-content-center my-3">
            <div class="col-md-6 shadow-lg p-4">
                <h5 class="text-center text-uppercase fw-bold text-dark">edit this post</h5>
                <form class="my-4"  method="post">
                <div class="mb-3">
                        <label for="" class="form-label">News Category</label>
                        <select name="category" id="" class="form-select">
                            <?= $page['content']  ?>
                        </select>
                    </div>
                <input type="hidden" name="post_id" value="<?= $id['post_id']  ?>" >
                    <div class="mb-3">
                        
                        <label for="" class="form-label text-capitalize fw-bolder">title</label>
                        <input type="text" name="title" class="form-control"  value="<?= $id['title']  ?>" aria-describedby="validationServerUsernameFeedback" required>
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        </div>
                    </div>
                          
                    <div class="mb-3">
                        <label for="" class="form-label text-capitalize fw-bolder">body</label>
                        <textarea class="form-control create-body" name="body" aria-describedby="validationServerUsernameFeedback" required>
                        <?= $id['body']  ?>
                        </textarea>
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            
                        </div>
                    </div>
                    <!-- button -->
                    <div class="mt-3">
                        <button type="submit" name="edit" class="btn button primary-button">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>"