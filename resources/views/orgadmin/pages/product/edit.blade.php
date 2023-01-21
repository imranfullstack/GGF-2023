@extends('orgadmin.master')

@section('orgadmin_org_product') active-nav @endsection
@section('org_admin_content')
<!-- ------ Banner Aria Start ------ -->



          <div class="col-md-10 right-aria-sldksd">
              <div class="content-body-dskd">




<br>
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">DASHBOARD</li>
    <li class="breadcrumb-item">Product</li>
    <li class="breadcrumb-item active" aria-current="page"><b>
    Edit</b></li>
  </ol>
</nav>
<hr>


        <div class="find-people">


<form method="post" action="{{route('orgadmin.organisation.product.update',['id'=>$org->id,'productid'=>$product->id])}}"  enctype="multipart/form-data">
  @csrf

<table class="table table-borderless">
            <tbody>

              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc"> Product Name</th>
                  <td>

                    <!-- single Form Start-->
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="product_name" value="{{$product->name}}">
                        </div>
                        @error('product_name') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                    <!-- single Form Start-->
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Product Category</th>
                  <td>



               @php $projectcat = App\Models\Productcat::orderby('id','desc')->where('status',1)->get(); @endphp
                <!-- single Form Start-->
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">


<div class="category-kdlsdkc">
  @foreach($product->Producthavecategory as $item)
  @foreach($item->productcat as $cat)


        <a href="{{route('orgadmin.organisation.product.remove.cat',['catid'=>$cat->id,'id'=>$org->id,'productid'=>$product->id])}}" class="badge badge-green">{{$cat->name}} <i class="fa fa-trash"></i></a>


  @endforeach
  @endforeach

</div>




                  </div>
                </div>
                <!-- single Form Start-->
                <!-- single Form Start-->
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">

                    <select  id="mounth" multiple class="form-select" aria-label="Default select example" name="productcat_id[]">
                        @foreach($projectcat as $cat) 
                          <option value=" {{$cat->id}}"> {{$cat->name}}</option> 
                         @endforeach
                    </select>


                  </div>
                </div>
                <!-- single Form Start-->


                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Short Description</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <textarea class="form-control" rows="2" name="short_desc">{{$product->short_desc}}</textarea>
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Long Version </th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <textarea class="form-control" rows="4" name="long_version">{{$product->long_version}}</textarea>
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->


              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Contact Person</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="contact_parson" value="{{$product->contact_person}}">
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Contact Email</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="contact_email" value="{{$product->contact_email}}">
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Contact Phone</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="contact_no" value="{{$product->contact_phone}}">
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->



              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Price</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="number" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="price" value="{{$product->price}}">
                        </div>
                        @error('price') <span class="text-danger">{{$message}}</span> @enderror
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->



              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Delivery</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="number" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="delivery" value="{{$product->delivery}}">
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->


              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">ID Number</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="id_no" value="{{$product->id_no}}">
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">In Stock</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="number" class="form-control" placeholder="Enter Number" aria-label="Username" aria-describedby="basic-addon1" name="stock" value="{{$product->stock}}">
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Location</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Enter Location" aria-label="Username" aria-describedby="basic-addon1" name="location" value="{{$product->location}}">
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->
              <!-- ---- single Form Start --- -->
                <tr>
                  <th scope="row" width="20%" class="label-dksldc">Key Words</th>
                  <td>
                      <div class="sigle-form-input-sddksldc0sd">
                        <div class="input-group mb-3">
                          <textarea class="form-control" rows="3" name="keyword[]"></textarea>
                        </div>
                      </div>
                  </td>
                </tr>
              <!-- ---- single Form Start --- -->

            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Upload Images</th>
              <td>
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <img src="{{asset('img/upload/product/'.$product->thumbnail)}}" width="80px" style="margin-right: 30px;">
                    <input type="file" class="form-control" placeholder="Enter organization details" aria-label="Username" aria-describedby="basic-addon1" name="image">
                  </div>
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->



       
            <!-- ---- single Form Start --- -->
            <tr>
              <th scope="row" width="20%" class="label-dksldc">Status</th>
              <td>
                <div class="sigle-form-input-sddksldc0sd">
                  <div class="input-group mb-3">
                    <select class="form-select" name="status">
                      <option value="1" {{ ($product->status == 1) ? 'selected' : ''}}>Active</option>
                      <option value="2" {{ ($product->status == 2) ? 'selected' : ''}}>Paused</option>
                      <option value="3" {{ ($product->status == 3) ? 'selected' : ''}}>Closed</option>
                    </select>
                  </div>
                </div>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->


            <!-- ---- single Form Start --- -->
            <tr>
              <td scope="row" width="20%" class="label-dksldc">
                <button class="btn btn-success btn-green" value="submit">Save</button>
              </td>
            </tr>
            <!-- ---- single Form Start --- -->

            </tbody>
          </table>
</form>

<br>

        </div>
      </div>

              </div>


@endsection()