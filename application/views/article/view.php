<!DOCTYPE html>
<html>

  <div class="container mt-5 mb-5">
    <h2><?php echo '<h2>'.$article_item['title'].'</h2>'; ?></h2>
    <img src="<?php echo base_url('assets/images/').$article_item['image']; ?>" alt="" width="500px" height="auto">
    <p><?php echo $article_item['text']; ?></p>

  </div>

</body>

</html>