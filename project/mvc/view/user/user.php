<?php
echo $title;?>

<div class="row row-cols-1 row-cols-md-2">
  <?php  foreach ($users as $user){ ?>
      <div class="col mb-4">
          <!-- Card -->
          <div class="card">

              <!--Card image-->
              <div class="view overlay">
                  <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/16.jpg"
                       alt="Card image cap">
                  <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                  </a>
              </div>

              <!--Card content-->
              <div class="card-body">

                  <!--Title-->
                  <h4 class="card-title"><?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?></h4>
                  <!--Text-->
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                  <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                  <button type="button" class="btn btn-light-blue btn-md">Read more</button>

              </div>

          </div>
          <!-- Card -->
      </div>
    <?php } ?>

</div>
