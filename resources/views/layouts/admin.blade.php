{{-- https://codepen.io/htschmed/pen/EEGJZY --}}
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
    <title>{{$title}} - {{config('app.name', 'Brand')}}</title>
    <link rel="shortcut icon" href="{{ asset('../resources/img/zoo-logo2.jpeg') }}">

    <!-- CSS -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet" type="text/css" >{{-- Bootstrap stylesheet --}}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- Javascript -->
    {{-- <script type="text/javascript" src="{{ asset('js/admin.js') }}"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js"></script> --}}

    
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
    {{-- Read this after JQuqery is loaded in --}}
    <script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a5545a28d1.js" crossorigin="anonymous"></script>

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        @include('inc.admin_navbar')

        <div class="content-wrapper">
          <div class="container-fluid">

            @include('inc.messages')

            @yield('content')
            @yield('script')

            <!-- Breadcrumbs-->
            {{-- <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
              </li>
              <li class="breadcrumb-item active">My Dashboard</li>
            </ol> --}}

        {{-- @include('layouts.admin_widgets') <!-- use @yield --> --}}

            <div class="row">
              <div class="col-lg-8">
                <!-- Example Bar Chart Card-->
                {{-- <div class="card mb-3">
                  <div class="card-header">
                    <i class="fa fa-bar-chart"></i> Bar Chart Example</div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-8 my-auto">
                        <canvas id="myBarChart" width="100" height="50"></canvas>
                      </div>
                      <div class="col-sm-4 text-center my-auto">
                        <div class="h4 mb-0 text-primary">$34,693</div>
                        <div class="small text-muted">YTD Revenue</div>
                        <hr>
                        <div class="h4 mb-0 text-warning">$18,474</div>
                        <div class="small text-muted">YTD Expenses</div>
                        <hr>
                        <div class="h4 mb-0 text-success">$16,219</div>
                        <div class="small text-muted">YTD Margin</div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div> --}}

                <!-- Card Columns Example Social Feed-->
                {{-- <div class="mb-0 mt-4">
                  <i class="fa fa-newspaper-o"></i> News Feed</div>
                <hr class="mt-2">
                <div class="card-columns"> --}}

                  <!-- Example Social Card-->
                  {{-- <div class="card mb-3">
                    <a href="#">
                      <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=610" alt="">
                    </a>
                    <div class="card-body">
                      <h6 class="card-title mb-1"><a href="#">David Miller</a></h6>
                      <p class="card-text small">These waves are looking pretty good today!
                        <a href="#">#surfsup</a>
                      </p>
                    </div>
                    <hr class="my-0">
                    <div class="card-body py-2 small">
                      <a class="mr-3 d-inline-block" href="#">
                        <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                      <a class="mr-3 d-inline-block" href="#">
                        <i class="fa fa-fw fa-comment"></i>Comment</a>
                      <a class="d-inline-block" href="#">
                        <i class="fa fa-fw fa-share"></i>Share</a>
                    </div>
                    <hr class="my-0">
                    <div class="card-body small bg-faded">
                      <div class="media">
                        <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                        <div class="media-body">
                          <h6 class="mt-0 mb-1"><a href="#">John Smith</a></h6>Very nice! I wish I was there! That looks amazing!
                          <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                              <a href="#">Like</a>
                            </li>
                            <li class="list-inline-item">·</li>
                            <li class="list-inline-item">
                              <a href="#">Reply</a>
                            </li>
                          </ul>
                          <div class="media mt-3">
                            <a class="d-flex pr-3" href="#">
                              <img src="http://placehold.it/45x45" alt="">
                            </a>
                            <div class="media-body">
                              <h6 class="mt-0 mb-1"><a href="#">David Miller</a></h6>Next time for sure!
                              <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                  <a href="#">Like</a>
                                </li>
                                <li class="list-inline-item">·</li>
                                <li class="list-inline-item">
                                  <a href="#">Reply</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer small text-muted">Posted 32 mins ago</div>
                  </div> --}}

                  <!-- Example Social Card-->
                  {{-- <div class="card mb-3">
                    <a href="#">
                      <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=180" alt="">
                    </a>
                    <div class="card-body">
                      <h6 class="card-title mb-1"><a href="#">John Smith</a></h6>
                      <p class="card-text small">Another day at the office...
                        <a href="#">#workinghardorhardlyworking</a>
                      </p>
                    </div>
                    <hr class="my-0">
                    <div class="card-body py-2 small">
                      <a class="mr-3 d-inline-block" href="#">
                        <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                      <a class="mr-3 d-inline-block" href="#">
                        <i class="fa fa-fw fa-comment"></i>Comment</a>
                      <a class="d-inline-block" href="#">
                        <i class="fa fa-fw fa-share"></i>Share</a>
                    </div>
                    <hr class="my-0">
                    <div class="card-body small bg-faded">
                      <div class="media">
                        <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                        <div class="media-body">
                          <h6 class="mt-0 mb-1"><a href="#">Jessy Lucas</a></h6>Where did you get that camera?! I want one!
                          <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                              <a href="#">Like</a>
                            </li>
                            <li class="list-inline-item">·</li>
                            <li class="list-inline-item">
                              <a href="#">Reply</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer small text-muted">Posted 46 mins ago</div>
                  </div> --}}

                  <!-- Example Social Card-->
                  {{-- <div class="card mb-3">
                    <a href="#">
                      <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=281" alt="">
                    </a>
                    <div class="card-body">
                      <h6 class="card-title mb-1"><a href="#">Jeffery Wellings</a></h6>
                      <p class="card-text small">Nice shot from the skate park!
                        <a href="#">#kickflip</a>
                        <a href="#">#holdmybeer</a>
                        <a href="#">#igotthis</a>
                      </p>
                    </div>
                    <hr class="my-0">
                    <div class="card-body py-2 small">
                      <a class="mr-3 d-inline-block" href="#">
                        <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                      <a class="mr-3 d-inline-block" href="#">
                        <i class="fa fa-fw fa-comment"></i>Comment</a>
                      <a class="d-inline-block" href="#">
                        <i class="fa fa-fw fa-share"></i>Share</a>
                    </div>
                    <div class="card-footer small text-muted">Posted 1 hr ago</div>
                  </div> --}}

                  <!-- Example Social Card-->
                  {{-- <div class="card mb-3">
                    <a href="#">
                      <img class="card-img-top img-fluid w-100" src="https://unsplash.it/700/450?image=185" alt="">
                    </a>
                    <div class="card-body">
                      <h6 class="card-title mb-1"><a href="#">David Miller</a></h6>
                      <p class="card-text small">It's hot, and I might be lost...
                        <a href="#">#desert</a>
                        <a href="#">#water</a>
                        <a href="#">#anyonehavesomewater</a>
                        <a href="#">#noreally</a>
                        <a href="#">#thirsty</a>
                        <a href="#">#dehydration</a>
                      </p>
                    </div>
                    <hr class="my-0">
                    <div class="card-body py-2 small">
                      <a class="mr-3 d-inline-block" href="#">
                        <i class="fa fa-fw fa-thumbs-up"></i>Like</a>
                      <a class="mr-3 d-inline-block" href="#">
                        <i class="fa fa-fw fa-comment"></i>Comment</a>
                      <a class="d-inline-block" href="#">
                        <i class="fa fa-fw fa-share"></i>Share</a>
                    </div>
                    <hr class="my-0">
                    <div class="card-body small bg-faded">
                      <div class="media">
                        <img class="d-flex mr-3" src="http://placehold.it/45x45" alt="">
                        <div class="media-body">
                          <h6 class="mt-0 mb-1"><a href="#">John Smith</a></h6>The oasis is a mile that way, or is that just a mirage?
                          <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                              <a href="#">Like</a>
                            </li>
                            <li class="list-inline-item">·</li>
                            <li class="list-inline-item">
                              <a href="#">Reply</a>
                            </li>
                          </ul>
                          <div class="media mt-3">
                            <a class="d-flex pr-3" href="#">
                              <img src="http://placehold.it/45x45" alt="">
                            </a>
                            <div class="media-body">
                              <h6 class="mt-0 mb-1"><a href="#">David Miller</a></h6>
                              <img class="img-fluid w-100 mb-1" src="https://unsplash.it/700/450?image=789" alt="">I'm saved, I found a cactus. How do I open this thing?
                              <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                  <a href="#">Like</a>
                                </li>
                                <li class="list-inline-item">·</li>
                                <li class="list-inline-item">
                                  <a href="#">Reply</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer small text-muted">Posted yesterday</div>
                  </div>
                </div> --}}

                <!-- /Card Columns-->
              {{-- </div>
              <div class="col-lg-4"> --}}

                <!-- Example Pie Chart Card-->
                {{-- <div class="card mb-3">
                  <div class="card-header">
                    <i class="fa fa-pie-chart"></i> Pie Chart Example</div>
                  <div class="card-body">
                    <canvas id="myPieChart" width="100%" height="100"></canvas>
                  </div>
                  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div> --}}

                <!-- Example Notifications Card-->
                {{-- <div class="card mb-3">
                  <div class="card-header">
                    <i class="fa fa-bell-o"></i> Feed Example</div>
                  <div class="list-group list-group-flush small">
                    <a class="list-group-item list-group-item-action" href="#">
                      <div class="media">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                        <div class="media-body">
                          <strong>David Miller</strong>posted a new article to
                          <strong>David Miller Website</strong>.
                          <div class="text-muted smaller">Today at 5:43 PM - 5m ago</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">
                      <div class="media">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                        <div class="media-body">
                          <strong>Samantha King</strong>sent you a new message!
                          <div class="text-muted smaller">Today at 4:37 PM - 1hr ago</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">
                      <div class="media">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                        <div class="media-body">
                          <strong>Jeffery Wellings</strong>added a new photo to the album
                          <strong>Beach</strong>.
                          <div class="text-muted smaller">Today at 4:31 PM - 1hr ago</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">
                      <div class="media">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/45x45" alt="">
                        <div class="media-body">
                          <i class="fa fa-code-fork"></i>
                          <strong>Monica Dennis</strong>forked the
                          <strong>startbootstrap-sb-admin</strong>repository on
                          <strong>GitHub</strong>.
                          <div class="text-muted smaller">Today at 3:54 PM - 2hrs ago</div>
                        </div>
                      </div>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#">View all activity...</a>
                  </div>
                  <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
              </div>
            </div> --}}

          </div>
        </div>
            <!-- Example DataTables Card-->

          <!-- /.container-fluid-->
          <!-- /.content-wrapper-->
          <footer class="sticky-footer">
            <div class="container">
              <div class="text-center">
                <p>Copyright © 2019-<?php echo date ("Y"); ?> Claybrooks Inc. All Rights Reserved.</p>
              </div>
            </div>
          </footer>
          <!-- Scroll to Top Button-->
          <a class="scroll-to-top rounded" href="#">
            <i class="fa fa-angle-up"></i>
          </a>
          
          <!-- Logout Modal-->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to Log Out?</h5>
                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                          </button>
                      </div>
                      <div class="modal-body">Select "Log Out" if you are ready to end your current session.</div>
                      <div class="modal-footer">
                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                          {{-- <a class="btn btn-primary" href="#">Log Out</a> --}}
                          <a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                              href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          </div>
          </body>
</html>