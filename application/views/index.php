<!DOCTYPE>
<html>
    
  <div class="header">
      <div class="card headercontent">
          <div class="card-body">
            <h1>PT. RAJAWALI PUNCAK JAYAWIJAYA</h1>
          </div>
        </div>
  </div>

  <!-- <div class="menu"> -->
  <div class="container content1 mt-5 mb-5">
      <div class="row">
          <div class="col-md-10">
            <h2 class="pb-4">
              Mining Products 
            </h2>
          </div>
          <div class="col-md-2 text-right">
            <a class="btn btn-outline-danger" href="#" role="button">Others</a>
          </div>
        </div>
    <div class="row">
      <div class="col-md-4 mb-md-0 mb-3 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img
            src="https://images.pexels.com/photos/46801/coal-briquette-black-46801.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title d-flex align-items-center"><b>Batu Bara</b></h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
              <a class="btn btn-danger d-flex justify-content-around" href="#" role="button">BUY NOW</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-md-0 mb-3 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img
            src="https://images.pexels.com/photos/60685/water-wet-river-nature-60685.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title d-flex align-items-center"><b>Kerikil</b></h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
              <a class="btn btn-danger d-flex justify-content-around" href="#" role="button">BUY NOW</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-md-0 mb-3 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img
            src="https://images.pexels.com/photos/952670/pexels-photo-952670.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title d-flex align-items-center"><b>Pasir</b></h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
              <a class="btn btn-danger d-flex justify-content-around" href="#" role="button">BUY NOW</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container content2 mt-5 mb-5">
    <div class="row">
    <div class="col-md-10">
      <h1 class="pb-4">
        Heavy Equipment for Rent
      </h1>
    </div>
    <div class="col-md-2 text-right">
      <a class="btn btn-outline-danger" href="#" role="button">Others</a>
    </div>
  </div>
    <div class="row">
      <div class="col-md-4 mb-md-0 mb-3 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img
            src="https://images.pexels.com/photos/1009926/pexels-photo-1009926.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title d-flex align-items-center"><b>Bulldozer</b></h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
              <a class="btn btn-danger d-flex justify-content-around" href="#" role="button">RENT NOW</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-md-0 mb-3 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img
            src="https://images.pexels.com/photos/1116035/pexels-photo-1116035.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            class="card-img-top" alt="...">
          <div class="card-body">
            <h3 class="card-title d-flex align-items-center"><b>Pengeruk Kecil</b></h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
              <a class="btn btn-danger d-flex justify-content-around" href="#" role="button">RENT NOW</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-md-0 mb-3 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img
            src="https://images.pexels.com/photos/1420744/pexels-photo-1420744.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
            class="card-img-top" alt="...">
          <div class="card-body">
              <h3 class="card-title d-flex align-items-center"><b>Pengeruk Besar</b></h3>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.</p>
              <a class="btn btn-danger d-flex justify-content-around" href="#" role="button">RENT NOW</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container content3 mt-5 mb-5">
    <h1 class="pb-4">
      Activity
    </h1>
    <div class="row">

      <?php 
      $i = 0;
      foreach ($article as $article_item): ?>

      <div class="col-md-3 mb-md-0 mb-3 d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
          <img
            src="<?php echo base_url('assets/images/').$article_item['image']; ?>"
            class="card-img-top" alt="...">
          <div class="card-body">
              <h3 class="card-title d-flex align-items-center"><b><?php echo $article_item['title'];?></b></h3>
            <p class="card-text"><?php echo substr($article_item['text'],0,60); ?></p>
              <a class="btn btn-danger d-flex justify-content-around" href="<?php echo base_url('article/'.$article_item['slug']); ?>" role="button">BACA SELENGKAPNYA</a>
          </div>
        </div>
      </div>
      
      <?php 
      if($i++ >= 3){
        break;
      };
      endforeach; ?>
    </div>
  </div>
  <!-- </div> -->

</body>

</html>