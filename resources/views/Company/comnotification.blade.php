@extends('companyViews.layout')

@section('title', 'Notifications')

@section('content')

<div class="row" id="newNotifications">
    <h1 style="color:blue; font-family: verdana; font-size: 120%;"><u> New Notifications</u></h1>
    <ul>
    {{-- {% for i in newNotifications %} --}}
    <hr style="color:#242582; height:3px;">
    <div class="row">
        <div class="col-1 col-sm-1"></div>
            <div class="col-10 col-sm-10 notibody" >
                <br>
                <div class="singlenotification"  style="float: left; width: 60%">
                    <div class="notitext">
                        <li>
                         i.notification 
                        <br><small> i.createtimestamp </small><br>
                        <br>
                        <a href="{% url 'markasreadCom' comdb.comid i.ComNotificationId %}"> <button class="removenotification">Mark as read</button></a>
                    </li>
                    </div><br>	
                </div>
            </div>
        <div class="col-1 col-sm-1"></div>	
    </div>
    {{-- {% endfor %} --}}
</ul>

</div>
<hr style="color:#242582; height:3px;">
<br><br>

<div class="row" id="oldNotifications">
    <h1 style="color:blue; font-family: verdana; font-size: 120%;"><u>Marked as read</u> </h1>
    <ul>
    {{-- {% for k in oldNotifications %} --}}
    <hr style="color:#242582; height:3px;">
    <div class="row">
        <div class="col-1 col-sm-1"></div>
            <div class="col-10 col-sm-10 notibody" >
                <br>
                <div class="singlenotification"  style="float: left; width: 60%">
                    <div class="notitext">
                        <li>  k.notification 
                        <br><small> k.createtimestamp </small><br>
                    </li>
                    </div><br>	
                </div>
            </div>
        <div class="col-1 col-sm-1"></div>
    </div>
    {{-- {% endfor %} --}}
</ul>

</div>

@endsection