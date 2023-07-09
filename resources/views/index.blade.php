<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    @include('navbar')
    <!-- ***** Header Area End ***** -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="/images/1.jpg" alt="First slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/images/2.jpg" alt="Second slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/images/3.jpg" alt="Third slide" />
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/images/4.jpg" alt="Four slide" />
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <!-- ***** Banner End ***** -->

                    <!-- ***** Most Popular Start ***** -->
                    <div class="most-popular">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4><em>Most Popular</em> Right Now</h4>
                                </div>
                                <div class="row">
                                    <?php
                                            use App\models\Game;
                                            $games = Game::all();
                                                  ?>
                                    @foreach ($games as $item)
                                        <div class="col-lg-3">

                                            <div class="item">

                                                <a href="{{ route('admin.game.show', $item->id) }}">
                                                    <img src="{{ url($item->image) }}" name='image'
                                                        alt="{{ $item->nama }}" />
                                                </a>

                                                <h4 name='nama' id="nama">{{ $item->nama }}<br /><span
                                                        name='harga' id="harga">IDR
                                                        {{ $item->harga }}</span></h4>

                                                



                                            </div>

                                        </div>
                                    @endforeach
                                    <div class="col-lg-12">
                                        <div class="main-button">
                                            <a href="viewgame">More Games</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Most Popular End ***** -->

                    <!-- ***** Gaming Library Start ***** -->
                    <!-- <div class="gaming-library">
                        <div class="col-lg-12">
                            <div class="heading-section">
                                <h4><em>Your Gaming</em> Library</h4>
                            </div>
                            <div class="item">
                                <ul>
                                    <li><img src="/images/game-01.jpg" alt="" class="templatemo-item" /></li>
                                    <li>
                                        <h4>Dota 2</h4>
                                        <span>Sandbox</span>
                                    </li>
                                    <li>
                                        <h4>Date Added</h4>
                                        <span>24/08/2036</span>
                                    </li>
                                    <li>
                                        <h4>Hours Played</h4>
                                        <span>634 H 22 Mins</span>
                                    </li>
                                    <li>
                                        <h4>Currently</h4>
                                        <span>Downloaded</span>
                                    </li>
                                    <li>
                                        <div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <ul>
                                    <li><img src="/images/game-02.jpg" alt="" class="templatemo-item" /></li>
                                    <li>
                                        <h4>Fortnite</h4>
                                        <span>Sandbox</span>
                                    </li>
                                    <li>
                                        <h4>Date Added</h4>
                                        <span>22/06/2036</span>
                                    </li>
                                    <li>
                                        <h4>Hours Played</h4>
                                        <span>740 H 52 Mins</span>
                                    </li>
                                    <li>
                                        <h4>Currently</h4>
                                        <span>Downloaded</span>
                                    </li>
                                    <li>
                                        <div class="main-border-button"><a href="#">Donwload</a></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="item last-item">
                                <ul>
                                    <li><img src="/images/game-03.jpg" alt="" class="templatemo-item" /></li>
                                    <li>
                                        <h4>CS-GO</h4>
                                        <span>Sandbox</span>
                                    </li>
                                    <li>
                                        <h4>Date Added</h4>
                                        <span>21/04/2036</span>
                                    </li>
                                    <li>
                                        <h4>Hours Played</h4>
                                        <span>892 H 14 Mins</span>
                                    </li>
                                    <li>
                                        <h4>Currently</h4>
                                        <span>Downloaded</span>
                                    </li>
                                    <li>
                                        <div class="main-border-button border-no-active"><a href="#">Donwloaded</a></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="main-button">
                                <a href="profile.html">View Your Library</a>
                            </div>
                        </div>
                    </div> -->
                    <!-- ***** Gaming Library End ***** -->
                </div>
            </div>
        </div>
    </div>
<script>        $.widget.bridge('uibutton', $.ui.button)
</script>
    @include('footer')
