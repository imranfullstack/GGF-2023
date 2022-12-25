
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- fontawesome JS -->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" />


        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
        

      <!-- fontawesome CSS-->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
      <!-- Main CSS-->



    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/style.css')}}">



      <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}"/>



  
<style>
@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  user-select: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

.btn.click span:before {
    content: "" !important;
    color: #fff;
    font-weight: 700;
    font-size: 41px;
}

.btnd.navbtn.click {
    margin-left: 11px;
    transition: .1s;
    position: fixed;
    top: 0;
    left: 144px;
    background: none;
    z-index: 999999;
}
ul.left-nav li.active {
    background: #5b7e2d;
    border-top: 1px solid #fff;
}
.left-page-nav-dksld0c ul li a.active {
    color: #5b7e2d;
}


.btn{
  position: unset;
  top: 15px;
  left: 45px;
  text-align: center;
  border-radius: 3px;
  cursor: pointer;
  transition: left 0.4s ease;
}

.title-top-dksldlc h3 {
    display: inline-block;
}
nav.sidebar.show {
    z-index: 999;
    background: #84b04a;
}

.btn.click{
  left: 260px;
}
.btnd span{
  color: #000;
  font-size: 28px;
  line-height: 45px;
}
.btn.click span:before{
  content: '\f00d';
}
.sidebar{
  position: fixed;
  width: 200px;
  height: 100%;
  left: -250px;
  background: #84b04a;
  transition: left 0.4s ease;
  top: 0;
}
.sidebar.show{
  left: 0px;
}
.sidebar .text{
  color: white;
  font-size: 25px;
  font-weight: 600;
  line-height: 65px;
  text-align: center;
  background: #253c076e;
  letter-spacing: 1px;
}
nav ul li a span.rotate{
  transform: translateY(-50%) rotate(-180deg);
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: #202020;
  z-index: -1;
  text-align: center;
}
.content .header{
  font-size: 45px;
  font-weight: 600;
}
.content p{
  font-size: 30px;
  font-weight: 500;
}
span.navtext-02:before {
    display: none;
}

nav.sidebar ul li a {
    color: #fff;
    text-decoration: none;
    padding: 13px 0px;
    display: inline-block;
    text-transform: uppercase;
    font-weight: 700;
}

nav.sidebar ul li {
    list-style: none;
    border-bottom: 1px solid #ffffff38;
    padding: 0 25px;
}

nav.sidebar ul {
    margin: 0;
    padding: 0;
}



/*Status */
span.badgec {
    padding: 4px 21px;
    font-size: 10px;
    display: inline-block;
    border-radius: 50px;
    font-weight: 700;
}
span.badge-contact {
    background: #7dcf0c;
    color: #fff;
}
span.badge-pendding {
    background: #cbb203;
    color: #fff;
}
span.badge-close {
    background: #f11919;
    color: #fff;
}
span.badge-approve {
    background: #5f911f;
    color: #fff;
}

.btnd.navbtn.click span.fas.fa-bars {
    display: none;
}

span.far.fa-times {
    color: #fff;
}

.btnd.navbtn.click span{
  cursor: pointer;
}
.btnd.navbtn.click {
    margin-top: 11px;
}

</style>



@yield('style')