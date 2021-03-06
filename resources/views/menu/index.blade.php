@extends('layouts.app')
@section('title', $page_title)
@push('style')

@endpush
@section('content')
<div class="dt-content">


    <!-- Grid -->
    <div class="row">

        <!-- Grid Item -->
        <div class="col-xl-12">

            <!-- Entry Header -->
            <div class="dt-entry__header">

                <!-- Entry Heading -->
                <div class="dt-entry__heading">
                    <h3 class="dt-entry__title"><i class="{{ $page_icon }}"></i>{{ $sub_title }}</h3>
                </div>
                <!-- /entry heading -->

            </div>
            <!-- /entry header -->

            <!-- Card -->
            <div class="dt-card">

                <!-- Card Body -->
                <div class="dt-card__body">

                    <!-- Tables -->
                    <div class="table-responsive">

                        <table id="dataTable" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Sl</th>
                                    <th>Menu Name</th>
                                    <th>Deletable</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>

                        </table>

                    </div>
                    <!-- /tables -->

                </div>
                <!-- /card body -->

            </div>
            <!-- /card -->

        </div>
        <!-- /grid item -->

    </div>
    <!-- /grid -->

</div>
@endsection
@push('script')

@endpush
