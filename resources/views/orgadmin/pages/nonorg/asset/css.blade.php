    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">

    
      <!-- fontawesome JS -->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" />

      <!-- fontawesome CSS-->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />


      <!-- Main CSS-->


    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/dashbaord.css')}}">
    <!-- Site Title -->


      <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}"/>


    <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/select2.min.css')}}">



      <style>
.uploadOuter {
  text-align: center;
  padding: 20px;
}
.uploadOuter strong {
  padding: 0 10px;
}
.dragBox {
  width: 100%;
  height: 100px;
  margin: 0 auto;
  position: relative;
  text-align: center;
  font-weight: bold;
  line-height: 95px;
  color: #999;
  border: 2px dashed #ccc;
  display: inline-block;
  transition: transform 0.3s;
}
.dragBox input[type="file"] {
  position: absolute;
  height: 100%;
  width: 100%;
  opacity: 0;
  top: 0;
  left: 0;
}
.draging {
  transform: scale(1.1);
}
#preview {
  text-align: center;
}
#preview img {
  max-width: 100%;
}

header.header.desktop {
    display: none;
}

ul.dropdown-menu.width-dksldfc.show {
    width: 70%;
}

ul.dropdown-menu.width-dksldfc li {
    display: inline-block !important;
    padding: 5px 10px !important;
    border: 1px solid #6e933e26 !important;
    margin: 6px 8px;
}

</style>


@yield('style')