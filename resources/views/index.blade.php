
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ask Me</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/editor.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css"> </head>
</head>

<body>
    <div class="top-menu-bottom932">
        <nav class="navbar navbar-default">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="{{ asset('image/logo.png') }}" alt="Logo"></a>
                <div class="col-md-4" style="margin-top: 10px">
                    <form class="form-inline" action="{{ route('posts.home') }}" method="GET">
                        <input class="form-control mr-sm-2 search" type="search" placeholder="Search" aria-label="Search" name="search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                <div class="collapse navbar-collapse col-md-8" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ route('posts.home') }}">Home</a></li>
                        <li><a href="{{ route('posts.create') }}" target="_blank">Ask Question</a></li>
                        @if (auth()->guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li><a href="{{ route('user.logout') }}">Logout</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        {{-- <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#">WebSiteName</a>
              </div>
              <ul class="nav navbar-nav" style="margin-left: 200px">
                <li class="active"><a href="{{ route('posts.home') }}">Home</a></li>
                <li><a href="{{ route('posts.create') }}" target="_blank">Ask Question</a></li>
                @if (auth()->guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li><a href="{{ route('user.logout') }}">Logout</a></li>
                @endif
              </ul>
              <form class="navbar-form navbar-left" action="/action_page.php">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div>
          </nav> --}}
    </div>
    
    <section class="main-content920">
        <div class="container">
            <div class="row">
                @yield('content')
                <aside class="col-md-3 sidebar97239">
                    <div class="status-part3821">
                    <h4>stats</h4> <a href="#"><i class="fa fa-question-circle" aria-hidden="true"> Question({{ total_question() }}) </i></a> <i class="fa fa-comment" aria-hidden="true"> Answers({{ total_answer() }})</i> </div>
                    <div class="categori-part329">
                        <h4>Category</h4>
                        <ul>
                            <li><a href="#">web developer</a></li>
                            <li><a href="#">Andriod developer</a></li>
                            <li><a href="#">grapics developer</a></li>
                            <li><a href="#">web developer</a></li>
                        </ul>
                    </div>
                    <div class="recent-post3290">
                        <h4>Recent Post</h4>
                        <div class="post-details021"> <a href="#"><h5>How much do web developers</h5></a>
                            <p>I am thinking of pursuing web developing as a career & was ...</p> <small style="color: #848991">July 16, 2017</small>
                        </div>
                        <hr>
                        <div class="post-details021"> <a href="#"><h5>How much do web developers</h5></a>
                            <p>I am thinking of pursuing web developing as a career & was ...</p> <small style="color: #848991">July 16, 2017</small>
                        </div>
                        <hr>
                        <div class="post-details021"> <a href="#"><h5>How much do web developers</h5></a>
                            <p>I am thinking of pursuing web developing as a career & was ...</p> <small style="color: #848991">July 16, 2017</small>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    <!--    footer -->
    <section class="footer-part">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="info-part-three320">
                        <h4>Popular Questions</h4>
                        <div class="news-info209">
                            <h5>Why are the British confused</h5>
                            <p>(Why I darest say, they darest not get offended when they so ...</p> <small>July 16, 2017</small> </div>
                        <div class="news-info209">
                            <h5>How to approach applying for</h5>
                            <p>(I am trying to find/change my career trajectory. Its a good cozy ...</p> <small>July 16, 2017</small> </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info-part-four320">
                        <h4>Latest Tweets</h4>
                        <div class="tweet-details29">
                            <p><i class="fa fa-twitter-square" aria-hidden="true"></i><a href="#"> codeThemesCheck a new update #AskMe </a></p> <small>about 2 weeks ago</small>
                        </div>
                        <div class="tweet-details29">
                            <p><i class="fa fa-twitter-square" aria-hidden="true"></i><a href="#"> codeThemesCheck a new update #AskMe</a></p> <small>about 2 weeks ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/npm.js') }}"></script>
    <script src="{{ asset('js/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
</body>
</html>