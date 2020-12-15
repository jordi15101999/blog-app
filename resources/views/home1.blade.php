<?php
// function get_CURL($url)
// {

//     $curl = curl_init();
//     curl_setopt($curl, CURLOPT_URL, $url);
//     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//     $result = curl_exec($curl);
//     curl_close($curl);

//     return json_decode($result, true);
// }

// $result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCTSBcR-u19X53MJm8AC21Ig&key=AIzaSyBXED3JUlp-xslQwy4m-b0vHdJnCqNaTSI');

// $youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
// $channelName = $result['items'][0]['snippet']['title'];
// $jumlahSubs = $result['items']['0']['statistics']['subscriberCount'];


// $urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyBXED3JUlp-xslQwy4m-b0vHdJnCqNaTSI&channelId=UCTSBcR-u19X53MJm8AC21Ig&maxResults=1&order=date&part=snippet';

// $result = get_CURL($urlLatestVideo);
// $latestVideoId = $result['items'][0]['id']['videoId'];



?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>JJ - Blog</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
    <link href="{{ asset('/sb-admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    {{-- <script src="https://kit.fontawesome.com/d72d99fe37.js" crossorigin="anonymous"></script> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/home1.css">
  </head>
<body id="top-page">
  
  <!-- Navigation -->
  {{-- <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top my-0" id="myNav">
    <div class="container">
      <a class="navbar-brand" href="#"><img src="/img/logo.png" alt="" width="50px">Pocong<sub>Lari</sub></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> --}}
  {{-- App Vue --}}
  <div id="app">
  
  <Navbarhome></Navbarhome>  
    
    <!-- Page Content -->
    <div class="container my-3 kontener">

      <div class="row" id="row-home">
      {{-- Sidebar Widget Column --}}
      <div class="col-md-4">
        <!-- Search Widget -->
        {{-- <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control"  placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary yayaya" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div> --}}

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li><a href="/category/7">Berita</a></li>
                  <li><a href="/category/8">Tutorial</a></li>
                  <li><a href="/category/9">Thread</a></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="/category/10">Tips & Trick</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Find Me</h5>
          <div class="card-body" id="socmed">
            <ul>
              <li>
                <a href="https://instagram.com/johjordi" id="ig"><i class="fab fa-instagram"></i></a>
              </li>
              <li>
                <a href="https://twitter.com/sempetjadibucin" id="twitter"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="https://facebook.com/jordiajahah" id="fb"><i class="fab fa-facebook"></i></a>
              </li>
              <li>
                <a href="https://github.com/jordi15101999"><i class="fab fa-github"></i></a>
              </li>
              <li>
                <a href="https://www.linkedin.com/in/johannes-jordi-8a583417a/" id="linked"><i class="fab fa-linkedin"></i></a>
              </li>
            </ul>
          </div>
        </div>

        {{-- <div class="card my-4">
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                  <img src="" width="120" class="img-thumbnail rounded-circle">
              </div>
              <div class="col-md-8">
                  <h5></h5>
                  <p> Subscribers.</p>
                  <div class="g-ytsubscribe" data-channelid="UCTSBcR-u19X53MJm8AC21Ig" data-layout="default" data-count="hidden"></div>
              </div>
          </div>
          <div class="row mt-3 pb-3">
              <div class="col">
                  <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/?rel=0" allowfullscreen></iframe>
                  </div>
              </div>
          </div>
          </div>
        </div> --}}

        

      </div>

      <!-- Blog Entries Column -->
      <div class="col-md-8">
        
        <!-- Blog Post -->
        <router-view></router-view>
        
      </div>
      
      
    </div>
    <!-- /.row -->
    
  </div>
  <!-- /.container -->
</div>
  {{-- /.app --}}
  
  <!-- Footer -->
  
  <footer class="py-4 bg-white">
    <div class="container">
        
            <div class="row justify-content-center" id="contact">
              <div class="flash-data" data-flashdata="{{ Session::get('pesan') }}"></div>
                    <div class="col-md-6" >
                        <h2 class="text-center" style="padding:10px 0;">
                        Contact Me
                        </h2>
                        <form action="" method="post">
                          <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name"><strong>Name</strong></label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email"><strong>Email</strong></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="messages"><strong>Messages</strong></label>
                                <textarea class="form-control" name="messages" id="messages" rows="3" placeholder="Input your message here." style="height:150px" required></textarea>
                            </div>
                            <button type="submit" name="submit" id="submit" class="btn btn-sm btn-dark mb-3">Send Email</button>
                        </form>
                    </div>

            </div>
    </div>
    <div class="container">
      <hr style="border-bottom:1px black solid"> 
    </div>
    <div class="container">
      <p class="m-0 text-center text-black">Copyright &copy; Pocong Lari 2020</p>
    </div>
    <!-- /.container -->
  </footer>
  

  
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>    
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  {{-- <script src="{{ asset('js/nav.js') }}"></script> --}}
  {{-- <script src="{{ asset('js/scroll-to-top.js') }}"></script> --}}
  {{-- <script src="{{ asset('js/main.js') }}"></script> --}}
  <script src="https://apis.google.com/js/platform.js"></script>
  {{-- <script src="{{ asset('js/sweet.js') }}"></script> --}}
</body>
</html>