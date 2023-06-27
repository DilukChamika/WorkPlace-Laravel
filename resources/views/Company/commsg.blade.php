@extends('Company.layout')

@section('title', 'Messages-Company')

@section('content')

<hr style="color:#242582; height:3px;">

            <div class="row">
				<center>
                <div class="newchatHeads">
					<h2 style=" font-family: verdana; font-size: 150%;">
					<img src="{{ asset ('images/icon/Unread.png') }}" alt="Unread icon" style="width: 32px; height: 40px;">
					<u> New Messages</u></h2>
					<table style="border:3px solid #2f2fa2; width: 60%;">
					
                    {{-- {% for i in newmsgdb %} --}}
					<tr style="border:1px solid #242582;">
					<td>
						<a href="">
							<div class="heads">
								<h5>
								<img src="{{ asset ('images/icon/Unread.png') }}" alt="Unread icon" style="width: 26px; height:34px;">
								 i.sender </h5>
							</div>
						</a>
					</td>
					<td>
						<a href=" url 'msgseen' comdb.comid i.msgid "> 
							<div class="marbtndiv">
								<br>
									<button type="button" class="markasread">Mark as Read</button>
							</div>
						</a>
						<br>
					</td>
				
					</tr>
					<br>
					{{-- {% endfor %} --}}
			
				</table>
				</div>
				</center>
            </div>
			<br><br><br>
			
    
			<div class="row">
                <div class="oldchatHeads">
					<h2 style=" font-family: verdana; font-size: 150%;">
					<img src="{{asset( 'images/icon/readmsg.png')}} " alt="Unread messages" style="width: 32px; height: 38px;">
					<u> Old Messages</u>
					</h2>
					<br>
					
                    {{-- {% for k in oldmsgdb %} --}}
                    <a href="{% url 'comchat' comdb.comid k.senderID %}">
						<div class="heads">
							<h5>
								<img src="{{asset( 'images/icon/readmsg.png') }}" alt="Unread messages" style="width: 28px; height: 32px;">
								 k.sender 
							</h5>
						</div>
                    </a>
					
                    {{-- {% endfor %} --}}
				
                </div>
            </div>

            <hr style="color:#242582; height:3px;">

@endsection