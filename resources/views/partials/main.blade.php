<main>
    <section class="jumbotron">
        <button>current series</button>
    </section>
    <div class="my-container">
        <section>
            @foreach ($comics as $element)
            <div class="my-card">
                <img src="{{ $element['thumb'] }}" alt="">
                <h6>
                    {{ $element['title'] }}
                </h6>
            </div>
            @endforeach
        </section>
        <div class="my-button">
            <button>Load more</button>
        </div>
    </div>
</main>
