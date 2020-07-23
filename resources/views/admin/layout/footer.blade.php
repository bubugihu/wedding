<footer class="footer bg-white shadow align-self-end py-3 px-xl-5 w-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 text-center text-md-left text-dark">
          <p class="mb-2 mb-md-0">APTECH &copy; 2020</p>
        </div>
        <div class="col-md-6 text-center text-md-right text-dark-400">
          <p class="mb-0">Design by <a href="#" class="external text-dark">Team 1 - T11908M0</a></p>
        </div>
      </div>
    </div>
  </footer>

  @section("script-section")
  {{--Prevent refresh duplicate--}}
  <script>
    if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }
    </script>
  @endsection