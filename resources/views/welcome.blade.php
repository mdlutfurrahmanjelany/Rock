<!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<head>
@include('front.partial.stylesheet')

</head>
<!-- body -->

<body class="main-layout">


@include('front.partial.header')
    <!-- end header -->
@include('front.partial.banner')

    <!-- music-box  -->
    <div class="music-box">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="rock/icon/icon1.png" alt="icon"/></i>
                        <h3>Custom Player</h3>
                        <p>Create your custom player as you want to see with a lots of different theme & colors. </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="rock/icon/icon2.png" alt="icon"/></i>
                        <h3>Easy customize</h3>
                        <p>Customize the features and updates the way you want and get customized notification. </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="rock/icon/icon3.png" alt="icon"/></i>
                        <h3>Music Playlist</h3>
                        <p>Make your playlist by Genere, Type, Album, Artist and even customized name ! </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="for-box">
                        <i><img src="rock/icon/icon4.png" alt="icon"/></i>
                        <h3>Custom Gallery</h3>
                        <p>For easy to find and better organizing  the songs, you will be able to customize gallery with specific name. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end music-box  -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 padding">
                <div class="img-box">
                    <figure><img src="rock/images/musicbg.jpg" alt="img" /></figure>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 padding">
                <div class="text-box">
                    <div class="box">
                        <i><img src="rock/images/5.png"/></i>
                        <h3>MEET OUR Music STARS</h3>
                        <p>We organize exclusive meetups with the top stars from all over the world.
                            <br> We also involved in a lots of music events with trending stars in every big cities.</p>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Download -->
    <div id="screenshot" class="Lastestnews">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Latest News</h2>
                        <span>Find photos, videos and news about the music industry. Read about albums, songs, concerts, record deals and more exclusively here. </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="news-box">
                        <figure><img src="rock/images/1.jpg" alt="img" /></figure>
                        <h3>Live With Music</h3>
                        <span> March 20</span><span>Comment</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus imperdiet, nulla et dictum interdum, nisi lorem
                            egestas vitae scel<span id="dots">...</span><span id="more">erisque enim ligula venenatis dolor. Maecenas nisl est,
                                ibero sed nunc venenatis imperdiet sed ornare turpis. Donec
                                vitae dui eget tellus gravida venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh
                                tempor porta.</span></p>
                        
                        <button onclick="myFunction()" id="myBtn">Read more</button>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="news-box">
                        <figure><img src="rock/images/2.jpg" alt="img" /></figure>
                        <h3>Best Music</h3>
                        <span> March 20</span><span>Comment</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                    <div class="news-box">
                        <figure><img src="rock/images/3.jpg" alt="img" /></figure>
                        <h3>Live With Music</h3>
                        <span> March 20</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, </p>
                            
                         <span>Comment</span>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end Download -->

    <!-- Albums -->
    <div id="screenshot" class="Albums">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Albums-box </h2>
                        <span>The latest of all geners and biggest stars albums are here in front of you.<br>Just click for diving into deep.</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="rock/images/album1.jpg" class="fancybox" rel="ligthbox">
                                <img src="rock/images/album1.jpg" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                        <a href="rock/images/album1.jpg" class="fancybox" rel="ligthbox"><img src="rock/images/search.png"></a>
                        </span>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="rock/images/album2.jpg" class="fancybox" rel="ligthbox ">
                                <img src="rock/images/album2.jpg" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                        <a href="rock/images/album2.jpg" class="fancybox" rel="ligthbox"><img src="rock/images/search.png"></a>
                        </span>
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end Albums -->

    <!-- Newsletter -->
    <div class="Newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <h2>Newsletter</h2>
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 padding-right">
                            <input class="email" placeholder="Enter Your Email" type="text" name="Enter Your Email">
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 padding-left">
                            <button class="submit-btn">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- end Newsletter -->

    <!--  footer -->
    @include('front.partial.footer')
   


    <!-- end footer -->
    <!-- Javascript files-->
   @include('front.partial.script')
   
</body>

</html>