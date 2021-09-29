@extends('layouts.app')

@section('content')
   
<body>
    <div class="bac">

<img src="{{url('images/backgroundservices.jpg')}}" width="1600" height="750" alt=""/>

</div>

<div class="back">

<img src="{{url('images/imagebeatlogo.png')}}" width="250" height="250" alt=""/>

</div>

<div class="backy">

           <img src="{{url('images/tec.png')}}" width="400" height="300" alt=""/>

</div>

<div class="mm">
         <h6>
            <b> Fix Your Headphone</b>
         </h6>
</div>


<div class="repair">
         <h2>
         Here are some of Headphone Brands we can repair: 
         </h2>
</div>

<div>
<div class="fga">
          <a href="{{url('/bose')}}"><b>BOSE HEADPHONES<b></a>
    </div>
         
</div>

<div>
     <div class="fgb">
         <a href="{{url('/beats')}}"><b>BEATS HEADPHONES<b></a>
    </div>
         
</div>   
   
<div>
    <div class="fgc">
         <a href="{{url('/other')}}"><b>OTHER HEADPHONE BRANDS<b></a>
    </div>
</div>







</body>
<style>

.back{
        position:absolute;
        top: 80px;
        left:280px;
    }

    .backy{
        position:absolute;
        top: 400px;
        left:1150px;
    }

    .mm{
        color:#007bff;
        position:absolute;
        top: 90px;
        left:580px;
        font-style:italic;
        text-shadow: 2px 2px white;
        font-family:'Times New Roman', serif;
        
    }

    h6{
        font-size:70px;
    }


    .repair{
        color:white;
        position:absolute;
        top: 350px;
        left:300px;
        font-size:30px;
        text-shadow: 2px 2px dimgray;
        font-family:'Times New Roman', serif;
        
    }

    .fga{
        text-shadow: 1px 1px white;
        position: absolute;
        font-size:35px;
        top:400px;
        left:300px;
        font-family:'Times New Roman', serif;
}

.fgb{
        text-shadow: 1px 1px white;
        position: absolute;
        font-size:35px;
        top:450px;
        left:300px;
        font-family:'Times New Roman', serif;
}


.fgc{
        text-shadow: 1px 1px white;
        position: absolute;
        font-size:35px;
        top:500px;
        left:300px;
        font-family:'Times New Roman', serif;
}

    </style>

<section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Services</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('services.create') }}">
                        Add New
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('services.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                    </div>
                </div>
    </div>


@endsection

