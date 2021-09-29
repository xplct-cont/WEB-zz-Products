@extends('layouts.app')

@section('content')

<div class="backkk">

          <img src="{{url('images/backgroundhome.jpg')}}" width="1600" height="680" alt=""/>

     </div>   
    </div>
   
    <div class="ba">

          <img src="{{url('images/homepic.png')}}" width="300" height="300" alt=""/>

     </div>
    </div>

    <div class="bg">

          <img src="{{url('images/facebook.png')}}" width="50" height="50" alt=""/>

</div>
</div>

    <div class="bl">

          <img src="{{url('images/youtube.png')}}" width="50" height="50" alt=""/>

</div>
</div>
    
    <div class="bw">

          <img src="{{url('images/linkedin.png')}}" width="50" height="50" alt=""/>

</div>
</div>


     <div class="word">
         <h1>Hear it. Feel it</h1>
     </div>
   
  <style>
   .ba{
       position:absolute;
       left:250px;
       top:60px;
   }
    h1{
        color:white;
        position:absolute;
        font-size:100px;
        top:100px;
        left:550px;
        text-shadow: 3px 3px #FF6600;
        font-family:'Brush Script MT', cursive;
    }
   
    .bg{
     position:absolute;
     left:330px;
     top:685px;
  }

    .bl{
     position:absolute;
     left:270px;
     top:685px;
  }
  
    .bw{
     position:absolute;
     left:390px;
     top:685px;
  }





      </style>          
    </div>
  </body>
  </div>
</div>
@endsection


