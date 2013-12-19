<article class="col-md-4">
    <h2>{{ $item->title }}</h2>
    <img src="{{ $item->image }}" alt="{{ $item->title }}">

    <div class="body">
        {{ $item->description }}
    </div>
</article>