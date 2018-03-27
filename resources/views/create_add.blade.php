@extends('layouts.app')

@section('content')

    <div class="container-fluid">

        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ route('advertisement') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title" class="col-md-4 control-label">Title</label>

                    <div class="col-md-6">
                        <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                        @if ($errors->has('title'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                    <label for="type" class="col-md-4 control-label">Type</label>

                    <div class="col-md-6">
                        <input id="type" type="text" class="form-control" name="type" value="{{ old('type') }}" required autofocus>

                        @if ($errors->has('type'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                    <label for="price" class="col-md-4 control-label">Price</label>

                    <div class="col-md-6">
                        <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}" required autofocus>

                        @if ($errors->has('price'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description" class="col-md-4 control-label">description</label>

                    <div class="col-md-6">

                        <textarea name="description" id="description" cols="60" rows="10">{{ old('description') }}</textarea>

                        {{--<input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus>--}}

                        @if ($errors->has('description'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Add
                        </button>
                    </div>
                </div>




            </form>
        </div>

    </div>

@endsection