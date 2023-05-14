<!DOCTYPE html>
<html lang="en">

<x-head/>

<body>
 
    <!-- Responsive navbar-->
  <x-navbar/> 

    <!-- Header - set the background image for the header in the line below-->
   <x-main>
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
                                            <td>{{ $flight['id'] }} </td>
                                            <td> <a href="{{ route('detaglio')}}"> <i style="font-size:20px "  class="fa text-primary">&#xf05a;</i></a> </td>
                                           


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
                                            <td> <a href="{{ route('detaglio' )}}"> <i style="font-size:20px "  class="fa text-primary">&#xf05a;</i></a> </td>

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
   

 
    
 
      
   
      
    
   

        <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
     
    <!-- Content section-->

    <!-- Footer-->
   <x-footer/>       <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
