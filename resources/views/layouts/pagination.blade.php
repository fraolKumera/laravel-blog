<style>
    .numbers {
        background: -webkit-linear-gradient(47.36deg, #682696 5.97%, #6D2691 6.48%, #96256B 11.26%, #B8244B 16.15%, #D22332 21.1%, #E52221 26.17%, #F02216 31.39%, #F42213 37.04%, #F5341A 41.21%, #F6602B 52.42%, #F78339 63.23%, #F79C42 73.41%, #F8AB48 82.7%, #F8B04A 90.29%);;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .numbers:active {
        color: black;
    }
</style>

<script>
    let url = window.location.href;


    document.getElementById("p2").style.color = "blue";
</script>

@if($paginator->lastPage() > 1)
    <ul class="inline-flex -space-x-px">
        @if ($paginator->onFirstPage())
            <li class="disabled"><span
                    class="numbers py-2 px-3 ml-0 leading-tight bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</span>
            </li>
        @else
            <li>
                <a class="numbers py-2 px-2 ml-0 leading-tight bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                   href="{{ $paginator->previousPageUrl() }}" rel="prev">Prev</a></li>
        @endif

        @if($paginator->currentPage() > 3)
            <li class="hidden-xs"><a
                    class="numbers py-2 px-3 ml-0 leading-tight bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                    href="{{ $paginator->url(1) }}">1</a></li>
        @endif
        @if($paginator->currentPage() > 4)
            <li><span
                    class="numbers py-2 px-3 ml-0 leading-tight bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</span>
            </li>
        @endif
        @foreach(range(1, $paginator->lastPage()) as $i)
            @if($i >= $paginator->currentPage() - 1 && $i <= $paginator->currentPage() + 1)
                @if ($i == $paginator->currentPage())
                    <li
                        class="active"><span style="background: linear-gradient(47.36deg, #682696 5.97%, #6D2691 6.48%, #96256B 11.26%, #B8244B 16.15%, #D22332 21.1%, #E52221 26.17%, #F02216 31.39%, #F42213 37.04%, #F5341A 41.21%, #F6602B 52.42%, #F78339 63.23%, #F79C42 73.41%, #F8AB48 82.7%, #F8B04A 90.29%);"
                                             class="text-white py-2 px-2 md:px-3 ml-0 leading-tight rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">{{ $i }}</span>
                    </li>
                @else
                    <li>
                        <a class="numbers py-2 px-2 md:px-3 ml-0 leading-tight bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                           href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                @endif
            @endif
        @endforeach
        @if($paginator->currentPage() < $paginator->lastPage() - 3)
            <li><span
                    class="numbers py-2 px-2 md:px-3 ml-0 leading-tight bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</span>
            </li>
        @endif
        @if($paginator->currentPage() < $paginator->lastPage() - 2)
            <li class="hidden-xs"><a
                    class="numbers py-2 px-3 ml-0 leading-tight bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                    href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a class="numbers py-2 px-2 md:px-3 ml-0 leading-tight bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                   href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a></li>
        @else
            <li class="disabled"><span
                    class="numbers py-2 px-2 md:px-3 ml-0 leading-tight bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</span>
            </li>
        @endif
    </ul>
@endif
