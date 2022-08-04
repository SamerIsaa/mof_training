@extends('panel.layout.master',['title' => __('panel.features'),'is_active'=>'blog'])

@section('content')
    <!--begin::Container-->
    <div class="container">

        <!--begin::Card-->
        <div class="card card-custom">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">{{__('panel.features')}}
                    </h3>
                </div>
                <div class="card-toolbar">


                    <a href="{{route('panel.features.create')}}"
                       class="btn btn-primary font-weight-bolder">
											<span>
                                                <i class="ki ki-plus icon-sm"></i>
											</span>
                                            {{__('constants.add_new')}}</a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
                <!--begin: Search Form-->
                <div class="mb-7">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-md-3 my-2 my-md-0">
                                    <div class="input-icon">
                                        <input type="text" class="form-control" placeholder="{{__('panel.search')}}"
                                               id="kt_datatable_search_query">
                                        <span><i class="flaticon2-search-1 text-muted"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--end: Search Form-->
                <!--begin: Datatable-->
                <div class="datatable datatable-bordered datatable-head-custom" id="kt_datatable"></div>
                <!--end: Datatable-->
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
@stop

@push('panel_js')

    <script src="{{ asset('panelAssets/js/data-ajax.js') }}"></script>
    <script>

        window.data_url = '{{route('panel.features.datatable')}}';
        window.columns = [
            {
                field: ' ',
                title: "#",
                width: 120,
                textAlign: "center",
                template: function (data, index, datatable) {
                    return ((datatable.getCurrentPage() - 1) * datatable.getPageSize()) + index + 1;
                },
            },
            {
                field: 'image',
                title: '{{trans('panel.image')}}',
                selector: false,
                textAlign: 'center',
            },{
                field: 'name',
                title: '{{trans('panel.title')}}',
                selector: false,
                textAlign: 'center',
            },{
                field: 'content',
                title: '{{trans('panel.content')}}',
                selector: false,
                textAlign: 'center',
            }, {
                field: 'active_status',
                title: '{{trans('constants.status')}}',
                selector: false,
                textAlign: 'center',
            },
            {
                field: 'options',
                title: '{{trans('constants.actions')}}',
                sortable: false,
                width: 100,
                overflow: 'visible',
                autoHide: false,

            }
        ];

        $('#blog_department_id').on('change', function() {
            tbl.search($(this).val().toLowerCase(), 'blog_department_id');
        });
    </script>

@endpush
