@if ($paginator && method_exists($paginator, 'hasPages') && $paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between px-4 py-3 border-t border-gray-200 sm:px-6">
        <div class="flex justify-between flex-1 sm:hidden">
            {{-- Mobile Previous/Next --}}
            @if ($paginator->onFirstPage())
                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-md">Previous</span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">Previous</a>
            @endif
            
            <div class="flex items-center">
                <span class="text-sm text-gray-700">Page {{ $paginator->currentPage() }}</span>
            </div>

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">Next</a>
            @else
                <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-md">Next</span>
            @endif
        </div>

        <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-700">
                    Showing
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    to
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    of
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    results
                </p>
            </div>

            <div class="flex items-center space-x-3">
                {{-- Previous/Next Navigation --}}
                <div class="flex">
                    @if ($paginator->onFirstPage())
                        <span class="relative inline-flex items-center px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-l-md">Previous</span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-l-md hover:bg-gray-50">Previous</a>
                    @endif

                    {{-- Page Number Display --}}
                    <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border-t border-b border-gray-300">
                        {{ $paginator->currentPage() }} / {{ $paginator->lastPage() }}
                    </span>

                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-r-md hover:bg-gray-50">Next</a>
                    @else
                        <span class="relative inline-flex items-center px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-r-md">Next</span>
                    @endif
                </div>

                {{-- Go to Page Input --}}
                <form method="GET" action="{{ url()->current() }}" class="flex items-center space-x-2">
                    <input type="number" name="page" min="1" max="{{ $paginator->lastPage() }}" value="{{ $paginator->currentPage() }}" 
                        class="w-16 px-2 py-1 text-sm border border-gray-300 rounded-md focus:ring-1 focus:ring-blue-500 focus:border-blue-500">
                    <button type="submit" class="px-3 py-1 text-sm text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Go
                    </button>
                </form>
            </div>
        </div>
    </nav>
@endif