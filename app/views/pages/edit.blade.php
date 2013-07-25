{{ Form::model($page, array('route' => array('admin.pages.update', $page->id), 'method' => 'PUT')) }}

<p>
	{{ Form::label('title') }}
	{{ Form::text('title') }}
	{{ $errors->first('title') }}
</p>

<p>
	{{ Form::label('slug') }}
	{{ Form::text('slug') }}
	{{ $errors->first('slug') }}
</p>

<p>
	{{ Form::label('status') }}
	{{ Form::select('status', $statuses) }}
	{{ $errors->first('status') }}
</p>

<p>
	{{ Form::label('published_at') }}
	{{ Form::text('published_at') }}
	{{ $errors->first('published_at') }}
</p>

<p>
	{{ Form::label('body') }}
	{{ Form::textarea('body') }}
</p>

{{ HTML::linkRoute('admin.pages.index', 'cancel') }}
{{ Form::submit() }}

{{ Form::close() }}