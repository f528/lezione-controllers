<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Airfly Company viaggi</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Airfly Company</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active"
                            aria-current="home"href="{{ route('homepage') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('detaglio') }}">flight</a></li>





                </ul>
            </div>
        </div>
    </nav>
    <!-- Header - set the background image for the header in the line below-->
    <header class="py-5 bg-image-full"
        style="background-image: url('https://leganerd.com/wp-content/uploads/2022/09/voli-aerei.jpg')">
        <div class="text-center my-5">

            <h1 class="text-white fs-3 fw-bolder">Full relax </h1>
            <p class="text-white-50 mb-0">Viaggia Con Noi</p>
        </div>
    </header>
    <!-- Content section-->

    <!-- Image element - set the background image for the header in the line below-->
    <div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/4ulffa6qoKA/1200x800')">
        <div class="container opacity-75 ">


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h5 class="card-title m-b-0">Static Table With Checkboxes</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light text-success">



                                    <tr>
                                        <h3>Departure flight</h3>

                                        </th>

                                        <th scope="col">Company</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Gate</th>
                                        <th scope="col">Info</th>
                                    </tr>

                                </thead>




                                <tbody class="customtable text-warning">
                                    <tr>


                                        @foreach ($position['departure'] as $flight)
                                            </th>
                                            <td>{{ $flight['company'] }}</td>
                                            <td>{{ $flight['city'] }}</td>
                                            <td>{{ $flight['time'] }}</td>
                                            <td>{{ $flight['gate'] }} </td>
                                            <td> <a href=""><i style="font-size:20px"
                                                        class="fa text-primary">&#xf05a;</i></a></td>


                                    </tr>
                                    @endforeach




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <div class="container opacity-75 ">


            <div class="row ">
                <div class="col-12">
                    <div class="card ">
                        <div class="card-body text-center c">
                            <h5 class="card-title m-b-0">Static Table With Checkboxes</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light text-success">
                                    <tr>

                                        </th>
                                        <th scope="col">Company</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Gate</th>
                                        <th scope="col">Info</th>
                                    </tr>
                                </thead>
                                <tbody class="customtable text-info ">
                                    <tr>
                                        @foreach ($position['arrival'] as $flight)
                                            </th>
                                            <td>{{ $flight['company'] }}</td>
                                            <td>{{ $flight['city'] }}</td>
                                            <td>{{ $flight['time'] }}</td>
                                            <td>{{ $flight['gate'] }}</td>
                                            <td> <a href=""> <i style="font-size:20px "  class="fa text-primary">&#xf05a;</i></a> </td>

                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
        <div style="height: 20rem"></div>
    </div>
    <!-- Content section-->

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Airfly Company 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
