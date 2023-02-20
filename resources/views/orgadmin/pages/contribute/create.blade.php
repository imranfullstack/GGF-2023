@extends('orgadmin.master')

@section('orgadmin_org_contribute')
    active-nav
@endsection
@section('style')
    <link rel='stylesheet' href='https://unpkg.com/@yaireo/tagify/dist/tagify.css'>

    <style type="text/css">
        .sigle-form-input-sddksldc0sd.keyword-dksld0c3 input {
            display: block;
            width: 100%;
            padding: 1px 0;
            border: none;
            border-bottom: 3px solid #84b04a;
            margin-top: 11px;
        }

        .sigle-form-input-sddksldc0sd.keyword-dksld0c3 input:focus {
            display: block;
            width: 100%;
            padding: 1px 0;
            border: none;
            border-bottom: 3px solid #84b04a;
            margin-top: 11px;
        }

        .tags-input-wrapper span.tag {
            background: #84b04a;
            color: #fff;
            padding: 4px 13px;
            margin: 0 4px;
            border-radius: 50px;
        }

        .tags-input-wrapper span.tag a {
            display: inline-block;
            color: #ff0000;
            padding: 3px 6px;
        }

        .tags-input-wrapper span.tag a:hover {
            color: #ff0000;
            cursor: pointer;
        }
    </style>
@endsection
@section('org_admin_content')
    <!-- ------ Banner Aria Start ------ -->



    <div class="col-md-10 right-aria-sldksd">
        <div class="content-body-dskd">



            <br>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">DASHBOARD</li>
                    <li class="breadcrumb-item">Contribute</li>
                    <li class="breadcrumb-item active" aria-current="page"><b>
                            Create</b></li>
                </ol>
            </nav>
            <hr>


            <div class="find-people">


                <form action="{{ route('orgadmin.organisation.contribute.store', $org->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <table class="table table-borderless">
                        <tbody>


                            <!-- ---- single Form Start --- -->
                            <tr>
                                <th scope="row" width="20%" class="label-dksldc">Contribute Title</th>
                                <td>
                                    <div class="sigle-form-input-sddksldc0sd">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" aria-label="Username"
                                                aria-describedby="basic-addon1" name="title">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- ---- single Form Start --- -->

                            <!-- ---- single Form Start --- -->
                            <tr>
                                <th scope="row" width="20%" class="label-dksldc">Category Of Offering</th>
                                <td>
                                    @php
                                        $contribute = App\Models\Contributecat::orderby('id', 'desc')->get();
                                    @endphp
                                    <!-- single Form Start-->
                                    <div class="sigle-form-input-sddksldc0sd">
                                        <div class="input-group mb-3">

                                            <select id="mounth" multiple class="form-select"
                                                aria-label="Default select example" name="contributecat_id[]">
                                                @foreach ($contribute as $cat)
                                                    <option value="{{ $cat->id }}"> {{ $cat->name }}</option>
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
                                            <input type="text" class="form-control" placeholder="Max 500 carector"
                                                maxlength="500" aria-label="Username" aria-describedby="basic-addon1"
                                                name="short_desc">
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
                                            <textarea class="form-control" rows="3" name="long_version"></textarea>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- ---- single Form Start --- -->
                            <!-- ---- single Form Start --- -->
                            <tr>
                                <th scope="row" width="20%" class="label-dksldc">Location Availability</th>
                                <td>
                                    <div class="sigle-form-input-sddksldc0sd">
                                        <div class="input-group mb-3">


                                            <input placeholder="Search Location ..." class="form-control"
                                                name="location_availability" onFocus="initializeAutocomplete()"
                                                id="locality" />

                                            <div>
                                                <input type="text" class="form-control" name="city" id="city"
                                                    placeholder="City" value="">
                                                <input type="text" class="form-control" name="latitude" id="latitude"
                                                    placeholder="Latitude" value="">
                                                <input type="text" class="form-control" name="longitude" id="longitude"
                                                    placeholder="Longitude" value="">
                                            </div>





                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- ---- single Form Start --- -->







                            <!-- ---- single Form Start --- -->
                            <!-- ---- single Form Start --- -->
                            <tr>
                                <th scope="row" width="20%" class="label-dksldc">File Name</th>
                                <td>
                                    <div class="sigle-form-input-sddksldc0sd">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" aria-label="Username"
                                                aria-describedby="basic-addon1" name="file_name">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- ---- single Form Start --- -->
                            <!-- ---- single Form Start --- -->
                            <tr>
                                <th scope="row" width="20%" class="label-dksldc">File Upload</th>
                                <td>
                                    <div class="sigle-form-input-sddksldc0sd">
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control"
                                                placeholder="Enter organization details" aria-label="Username"
                                                aria-describedby="basic-addon1" name="file_upload">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- ---- single Form Start --- -->
                            <!-- ---- single Form Start --- -->
                            <tr>
                                <th scope="row" width="20%" class="label-dksldc">Upload date</th>
                                <td>
                                    <div class="sigle-form-input-sddksldc0sd">
                                        <div class="input-group mb-3">
                                            <input type="date" class="form-control" aria-label="Username"
                                                aria-describedby="basic-addon1" name="contact_parson">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- ---- single Form Start --- -->
                            <!-- ---- single Form Start --- -->
                            <tr>
                                <th scope="row" width="20%" class="label-dksldc">Contact parson</th>
                                <td>
                                    <div class="sigle-form-input-sddksldc0sd">
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" aria-label="Username"
                                                aria-describedby="basic-addon1" name="contact_parson">
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
                                            <input type="text" class="form-control" aria-label="Username"
                                                aria-describedby="basic-addon1" name="contact_email">
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
                                            <input type="text" class="form-control" aria-label="Username"
                                                aria-describedby="basic-addon1" name="contact_phone">
                                        </div>
                                    </div>


                                </td>
                            </tr>
                            <!-- ---- single Form Start --- -->
                            <!-- ---- single Form Start --- -->
                            <tr>
                                <th scope="row" width="20%" class="label-dksldc">Keywords</th>
                                <td>
                                    <div class="sigle-form-input-sddksldc0sd keyword-dksld0c3">
                                        <div class="id">
                                            <input type="text" id="tag-input1" name="keywords[]"
                                                class="form-control">
                                        </div>
                                    </div>


                                </td>
                            </tr>
                            <!-- ---- single Form Start --- -->
                            <!-- ---- single Form Start --- -->
                            <tr>
                                <td>
                                    <div class="sigle-form-input-sddksldc0sd">
                                        <div class="input-group mb-3">
                                            <button class="btn btn-success btn-green">Save</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- ---- single Form Start --- -->


                        </tbody>
                    </table>

                </form>


            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
@endsection()
@section('scripts')
    @include('orgadmin.asset.location-search')



    <script id="rendered-js">
        (function() {

            "use strict";


            // Plugin Constructor
            var TagsInput = function(opts) {
                this.options = Object.assign(TagsInput.defaults, opts);
                this.init();
            };

            // Initialize the plugin
            TagsInput.prototype.init = function(opts) {
                this.options = opts ? Object.assign(this.options, opts) : this.options;

                if (this.initialized)
                    this.destroy();

                if (!(this.orignal_input = document.getElementById(this.options.selector))) {
                    console.error("tags-input couldn't find an element with the specified ID");
                    return this;
                }

                this.arr = [];
                this.wrapper = document.createElement('div');
                this.input = document.createElement('input');
                init(this);
                initEvents(this);

                this.initialized = true;
                return this;
            };

            // Add Tags
            TagsInput.prototype.addTag = function(string) {

                if (this.anyErrors(string))
                    return;

                this.arr.push(string);
                var tagInput = this;

                var tag = document.createElement('span');
                tag.className = this.options.tagClass;
                tag.innerText = string;

                var closeIcon = document.createElement('a');
                closeIcon.innerHTML = '&times;';

                // delete the tag when icon is clicked
                closeIcon.addEventListener('click', function(e) {
                    e.preventDefault();
                    var tag = this.parentNode;

                    for (var i = 0; i < tagInput.wrapper.childNodes.length; i++) {
                        if (window.CP.shouldStopExecution(0)) break;
                        if (tagInput.wrapper.childNodes[i] == tag)
                            tagInput.deleteTag(tag, i);
                    }
                    window.CP.exitedLoop(0);
                });


                tag.appendChild(closeIcon);
                this.wrapper.insertBefore(tag, this.input);
                this.orignal_input.value = this.arr.join(',');

                return this;
            };

            // Delete Tags
            TagsInput.prototype.deleteTag = function(tag, i) {
                tag.remove();
                this.arr.splice(i, 1);
                this.orignal_input.value = this.arr.join(',');
                return this;
            };

            // Make sure input string have no error with the plugin
            TagsInput.prototype.anyErrors = function(string) {
                if (this.options.max != null && this.arr.length >= this.options.max) {
                    console.log('max tags limit reached');
                    return true;
                }

                if (!this.options.duplicate && this.arr.indexOf(string) != -1) {
                    console.log('duplicate found " ' + string + ' " ');
                    return true;
                }

                return false;
            };

            // Add tags programmatically 
            TagsInput.prototype.addData = function(array) {
                var plugin = this;

                array.forEach(function(string) {
                    plugin.addTag(string);
                });
                return this;
            };

            // Get the Input String
            TagsInput.prototype.getInputString = function() {
                return this.arr.join(',');
            };


            // destroy the plugin
            TagsInput.prototype.destroy = function() {
                this.orignal_input.removeAttribute('hidden');

                delete this.orignal_input;
                var self = this;

                Object.keys(this).forEach(function(key) {
                    if (self[key] instanceof HTMLElement)
                        self[key].remove();

                    if (key != 'options')
                        delete self[key];
                });

                this.initialized = false;
            };

            // Private function to initialize the tag input plugin
            function init(tags) {
                tags.wrapper.append(tags.input);
                tags.wrapper.classList.add(tags.options.wrapperClass);
                tags.orignal_input.setAttribute('hidden', 'true');
                tags.orignal_input.parentNode.insertBefore(tags.wrapper, tags.orignal_input);
            }

            // initialize the Events
            function initEvents(tags) {
                tags.wrapper.addEventListener('click', function() {
                    tags.input.focus();
                });


                tags.input.addEventListener('keydown', function(e) {
                    var str = tags.input.value.trim();

                    if (!!~[9, 13, 188].indexOf(e.keyCode)) {
                        e.preventDefault();
                        tags.input.value = "";
                        if (str != "")
                            tags.addTag(str);
                    }

                });
            }


            // Set All the Default Values
            TagsInput.defaults = {
                selector: '',
                wrapperClass: 'tags-input-wrapper',
                tagClass: 'tag',
                max: null,
                duplicate: false
            };


            window.TagsInput = TagsInput;

        })();

        var tagInput1 = new TagsInput({
            selector: 'tag-input1',
            duplicate: false,
            max: 10
        });

        //# sourceURL=pen.js
    </script>
@endsection
