<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="{{ asset('admin-assets/images/favicon.png') }}" type="">

  <title> Feane </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/css/bootstrap.css')}}" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="{{ asset('admin-assets/https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css')}}" />
  <!-- nice select  -->
  <link rel="stylesheet" href="{{ asset('admin-assets/https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css')}}" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="{{ asset('admin-assets/css/font-awesome.min.css')}}" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="{{ asset('admin-assets/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('admin-assets/css/responsive.css')}}" rel="stylesheet" />
  <body class="sub_page">

    <div class="hero_area">
      <div class="bg-box">
        <img src="{{ asset('admin-assets/images/hero-bg.jpg')}}" alt="">
      </div>
      <!-- header section strats -->
      <header class="header_section">
        <div class="container">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <span>
                Feane
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  mx-auto ">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('home') }}">Home </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('home') }}">About</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="{{ route('bookings.create') }}">Book Table  </a>
                </li>
              </ul>
              <div class="user_option">
                <a href="{{ route('login') }}" class="user_link">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </a>
                @if (Auth::check())
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" style="background: none; border: none; color: rgb(255, 255, 255); cursor: pointer;">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                    </button>
                </form>
            @endif
                <a class="cart_link" href="{{ route('cart.show') }}">
                  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                    <g>
                      <g>
                        <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                     c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                     C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                     c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                     C457.728,97.71,450.56,86.958,439.296,84.91z" />
                      </g>
                    </g>
                    <g>
                      <g>
                        <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                     c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                      </g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                  </svg>
                </a>

                <a href="{{ route('menu') }}" class="order_online">
                  Order Online
                </a>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
    </div>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 20px;
        }

        .table {
            margin-top: 20px;
        }

        .img-fluid {
            border-radius: 5px;
        }

        .btn-sm {
            margin-left: 5px;
        }
    </style>
</head>
<body>


    <div class="container">
        <h1 class="my-4">Your Cart</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($cartItems->isEmpty())
            <p class="text-center">Your cart is empty.</p>
        @else
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Meal</th>
                            <th scope="col">Description</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cartItems as $cartItem)
                            @foreach ($cartItem->meals as $meal)
                                <tr>
                                    <td>
                                        <img src="{{ asset($meal->image) }}" alt="{{ $meal->name }}" class="img-fluid" style="max-width: 100px;">
                                    </td>
                                    <td>{{ $meal->name }}</td>
                                    <td>{{ $meal->description }}</td>
                                    <td>
                                        <form action="{{ route('cart.update', $meal->id) }}" method="POST" class="d-inline-block">
                                            @csrf
                                            @method('PUT')
                                            <input type="number" name="quantity" value="{{ $meal->pivot->quantity }}" min="1" class="form-control d-inline-block" style="width: 60px;">
                                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                        </form>
                                    </td>
                                    <td>${{ $meal->price }}</td>
                                    <td>${{ $meal->price * $meal->pivot->quantity }}</td>
                                    <td>
                                        <form action="{{ route('cart.remove', $meal->id) }}" method="POST" class="d-inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
