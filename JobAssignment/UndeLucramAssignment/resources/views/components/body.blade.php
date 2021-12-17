<div>
    <input type="date">
</div>
<div class="container w-100 mt-5 ">
    <div class="row border border-1 row-cols-3">
        <div class="col-2">
              1 of 3
        </div>
        <div class="col-8 border border-2">
            <h1>Posts</h1>
        </div>
        <div class="col-2">
          3 of 3
        </div>
    </div>
    <div class="row border border-1 row-cols-3">
        <div class="col-2">
              1 of 3
        </div>
        <div class="col-8 border border-2">

            @foreach ($posts as $post)
                <div class="opacity-75 overflow-hidden shadow-sm p-2 m-2 rounded bg-light text-dark">

                    <div class="d-flex flex-row mb-0 my-0">
                        <span class="fw-light">
                            {{ $post->author->name }}
                        </span>
                        &nbsp;
                        <span class="fw-light fst-italic">
                            posted {{ ($post->date)->diffForHumans() }}
                        </span>
                        &nbsp;
                        <span class="fw-light fst-italic">
                            on {{ $post->socialMedia->name }}
                        </span>
                    </div>
                    <div class="mt-0">
                        link: {{ $post->link }}
                    </div>
                    <div class="text-danger">
                        list/lists: DE CLARIFICAT
                    </div>




                </div>
            @endforeach

            <div class="d-flex justify-content-end mt-3 pt-3">{{ $posts->links() }}</div>
        </div>
        <div class="col-2">
          3 of 3
        </div>
    </div>
</div>

