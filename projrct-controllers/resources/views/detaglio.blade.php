











<!-- Header - set the background image for the header in the line below-->
<x-main>


<div class="card perso" style="width: 18rem;">
  <img src="{{ $detaglio['cover'] }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-success ">{{ $detaglio['company'] }}   <img src="assets/icons8-airplane-50.png" alt=""> </h5>

    <h5 class="card-title text-dark">{{ $posti }}
    <h5 class="card-title text-dark"> partenza: {{$detaglio['time']}}

    </h5>
    <p class="card-text text-dark">posti totali :{{ $detaglio['seats']['total'] }}</p>
    </p>
    <a href="{{route('homepage') }}" class="btn btn-primary">GO BACK TO FLIGHT</a>
  </div>
</div>
<div class="container-fluid">

</div><div class="container-fluid">

</div>
<

 </x-main>


























