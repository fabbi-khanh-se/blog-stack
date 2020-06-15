@extends('index')
@section('content')
    <div class="col-md-9">
        <div id="main">
            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1">Recent Question</label>
            <input id="tab2" type="radio" name="tabs">
            <label for="tab2">Most Views</label>
            <input id="tab3" type="radio" name="tabs">
            <label for="tab3">Recently Answered</label>
            <input id="tab4" type="radio" name="tabs">
            <label for="tab4">No Answer</label>
            
            <section id="content1">
                <!--Recent Question Content Section -->
                <div class="question-type2033">
                    @foreach ($posts as $post)
                        <div class="row">
                            <div class="col-md-1">
                                <div class="left-user12923 left-user12923-repeat">
                                    <a href="#"><img src="image/images.png" alt="image"></a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="right-description893">
                                    <div id="que-hedder2983">
                                    <h3><a href="{{ route('posts.show', $post->id) }}" target="_blank">{{ $post->title }}</a></h3> </div>
                                    <div class="ques-details10018">
                                    <p>{!! \Illuminate\Support\Str::limit(($post->body), 100, $end = '...') !!}</p>
                                    <a href="{{ route('posts.show', $post->id) }}">View Post</a>
                                    </div>
                                    <hr>
                                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true">{{ $post->created_at }}</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="ques-type302">
                                    
                                    <a href="#">
                                        <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">{{ count_answer($post->id) }} answer</i></button>
                                    </a>
                                    <a href="#">
                                        <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true">{{ $post->view_count }} view</i> </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            <!--  End of content-1------>
            
            <section id="content2">
            <!--Most Response Content Section -->
            <div class="question-type2033">
                @foreach ($views as $view)
                    <div class="row">
                        <div class="col-md-1">
                            <div class="left-user12923 left-user12923-repeat">
                                <a href="#"><img src="image/images.png" alt="image"></a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-9">
                            <div class="right-description893">
                                <div id="que-hedder2983">
                                <h3><a href="{{ route('posts.show', $view->id) }}" target="_blank">{{ $view->title }}</a></h3> </div>
                                <div class="ques-details10018">
                                <p>{!! \Illuminate\Support\Str::limit(($view->body), 100, $end = '...') !!}</p>
                                <a href="{{ route('posts.show', $view->id) }}">View Post</a>
                                </div>
                                <hr>
                                <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true">{{ $view->created_at }}</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="ques-type302">
                                
                                <a href="#">
                                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">{{ count_answer($view->id) }} answer</i></button>
                                </a>
                                <a href="#">
                                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true">{{ $view->view_count }} view</i> </button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>                        
            </section>
            
            <!----end of content-2----->
            
            <section id="content3">
                <!--Recently answered Content Section -->
                <div class="question-type2033">
                    <div class="row">
                        <div class="col-md-1">
                            <div class="left-user12923 left-user12923-repeat">
                                <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-9">
                            <div class="right-description893">
                                <div id="que-hedder2983">
                                    <h3><a href="post-deatils.html" target="_blank">This is my first Question</a></h3> </div>
                                <div class="ques-details10018">
                                    <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                                </div>
                                <hr>
                            <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-check" aria-hidden="true"> solved</i></a> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5</i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-comment" aria-hidden="true">  5 answer</i></a> <a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </a> </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="ques-type302">
                                <a href="#">
                                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                                </a>
                                <a href="#">
                                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> 
                
                <div class="question-type2033">
                    <div class="row">
                        <div class="col-md-1">
                            <div class="left-user12923 left-user12923-repeat">
                                <a href="#"><img src="image/images.png" alt="image"> </a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> </div>
                        </div>
                        <div class="col-md-9">
                            <div class="right-description893">
                                <div id="que-hedder2983">
                                    <h3><a href="post-deatils.html" target="_blank">This is my first Question</a></h3> </div>
                                <div class="ques-details10018">
                                    <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis.</p>
                                </div>
                                <hr>
                            <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-check check-color329" aria-hidden="true"> solved</i></a> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5</i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true"> 4 min ago</i></a> <a href="#"><i class="fa fa-comment" aria-hidden="true">  5 answer</i></a> <a href="#"><i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </a> </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="ques-type302">
                                <a href="#">
                                    <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">  333335 answer</i></button>
                                </a>
                                <a href="#">
                                    <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true"> 70 view</i> </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>
            <!--End content-3 -->
            
            
            
            <section id="content4">
                <!--No answered Content Section -->
                <div class="question-type2033">
                    @foreach ($noAnswers as $noAnswer)
                        <div class="row">
                            <div class="col-md-1">
                                <div class="left-user12923 left-user12923-repeat">
                                    <a href="#"><img src="image/images.png" alt="image"></a> <a href="#"><i class="fa fa-check" aria-hidden="true"></i></a> </div>
                            </div>
                            <div class="col-md-9">
                                <div class="right-description893">
                                    <div id="que-hedder2983">
                                    <h3><a href="{{ route('posts.show', $noAnswer->id) }}" target="_blank">{{ $noAnswer->title }}</a></h3> </div>
                                    <div class="ques-details10018">
                                    <p>{!! \Illuminate\Support\Str::limit(($noAnswer->body), 100, $end = '...') !!}</p>
                                    <a href="{{ route('posts.show', $noAnswer->id) }}">View Post</a>
                                    </div>
                                    <hr>
                                    <div class="ques-icon-info3293"> <a href="#"><i class="fa fa-star" aria-hidden="true"> 5 </i> </a> <a href="#"><i class="fa fa-folder" aria-hidden="true"> wordpress</i></a> <a href="#"><i class="fa fa-clock-o" aria-hidden="true">{{ $noAnswer->created_at }}</i></a> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"> Question</i></a> <a href="#"><i class="fa fa-bug" aria-hidden="true"> Report</i></a> </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="ques-type302">
                                    
                                    <a href="#">
                                        <button type="button" class="q-type238"><i class="fa fa-comment" aria-hidden="true">{{ count_answer($noAnswer->id) }} answer</i></button>
                                    </a>
                                    <a href="#">
                                        <button type="button" class="q-type23 button-ques2973"> <i class="fa fa-user-circle-o" aria-hidden="true">{{ $noAnswer->view_count }} view</i> </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!--End of content-4-->
            </section>
        </div>
    </div>
@endsection