 <div class="container-fluid dashboard">
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="d-flex justify-content-center">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseArticle" aria-expanded="true" aria-controls="collapseArticle">
                           <b>Article</b>
                        </button>
                    </h5>
                </div>

                <div id="collapseArticle" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{route('articles.index')}}">Article panel</a></li>
                            <li class="list-group-item"><a href="{{route('articles.create')}}">New article</a></li>
                        </ul>
                     </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="d-flex justify-content-center">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSearch" aria-expanded="true" aria-controls="collapseSearch">
                            <b>Search</b>
                        </button>
                    </h5>
                </div>
                <div id="collapseSearch" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{route('articles.index')}}">Search(Title)</a></li>
                            <li class="list-group-item"><a href="{{route('articles.create')}}">Search(Tag)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="d-flex justify-content-center">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTags" aria-expanded="true" aria-controls="collapseTags">
                            <b>Tags</b>
                        </button>
                    </h5>
                </div>
                <div id="collapseTags" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="{{route('articles.create')}}">Tag panel</a></li>
                            <li class="list-group-item"><a href="{{route('articles.index')}}">New tag</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
