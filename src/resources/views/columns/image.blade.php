{{-- regular object attribute --}}
<td>
    @if ( isset($entry->{$column['name']}) && !empty($entry->{$column['name']}) )
    <img src="{{ $entry->getUploadedImageFromDisk($column['name'], 'thumb', (isset($column['disk']) && $column['disk'] ? $column['disk'] : null)) }}" alt="entry image preview" style="height: 25px;" />
    @else
    n/a
    @endif
</td>
