@foreach ($data as $data)
    <div class="col-4 col-md-6 col-lg-4">
        <div class="card">
            <img src="./images/ebook.jpg" alt="Card image Cap" class="card-img-top">
            <div class="card-body">
                <hr>
                <h4 class="card-title">{{ $data->author }}</h4>
                <p class="card-text">Title : {{ $data->title }}</p>
                <div class="row">
                    <div class="col">
                        <a href="{{ url('/details', $data->id) }}" class="btn btn-success btn-block">DETAIL</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach