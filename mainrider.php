<?php 
 // Connection information for the database
 include './Database/inc_config.php';
 //header
 include 'riderhome.php';
  ?>


<main>


  <section class="py-2 text-center container">
    <div class="row py-lg-4">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Printing Easier With OnPrint</h1>
        <p class="fw-lighter" style="color:green;">Hurry! Become OnPrint's member now. Any registered members will gain point every purchase. Every point you earn can be used as a discount for your next purchase</p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

        <div>
            <h3 class="fw-light" style="color:green;">Category</h3>
        </div>

        <br>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="./Images/paper.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-text" Style="color:green;">Paper</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="#"><input type="button" value="view" class="btn btn-sm btn-outline-success"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="./Images/card.png" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-text" Style="color:green;">Business Card</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="#"><input type="button" value="view" class="btn btn-sm btn-outline-success"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="./Images/lanyard.png" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-text" Style="color:green;">Lanyard</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="#"><input type="button" value="view" class="btn btn-sm btn-outline-success"></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
          <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="./Images/banner.png" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-text" Style="color:green;">Banner</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="#"><input type="button" value="view" class="btn btn-sm btn-outline-success"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="./Images/tshirt.jpg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-text" Style="color:green;">T-Shirt</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="#"><input type="button" value="view" class="btn btn-sm btn-outline-success"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="./Images/invcard.png" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-text" Style="color:green;">Invitation Card</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="#"><input type="button" value="view" class="btn btn-sm btn-outline-success"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</main>

<br><br>

<!-- footer -->
<?php include 'footer.php'; ?>