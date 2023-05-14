
<!DOCTYPE html>
<html lang="en">
<x-head/> 

    <body>
    <!-- Responsive navbar-->
   <x-navbar/>
  
   
         <div class="container text-center">
        <div class="row">
            <div class="row">
                 <x-card />
                
                <section class="mx-auto my-5" style="max-width: 23rem;">
                    @foreach ($position['departure'] as $flight)
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="{{ $flight['cover'] }}" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body text-success">
                                <h5 class="card-title font-weight-bold"><a>Detaglio del volo</a></h5>
                                <ul class="list-unstyled list-inline mb-0">
                                    <li class="list-inline-item me-0">

                                    <li class="list-inline-item ">
                                        <p class="text-danger text-capitalize fs-1 "> Company: {{ $flight['company'] }}
                                        </p>

                                        <p class="text-muted">Posti Totali:{{ $flight['seats']['total'] }}</p>
                                        <p class="text-muted">Posti ocuppati:{{ $flight['seats']['occupied'] }}</p>
                                    </li>
                                </ul>

                                </ul>
                                <a href="{{ route('homepage') }}" class="btn btn-dark text-warning">Go
                                    back to flights</a>
                            </div>
                        </div>
                    @endforeach

                </section>

            </div>

            <hr>


        </div>
        <hr>

 
     
  
  


    





        <x-footer/>   
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
</body>



</html>
