<!-- Responsive navbar-->


<!-- Header - set the background image for the header in the line below-->
<x-main>

    <div>
    <header class="py-5 bg-image-full"
        style="background-image: url('https://leganerd.com/wp-content/uploads/2022/09/voli-aerei.jpg')">
        <div class="text-center my-5">
            <h1 class="text-white fs-1 fw-bolder">Full relax </h1>
            <p class="text-white-50 mb-0 fs-1">Viaggia Con Noi</p>
        </div>
    </header>
    <!-- Content section-->
    <!-- Image element - set the background image for the header in the line below-->
    <div class="py-5 bg-image-full" style="background-image: url('https://source.unsplash.com/4ulffa6qoKA/1200x800')">
        <div class="container opacity-75 personaliza font-family: 'Great Vibes', cursive;">
            <div class="row">
                <div class="col-12">
                    <div class="card p-4 ">
                        <div class="card-body text-center font-italic ">
                            <h5 class="card-title m-b-0 font-family: 'Great Vibes', cursive;">Static Table With
                                Checkboxes</h5>
                        </div>
                        <div class="table-responsive font-family: 'Great Vibes', cursive;">
                            <table class="table">
                                <thead class="thead-light text-success font-family: 'Great Vibes', cursive; ">
                                    <tr>
                                        <h3 class="text-danger border p-1 font-family: 'Great Vibes', cursive;">
                                            Departure flight <img src="assets/icons8-airplane-50.png" alt="">
                                        </h3>
                                        </th>
                                        <th scope="col">Company</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Gate</th>
                                        <th scope="col">Info</th>
                                    </tr>
                                </thead>
                                <tbody class="customtable text-warning ">
                                    <tr>
                                        @foreach ($position['departure'] as $flight)
                                            </th>
                                            <td>{{ $flight['company'] }}</td>
                                            <td>{{ $flight['city'] }}</td>
                                            <td>{{ $flight['time'] }}</td>
                                            <td>{{ $flight['gate'] }} </td>
                                            <td> <a href="{{ $flight['id'] }}"> <i style="font-size:20px "
                                                        class="fa text-primary">&#xf05a;</i></a> </td>
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
        {{-- LA SECONDA CARD VOLI --}}
        <div class="container opacity-75 mb-6 ">
            <div class="row ">
                <div class="col-12">
                    <div class="card p-4">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light text-success">
                                    <tr>
                                        <h3 class="text-danger border p-1">Arrival flight <img
                                                src="/assets/icons8-airplane-50 (1).png" alt=""></h3>
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
                                            <td> <a href="{{ $flight['id']}} "> <i style="font-size:20px "
                                                        class="fa text-primary">&#xf05a;</i></a> </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</x-main>


{{-- LA PARTE FOOTER --}}



<div class="container-fluid">
    ...
</div>




<!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->

<!-- Content section-->

<!-- Footer-->
<x-footer /> <!-- Bootstrap core JS-->
