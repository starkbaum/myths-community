<ul class="section table-of-contents">
    @foreach($categories as $category)
    <li><a href="{{ route('forums.show', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
    @endforeach
</ul>