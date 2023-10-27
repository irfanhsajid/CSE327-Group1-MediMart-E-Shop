<footer class="bg-dark">
    <div class="container pt-lg-5">
        <div class="row text-light">
  
          <div class="col-lg-5 ms-3 mt-5">
            <h4>MediMart E-Shop</h4>
            <p>Lorem ipsum dolor sit amet. hic itaque officia voluptatibus assumenda necessitatibus ad saepe impedit eius quod quasi quia explicabo doloribus harum atque maiores.
            </p>
          </div>
  
          <div class="col-lg-3 mt-5">
            <h4 class="ms-3">Services</h4>
            <div class="row">
              <ul>
                <li>
                  <a href="#" class="btn btn-dark btn-lg" tabindex="-1" role="button" aria-disabled="true">Books</a>
                </li>
                <li>
                  <a href="#" class="btn btn-dark btn-lg" tabindex="-1" role="button" aria-disabled="true">Gadgets</a>
                </li>
                <li>
                  <a href="#" class="btn btn-dark btn-lg" tabindex="-1" role="button" aria-disabled="true">Accessories</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 my-5">
            <h4 class="ms-3">About</h4>
            <div class="row">
              <ul>
                <li>
                  <a href="#" class="btn btn-dark btn-lg" tabindex="-1" role="button" aria-disabled="true">Company</a>
                </li>
                <li>
                  <a href="#" class="btn btn-dark btn-lg" tabindex="-1" role="button" aria-disabled="true">Gadgets</a>
                </li>
                <li>
                  <a href="#" class="btn btn-dark btn-lg" tabindex="-1" role="button" aria-disabled="true">Accessories</a>
                </li>
              </ul>
            </div>
          </div>
    
        </div>
    
      </div>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

<!-- Java query CDN -->
<script
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
  crossorigin="anonymous"
  ></script>

<!-- Java Script CDN -->
<script src="{{asset('frontend')}}assets/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('frontend')}}assets/js/lightbox-plus-jquery.js"></script>
<script src="{{asset('frontend')}}app.js"></script>

{{-- product cartegory changing js part starts --}}
<script src="{{asset('frontend')}}/assets/js/isotope.pkgd.min.js"></script>


<script>
  var portfolioIsotope = $('.portfolio-container').isotope({
     itemSelector: '.portfolio-item',
     layoutMode: 'fitRows'
 });
 $('#portfolio-flters li').on('click', function () {
     $("#portfolio-flters li").removeClass('active');
     $(this).addClass('active');

     portfolioIsotope.isotope({filter: $(this).data('filter')});
 });
</script>
{{-- product cartegory changing js part ends --}}




</body>

</html>