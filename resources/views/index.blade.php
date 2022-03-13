@extends('layout')
@section('content')
<a href="{{route('layout.create')}}" class="btn btn-success create mb-3" style="float:right ;margin:20px" >Create</a>

<table class="table table-bordered  text-center">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Father Name</th>
        <th>Mother Name</th>
        <th>Birthday</th>
        <th width="200px">Action</th>
    </tr>
    @forelse ($data as $d)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td><a href="{{route('layout.show',$d->id)}}">{{$d->name}}</td>
        <td>{{$d->gender}}</td>
        <td>{{$d->phone}}</td>
        <td>{{$d->father_name}}</td>
        <td class="text-success">{{$d->mother_name}}</td>
        <td class="text-success">{{$d->birthday}}</td>
        <td>
                    <a class="btn edit" href="{{route('layout.edit',$d->id)}}" >Edit</a>  
                  
                    <form action="{{route('layout.destroy',$d->id)}}" class="companyform" method="POST">   
                    @csrf
                    @method('DELETE')      
                    <button class="btn danger" type="submit" >Delete</button>
                    </form>
        </td>
      </tr>
      @empty 
      <tr>
         <td colspan="8"> No Data</td>
      </tr>
      @endforelse

    </table>

    @endsection
    