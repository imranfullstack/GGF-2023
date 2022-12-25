@extends('frontend.org-master')









@section('style')

<style type="text/css">

li.rightarrow-dksldc0c {

    display: none !important;

}

.banner-btn-dkdls span.readmore__content {

    font-size: 15px;

    line-height: 46px;

    display: contents;

}

</style>

@endsection

@section('main_content')



@include('frontend.asset.org-page-nav')







      <section class="main-body">

         <div class="container">

            <div class="row">

               <div class="col-md-8">

                  <div class="left-aria">

                     <div class="top-slider">



                        <!-- Slider Aria Start -->

                        <div class="row">

                            @include('frontend.pages.org.business.banner')

                        </div>



                        <!-- Slider Aria End -->

                        <!-- Slider btn text Start -->

                        <div class="banner-btn-dkdls">



                            <div id="readmore">

        <span class="readmore__content">

          {{$org->long_version}}

        </span>

        <button class="readmore__toggle" role="switch" aria-checked="true">

            more

        </button>

        </button>

    </div>

                        </div>

                        <!-- Slider btn text End -->

                      <br>

                            @include('frontend.pages.org.business.lookingfor') 



                        <!-- <hr> -->

                        <div class="row">

                            <!-- @include('frontend.pages.org.business.sponcer')   -->

                        </div>

                     </div>

                  </div>

               </div>

               <div class="col-md-4">

                  <div class="right-aria">

                      @include('frontend.pages.org.business.news')      

                  </div>

               </div>

                      @include('frontend.pages.org.business.project')

                      @include('frontend.pages.org.business.job')

                      @include('frontend.pages.org.business.event')

                      @include('frontend.pages.org.business.product')

                      @include('frontend.pages.org.business.service')

               </div>

         </div>

         </div>

      </section>

@endsection      





@section('scripts')

<script type="text/javascript">

  

  class readMore {

    constructor() {

        this.content = '.readmore__content';

        this.buttonToggle = '.readmore__toggle';

    }



    bootstrap() {

        this.setNodes();

        this.init();

        this.addEventListeners();

    }



    setNodes() {

        this.nodes = {

            contentToggle: document.querySelector(this.content)

        };



        this.buttonToggle = this.nodes.contentToggle.parentElement.querySelector(this.buttonToggle);

    }



    init() {

        const { contentToggle } = this.nodes;



        this.stateContent = contentToggle.innerHTML;



        contentToggle.innerHTML = `${this.stateContent.substring(0, 200)}...`;

    }



    addEventListeners() {

        this.buttonToggle.addEventListener('click', this.onClick.bind(this))

    }



    onClick(event) {

        const targetEvent = event.currentTarget;

        const { contentToggle } = this.nodes



        if (targetEvent.getAttribute('aria-checked') === 'true') {

            targetEvent.setAttribute('aria-checked', 'false')

            contentToggle.innerHTML = this.stateContent;

            this.buttonToggle.innerHTML = 'less'



        } else {

            targetEvent.setAttribute('aria-checked', 'true')

            contentToggle.innerHTML = `${this.stateContent.substring(0, 200)}...`

            this.buttonToggle.innerHTML = 'more'

        }

    }

}





const initReadMore = new readMore();

initReadMore.bootstrap()





</script>

@endsection()