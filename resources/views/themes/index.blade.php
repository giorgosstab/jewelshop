@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{ Html::style('assets/css/voyager.theme.css') }}
@endsection

@section('content')

<div id="themes">

	<div class="container-fluid">

		<h1 class="page-title">
        	<i class="voyager-paint-bucket"></i> Themes
        	<small>Choose a theme below</small>
        </h1>

        @if(count($themes) < 1)
	        <div class="alert alert-warning">
	            <strong>Wuh oh!</strong>
	            <p>It doesn't look like you have any themes available in your theme folder located at <code><?= resource_path('views/themes'); ?></code></p>
	        </div>
	    @endif

        <div class="panel">
        	<div class="panel-body">

        		<div class="row">

        			@if(count($themes) < 1)
        				<div class="col-md-12">
        					<h2>No Themes Found</h2>
        					<p>That's ok, you can download a <a href="https://github.com/thedevdojo/sample-theme" target="_blank">sample theme here</a>, or download the <a href="https://github.com/thedevdojo/pages" target="_blank">default pages here</a>. Make sure to download the theme and place it in your themes folder.</p>
        				</div>
        			@endif

	        		@foreach($themes as $theme)

	        			<div class="col-md-4">
	        				<div class="theme">
		        				<img class="theme_thumb" src="{{ secure_asset('assets/images/themes' ) }}/{{ $theme->folder }}/{{ $theme->folder }}.jpg">
		        				<div class="theme_details">
		        					<h4>{{ $theme->name }}<span>@if(isset($theme->version)){{ 'version ' . $theme->version }}@endif</span></h4>

		        					@if($theme->active)
                                        @if(\Voyager::can('deactivate_themes'))
		        						    <a class="btn btn-outline-danger pull-right" href="{{ route('theme.deactivate', $theme->folder) }}"><i class="voyager-x"></i>Deactivate Theme</a>
                                        @endif
		        					@else
                                        @if(\Voyager::can('activate_themes'))
		        						    <a class="btn btn-outline-success pull-right" href="{{ route('theme.activate', $theme->folder) }}"><i class="voyager-check"></i> Activate Theme</a>
                                        @endif
                                    @endif
                                    @if(\Voyager::can('edit_themes'))
		        					    <a href="{{ route('theme.options', $theme->folder) }}" class="voyager-params theme-options"></a>
                                    @endif
                                    @if(\Voyager::can('delete_themes'))
		        					    <div class="voyager-trash theme-options-trash" data-id="{{ $theme->id }}"></div>
                                    @endif
		        				</div>
		        			</div>
	        			</div>

	        		@endforeach
        		</div>

        	</div>
        </div>

    </div>

    {{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager.generic.close') }}"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i> Are you sure you want to delete this theme?</h4>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('theme.delete') }}" id="delete_form" method="POST">
                        {{ method_field("DELETE") }}
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="0" id="delete_id">
                        <input type="submit" class="btn btn-danger pull-right delete-confirm"
                                 value="Yes, Permanantly Delete Theme">
                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

</div>

@endsection

@section('javascript')

	<script>
		$('document').ready(function(){
			var deleteFormAction;
	        $('.theme_details').on('click', '.theme-options-trash', function (e) {
	            var form = $('#delete_form')[0];
	            $('#delete_id').val($(this).data('id'));
	            $('#delete_modal').modal('show');
	        });
		});
	</script>

@endsection
