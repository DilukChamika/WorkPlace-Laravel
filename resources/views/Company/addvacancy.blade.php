@extends('Company.layout')

@section('title', 'Add Vacancy')


@section('content')

<hr style="color:#242582; height:3px;">

            <div class="addpost">
				
                <form action="{{route('Company.storevacancy')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <label for="jobfield" class="addpostlabel">Job Field:</label><br>
                      <input type="text" id="jobfield" name="jobfield" class="editposttextfield" required><br><br>
        
                      <label for="jobpost" class="addpostlabel">Job Post:</label><br>
                      <input type="text" id="jobpost" name="jobpost" class="editposttextfield" required><br><br>
        
                      <label for="salary" class="addpostlabel">Salary:</label><br>
                      <input type="text" id="salary" name="salary" class="editposttextfield"><br><br>
        
                      <label for="location" class="addpostlabel">Location:</label><br>
                      <input type="text" id="location" name="location" class="editposttextfield" required><br><br>
        
                      <label for="flyerimg" class="addpostlabel">Flyer Image:</label><br>
                      <input type="file" name="flyerimg" style="font-size:14px"; required><br><br>
        
                      <input type="submit" value="Submit" id="subBtn"><br><br>
                      
                  </form>
				
            </div>
			<br>
			<hr style="color:#242582; height:3px;">

@endsection