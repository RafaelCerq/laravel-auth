{{-- <div>
    <h1>{{$col}}</h1>
</div>
 --}}

<section class="section-component">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-{{$col}}">
                <div class="card">
                    <div class="card-header">{{$namepage}}</div>

                    <div class="card-body">

                        {{$slot}}

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
