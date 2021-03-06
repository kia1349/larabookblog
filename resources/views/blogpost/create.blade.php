@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <h2>ایجاد پست جدید</h2>
            <hr/>

            <form role="form" method="post" action="{{ URL::to('post/create') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">عنوان پست: </label>
                    <input id="title" class="form-control" name="title"/>
                </div>
                <div class="form-group">
                    <label for="body">شرح پست:</label>
                    <textarea id="body" class="form-control" name="body"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-default">ثبت پست</button>
                </div>
            </form>
        </div>
    </div>

@endsection