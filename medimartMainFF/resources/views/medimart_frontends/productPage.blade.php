<title>Products</title>

@include('header');
<main>

    <!---------------------------->
    <!-- Product part starts -->
    <!---------------------------->

    <div class="row bg-dark text-light">
        <div class="container">
            <div class="col-lg-12 mt-4 text-center">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Products</h3>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="#" class="btn text-primary btn" tabindex="-1" role="button" aria-disabled="true">home</a>
                            <a href="#" class="btn text-light btn" tabindex="-1" role="button" aria-disabled="true">products</a>
                        </div>
    
                        <div class="col-lg-12 text-center">


                            <ul class="list-inline mb-4 d-flex" id="portfolio-flters">
                                <li class="btn btn-sm btn-outline-light mm m-1 active" data-filter="*">All</li>
                                <li class="btn btn-sm btn-outline-light mm m-1" data-filter=".i1">New</li>
                                <li class="btn btn-sm btn-outline-light mm m-1" data-filter=".i2">Used</li>
                                <li class="btn btn-sm btn-outline-light mm m-1" data-filter=".i3">Swaped</li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">

        <div class="row pb-5 portfolio-container">


           <!-- product box starts -->

           @foreach ($productData as $book)

           <div class=" col-lg-4 portfolio-item i{{$book->book_type}}">

            <div class="border shadow border-primary rounded-2 mt-4 text-center py-3">

                
                @if($book->book_img!='')
                        <img src="{{asset('uploads/product_images/'.$book->book_img)}}"/>
                      @else
                        <img height="30" src="https://images.unsplash.com/photo-1584824486509-112e4181ff6b?auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8ZXJyb3J8ZW58MHx8MHx8fDA%3D&w=500" />
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
                                <option selected>Qnt</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                              </select>
                        </div>
                    </div>

                </div>

                <div class="col-12 my-3mx-auto">

                    <button type="submit" class="btn btn-sm btn-primary">Add to cart</button>
                </div>

            </div>
         </div>

         @endforeach
        <!-- box product ends -->

        </div>



    </div>

@include('footer');  
