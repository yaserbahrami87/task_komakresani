<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">
    <link href="{{asset('fonts/fontawesome/css/all.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet" />
    <title>کمک رسانی</title>
  </head>
  <body>
    <main class="container-fluid">
        <div class="row">
            <nav class="navbar fixed-top navbar-light bg-light" id="navbar_top">
                <div class="row">
                    <div class="col-4">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg>
                    </div>
                    <div class="col-4 text-center">
                        <a href="/">
                            <img src="{{asset('/img/logo.png')}}"  />
                        </a>
                    </div>
                    <div class="col-4 ">
                        <span>رویداد</span>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                        </svg>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 input-group-sm">
                        <input type="text" class="form-control" placeholder="همه دسته بندی ها" data-toggle="modal" data-target="#exampleModal" >
                    </div>
                </div>
            </nav>



            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content ">
                    <div class="modal-header d-block ">
                        <p class="modal-title text-center">جستجوی رویداد</p>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="\events\search" method="GET" >
                        {{csrf_field()}}
                        <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="event" placeholder="نام رویداد ...">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="cat" >
                                        @if ($categories->count()>0)
                                            @foreach ($categories as $cat)
                                                 <option value="{{$cat->id}}">{{$cat->category}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>

                        </div>
                        <div class="modal-footer">
                            <div class="container">
                                <button type="submit" class="btn btn-default container">
                                    جستجو
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                                        <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>

            <!-- Navbar bottom -->
            <nav class="navbar fixed-bottom navbar-light bg-light" id="navbar_bottom">
                <div class="row">
                    <a class="col text-center" href="">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                            <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                        </svg>
                        <p>جستجو</p>
                    </a>
                    <a class="col text-center active" href="">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-calendar4" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 2H2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1zM2 1a2 2 0 0 0-2 2v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2z"/>
                            <path fill-rule="evenodd" d="M14 2H2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1zM2 1a2 2 0 0 0-2 2v2h16V3a2 2 0 0 0-2-2H2z"/>
                            <path fill-rule="evenodd" d="M3.5 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5zm9 0a.5.5 0 0 1 .5.5V1a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                        <p>رویدادها</p>
                    </a>
                    <a class="col text-center" href="">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                            <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                        </svg>
                        <p>پروفایل من</p>
                    </a>
                    <a class="col text-center" href="">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-slash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"/>
                        </svg>
                        <p>تخفیف ها</p>
                    </a>
                    <a class="col text-center" href="">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-justify" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                        <p>موارد بیشتر</p>
                    </a>
                </div>
            </nav>
        </div>
        <div class="row" id="results">
            @if($data->count()>0)
                @foreach ($data as $item)
                    <article class="col-12">
                        <div class="media">
                            <img src=" {{$item->img}}">
                            <div class="media-body">
                            <a href="#">{{$item->event}}</a>
                            <p>از {{$item->startdate}} تا {{$item->expiredate}}</p>
                            <a href="">{{$item->city}}</a>
                            <div class="row">
                                    <div class="col-7">
                                        <a href="">{{$item->category}}</a>
                                    </div>
                                    <div class="col-5">
                                        <p> {{$item->likes}} علاقمند</p>
                                    </div>
                            </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            @endif
        </div>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>
