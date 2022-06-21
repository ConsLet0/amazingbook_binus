<base href="/public">
@include("material.scriptlink")
@include("layouts.navbar")
<body>
    <section class="jumbotron text-center bg-dark">
        <div class="container">
            <h1></h1>
        </div>
    </section>
    
    <div class="container">
            <div class="col">
                <div class="row">
                      <div class="card border-info mb-3 text-center">
                          <hr>
                          <div class="card-header">
                              <h4 class="font-weight-medium">{{ $data->title }}</h4>
                            </div>
                           
                            <img src="images/aesthetic_book.jpg" class="card-img-top" alt="...">
                            <hr>
                        <div class="card-body">
                          <h5 class="card-title">{{ $data->author }}</h5>
                          <p class="card-text">{{ $data->description }}</p>
                          <a href="#" class="btn btn-info">Rent Now</a>
                        </div>
                        <div class="card-footer text-muted">
                          Amazing E-Books Number {{ $data->id }}
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    </body>
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                     <h1><b>THE BEST CHOICE TO RENT EBOOKS</b></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@include("layouts.footer")
@include("material.scriptjs")