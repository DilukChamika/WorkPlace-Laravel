@extends('Company.layout')

@section('title', 'Edit Post')


@section('content')


<center>
    <div id="createaccbox">  
        <h5><u><b>Edit Company Details</b></u></h5><br>
        <br>
        <img src="{{ asset('storage/'.Auth::guard('company')->user()->profilePic) }}" style="width: 40%; height: auto;" alt="profile pic"" alt="Comapny Avatar" id="CompanyAvatar">

      <form action="{{route('Company.editComData')}}" method="POST" enctype="multipart/form-data">
        @csrf
          <label for="companyname" style="font-size:14px";>Company Name:</label><br>
          <input type="text" id="companyname" class="details" name="companyname" value="{{$user->name}}">
          <br>
          @error('companyname')
            <p class="text-red text-xs mt-1">{{$message}}</p>
          @enderror
          <br>

          <label for="companyDescription" style="font-size:14px";>About Company:</label><br>
          <input type="text" class="details" name="companyDescription" value="{{$user->companyDescription}}">
          <br>
          @error('companyDescription')
            <p class="text-red text-xs mt-1">{{$message}}</p>
          @enderror
          <br>

          <label for="regnumber" style="font-size:14px";>Company Registration Number:</label><br>
          <input type="text" id="regnumber" class="details" name="regnumber" value="{{$user->regNumber}}">
          <br>
          @error('regnumber')
            <p class="text-red text-xs mt-1">{{$message}}</p>
          @enderror
          <br>

          <label for="email" style="font-size:14px">Email:</label><br>
          <input type="email" id="email" class="details" name="email" value="{{$user->email}}">
          <br>
          @error('email')
            <p class="text-red text-xs mt-1">{{$message}}</p>
          @enderror
          <br>

          <label for="phone" style="font-size: 14px;">Contact Number:</label><br>
          <input type="text" id="phone" class="details" name="phone" value="{{$user->tel}}" >
          <br>
          @error('phone')
            <p class="text-red text-xs mt-1">{{$message}}</p>
          @enderror
          <br>

          <label for="Address" style="font-size:14px";>Address:</label><br>
          <input type="text" class="details" name="Address" value="{{$user->address}}">
          <br>
          @error('Address')
            <p class="text-red text-xs mt-1">{{$message}}</p>
          @enderror
          <br>

         

          <label for="profilePicture" style="font-size:14px";>New Profile Picture:</label><br>
          <input type="file" name="profilePicture" style="font-size:14px"; ><br>
          @error('profilePicture')
            <p class="text-red text-xs mt-1">{{$message}}</p>
          @enderror
          <br>

          <label for="comlinkedin" style="font-size: 14px;">Add Company LinkedIn Profile/Website:</label><br>
          <input type="url" id="linkedin" class="details" name="comlinkedin" style="font-size: 14px;" value="{{$user->linkedin}}">
          <br>
          @error('comlinkedin')
            <p class="text-red text-xs mt-1">{{$message}}</p>
          @enderror
          <br><br>

          <input type="submit" value="Submit" id="createacc-subBtn">
           
      </form>
      <br><br>
      <a href="{{route('Company.deletemyaccount')}}"><Button class="btn btn-danger" id="deletemyaccountbtn" onclick="return confirm('{{ __('Are you sure you want to delete your account? You cannot undo this!') }}')">Delete My Account</Button></a>
  </div>

			
</center>
        

@endsection