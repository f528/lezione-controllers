<!DOCTYPE html>
<html lang="en">

<x-head />

<body >

    <x-navbar />

 


  
       
    @foreach ($position['departure'] as $flight)
    <div class="container ">
        ...<div class="card bg-success"  style ="width: 20rem;">
            <img src="{{ $flight['cover'] }}" class="card-img-top" alt="...">
            <div class="card-body">
                   
                <h5 class="card-title text-danger">{{ $flight['company'] }} <img src="/assets/icons8-airplane-50.png" alt=""></h5>
                <p class="card-text text-dark">TOTAL SEATS: {{ $flight['seats']['total'] }}</p>
                <p class="card-text text-dark">OCCUPIED SEATS: {{ $flight['seats']['occupied'] }}</p>
                <p class="card-text text-dark">GATE NUMBER : {{ $flight['gate'] }}</p>
                <a href="{{ route('homepage') }}" class="btn btn-primary">Go back to flights</a>
                
            </div>
                        
        </div>
    </div>
      @endforeach
     
    <div class="container-fluid">
        ...
    </div>
    <div class="container-fluid">
        ...
    </div>



















    <x-footer />
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>



</html>
