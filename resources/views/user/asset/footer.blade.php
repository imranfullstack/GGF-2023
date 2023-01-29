
<style type="text/css">
   .footertext p {
    font-size: 16px;
    line-height: 29px;
    font-weight: 700;
    color: #fff;
    margin-left: 25px;
}
</style>
@php
  $footer = App\Models\Footer::first();
@endphp
@if($footer)
      <footer class="footer">

         <div class="footer-top-aria" style="background: {{$footer->bg_color}}">

            <div class="container">

               <div class="footer-aria">

                  <div class="row">

                     <div class="col-md-2">
                                
                              <a href="{{$footer->logo_url}}" target="_blank">
                                <img src="{{asset('img/upload/footer/'.$footer->footer_logo)}}">
                              </a>
                     </div>
                     <div class="col-md-9">

                        <div class="sponsors-dskdlc0s3d footer-common">

                            <div class="footertext">
                              <p>
{!! $footer->desc !!}

                              </p>
                           </div>
                        </div>


                     </div>

                  </div>

               </div>

            </div>

         </div>

         <div class="footer-btn"  style="background: {{$footer->bg_color}}">

            <div class="container">

               <div class="row">

                  <div class="col-md-6">

                     <div class="footer-btn-left">

                        <ul>

                           <li>

                              <a href="#">Sitemap</a>

                           </li>

                           <li>

                              <a href="#">Privacy</a>

                           </li>

                           <li>

                              <a href="#">Cookies</a>

                           </li>

                        </ul>

                     </div>

                  </div>

                  <div class="col-md-6">

                     <div class="footer-btn-right">

                        <p>{{$footer->copyright_text}}</p>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </footer>
@endif      