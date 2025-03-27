<nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
        Showing
        <span class="font-semibold text-gray-900 dark:text-white">{{$data->firstItem() ?? 0}}-{{$data->lastItem() ?? 0}}</span>
        of
        <span class="font-semibold text-gray-900 dark:text-white">{{$data->total()}}</span>
    </span>

    @if($data->hasPages())
    <ul class="inline-flex items-stretch -space-x-px">
        {{-- Previous Page --}}
        <li>
            <a href="{{ $data->previousPageUrl() }}" 
               class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white {{ !$data->onFirstPage() ? '' : 'opacity-50 cursor-not-allowed' }}"
               @if($data->onFirstPage()) aria-disabled="true" tabindex="-1" @endif>
                <span class="sr-only">Previous</span>
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
            </a>
        </li>

        {{-- Page Numbers --}}
        @foreach ($data->getUrlRange(max(1, $data->currentPage() - 2), min($data->lastPage(), $data->currentPage() + 2)) as $page => $url)
            <li>
                <a href="{{ $url }}"
                   @if($page == $data->currentPage()) aria-current="page" @endif
                   class="flex items-center justify-center text-sm py-2 px-3 leading-tight {{ $page == $data->currentPage() 
                       ? 'z-10 text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white'
                       : 'text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white'
                   }}">
                    {{ $page }}
                </a>
            </li>
        @endforeach

        {{-- Next Page --}}
        <li>
            <a href="{{ $data->nextPageUrl() }}"
               class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white {{ $data->hasMorePages() ? '' : 'opacity-50 cursor-not-allowed' }}"
               @if(!$data->hasMorePages()) aria-disabled="true" tabindex="-1" @endif>
                <span class="sr-only">Next</span>
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </a>
        </li>
    </ul>
    @endif
</nav>