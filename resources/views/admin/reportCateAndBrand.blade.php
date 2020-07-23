<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Report Cate & Brand</title>
  <!-- FONT AWESOME--->
  <link rel="stylesheet" href="{{asset("plugin/fontawesome-free/css/all.min.css")}}">
  <!-- BOOTSTRAP--->
  <link rel="stylesheet" href="{{asset("plugin/bootstrap/css/bootstrap.min.css")}}">
  <link rel="stylesheet" href="{{asset("css/orionicon.css")}}">
  <!-- GOOGLE FONT--->
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;700&display=swap" rel="stylesheet">
  <!-- OWN CSS--->
  <link rel="stylesheet" href="{{asset("css/custom-frontpage.css")}}">
  <link rel="stylesheet" href="{{asset("css/custom.css")}}">
  <link rel="stylesheet" href="{{asset("css/style.default.css")}}">
  <!-- TESTIMONIAL -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
  <!--data table -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <!-- Na --->
  <link rel="stylesheet" href="{{asset("css/product-details.css")}}">
  <link rel="stylesheet" href="{{asset("css/product-list.css")}}">
  <link rel="stylesheet" href="{{asset("css/google-fonts-poppins.css")}}">
  <!-- lightSlider -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <link rel="stylesheet" href="{{asset("css/lightslider.css")}}">
</head>

<body>
  <section>
    <div class="container" style="margin-top: 30px; margin-bottom: 30px;">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header bg-dark">
              <h2 class="text-center" style="color: white;">Report Category</h2>
            </div>
            <div class="card-body">
              <table class="table text-center">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Feature</th>
                    <th scope="col">Category Name</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($category as $category)
                  <tr>
                    <th scope="row" class="align-middle">{{$category->id}}</th>
                    <td class="align-middle"><img src="{{asset('img/category/'.$category->category_image)}}" alt="" width="70px"></td>
                    <td class="align-middle">{{$category->category_name}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header bg-dark">
              <h2 class="text-center" style="color: white;">Report Brand</h2>
            </div>
            <div class="card-body">
              <table class="table text-center">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Feature</th>
                    <th scope="col">Brand Name</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($brand as $brand)
                  <tr>
                    <th scope="row" class="align-middle">{{$brand->id}}</th>
                    <td class="align-middle"><img src="{{asset('img/brands/'.$brand->brand_image)}}" alt="" width="70px"></td>
                    <td class="align-middle">{{$brand->brand_name}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- JQUERY --->
  <script src="{{asset("plugin/jquery/jquery.min.js")}}"></script>
  <!-- BS4 --->
  <script src="{{asset("plugin/bootstrap/js/bootstrap.min.js")}}"></script>
  <!-- Popper -->
  <script src="{{asset("plugin/popper.js/umd/popper.min.js")}}"></script>
  <!-- TINY HUB JS -->
  <script src="{{asset("js/front.js")}}"></script>
  <!-- Testimonial -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  @yield('script-section')
  <!-- data table -->
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <!-- light Slider -->
  <script src="{{asset("js/lightslider.js")}}"></script>
</body>

</html>