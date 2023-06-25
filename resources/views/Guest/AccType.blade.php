@extends('Guest.layout')
@section('title', 'Select Account Type')
@section('content')

<style>
    *{
      box-sizing: border-box;
    }
    .container{
      display:flex;
      align-items: left;
    }
  </style>

  <center>
    
      <div id="selectbox">
        <br><br><h3>Select Your Account Type:</h3>
       
        <div class="container">
      
          <div class="radio-title-group">

            <div class="input-container">
              <input id="com" type="radio" name="radio" onclick="location.href='/CreateCompanyAcc';">
              <div class="radio-tile">
                <ion-icon name="home"></ion-icon>
                <label for="com">Company</label><br><br>
              </div>
            </div>
         
            <div class="input-container">
              <input id="stu" type="radio" name="radio" onclick="location.href='/CreateStudentAcc';">
              <div class="radio-tile">
                <ion-icon name="contacts"></ion-icon>
                <label for="stu">Student</label><br><br>
              </div>
            </div>

          </div>
        </div><br><br><br><br>
        <a href="/login"><input type="button" value="Back" id="acctypebackBtn" /></a>

    </div>
   
  </center>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    
@endsection
    