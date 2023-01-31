<style>
    .title-dkdksldkfdf2.bg-dksld.margin-sodnsdk {
        margin: unset;
    }
    </style>
    
@if ($org->project == 1)


    <div class="project-section">
        <div class="title-dkdksldkfdf2 bg-dksld margin-sodnsdk">
            <a data-bs-toggle="collapse" href="#projects01" role="button" aria-expanded="false" aria-controls="projects01"
                class="first-title-dksld0c collapsed"> PROJECTS <span>
                    <i class="fas fa-caret-down"></i>
                </span>
            </a>
        </div>
        <div class="accordion-collapse collapse" id="projects01">
            <div class="tab-body-dksld">
                <div class="project-items-section">
                    <!-- -------- Single Item Start-------- -->
                    <div class="row">
                        <div class="col-md-12">

                            @foreach ($org->projects as $item)
                                <div class="project-item itemgridstyle">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="project-image-dksldkfd">
                                                <img src="{{ asset('img/upload/project/' . $item->image) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-9">

                                            <div class="content-box-ddks">
                                                <h4>{{ $item->name }}</h4>
                                                <div class="event-start-end">
                                                    <p><b>Start Date:</b>
                                                        {{ Carbon\Carbon::parse($item->start_date)->format('d M Y') }} |
                                                        <b>End Date:</b>
                                                        {{ Carbon\Carbon::parse($item->end_date)->format('d M Y') }}
                                                    </p>
                                                </div>

                                                <p>{{ Str::limit($item->short_desc, 110, $end = ' ...') }} </p>
                                                <a href="{{ route('org.project.single', ['projectslug' => $item->slug, 'slug' => $org->slug]) }}">more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="read-more-section right">
                            @if($item->count() >= 4 )
                                <a href="{{ route('org.project.index', $org->slug) }}"
                                    class="btn-green apply-btn-style-dksld">
                                    More Projects
                                </a>
                            @endif
                        </div>
                    </div>
                    <!-- -------- Single Item end-------- -->
                </div>
            </div>
        </div>
    </div>
@endif
