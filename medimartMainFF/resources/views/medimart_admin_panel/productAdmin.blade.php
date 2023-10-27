@include('AdminHeader')
<main class="bg-setter">

    <div class="container pb-5">

        <div class="row text-center">

            <div class="col-lg-12">

                <div class="rounded-2 mt-4">

                    <p class="title">Add Product</p>

                    <div class="row">

                    <!-- /////////////////////// -->
                    <!-- add books starts -->
                    <!-- /////////////////////// -->
                    <div class="col-lg-6 border border-primary rounded-2">
                    
                    <p class="title">Add Book</p>

                    <form method="POST" action="{{ route('/add_book/submit') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="col-lg-11 mx-auto my-3">

                          <div class="mb-3">
                             <input type="text" name='book_name' class="form-control bg-setter btn-lg" id="formGroupExampleInput"  placeholder="enter product name">
                          </div>
                          <div class="mb-3">
                             <input type="text" name='book_price' class="form-control bg-setter btn-lg" id="formGroupExampleInput2" placeholder="enter product price">
                          </div>

                          <div class="mb-3">
                            <input type="text" name='book_details' class="form-control bg-setter btn-lg" id="formGroupExampleInput2" placeholder="enter product detaills">
                         </div>


                          <div class="col-auto mb-3">
                              <select name='book_type' class="form-select bg-setter btn-lg" id="autoSizingSelect">
                                <option selected>Select catagory</option>
                                <option value="1">New</option>
                                <option value="2">Used</option>
                                <option value="3">Swap</option>
                              </select>
                          </div>
  
                          <div class="mb-3">
                              <input class="form-control" name='book_image' type="file" id="formFileMultiple" multiple>
                          </div>
  
                          <div class="d-grid gap-1 col-12 my-3 mt-5 mx-auto">

                            <button type="submit" class="btn btn-sm btn-primary">ADD BOOK</button>
                          </div>
                     </div>
                   </form>
                  </div>

                  <!-- add books ends -->
                  <!-- /////////////////////// -->



                  <!-- /////////////////////// -->
                    <!-- add accesorries starts -->
                    <!-- /////////////////////// -->
                    <div class="col-lg-6 border border-primary rounded-2">
                    
                      <p class="title">Add Accessories</p>
  
                      <form method="POST" action="{{ route('user_register') }}">
                        @csrf
                        <div class="col-lg-11 mx-auto my-3">
  
                            <div class="mb-3">
                               <input type="text" name='accessories_name' class="form-control bg-setter btn-lg" id="formGroupExampleInput"  placeholder="enter product name">
                            </div>
                            <div class="mb-3">
                               <input type="text" name='accessories_price' class="form-control bg-setter btn-lg" id="formGroupExampleInput2" placeholder="enter product price">
                            </div>
  
                            <div class="mb-3">
                              <input type="text" name='accessories_details' class="form-control bg-setter btn-lg" id="formGroupExampleInput2" placeholder="enter product detaills">
                           </div>
  
  
                            <div class="col-auto mb-3">
                                <select name='accessories_type' class="form-select bg-setter btn-lg" id="autoSizingSelect">
                                  <option selected>Select catagory</option>
                                  <option value="1">New</option>
                                  <option value="2">Used</option>
                                  <option value="3">Swap</option>
                                </select>
                            </div>
    
                            <div class="mb-3">
                                <input class="form-control" name='accessories_image' type="file" id="formFileMultiple" multiple>
                            </div>
    
                            <div class="d-grid gap-1 col-12 my-3 mt-5 mx-auto">
  
                              <a class="btn btn-primary blue" data-bs-toggle="collapse" href="#collapseExample" type='submit' role="button" aria-expanded="false" aria-controls="collapseExample">
                                <p class="btn-text btn-txt-size my-auto text-light">Add As Accessories</p>
                              </a>
                            </div>
                       </div>
                     </form>
                    </div>
                    <!-- add acessories ends -->
                    <!-- /////////////////////// -->

                  </div>
                
            </div>
        </div>



        

        <!-- /////////////////////// -->
        <!-- product invidual boxed starts -->
        <!-- /////////////////////// -->

        <div class="row">
            <div class="offset-lg-1 col-lg-10">

                <div class="row">

                    
                    <div class=" col-lg-4">

                        <!-- box-1 starts -->

                        <div class="border border-primary rounded-2 mt-4 bg-light text-center">

                            <img src="https://images.unsplash.com/photo-1696250351345-9e65ca1abcc4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=100" class="img-fluid w-50 rounded-1" alt="...">

                            <div class="border border-light rounded-2 mt-2 bg-light">

                                <div class="row mx-1">
                                    <div class="col-lg-6 text-start">$119/-</div>
                                    <div class="col-lg-6 text-end">used</div>
                                </div>

                                <div class="row mx-1 mt-2">
                                    <div class="col-lg-12 text-start fs-5">MBBS First Year Book</div>
                                </div>

                            </div>

                            <div class="row pt-3 text-center pe-3 mb-3">
                                <div class="d-grid gap-2 col-5 mx-auto">
                                  <a class="btn btn-warning text-light" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Update
                                  </a>
                                </div>
                
                                <div class="d-grid gap-2 col-5 bg-danger mx-auto">
                                  <a class="btn text-light" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Delete
                                  </a>
                                </div>
                              </div>
                        </div>
                    </div>
                    <!-- box-1 ends -->


                    <!-- box-2 starts -->
                    <div class=" col-lg-4">

                        <div class="border border-primary rounded-2 mt-4 bg-light text-center">

                            <img src="https://images.unsplash.com/photo-1696250351345-9e65ca1abcc4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=100" class="img-fluid w-50 rounded-1" alt="...">

                            <div class="border border-light rounded-2 mt-2 bg-light">

                                <div class="row mx-1">
                                    <div class="col-lg-6 text-start">$119/-</div>
                                    <div class="col-lg-6 text-end">used</div>
                                </div>

                                <div class="row mx-1 mt-2">
                                    <div class="col-lg-12 text-start fs-5">MBBS First Year Book</div>
                                </div>

                            </div>

                            <div class="row pt-3 text-center pe-3 mb-3">
                                <div class="d-grid gap-2 col-5 mx-auto">
                                  <a class="btn btn-warning text-light" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Update
                                  </a>
                                </div>
                
                                <div class="d-grid gap-2 col-5 bg-danger mx-auto">
                                  <a class="btn text-light" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Delete
                                  </a>
                                </div>
                              </div>
                        </div>
                    </div>
                    <!-- box-2 ends -->

                    <!-- box-3 starts -->
                    <div class=" col-lg-4">

                        <div class="border border-primary rounded-2 mt-4 bg-light text-center">

                            <img src="https://images.unsplash.com/photo-1696250351345-9e65ca1abcc4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4fHx8ZW58MHx8fHx8&auto=format&fit=crop&w=500&q=100" class="img-fluid w-50 rounded-1" alt="...">

                            <div class="border border-light rounded-2 mt-2 bg-light">

                                <div class="row mx-1">
                                    <div class="col-lg-6 text-start">$119/-</div>
                                    <div class="col-lg-6 text-end">used</div>
                                </div>

                                <div class="row mx-1 mt-2">
                                    <div class="col-lg-12 text-start fs-5">MBBS First Year Book</div>
                                </div>

                            </div>

                            <div class="row pt-3 text-center pe-3 mb-3">
                                <div class="d-grid gap-2 col-5 mx-auto">
                                  <a class="btn btn-warning text-light" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Update
                                  </a>
                                </div>
                
                                <div class="d-grid gap-2 col-5 bg-danger mx-auto">
                                  <a class="btn text-light" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    Delete
                                  </a>
                                </div>
                              </div>
                        </div>
                    </div>
                    <!-- box-3 ends -->


                </div>

            </div>
            

            
        </div>


        <!-- /////////////////////// -->
        <!-- product invidual boxed ends-->
        <!-- /////////////////////// -->

        
      
        

    </div>

  </main>
@include('adminFooter')
