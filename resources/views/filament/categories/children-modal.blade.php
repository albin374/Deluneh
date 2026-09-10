<div class="space-y-2">
    @if($record->children->isEmpty())
        <p class="text-sm text-gray-500">No child categories.</p>
    @else
        <ul class="list-disc list-inside space-y-1 text-sm text-gray-700 dark:text-gray-200">
            @foreach($record->children as $child)
                <li>
                    <strong>{{ $child->name }}</strong>
                    @if($child->children->isNotEmpty())
                        <ul class="list-circle list-inside ml-4 mt-1 text-xs text-gray-500 dark:text-gray-400">
                            @foreach($child->children as $grandchild)
                                <li>{{ $grandchild->name }}</li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    @endif
</div>
