<h2 style="padding-left:60px;" class="txt">Galerie</h2><br>
<div style="overflow-x: auto; overflow:hiden" class="galerie d-flex">
@for($i = 1; $i < 12; $i++)
    <img src="images/{{ $i }}.jpg" alt="img{{ $i }}" >
@endfor
</div>
<!-- <div style="width:50%;">

<div  id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-120" src="images/1.jpg" alt="img1" height="420px">
    </div>
    @for($i = 2; $i < 12; $i++)
    <div class="carousel-item">
      <img class="d-block w-100" src="images/{{ $i }}.jpg" alt="img{{ $i }}"height="420px" >
    </div>
    @endfor
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div> -->