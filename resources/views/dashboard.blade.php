@extends('_master')

@section('title-content')
    Dashboard
@endsection

@section('css-content')

@endsection

@section('content')
<!-- Container -->
<div class="container-fluid mt-xl-50 mt-sm-30 mt-15">
    <!-- Row -->
     <div class="row mt-5">
         <div class="col-xl-12 mt-5">
             <div class="hk-row">


                 <div class="col-lg-3 col-sm-6">
                     <div class="card card-sm">
                         <div class="card-body">
                             <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Jumlah Kamar</span>
                             <div class="d-flex align-items-center justify-content-between position-relative">
                                 <div>
                                    <span class="d-block display-5 font-weight-400 text-dark"><span class="counter-anim">
                                        @foreach ($jml_kamar as $jk)
                                            {{ $jk->hasil }}  
                                        @endforeach
                                        </span> Kamar</span>
                                 </div>
                                 {{-- <div class="position-absolute r-0">
                                     <span id="pie_chart_1" class="d-flex easy-pie-chart" data-percent="86">
                                         <span class="percent head-font">86</span>
                                     </span>
                                 </div> --}}
                             </div>
                         </div>
                     </div>
                 </div>

                 
                 <div class="col-lg-3 col-sm-6">
                     <div class="card card-sm">
                         <div class="card-body">
                             <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Pasien Dirawat</span>
                             <div class="d-flex align-items-center justify-content-between position-relative">
                                 <div>
                                     <span class="d-block">
                                         <span class="display-5 font-weight-400 text-dark"><span class="counter-anim">@foreach ($dirawat as $dr)
                                            {{ $dr->hasil }}  
                                        @endforeach</span> Pasien</span>
                                     </span>
                                 </div>
                                 {{-- <div class="position-absolute r-0">
                                     <span id="pie_chart_2" class="d-flex easy-pie-chart" data-percent="75">
                                         <span class="percent head-font">75</span>
                                     </span>
                                 </div> --}}
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-6">
                     <div class="card card-sm">
                         <div class="card-body">
                             <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Pasien Booking</span>
                             <div class="d-flex align-items-end justify-content-between">
                                 <div>
                                     <span class="d-block">
                                         <span class="display-5 font-weight-400 text-dark"><span class="counter-anim">
                                             @foreach ($booking as $bk)
                                            {{ $bk->hasil }}  
                                        @endforeach</span> Pasien</span>
                                         
                                     </span>
                                 </div>
                                 {{-- <div>
                                     <span class="text-success font-12 font-weight-600">+5%</span>
                                 </div> --}}
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-sm-6">
                     <div class="card card-sm">
                         <div class="card-body">
                             <span class="d-block font-11 font-weight-500 text-dark text-uppercase mb-10">Pasien Keluar</span>
                             <div class="d-flex align-items-end justify-content-between">
                                 <div>
                                     <span class="d-block">
                                         <span class="display-5 font-weight-400 text-dark"><span class="counter-anim">
                                             @foreach ($keluar as $kl)
                                            {{ $kl->hasil }}  
                                        @endforeach</span> Pasien</span>
                                     </span>
                                 </div>
                                 {{-- <div>
                                     <span class="text-danger font-12 font-weight-600">-12%</span>
                                 </div> --}}
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="hk-row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header card-header-action">
                            <h6>Pasien Bulan Ini</h6>
                            <div class="d-flex align-items-center card-action-wrap">
                                <div class="inline-block dropdown">
                                    <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="hk-legend-wrap mb-20">
                                <div class="hk-legend">
                                    <span class="d-10 bg-indigo-light-2 rounded-circle d-inline-block"></span><span>A1</span>
                                </div>
                                <div class="hk-legend">
                                    <span class="d-10 bg-primary rounded-circle d-inline-block"></span><span>A2</span>
                                </div>
                                <div class="hk-legend">
                                    <span class="d-10 bg-indigo-light-1 rounded-circle d-inline-block"></span><span>A3</span>
                                </div>
                                <div class="hk-legend">
                                    <span class="d-10 bg-indigo-light-3 rounded-circle d-inline-block"></span><span>A4</span>
                                </div>
                            </div>
                            <div id="e_chart_12" class="echart" style="height:291px;"></div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-4">
                     <div class="card">
                         <div class="card-header card-header-action">
                             <h6>Penanggung</h6>
                             <div class="d-flex align-items-center card-action-wrap">
                                 <div class="inline-block dropdown">
                                     <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
                                     
                                 </div>
                             </div>
                         </div>
                         <div class="card-body">
                             <div class="hk-legend-wrap mb-20">
                                 <div class="hk-legend">
                                     <span class="d-10 bg-indigo-light-2 rounded-circle d-inline-block"></span>
                                 </div>
                                 
                             </div>
                             <div id="e_chart_11" class="echart" style="height:291px;"></div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="card">
                         <div class="card-header card-header-action">
                             <h6>Kamar Terpakai</h6>
                             <div class="d-flex align-items-center card-action-wrap">
                                 <div class="inline-block dropdown">
                                     <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false" role="button"><i class="ion ion-ios-more"></i></a>
                                    
                                 </div>
                             </div>
                         </div>
                         <div class="card-body">
                             <div class="hk-legend-wrap mb-20">
                                 @foreach ($pakai as $item)
                                     
                                 @endforeach
                                 <div class="hk-legend">
                                     <span class="d-10 bg-primary rounded-circle d-inline-block"></span><span>Terpakai</span>
                                 </div>
                                 <div class="hk-legend">
                                     <span class="d-10 bg-indigo-light-1 rounded-circle d-inline-block"></span><span>Tersedia</span>
                                 </div>
                             </div>
                             <div id="e_chart_10" class="echart" style="height:291px;"></div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- /Row -->
 </div>
 <!-- /Container -->


@endsection

@section('js-content')
 <script>
     window.onload = function() {
     
    var dataPoints = [];
     var echartsConfig = function() { 
        if( $('#e_chart_10').length > 0 ){
          

		var e_chart_10 = echarts.init(document.getElementById('e_chart_10'));
		
            var option9 = {
                tooltip: {
                    show: true,
                    backgroundColor: '#fff',
                    borderRadius:6,
                    padding:6,
                    axisPointer:{
                        lineStyle:{
                            width:0,
                        }
                    },
                    textStyle: {
                        color: '#324148',
                        fontFamily: '"Poppins", sans-serif',
                        fontSize: 12
                    }	
                },
                series: [
                    {
                        name:'',
                        type:'pie',
                        radius: ['0', '50%'],
                        color: ['#3a55b1', '#536bbb', '#798cca', '#9caad8'],
                        data: dataPoints,
                        label: {
                            normal: {
                                formatter: '{b}\n{d}%'
                            },
                    
                        }
                    }
                ]
            };
            e_chart_10.setOption(option9);
            e_chart_10.resize();
        }
     }

     function addData(data) {
	    
            dataPoints.push({
                value: data['pakai'][0].Terpakai,
                name: "Terpakai"
            });
            dataPoints.push({
                value: data['pakai'][0].tidak_terpakai,
                name: "Tersedia"
            });
        
            echartsConfig();

    }

    $.getJSON("/cekKamar", addData);

    //Pasien
    var dataPoints2 = [];
    if( $('#e_chart_12').length > 0 ){

       
		var eChart_12 = echarts.init(document.getElementById('e_chart_12'));
		
		var option12 = {
			tooltip: {
				show: true,
				backgroundColor: '#fff',
				borderRadius:6,
				padding:6,
				axisPointer:{
					lineStyle:{
						width:0,
					}
				},
				textStyle: {
					color: '#324148',
					fontFamily: '"Poppins", sans-serif',
					fontSize: 12
				}	
			},
			series: [
				{
					name:'',
					type:'pie',
					radius : '60%',
					center : ['50%', '50%'],
					roseType : 'radius',
					color: ['#3a55b1', '#9caad8', '#798cca', '#f6f3f2'],
					data: dataPoints2,
					label: {
						normal: {
							formatter: '{b}\n{d}%'
						},
				  
					}
				}
			]
        };
	}
    
    function addData2(data) {
            for (var i = 0; i < data['pas'].length; i++) {
                var pasien = "";
                if(data['pas'][i].status_kamar == "keluar"){
                    pasien = "Keluar";
                } else if (data['pas'][i].status_kamar == "masuk"){
                    pasien = "Dirawat";
                } else {
                    pasien = data['pas'][i].status_kamar;
                }
                dataPoints2.push({
                    value: data['pas'][i].jumlah,
                    name: pasien
                });
            }
            console.log(dataPoints2);
            eChart_12.setOption(option12);
		    eChart_12.resize();

        }

        $.getJSON("/pasien", addData2);


        //penanggung
    var dataPoints1 = [];
    if( $('#e_chart_11').length > 0 ){

       
		var eChart_11 = echarts.init(document.getElementById('e_chart_11'));
		
		var option11 = {
			tooltip: {
				show: true,
				backgroundColor: '#fff',
				borderRadius:6,
				padding:6,
				axisPointer:{
					lineStyle:{
						width:0,
					}
				},
				textStyle: {
					color: '#324148',
					fontFamily: '"Poppins", sans-serif',
					fontSize: 12
				}	
			},
			series: [
				{
					name:'',
					type:'pie',
					radius : '60%',
					center : ['50%', '50%'],
					roseType : 'radius',
					color: ['#3a55b1', '#9caad8', '#798cca', '#f6f3f2'],
					data: dataPoints1,
					label: {
						normal: {
							formatter: '{b}\n{d}%'
						},
				  
					}
				}
			]
        };
	}
    
    function addData1(data) {
            for (var i = 0; i < data['png'].length; i++) {
                
                dataPoints1.push({
                    value: data['png'][i].jumlah,
                    name: data['png'][i].penanggungjawab
                });
            }
            console.log(data);
            eChart_11.setOption(option11);
		    eChart_11.resize();

        }

        $.getJSON("/penanggung", addData1);

    }
 </script>
@endsection