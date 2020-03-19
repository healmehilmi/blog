@extends('layouts.admin')

@section('content')

<div class="container" style="margin-top: 150px;">
   
        <form method="post" >
                <div class="input-group">
                    <label>Name</label>
                    <input type="text" name="name" value="">
                </div>
                <div class="input-group">
                    <label>Address</label>
                    <input type="text" name="address" value="">
                </div>
                <div class="input-group">
                    <button class="btn" type="submit" name="save" >Save</button>
                </div>
            </form>


</div>
@endsection
