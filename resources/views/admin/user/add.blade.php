@extends('admin.master')
@section('content')
<div class="col-lg-12">
    @include('admin.blocks.error')
    <h1 class="page-header">User
        <small>Add</small>
    </h1>
</div>
<!-- /.col-lg-12 -->
<div class="col-lg-7" style="padding-bottom:120px">
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
        <div class="form-group">
            <label>Username</label>
            <input class="form-control" name="txtUser" placeholder="Please Enter Username" value="{!! old('txtUser') !!}" />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="txtPass" placeholder="Please Enter Password" />
        </div>
        <div class="form-group">
            <label>RePassword</label>
            <input type="password" class="form-control" name="txtRePass" placeholder="Please Enter RePassword" />
        </div>
        <div class="form-group">
            <label>Full Name</label>
            <input type="text" class="form-control" name="txtFName" placeholder="Please Enter Full Name" value="{!! old('txtFName') !!}"/>
        </div>
        <div class="form-group">
            <label>Gender</label>
            <label class="radio-inline">
                <input name="rdoGender" value="1" checked="" type="radio">Male
            </label>
            <label class="radio-inline">
                <input name="rdoGender" value="0" type="radio">Female
            </label>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="txtEmail" placeholder="Please Enter Email" value="{!! old('txtEmail') !!}"/>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="txtAddress" placeholder="Please Enter Address" value="{!! old('txtAddress') !!}"/>
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" class="form-control" name="txtPhone" placeholder="Please Enter Phone Number" value="{!! old('txtPhone') !!}"/>
        </div>

        <div class="form-group">
            <label>User Level</label>
            <label class="radio-inline">
                <input name="rdoLevel" value="1" checked="" type="radio">Admin
            </label>
            <label class="radio-inline">
                <input name="rdoLevel" value="2" type="radio">Member
            </label>
        </div>
        <button type="submit" class="btn btn-default">User Add</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
</div>
@endsection()