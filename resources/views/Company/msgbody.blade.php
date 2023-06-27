@extends('companyViews.layout')

@section('title', 'Message')


@section('content')


<hr style="color:#242582; height:3px;">
			
<div class="row">

    <a href="{% url 'commsg' comdb.comid %}">  
        <div class="chatbackbtn">
            <button type="button" class="btn btn-primary">Back to Messages</button>
        </div>
    </a>
<br>
<div class="chatdivbox">
<div class="chat">
    {{-- {% for i in chatdb %} --}}
    <div class="msg">
    <br>
    <b>
     i.sender 
    :
    </b>
     i.msg 
    <br>
    <small>
     i.createtimestamp 
    </small>
    </div>
    {{-- {% endfor %} --}}
</div>
<div class="typebox">
    <form action="" method="POST" enctype="multipart/form-data">
        {{-- {% csrf_token %} --}}
        <br>
        <textarea rows="5" cols="60" name="newmsg" id="newmsg"></textarea>

        <div>
            <button type="submit" class="commonbtn">Send</button>
        </div>
        <br>

    </form>
</div>
</div>


</div>
<br>
<hr style="color:#242582; height:3px;">

@endsection