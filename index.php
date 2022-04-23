<?php
include './includes/header.php';
$name = "Krupesh"
?>

<!-- quote  section-->
<section class="quote">
    <h2>Welcome<span>, <?= $name ?></span> </h2>
</section>

<!-- categories section -->
<section class="categories">
    <h2>Categories</h2>

    <div class="container-fluid">

        <div class="row">

            <!-- card 1 -->
            <div class="card col-sm-3 mx-3 mb-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">HTML</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Web Development</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link btn btn-primary">Visit Category</a>
                </div>
            </div>

            <!-- card 2-->
            <div class="card col-sm-3 mx-3 mb-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">CSS</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Web Development</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link btn btn-primary">Visit Category</a>
                </div>
            </div>

            <!-- card 3-->
            <div class="card col-sm-3 mx-3 mb-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">JavaScript</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Web Development</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link btn btn-primary">Visit Category</a>
                </div>
            </div>

            <!-- card 4-->
            <div class="card col-sm-3 mx-3 mb-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">NodeJS</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Web Development</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link btn btn-primary">Visit Category</a>
                </div>
            </div>
            <!-- card 5-->
            <div class="card col-sm-3 mx-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">ReactJS</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Web Development</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link btn btn-primary">Visit Category</a>
                </div>
            </div>
        </div>
    </div>


</section>

<hr>
<!-- leatest-trending -->
<div class="latest-trending container-fluid">
    <div class="row">
        <!-- latest question -->
        <div class="latest-question col-md-6">
            <h2>Latest Questions</h2>
            <!-- card -->
            <div class="card">
                <div class="card-header">
                    HTML
                </div>
                <div class="card-body">
                    <h5 class="card-title">HTML is not Installing</h5>
                    <p class="card-text">I have cracked my pc with hammer but still my HTML is not working.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    HTML
                </div>
                <div class="card-body">
                    <h5 class="card-title">HTML is not Installing</h5>
                    <p class="card-text">I have cracked my pc with hammer but still my HTML is not working.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    HTML
                </div>
                <div class="card-body">
                    <h5 class="card-title">HTML is not Installing</h5>
                    <p class="card-text">I have cracked my pc with hammer but still my HTML is not working.</p>
                </div>
            </div>
        </div>
        <!-- latest question -->
        <div class="trending col-md-6">
            <h2>Trending Categories</h2>
            <!-- card -->
            <div class="container-fluid">
                <div class="row">
            <div class="card col-sm-3 mx-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">ReactJS</h5>
                    <h6 class="card-subtitle mb-2 text-muted">3,000 Issues</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link btn btn-primary">Visit Category</a>
                </div>
            </div>
            <div class="card col-sm-3 mx-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">ReactJS</h5>
                    <h6 class="card-subtitle mb-2 text-muted">3,000 Issues</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link btn btn-primary">Visit Category</a>
                </div>
            </div>
                
                </div>
            </div>
        </div>

    </div>
</div>


<!-- javascript -->
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>