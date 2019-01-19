@extends('voyager::master')

@section('page_title', __('voyager::generic.'.(isset($dataTypeContent->id) ? 'edit' : 'add')).' '.$dataType->display_name_singular)

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.(isset($dataTypeContent->id) ? 'edit' : 'add')).' '.$dataType->display_name_singular }}
    </h1>
@stop

@section('content')
    <div class="page-content container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">
                    <!-- form start -->
                    <form class="form-edit-add" role="form"
                          action="@if(isset($dataTypeContent->id)){{ route('voyager.'.$dataType->slug.'.update', $dataTypeContent->id) }}@else{{ route('voyager.'.$dataType->slug.'.store') }}@endif"
                          method="POST" enctype="multipart/form-data">

                        <!-- PUT Method if we are editing -->
                        @if(isset($dataTypeContent->id))
                            {{ method_field("PUT") }}
                        @endif

                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}

                        <div class="panel-body">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @foreach($dataType->addRows as $row)
                                <div class="form-group">
                                    <label for="name">{{ $row->display_name }}</label>

                                    {!! Voyager::formField($row, $dataType, $dataTypeContent) !!}

                                </div>
                            @endforeach

                            <label for="permission">{{ __('voyager::generic.permissions') }}</label><br>
                            <a href="#" class="permission-select-all">{{ __('voyager::generic.select_all') }}</a> / <a href="#"  class="permission-deselect-all">{{ __('voyager::generic.deselect_all') }}</a>
                            <ul style="list-style:none;" class="permissions checkbox">
                                <?php
                                    $role_permissions = (isset($dataTypeContent)) ? $dataTypeContent->permissions->pluck('key')->toArray() : [];
                                ?>
                                <li>
                                    <div class="row">
                                        @foreach(TCG\Voyager\Models\Permission::all()->groupBy('table_name') as $table => $permission)
                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <small class="text-uppercase text-muted">
                                                            <div class="checkbox checbox-switch switch-primary">
                                                                <label for="@if($table == ""){{ 'classic' }}@else{{$table}}@endif">
                                                                    <input type="checkbox" id="@if($table == ""){{ 'classic' }}@else{{$table}}@endif" class="permission-group" />
                                                                    <span></span>
                                                                    @if($table == "")
                                                                        <strong>Classic {{title_case(str_replace('_',' ', $table))}}</strong>
                                                                    @else
                                                                        <strong>{{title_case(str_replace('_',' ', $table))}}</strong>
                                                                    @endif
                                                                </label>
                                                            </div>
                                                        </small>
                                                        <ul style="list-style:none;" class="perm">
                                                            @foreach($permission as $perm)
                                                                <li>
                                                                    <div class="form-group">
                                                                        <div class="checkbox checbox-switch">
                                                                            <label for="permission-{{$perm->id}}">
                                                                                <input type="checkbox" id="permission-{{$perm->id}}" name="permissions[]" class="the-permission" value="{{$perm->id}}" @if(in_array($perm->key, $role_permissions)) checked="" @endif />
                                                                                <span></span>
                                                                                {{title_case(str_replace('_', ' ', $perm->key))}}
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endforeach
                                                            @if($table != "")
                                                                <li>
                                                                    <div class="form-group">
                                                                        <div class="checkbox checbox-switch switch-warning">
                                                                            <label for="permission-hidden" hidden>
                                                                                <input hidden type="checkbox" checked="" id="permission-hidden" />
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </li>
                                {{--@foreach(TCG\Voyager\Models\Permission::all()->groupBy('table_name') as $table => $permission)--}}
                                    {{--<li>--}}
                                        {{--<input type="checkbox" id="{{$table}}" class="permission-group">--}}
                                        {{--<label for="{{$table}}"><strong>{{title_case(str_replace('_',' ', $table))}}</strong></label>--}}
                                        {{--<ul>--}}
                                            {{--@foreach($permission as $perm)--}}
                                                {{--<li>--}}
                                                    {{--<input type="checkbox" id="permission-{{$perm->id}}" name="permissions[]" class="the-permission" value="{{$perm->id}}" @if(in_array($perm->key, $role_permissions)) checked @endif>--}}
                                                    {{--<label for="permission-{{$perm->id}}">{{title_case(str_replace('_', ' ', $perm->key))}}</label>--}}
                                                {{--</li>--}}
                                            {{--@endforeach--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--@endforeach--}}
                            </ul>
                        </div><!-- panel-body -->
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">{{ __('voyager::generic.submit') }}</button>
                        </div>
                    </form>

                    <iframe id="form_target" name="form_target" style="display:none"></iframe>
                    <form id="my_form" action="{{ route('voyager.upload') }}" target="form_target" method="post"
                          enctype="multipart/form-data" style="width:0;height:0;overflow:hidden">
                        {{ csrf_field() }}
                        <input name="image" id="upload_file" type="file"
                               onchange="$('#my_form').submit();this.value='';">
                        <input type="hidden" name="type_slug" id="type_slug" value="{{ $dataType->slug }}">
                    </form>

                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle();

            $('.permission-group').on('change', function(){
                $(this).parent().parent().parent().siblings('ul').find("input[type='checkbox']").prop('checked', this.checked);


                // $(this).siblings('ul').find("input[type='checkbox']").prop('checked', this.checked);
            });

            $('.permission-select-all').on('click', function(){
                $('ul.permissions').find("input[type='checkbox']").prop('checked', true);
                return false;
            });

            $('.permission-deselect-all').on('click', function(){
                $('ul.permissions').find("input[type='checkbox']").prop('checked', false);
                return false;
            });

            function parentChecked(){
                $('.permission-group').each(function(){
                    var colors = ['switch-warning', 'switch-default', 'switch-info', 'switch-success', 'switch-danger', 'switch-dark']
                    $(this).parent().parent().parent().siblings('ul').find("li div div").each(function(e){
                        $(this).addClass(colors[e  % colors.length]);
                    });
                    var allChecked = true;
                    // $(this).siblings('ul').find("input[type='checkbox']").each(function(){
                    $(this).parent().parent().parent().siblings('ul').find("input[type='checkbox']").each(function(){
                        if(!this.checked) allChecked = false;
                    });
                    $(this).prop('checked', allChecked);
                });
            }

            parentChecked();

            $('.the-permission').on('change', function(){
                parentChecked();
            });
        });
    </script>
@stop
