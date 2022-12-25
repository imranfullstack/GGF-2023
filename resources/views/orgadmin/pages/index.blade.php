
<!doctype html>
<html lang="en">
  <head>
    @include('orgadmin.asset.meta')
    @include('orgadmin.asset.fonts')
    @include('orgadmin.asset.css')
    <style type="text/css">
      .content-body-dskd {
          display: flex;
          flex-direction: column;
          justify-content: center;
          height: 100%;
          text-align: center;
      }
    </style>
    <title>Dashboard || GGF  Provide Best Service</title>
  </head>
  <body>
<div class="body-aria">
  @include('orgadmin.asset.header')
    <section class="body-aria">
        <div class="container-fluid">
          <div class="row">
            @include('orgadmin.asset.dashboard-nav')

          <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">

                 <div class="dashboard-select">
                  <h2>Select Organisation</h2>
                      <!-- Example single danger button -->
                          <div class="btn-group">
                            <button type="button" class=" dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              Select Your Organisations <i class="fas fa-sort-down"></i>
                            </button>
                            <ul class="dropdown-menu">
                              @foreach($org as $item)
                                <li><a class="dropdown-item" href="{{route('orgadmin.organisation.index',$item->id)}}">{{$item->org_name}}</a></li>
                              @endforeach
                            </ul>
                          </div>
                  </div>
              </div>
              </div>

          </div>
        </div>
    </section>
</div>
  @include('orgadmin.asset.scripts')
  </body>
</html>