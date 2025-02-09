@if ($paginator->lastPage() > 1)
<nav class="mt-3">
    <ul class="pagination">
        <li class="page-item">
            <a class="page-link link" href="{{$paginator->previousPageUrl()}}" aria-label="Previous">
                <span aria-hidden="true">
                    <i class="ti ti-chevrons-left fs-4"></i>
                </span>
            </a>
        </li>
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
        <li class="page-item  {{$paginator->currentPage()==$i?'active':''}}">
            <a class="page-link link" href="{{$paginator->url($i)}}">{{$i}}</a>
        </li>
        @endfor
        
        <li class="page-item">
            <a class="page-link link" href="{{$paginator->nextPageUrl()}}" aria-label="Next">
                <span aria-hidden="true">
                    <i class="ti ti-chevrons-right fs-4"></i>
                </span>
            </a>
        </li>
    </ul>
</nav>
@endif