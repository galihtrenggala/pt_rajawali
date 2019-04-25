<!DOCTYPE html>
<html>

  <!-- <div class="headerabout"> -->
  <!-- <div class="headercontent"> -->
  <!-- <h1 class="headercontent">ABOUT</h1> -->
  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta libero saepe cumque minus, sequi molestiae. Eum excepturi aut adipisci similique sapiente qui rem dignissimos veritatis nostrum? Veniam architecto modi praesentium?</p> -->
  <!-- </div> -->
  <!-- </div> -->

  <div class="text-center">
    <div class="jumbotron jumbotron-fluid headerabout">
      <!-- <div class="header"></div> -->
      <div class="container">
        <h1 class="">BLOG</h1>
      </div>
    </div>
  </div>

  <div class="container mt-5 mb-5">
  <?php foreach ($news as $news_item): ?>

    <div class="card mt-3 mb-3">
      <div class="card-body">
        <div class="row">
          <div class="col-md-4">
            <img alt=""
              src="https://images.pexels.com/photos/212286/pexels-photo-212286.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
              class="card-img-top" height="230">
          </div>
          <div class="col-md-8">
            <h2><?php echo $news_item['title'];?></h2>
            <p><?php echo $news_item['text']; ?></p>
              <a href="<?php echo base_url('news/'.$news_item['slug']); ?>">Baca Selengkapnya>></a>
          </div>
        </div>
      </div>
    </div>

  <?php endforeach; ?>
  </div>

</body>

</html>