@extends('layout')
@section('content')
<div class="bb mx-auto">

<form class="form mx-auto " action="{{route('layout.update',$data->id)}}" method="POST">
@csrf
@method('PUT')

<div class="row">
    <label for="name" class="col-md-3 col-form-label">Name</label>

    <div class="form-group col-md-6">
      <input type="text" value="{{old('name',$data->name)}}" name="name" class="form-control" id="name">
      @error('name')
      <p class="text-danger">{{$message}}</p>
      @enderror
    </div>
    </div>

    <div class="row">

    <label for="gender" class="col-md-3 col-form-label">gender</label>
    <div  class="form-group col-md-6">
      <select class="form-control" value="{{old('gender', $data->gender)}}" name="gender" id="gender" selected >
          <option value="male ">Male</option>
          <option value="female">Female</option>
     </select>
      @error('gender')
      <p class="text-danger">{{$message}}</p>
      @enderror
    </div>
    </div>

    <div class="row">

    <label for="father_name" class="col-md-3 col-form-label">Father Name</label>
    <div  class="form-group col-md-6">
      <input type="text" class="form-control" value="{{old('father_name', $data->father_name)}}" name="father_name" id="father_name">
      @error('father_name')
      <p class="text-danger">{{$message}}</p>
      @enderror
    </div>
    </div>

    
    <div class="row">

    <label for="mother_name" class="col-md-3 col-form-label">Mother Name</label>
    <div  class="form-group col-md-6">
      <input type="text" class="form-control" value="{{old('mother_name', $data->mother_name)}}" name="mother_name" id="mother_name">
      @error('mother_name')
      <p class="text-danger">{{$message}}</p>
      @enderror
    </div>
    </div>

    
    <div class="row">

<label for="birthday" class="col-md-3 col-form-label">Birthday</label>
<div  class="form-group col-md-6">
  <input type="date" class="form-control" value="{{old('birthday', $data->birthday)}}" name="birthday" id="birthday">
  @error('birthday')
  <p class="text-danger">{{$message}}</p>
  @enderror
</div>
</div>



    
<div class="row">

<label for="phone" class="col-md-3 col-form-label">Phone</label>
<div  class="form-group col-md-6">
  <input type="text" class="form-control" value="{{old('phone', $data->phone)}}" name="phone" id="phone">
  @error('phone')
  <p class="text-danger">{{$message}}</p>
  @enderror
</div>
</div>



    

  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary ">Create</button>
        </div>

</div>
</form>
</div>
@endsection