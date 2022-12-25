@extends('orgadmin.master')
@section('style')
<style type="text/css">
.form-check {
    display: block;
    width: 100%;
    margin: 13px 0px;
}
span#basic-addon2 {
    width: 10%;
}

.profilepic {
    height: 100%;
    width: 100%;
}
.pagination-dssd {
    float: right;
    margin-top: 20px;
}
</style>



@endsection()


@section('orgadmin_org_s_resource') active-nav @endsection
@section('org_admin_content')


<!-- ------ Banner Aria Start ------ -->
<div class="col-md-10 right-aria-sldksd">
  <div class="content-body-dskd">
    <br>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">DASHBOARD</li>
        <li class="breadcrumb-item active" aria-current="page"><b>
    Search Profile</b></li>
      </ol>
    </nav>
    <hr>
    <br>


<div class="row">

@foreach($resources as $item)
		<!-- grid Profile -->
		<div class="col-md-6">
			<div class="single-grid">
				<div class="card mb-3" style="">
				  <div class="row g-0">
				    <div class="col-md-4">
				    @if($item->file)
				      <div class="profilepic" style="background: url({{asset('img/upload/contribute/'.$item->file)}}) no-repeat center center/cover"></div>
				    @else
				      <div class="profilepic" style="background: url({{asset('img/default.jpg')}}) no-repeat center center/cover"></div>
				    @endif


				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				        <h5 class="card-title">{{$item->title}}</h5>
				        <p class="card-text">
				        	{{$item->short_desc}}
				    	</p>
				        <a class="btn btn-green"  href="{{route('orgadmin.organisation.s_resource.single.resources',
				        ['resourcid'=>$item->id,'id'=>$org->id])}}" >more info</a>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	<!-- grid Profile -->
@endforeach


          <!-- single Form Start-->
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

<!-- --------------- Explore GGF End----------------- -->
@endsection()


@section('scripts')





<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyDjS5QXqKr4vDPLOTUwFcmn8oDSjQIawNc'></script>


    <!-- Optional JavaScript; choose one of the two! -->

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
          <!-- Activ'Map plugin -->
    <link rel="stylesheet" href="{{asset('frontend/css/activmap-classic.css')}}">
    <script src="{{asset('frontend/js/jquery-activmap.min.js')}}"></script>
    <script src="{{asset('frontend/js/markercluster.min.js')}}"></script>



        <script>
        $(function(){
            // Activ'Map plugin init
            // All options here: http://activmap.pandao.eu/doc/#options
            $('#activmap-wrapper').activmap({
                 places: [
                    {title: 'Crowne Plaza', address: '19 New Bridge Street London EC4V 6DB, United Kingdom', url: 'https://activmap.pandao.eu/', tags: ['tourism_01'], lat: 51.512279, lng: -0.104649, img: 'https://a0.muscache.com/im/pictures/453efc29-d14e-4edf-b1ba-5dd82a63e3f7.jpg', icon: 'images/icons/marker-hotel.png'},
                    {title: 'The Cavendish London', address: '81 Jermyn Street London SW1Y 6JF, United Kingdom', phone: '+44 20 7930 2111', url: 'https://activmap.pandao.eu/', tags: ['tourism_01'], lat: 51.507632, lng: -0.137779, img: 'https://a0.muscache.com/im/pictures/453efc29-d14e-4edf-b1ba-5dd82a63e3f7.jpg', icon: 'images/icons/marker-hotel.png'},
                    {title: 'Hilton London Tower Bridge', address: '5 More London Place, Tooley Street London SE1 2BY, United Kingdom', phone: '+44 20 3002 4300', url: 'https://activmap.pandao.eu/', tags: ['tourism_01'], lat: 51.504580, lng: -0.082737, img: 'https://a0.muscache.com/im/pictures/5446f5d7-7fde-47c3-9c43-206c635e63e3.jpg', icon: 'images/icons/marker-hotel.png'},
                    {title: 'Hertz Rent-A-Car', address: '35 Edgware Road London W2 2JE, United Kingdom', phone: '+44 870 844 8844', url: 'https://activmap.pandao.eu/', tags: ['shops_04'], lat: 51.514633, lng: -0.162566, img: 'https://a0.muscache.com/im/pictures/1113b1c5-5669-4931-8126-b887a0f601d1.jpg', icon: 'https://a0.muscache.com/im/pictures/1113b1c5-5669-4931-8126-b887a0f601d1.jpg'},
                    {title: 'Radiant Hair and Beauty Salon', address: '178 Jamaica Road London, UK SE16 4RT, United Kingdom', phone: '+44 20 7231 8833', url: 'https://activmap.pandao.eu/', tags: ['shops_01'], lat: 51.498222, lng: -0.062331, img: 'https://a0.muscache.com/im/pictures/fd030d49-502a-4872-bf0e-8db8cf8a7df0.jpg', icon: 'images/icons/marker-eye.png'},
                    {title: 'Harrods', address: '87-135 Brompton Road London SW1X 7XL, United Kingdom', phone: '+44 20 7730 1234', url: 'https://activmap.pandao.eu/', tags: ['shops_01','shops_02'], lat: 51.499418, lng: -0.163239, img: 'https://a0.muscache.com/im/pictures/fd030d49-502a-4872-bf0e-8db8cf8a7df0.jpg', icon: 'images/icons/marker-diam.png'},
                    {title: 'House of Fraser', address: '318 Oxford Street London W1C 1HF, United Kingdom', phone: '+44 344 800 3752', url: 'https://activmap.pandao.eu/', tags: ['shops_02'], lat: 51.514886, lng: -0.146204, img: 'https://a0.muscache.com/im/pictures/fd030d49-502a-4872-bf0e-8db8cf8a7df0.jpg', icon: 'images/icons/marker-diam.png'},
                    {title: 'Holland & Barrett', address: '94A Brompton Road Knightsbridge, London SW3 1ER, United Kingdom', phone: '+44 20 7581 3324', url: 'https://activmap.pandao.eu/', tags: ['shops_03'], lat: 51.499875, lng: -0.164063, img: 'https://www.gannett-cdn.com/authoring/video-thumbnails/6ef53e7f-fd7f-418c-b9b6-f539156b7207_poster.jpg?width=660&height=371&fit=crop&format=pjpg', icon: 'images/icons/marker-food.png'},
                    {title: 'Whole Foods Market', address: '20 Glasshouse Street London W1B 5AR, United Kingdom', phone: '+44 20 7406 3100', url: 'https://activmap.pandao.eu/', tags: ['shops_03'], lat: 51.510434, lng: -0.136833, img: 'https://a0.muscache.com/im/pictures/453efc29-d14e-4edf-b1ba-5dd82a63e3f7.jpg', icon: 'images/icons/marker-food.png'},
                    {title: 'Greensmiths', address: '27 Lower Marsh London SE1 7RG, United Kingdom', phone: '+44 20 7921 2970', url: 'https://activmap.pandao.eu/', tags: ['shops_03'], lat: 51.500827, lng: -0.112327, img: 'https://cdn.britannica.com/96/115096-050-5AFDAF5D/Bellagio-Hotel-Casino-Las-Vegas.jpg', icon: 'images/icons/marker-food.png'},
                    {title: 'Emirates Stadium', address: 'Hornsey Road London N7 7AJ, United Kingdom', phone: '+44 20 7619 5003', url: 'https://activmap.pandao.eu/', tags: ['services_06'], lat: 51.554888, lng: -0.108419, img: 'https://media-cdn.tripadvisor.com/media/photo-s/16/1a/ea/54/hotel-presidente-4s.jpg', icon: 'images/icons/marker-ball.png'},
                    {title: 'Wembley Stadium', address: 'Wembley London HA9 0WS, United Kingdom', phone: '+44 844 980 8001', url: 'https://activmap.pandao.eu/', tags: ['services_06'], lat: 51.555973, lng: -0.279502, img: 'https://storage.googleapis.com/static-content-hc/sites/default/files/cataloina_porto_doble_balcon2_2.jpg', icon: 'images/icons/marker-ball.png'},
                    {title: 'Saint Mary\'s Hospital', address: 'Praed Street Paddington London W2 1NY, United Kingdom', phone: '+44 20 3312 6666', url: 'https://activmap.pandao.eu/', tags: ['services_02'], lat: 51.517158, lng: -0.173877, img: 'images/thumb.png', icon: 'images/icons/marker-health.png'},
                    {title: 'The Wellington Hospital', address: 'Wellington Place London NW8 9LE, United Kingdom', phone: '+44 20 7586 5959', url: 'https://activmap.pandao.eu/', tags: ['services_02'], lat: 51.531531, lng: -0.171516, img: 'images/thumb.png', icon: 'images/icons/marker-health.png'},
                    {title: 'Westminster School', address: 'Little Smith Street London SW1P 3PF, United Kingdom', phone: '+44 20 7963 1000', url: 'https://activmap.pandao.eu/', tags: ['services_05'], lat: 51.4981706, lng: -0.1279789, img: 'https://www.princehotels.com/wp-content/uploads/2019/04/aboutslider2-1.jpg', icon: 'images/icons/marker-grad.png'},
                    {title: 'The City Of London School', address: '107 Queen Victoria Street London EC4V 3AL, United Kingdom', phone: '+44 20 7489 0291', url: 'https://activmap.pandao.eu/', tags: ['services_05'], lat: 51.511740, lng: -0.098659, img: 'images/thumb.png', icon: 'images/icons/marker-grad.png'},
                    {title: 'London Fire & Emergency Planning Authority', address: '169 Union Street London SE1 0LL, United Kingdom', phone: '+44 20 8555 1200', url: 'https://activmap.pandao.eu/', tags: ['services_04'], lat: 51.503546, lng: -0.098593, img: 'images/thumb.png', icon: 'images/icons/marker-ext.png'},
                    {title: 'Southwark Fire Station', address: '126 Shaftsbury Avenue London W1D 5ET, United Kingdom', phone: '+44 20 8555 1200', url: 'https://activmap.pandao.eu/', tags: ['services_04'], lat: 51.502047, lng: -0.09798, img: 'images/thumb.png', icon: 'images/icons/marker-ext.png'},
                    {title: 'Soho Fire Station', address: '126 Shaftsbury Avenue London W1D 5ET, United Kingdom', phone: '+44 20 8555 1200', url: 'https://activmap.pandao.eu/', tags: ['services_04'], lat: 51.512469, lng: -0.130089, img: 'images/thumb.png', icon: 'images/icons/marker-ext.png'},
                    {title: 'Scotland Yard', address: '8-10 Broadway London SW1H 0BG, United Kingdom', phone: '+44 20 7230 1212', url: 'https://activmap.pandao.eu/', tags: ['services_04'], lat: 51.498511, lng: -0.133091, img: 'images/thumb.png', icon: 'images/icons/marker-star.png'},
                    {title: 'Big Ben', address: 'London SW1A 0AA, United Kingdom', phone: '', url: 'https://activmap.pandao.eu/', tags: ['tourism_02'], lat: 51.500729, lng: -0.124625, img: 'images/thumb.png', icon: 'images/icons/marker-museum.png'},
                    {title: 'Saint Paul\'s Cathedral', address: 'St. Paul\'s Churchyard London EC4M 8AD, United Kingdom', phone: '+44 20 7246 8350', url: 'https://activmap.pandao.eu/', tags: ['services_03','tourism_02','tourism_02_01'], lat: 51.513845, lng: -0.098351, img: 'https://www.flightexpert.com/blog/wp-content/uploads/2017/11/Dhaka-Hotels.jpg', icon: 'images/icons/marker-museum.png'},
                    {title: 'Westminster Abbey', address: '20 Deans Yd, London SW1P 3PA, United Kingdom', phone: '+44 20 7222 5152', url: 'https://activmap.pandao.eu/', tags: ['services_03','tourism_02','tourism_02_01'], lat: 51.499292, lng: -0.12731, img: 'https://www.princehotels.com/wp-content/uploads/2019/04/aboutslider2-1.jpg', icon: 'images/icons/marker-museum.png'},
                    {title: 'Tower Bridge', address: 'Tower Bridge Road London SE1 2UP, United Kingdom', phone: '+44 20 7403 3761', url: 'https://activmap.pandao.eu/', tags: ['tourism_02','tourism_02_02'], lat: 51.505456, lng: -0.075356, img: 'images/thumb.png', icon: 'images/icons/marker-museum.png'},
                    {title: 'Palace of Westminster', address: 'Westminster London SW1A 0AA, United Kingdom', phone: '+44 20 7219 3000', url: 'https://activmap.pandao.eu/', tags: ['tourism_02','tourism_03','tourism_02_03'], lat: 51.499479, lng: -0.124809, img: 'https://storage.googleapis.com/static-content-hc/sites/default/files/cataloina_porto_doble_balcon2_2.jpg', icon: 'images/icons/marker-museum.png'},
                    {title: 'National Gallery', address: 'Trafalgar Square London WC2N 5DN, United Kingdom', phone: '+44 20 7747 2885', url: 'https://activmap.pandao.eu/', tags: ['services_01','tourism_03'], lat: 51.508916, lng: -0.128294, img: 'https://www.traveldailymedia.com/assets/2020/06/prince-hotel.jpg', icon: 'images/icons/marker-museum.png'},
                    {title: 'The British Museum', address: 'Great Russell Street London WC1B 3DG, United Kingdom', phone: '+44 20 7323 8299', url: 'https://activmap.pandao.eu/', tags: ['services_01','tourism_03'], lat: 51.519400, lng: -0.126984, img: 'https://sarinahotel.com/images/introslide4.jpg', icon: 'images/icons/marker-museum.png'}
                ],
                icon: 's',
                lat: 51.5286416,       //latitude of the center
                lng: -0.1015987,       //longitude of the center
                posPanel: 'left',
                showPanel: true,
                radius: 0,
                cluster: true,
                country: 'uk',
                mapType: 'roadmap',
                request: 'large',
                locationTypes: ['geocode','establishment']
            }); 
        });
    </script>

          <script id="rendered-js" >
$("#menu-toggle").click(function (e) {
  e.preventDefault();
  var isIE11 = !!navigator.userAgent.match(/Trident.*rv\:11\./);
  $("#toggleIcon").toggleClass("fa fa-angle-double-down fa fa-angle-double-up");
  $("#wrapper").toggleClass("toggled");
  if (isIE11) {
    if ($("#wrapper").hasClass("toggled")) {
      $('#sidebar-wrapper').css("margin-left", "-268px");
    } else {
      $('#sidebar-wrapper').css("margin-left", "-250px");
    }
  }
});
//# sourceURL=pen.js
    </script>


@endsection