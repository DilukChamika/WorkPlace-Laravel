@extends('Company.layout')

@section('title', 'Edit Post')


@section('content')

<hr style="color:#242582; height:3px;">

        <div class="addpost">
            
            <form action="{{route('Company.updatevacancy', ['vacancy_id'=> $vacancy->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                  <label for="jobfield" class="editpostlabel">Job Field:</label><br>
                  <input type="text" id="jobfield" name="jobfield" value="{{$vacancy->jobField}}" class="editposttextfield"  required><br><br>
    
                  <label for="jobpost" class="editpostlabel">Job Post:</label><br>
                  <input type="text" id="jobpost" name="jobpost" value="{{$vacancy->jobPost}}" class="editposttextfield"  required><br><br>
    
                  <label for="salary" class="editpostlabel">Salary:</label><br>
                  <input type="text" id="salary" name="salary" value="{{$vacancy->salary}}" class="editposttextfield" required><br><br>
    
                  <label for="location" class="editpostlabel">Location:</label><br>
                  <input type="text" id="location" name="location" value="{{$vacancy->location}}" class="editposttextfield"  required><br><br>
    
                  <label for="flyerimg" class="editpostlabel">Flyer Image:</label><br>
                  Current Flyer image:<br>
                  <img src="{{ asset('storage/'.$vacancy->flyer) }}" alt="Flyer Image" style="width: 70%; height: auto;  border: 3px solid #553d67;"><br><br>
                  New Flyer image:<br>
                  <input type="file" name="flyerimg" style="font-size:14px"; required><br><br><br>
    
                  <input type="submit" value="Submit" id="subBtn"><br><br>
                  
              </form>
            
        </div>
        <br><br>
        <center>
			<div id="backbtndiv">
            <a href="{% url 'mypost' comdb.comid %}"> <button class="commonbtn">Back to MyPosts</button> </a>
            </div>
        </center>
        <hr style="color:#242582; height:3px;">

@endsection