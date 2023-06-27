<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('css/styles.css')}}">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>@yield('title')</title>
</head>

<body style="background-color: #88738E;">
    <br>
	
    <div class="container p-3" style="background-color: #ffffff;">
        <!-- HEADER DIV -->
			<div class="row header">
				<div class="col-lg-3 col-4">
				<img src="{{ asset ( 'images/WorkplaceIcon.png') }}" alt="Company Logo" style=" height:64px; width: auto;" class="companyLogo">
				</div>
				<div class="col-lg-7 col-5 ">
				</div>
				<div class="col-lg-2 col-3 ">
                    
				    <a href="{{route('Company.aboutmycompany')}}" id="NoUnderline"><img src="{{ asset('storage/'.Auth::guard('company')->user()->profilePic) }}" alt="profile pic" style="width: 34px; height: 34px;" class="usericon rounded-pill"><br>{{Auth::guard('company')->user()->name}}</a><br>
                    <a href="{{route('Company.logout')}}" onclick="event.preventDefualt(); document.getElementById('logout-form').submit();"> Logout</a>
                    <form action="{{route('Company.logout')}}" method="POST" id="logout-form" class="d-none"> @csrf </form>
                    
				</div>
			</div>

        <!-- NavBar -->
        <br>
        @include('partials._comNavbar')
        <br>

        @yield('content')


        <div class="row">
            <br><br><hr style="color:#242582; height:3px;">
        
            <h5>Copyright @ WorkPlace </h5>
        </div>
</div>
<br>
</body>
</html>