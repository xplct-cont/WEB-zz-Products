@extends('layouts.app')

@section('content')


<div class="backkk">

          <img src="{{url('images/backkkk.jpg')}}" width="1600" height="680" alt=""/>

     </div>


   <div class="cc">
    <img src="{{url('images/redragon.jpg')}}" width="200" height="200" alt=""/>
    <div class="ov">
    <div class="t"><b>Brand :</b> <br> Redragon</div>
    <div class="t1"><b>Model :</b> <br> H510</div>
    <div class="t2"><b>Price :</b> $500.00</div>
    </div> 
</div>



    <div class="cd">
    <img src="{{url('images/pandora.jpg')}}" width="200" height="200" alt=""/>
    <div class="ove">
    <div class="te"><b>Brand :</b> <br> Redragon</div>
    <div class="te1"><b>Model :</b> <br> Pandora</div>
    <div class="te2"><b>Price :</b> $300.00</div>
    </div>
</div>
   
    <div class="cf">
    <img src="{{url('images/barracudax.jpg')}}" width="200" height="200" alt=""/>
    <div class="over">
    <div class="tex"><b>Brand :</b> <br> Razer</div>
    <div class="tex1"><b>Model :</b> <br> Barracuda</div>
    <div class="tex2"><b>Price :</b> $650.00</div>
    </div>
    </div>

    <div class="cg">
    <img src="{{url('images/blackshark2.jpg')}}" width="200" height="200" alt=""/>
    <div class="overl">
    <div class="text"><b>Brand :</b> <br> Razer</div>
    <div class="text1"><b>Model :</b> <br> Blackshark</div>
    <div class="text2"><b>Price :</b> $200.00</div>
    </div>
    </div>

    <div class="ck">
    <img src="{{url('images/gpro.jpg')}}" width="200" height="200" alt=""/>
    <div class="overla">
    <div class="texts"><b>Brand :</b> <br> Logitech</div>
    <div class="texts1"><b>Model :</b> <br> G-Pro</div>
    <div class="texts2"><b>Price :</b> $520.00</div>
    </div>
    </div>
    
  <style>
        .cc{
            position:absolute;
            left:270px; top:100px;
            background-color: silver;
            padding-top: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
        }

.ov {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #212529;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}


.cc:hover .ov {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.t {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 20%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

.t1 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.t2 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 80%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}


        .cd{
            position:absolute;
            left:560px; top:100px;
            background-color: silver;
            padding-top: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
            
        }

        .ove {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #212529;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}


.cd:hover .ove {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.te {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 20%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

.te1 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.te2 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 80%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}


        .cf{
            position:absolute;
            left:850px; top:100px;
            background-color: silver;
            padding-top: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
        }


        .over {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #212529;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}


.cf:hover .over {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.tex {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 20%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

.tex1 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.tex2 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 80%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}


        .cg{
            position:absolute;
            left:1140px; top:100px;
            background-color: silver;
            padding-top: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
            padding-left: 15px;

        }
        .overl {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #212529;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}


.cg:hover .overl {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 20%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

.text1 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.text2 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 80%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}


        .ck{
            position:absolute;
            left:1430px; top:100px;
            background-color: silver;
            padding-top: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
            padding-left: 15px;

        }

        .overla {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #212529;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}


.ck:hover .overla {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.texts {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 20%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

.texts1 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.texts2 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 80%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}

.fgf{
    position: absolute;
    font-size:40px;
    top: 50px;
    left:270px;
   
}



      </style>

    <body>

    <div class="fgf">
    <a href="{{url('/intro')}}"><b>Click For More<b></a>
    </div>

    























































    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('products.create') }}">
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
                @include('products.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

