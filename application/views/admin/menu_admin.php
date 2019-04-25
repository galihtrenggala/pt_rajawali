<!DOCTYPE html>
<html>

    <!-- <div class="headerabout"> -->
    <!-- <div class="headercontent"> -->
    <!-- <h1 class="headercontent">ABOUT</h1> -->
    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta libero saepe cumque minus, sequi molestiae. Eum excepturi aut adipisci similique sapiente qui rem dignissimos veritatis nostrum? Veniam architecto modi praesentium?</p> -->
    <!-- </div> -->
    <!-- </div> -->

    <div class="container mt-5 mb-5">
        <div class="col-md-4">

        </div>
        <div class="container mt-5 mb-5">
                <a class="btn btn-outline-danger" href="<?php  echo base_url('admin/create')?>" role="button">+ NEW ARTICLE</a>

            <?php foreach ($article as $article_item): ?>
            
            <div class="card mt-3 mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img alt=""
                                src="<?php echo base_url('assets/images/').$article_item['image']; ?>"
                                class="card-img-top" height="230">
                        </div>
                        <div class="col-md-8">
                            <h2><?php echo $article_item['title'];?></h2>
                            <p><?php echo $article_item['text']; ?></p>
                            <?php 
                                $update_link = base_url('admin/update/'.$article_item['id']);
                                $delete_link = base_url('admin/delete/'.$article_item['id']);
                            ?>
                            <a class="btn btn-danger" href="<?php echo $update_link ?>" role="button">EDIT</a>
                            <a class="btn btn-danger" href="<?php echo $delete_link ?>" role="button">DELETE</a>
                        </div>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>

    </div>
</body>

</html>