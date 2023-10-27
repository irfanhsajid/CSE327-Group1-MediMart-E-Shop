<title>Home page</title>
@include('header');

<main>
    <!---------------------------->
    <!-- causal box starts -->
    <!---------------------------->


    <div class="containrer-fluid pb-3">
        <div class="row">


            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner text-center">
                  <div class="carousel-item active">
                    <img src="{{asset('uploads')}}/product_images/images_8.jpg" class="d-block w-25 mx-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block carousel-bg">
                      <h5>First slide label</h5>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et fugiat, perferendis veniam quos expedita quas vel eius minima! Quaerat voluptas reiciendis dolores delectus fugit esse.</p>
                      <div class="col-12 my-3mx-auto">
                        <button type="submit" class="btn btn-sm btn-primary">ADD Product</button>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('uploads')}}/product_images/images_2.jpg" class="d-block w-25 mx-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block carousel-bg">
                      <h5>Second slide label</h5>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus iusto labore esse aliquam recusandae est, ex porro exercitationem amet quidem, illo provident in, sapiente nisi.</p>

                      <div class="col-12 my-3mx-auto">
                        <button type="submit" class="btn btn-sm btn-primary">ADD Product</button>
                     </div>

                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{asset('uploads')}}/product_images/images_10.jpg" class="d-block w-25 mx-auto" alt="...">
                    <div class="carousel-caption d-none d-md-block carousel-bg">
                      <h5>Third slide label</h5>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum adipisci saepe rerum corrupti perferendis laboriosam dolor est, quo similique dolorem neque illo, natus quos. Ad.</p>

                      <div class="col-12 my-3mx-auto">
                        <button type="submit" class="btn btn-sm btn-primary">ADD Product</button>
                     </div>

                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>


        </div>
    </div>



    <!-- causal box ends -->
    <!---------------------------->

    <div class="container-fluid">
      <section>
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>
      </section>
    </div>



    <!---------------------------->
    <!-- Cateroty box starts -->
    <!---------------------------->

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="pb-4"><u>Explore Categories</u></h2>
            </div>

            <div class="row">
                <div class="col-lg-3 text-center">

                    <img src="https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bWVkaWNhbCUyMGVxdWlwbWVudHxlbnwwfHwwfHx8MA%3D%3D&w=500" class="img-fluid" alt="...">

                    <h6 class ="text-primary">Brand New</h6>
                    
                </div>

                <div class="col-lg-3 text-center">

                    <img src="https://media.istockphoto.com/id/899906754/photo/medical-library-concept-with-stethoscope-on-book.webp?b=1&s=170667a&w=0&k=20&c=AhyL7EQ3sQdv5bgd3kSr6YPhTMA_uaQp9yX7DwsgOXs=" class="img-fluid" alt="...">

                    <h6 class ="text-primary">Used</h6>
                    
                </div>

                <div class="col-lg-3 text-center">

                    <img src="https://media.istockphoto.com/id/636903140/photo/medical-education-books-on-the-table-in-library.webp?b=1&s=170667a&w=0&k=20&c=2LoKIMskqHEwU85KiViY1xxq4fRaPXPionCEUHI28rw=" class="img-fluid" alt="...">

                    <h6 class ="text-primary">Swapable</h6>
                    
                </div>

                <div class="col-lg-3 text-center">

                    <img src="https://media.istockphoto.com/id/1249869786/photo/woman-learning-and-teaching-homeschooling-in-video-conference.webp?b=1&s=170667a&w=0&k=20&c=9_PqZCxQDS_SUs5G8FNALw3CYMWa8yu2rFsRS_du1UI=" class="img-fluid" alt="...">

                    <h6 class ="text-primary">Gedgets</h6>
                    
                </div>
            </div>


        </div>
    </div>

    <!-- Cateroty box ends -->
    <!---------------------------->

    <div class="container">

        <div class="row py-5">

            <div class="col-lg-12 text-center">
                <h2><u>Bunch Of Products</u></h2>
            </div>


           <!-- product box starts -->

           @foreach ($productData as $book)

           <div class=" col-lg-4">

            <div class="border shadow border-primary rounded-2 mt-4 text-center py-3">

                
                @if($book->book_img!='')
                        <img src="{{asset('uploads/product_images/'.$book->book_img)}}"/>
                      @else
                        <img height="30" class="img-fluid" src="https://images.unsplash.com/photo-1584824486509-112e4181ff6b?auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8ZXJyb3J8ZW58MHx8MHx8fDA%3D&w=500" />
                      @endif

                <div class="border border-light rounded-2 mt-2 mb-4 bg-light">

                    <div class="row mx-1">
                        <div class="col-lg-6 text-start text-danger">

                            {{-- condition to define cooks condition type --}}
                            @if($book->book_type == 1){
                                New
                            }
                            @endif

                            @if($book->book_type == 2){
                                Used
                            }
                            @endif

                            @if($book->book_type == 3){
                                For swap
                            }
                            @endif
                        </div>
                    </div>

                    <div class="row mx-1 mt-2">
                        <div class="col-lg-12 text-start fs-5">{{$book->book_name}}</div>
                    </div>

                    <div class="row mx-1 mt-2">
                        <div class="col-lg-12 text-start fs-6">{{$book->book_details}}</div>
                    </div>

                    <div class="row mx-1">
                        <div class="col-lg-6 text-start text-primary">{{$book->book_price}}/-</div>
                        <div class="offset-3 col-lg-3">
                            <select class="form-select border-primary" aria-label="Default select example">
                                <option selected value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select>
                        </div>
                    </div>

                </div>

                <div class="col-12 my-3mx-auto">

                    <button type="submit" class="btn btn-sm btn-primary">ADD Product</button>
                </div>

            </div>
         </div>

         @endforeach
        <!-- box product ends -->

        </div>



    </div>

</main>

@include('footer');