<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="/img/logo.png" type="image/x-icon">
        <title>JJ - Blog</title>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <script src="https://kit.fontawesome.com/d72d99fe37.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
        <link rel="stylesheet" href="/css/homepage.css">
        <link rel="stylesheet" href="/css/homepage1.css">
        
    </head>
    <body>
        
        <div id="app">
            <div class="page-wrapper chiller-theme toggled">
              <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                <i class="fas fa-bars"></i>
              </a>
      
              <!-- Menu Homepage-->
              <menuhomepage> </menuhomepage>
              <main class="page-content">
                <div class="container-fluid">
             
              <!-- Nested Routes -->
              <router-view></router-view>
      
                </div>
              

                <footer>
                    <div class="atas">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5><strong>Contact Me</strong></h5>
                                    <p>I am waiting for you to collaborate with me. So what are you waiting for? Just send me some email and I will respond it quickly!</p>
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
                            
                            <div class="col-md-6">
                                <form action="" method="POST">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="messages" id="messages" rows="3" placeholder="Input your message here." required></textarea>
                                    </div>
                                    <button type="submit" name="submit" id="submit" class="btn btn-dark"><strong>Send Email</strong></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="bawah">
                        <div class="container">
                            <hr style="border:black 1px solid">
                            <div class="container text-center">Copyright ©2020 Johannes Jordi </div>
                        </div>
                    </div>
                </footer>   
              </main>
            </div> 
          </div>
        
        
        
    
    
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://unpkg.com/vue-meta/dist/vue-meta.js"></script>
</body>
</html>