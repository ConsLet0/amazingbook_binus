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
                @include("ebookgrid")
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