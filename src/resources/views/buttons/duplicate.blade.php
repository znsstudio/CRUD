@if ($crud->hasAccess('duplicate'))
	<a href="{{ Request::url().'/'.$entry->getKey() }}/duplicate" class="btn btn-xs btn-default"><i class="fa fa-copy"></i> {{ trans('backpack::crud.duplicate') }}</a>
@endif