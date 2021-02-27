<?php 

include "template/navbar.php";

?>

    <!-- [ Start ] Carousel -->

    <div class="container">

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="" class="d-block" alt="Pict 1">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="" class="d-block" alt="Pict 2">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="" class="d-block" alt="Pict 3">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    </div>

    <!-- [ End ] Carousel -->

    <!-- [ Start ] Card -->

    <div class="container mt-3">
        <div class="row">

            <!-- First Card -->

            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Percetakan Di Jonggol</h5>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Lihat Katalog Product</a>
                    </div>
                </div>
            </div>

            <!-- Second Card -->

            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Percetakan Di Jonggol</h5>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Lihat Katalog Product</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- [ End ] Card -->

<?php 

include "template/footer.php";

?>