<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>E-com Project</title>
  </head>
  <body>

    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

      <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
<style>
  img.slider-img{
    height: 500px !important;
  }
  .carousel-des{
    background: #444141;
  }
  .custom-product{
    height: 400px !important;
  }
 .trending-wrapper{
  height: 200px;
  padding: 2%;
 }
  .trending-img{
    height: 100px;
  }
  .trending-item
  {
    float:left;
    width: 20%;
  }
  .detail-img{
    height: 200px;

  }
  .search-box{
    width: 500px !important;
  }


</style>
<script>
    // $(document).ready(function(){
    //     $("button").click(function(){
    //         alert("all set");
    //     })
            
        
    // });
</script>
</html>