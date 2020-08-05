
@extends('layouts.adminpages')
 
@section('content') 


 
<br/><br/>
<div class = "container">
<div class= "card">
    
        <div class = card-header>
            <h3 class ="text-info text-center"> EDIT YOUR EDUCATION PROFILE</h3>
        </div>

      
            <div class ="card-body">
            <form method = "POST" action = "/education/{{$education->id}}">
            {{method_field('PATCH')}}
             {{ csrf_field() }}
             
             @include('includes.error')
                <div class ="form-group">
                <h4><label class="text-primary"> Qualification</label></h4>
                <input type="text" name = "qualification" class="form-control" value ="{{$education->qualification}}" placeholder="Enter Your Qualification Here">
                </div>

                <div class ="form-group">
                <h4><label class="text-primary"> Date </label></h4>
                <input type="text" name = "date" class="form-control"  value ="{{$education->date}}" placeholder="Enter Your Date Here">
                </div>

                 <div class ="form-group">
                <h4><label class="text-primary"> Institution</label></h4>
                <input type="text" name = "institution" class="form-control" value ="{{$education->institution}}" placeholder="Enter Your Institution Here">
                </div>

                 <div class ="form-group">
                 <h4> <label class="text-primary"> Course</label></h4>
                <input type="text" name = "course" class="form-control" value ="{{$education->course}}" placeholder="Enter Your Course Here">
                </div>

                
                 <div class ="form-group">
                    <button class ="btn btn-block btn-primary"> UPDATE PROFILE </button>
                </div>
            </form>

            
             <form method = "POST" action="/education/{{$education->id}}">
             {{method_field('DELETE')}}
             {{ csrf_field() }}
                <div class ="container">
                    <button class="alert alert-danger float-right">Delete Profile</button>
                    </div>
   </form>
  


           
            
     
    </div>
</div>
</div>
@endsection
