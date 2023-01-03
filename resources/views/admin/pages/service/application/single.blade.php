@extends('admin.master')
@section('admin_content')

@section('style')
    <!-- datatable Style  -->
    @include('orgadmin.asset.datatable-style')
    <!-- datatable Style  -->
@endsection
@section('service_show')
    show
@endsection()


<div class="col-md-10 right-aria-sldksd">
    <div class="content-body-dskd">
        <br>
        <h4>Application Information</h4>
        <hr>
        <div class="table-aria-for-info-section">
            <div class="row">
                <div class="col-md-12">

<table class="table">
            <tbody>
            	<tr>
            		<th>Name</th>
            		<td>
            			{{$order->service->name}}
            		</td>
            	</tr>
                <tr>
                    <th>Name</th>
                    <td>
                        {{$order->name}}
                    </td>
                </tr>
            	<tr>
            		<th>Email</th>
            		<td>
            			{{$order->email}}
            		</td>
            	</tr>
            	<tr>
            		<th>Phone</th>
            		<td>
            			{{$order->phone}}
            		</td>
            	</tr>
            	<tr>
            		<th>Address</th>
            		<td>
            			{{$order->address}}
            		</td>
            	</tr>
            	<tr>
            		<th>Indvidual or Group</th>
            		<td>
            			{{$order->indvidual_or_group}}
            		</td>
            	</tr>
            	<tr>
            		<th>Number of People</th>
            		<td>
            			{{$order->number_people}}
            		</td>
            	</tr>
            	<tr>
            		<th>Preferred start Date</th>
            		<td>
            			{{$order->preferred_start_date}}
            		</td>
            	</tr>
            	<tr>
            		<th>Preferred Start Time</th>
            		<td>
            			{{$order->preferred_start_time}}
            		</td>
            	</tr>
            	<tr>
            		<th>Preferred Completion Date</th>
            		<td>
            			{{$order->preferred_completion_date}}
            		</td>
            	</tr>
            	<tr>
            		<th>Preferred Completion time</th>
            		<td>
            			{{$order->preferred_completion_time}}
            		</td>
            	</tr>
            	<tr>
            		<th>Social Requests</th>
            		<td>
            			{{$order->special_requests}}
            		</td>
            	</tr>
            	<tr>
            		<th>Requierments</th>
            		<td>
            			{{$order->requirements}}
            		</td>
            	</tr>
            	<tr>
            		<th>Comments</th>
            		<td>
            			{{$order->comments}}
            		</td>
            	</tr>
            	<tr>
            		<th>Questions</th>
            		<td>
            			{{$order->question}}
            		</td>
            	</tr>
            	 <!-- single Form -->
              <tr>
                <th scope="row">Status</th>
                <td>
                  <select class="form-select" name="status" disabled>
                    <option value="0" {{ ($order->status == 0) ? 'selected' : ''}}>Pendding</option>
                    <option value="2" {{ ($order->status == 2) ? 'selected' : ''}}>Contacted</option>
                    <option value="1" {{ ($order->status == 1) ? 'selected' : ''}}>Approve</option>
                    <option value="3" {{ ($order->status == 3) ? 'selected' : ''}}>Closed</option>
                  </select>
                </td>
              </tr>
              <!-- single Form -->
              <!-- single Form -->
              <tr>
                <th colspan="2">

                  <a href="{{route('admin.service.application',$order->service_id)}}" class="btn btn-green btn-block">GO BACK</a>
                </th>
              </tr>
              <!-- single Form End-->
            </tbody>
          </table>
                
                </div>
            </div>

        </div>
<br>

    </div>
</div>
@endsection()
@section('scripts')
@include('orgadmin.asset.datatable-script')
	<script src='https://cdn.datatables.net/1.10.5/js/jquery.dataTables.min.js'></script>
	<script src='https://cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js'></script>
	<script src='https://cdn.datatables.net/responsive/1.0.4/js/dataTables.responsive.js'></script>
@endsection
