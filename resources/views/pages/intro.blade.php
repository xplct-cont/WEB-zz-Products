<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Products</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>

<div class="backkk">

          <img src="{{url('images/backkkk.jpg')}}" width="1700" height="820" alt=""/>

     </div>


<div class="dd">
    <img src="{{url('images/asus_rogstrixfusion.jpg')}}" width="200" height="200" alt=""/>
    <div class="ov">
    <div class="t"><b>Brand :</b> <br> Asus ROG STRIX</div>
    <div class="t1"><b>Model :</b> <br> Fusion </div>
    <div class="t2"><b>Price :</b> $750.00</div>
    </div> 
</div>


<div class="de">
    <img src="{{url('images/hyper-x_cloudrevolver.jpg')}}" width="200" height="200" alt=""/>
    <div class="ovv">
    <div class="tt"><b>Brand :</b> <br> Hyper-X</div>
    <div class="tt1"><b>Model :</b> <br> Cloud Revolver </div>
    <div class="tt2"><b>Price :</b> $150.00</div>
    </div> 
</div>


<div class="df">
    <img src="{{url('images/kingston_cloudstinger.jpg')}}" width="200" height="200" alt=""/>
    <div class="ovvv">
    <div class="ttt"><b>Brand :</b> <br> Hyper-X</div>
    <div class="ttt1"><b>Model :</b> <br> Cloud Stinger </div>
    <div class="ttt2"><b>Price :</b> $175.00</div>
    </div> 
</div>

<div class="dg">
    <img src="{{url('images/jblquantumone.png')}}" width="200" height="200" alt=""/>
    <div class="ovvvv">
    <div class="tttt"><b>Brand :</b> <br> JBL</div>
    <div class="tttt1"><b>Model :</b> <br> Quantum One </div>
    <div class="tttt2"><b>Price :</b> $285.00</div>
    </div> 
</div>


<div class="dh">
    <img src="{{url('images/razer_krakenX.png')}}" width="200" height="200" alt=""/>
    <div class="ovvvvv">
    <div class="ttttt"><b>Brand :</b> <br> Razer</div>
    <div class="ttttt1"><b>Model :</b> <br> Kraken X </div>
    <div class="ttttt2"><b>Price :</b> $340.00</div>
    </div> 
</div>


<div class="di">
    <img src="{{url('images/steelseries_arctis.jpg')}}" width="200" height="200" alt=""/>
    <div class="ovvvvvv">
    <div class="tttttt"><b>Brand :</b> <br> SteelSeries</div>
    <div class="tttttt1"><b>Model :</b> <br> Arctis</div>
    <div class="tttttt2"><b>Price :</b> $870.00</div>
    </div> 
</div>

<div class="dj">
    <img src="{{url('images/tusq_in-ear.jpg')}}" width="200" height="200" alt=""/>
    <div class="ovvvvvvv">
    <div class="ttttttt"><b>Brand :</b> <br> SteelSeries</div>
    <div class="ttttttt1"><b>Model :</b> <br> TUSQ In-Ear</div>
    <div class="ttttttt2"><b>Price :</b> $460.00</div>
    </div> 
</div>

<div class="dk">
    <img src="{{url('images/onikuma-k10.png')}}" width="200" height="200" alt=""/>
    <div class="ovvvvvvvv">
    <div class="tttttttt"><b>Brand :</b> <br> Onikuma</div>
    <div class="tttttttt1"><b>Model :</b> <br> K10</div>
    <div class="tttttttt2"><b>Price :</b> $120.00</div>
    </div> 
</div>

<div class="dl">
    <img src="{{url('images/starnex-h7.png')}}" width="200" height="200" alt=""/>
    <div class="ovvvvvvvvv">
    <div class="ttttttttt"><b>Brand :</b> <br> Starnex</div>
    <div class="ttttttttt1"><b>Model :</b> <br> H7</div>
    <div class="ttttttttt2"><b>Price :</b> $90.00</div>
    </div> 
</div>

<div class="dm">
    <img src="{{url('images/tecware-Q2.png')}}" width="200" height="200" alt=""/>
    <div class="ovvvvvvvvvv">
    <div class="tttttttttt"><b>Brand :</b> <br> Tecware</div>
    <div class="tttttttttt1"><b>Model :</b> <br> Q2</div>
    <div class="tttttttttt2"><b>Price :</b> $95.00</div>
    </div> 
</div>





<style>
  .backkk{
      
  }

   .sd{
    position: absolute;
    font-size:40px;
    top: 0px;
    left:20px;
    
    
}

.dd{
            position:absolute;
            left:100px; top:70px;
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


.dd:hover .ov {
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



.de{
            position:absolute;
            left:400px; top:70px;
            background-color: silver;
            padding-top: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
        }

.ovv {
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


.de:hover .ovv {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.tt {
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

.tt1 {
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
.tt2 {
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


.df{
            position:absolute;
            left:700px; top:70px;
            background-color: silver;
            padding-top: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
        }

.ovvv {
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


.df:hover .ovvv {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.ttt {
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

.ttt1 {
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
.ttt2 {
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


.dg{
            position:absolute;
            left:1005px; top:70px;
            background-color: silver;
            padding-top: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
        }

.ovvvv {
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


.dg:hover .ovvvv {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.tttt {
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

.tttt1 {
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
.tttt2 {
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

.dh{
            position:absolute;
            left:1320px; top:70px;
            background-color: silver;
            padding-top: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
        }

.ovvvvv {
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


.dh:hover .ovvvvv {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.ttttt {
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

.ttttt1 {
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
.ttttt2 {
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

.di{
            position:absolute;
            left:100px; top:400px;
            background-color: silver;
            padding-top: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
        }

.ovvvvvv {
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


.di:hover .ovvvvvv {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.tttttt {
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

.tttttt1 {
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
.tttttt2 {
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


.dj{
            position:absolute;
            left:400px; top:400px;
            background-color: silver;
            padding-top: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
        }

.ovvvvvvv {
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


.dj:hover .ovvvvvvv {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.ttttttt {
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

.ttttttt1 {
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
.ttttttt2 {
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


.dk{
            position:absolute;
            left:700px; top:400px;
            background-color: silver;
            padding-top: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
        }

.ovvvvvvvv {
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


.dk:hover .ovvvvvvvv {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.tttttttt {
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

.tttttttt1 {
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
.tttttttt2 {
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


.dl{
            position:absolute;
            left:1005px; top:400px;
            background-color: silver;
            padding-top: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
        }

.ovvvvvvvvv {
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


.dl:hover .ovvvvvvvvv {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.ttttttttt {
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

.ttttttttt1 {
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
.ttttttttt2 {
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


.dm{
            position:absolute;
            left:1320px; top:400px;
            background-color: silver;
            padding-top: 15px;
            padding-right: 15px;
            padding-bottom: 15px;
            padding-left: 15px;
        }

.ovvvvvvvvvv {
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


.dm:hover .ovvvvvvvvvv {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.tttttttttt {
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

.tttttttttt1 {
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
.tttttttttt2 {
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





    </style>

<body>
<div class="sd">

<a href="{{url('/home')}}"><b>Go Back</b></a>
</div>
</body>
</html>