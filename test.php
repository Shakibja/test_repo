@extends('backend.mastering.master')
@section('info')
<link rel="stylesheet" href="{{ asset('css/imgareaselect.css') }}" />

<title>Add E Paper Page</title>


<div class="br-mainpanel">
    <div class="br-pagetitle row">
        <div class="col-md-6 d-flex">
            <i class="icon ion-ios-home-outline"></i>
            <div class="row">
                <div class="ml-4">
                    <h4>The Daily Notun Asha</h4>
                    <p class="mg-b-0">Add E Paper Page</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('manage_e_paper') }}" class="btn btn-info">View All</a>
        </div>
    </div>

    <div class="br-pagebody">
        <div class="container">
            <div class="row">
                <div class="col-md-12 border shadow-sm p-4">
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form action="{{ route('store_epaper_column') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!--First Row. It contains Headline, Keyword, Highlights, Body-->
                        <div class="row">
                            <div class="col-md-12">
                                <!--News Title-->
                                <div class="form-group">
                                    <label class="font-16-bold fw-bold">Date <span class="fw-b text-danger">*</span></label>
                                    <input type="date" class="form-control" required placeholder="Enter Date" name="date" :value="old('date')">
                                    <x-input-error :messages="$errors->get('date')" class="mt-2 text-danger" />
                                </div>

                                <div class="row">
                                <div class="col-md-6">
                                <label class="font-16-bold fw-bold">Page Number <span class="fw-b text-danger">*</span></label>
                                <input type="text" class="form-control" name="page_number" placeholder="Page Number">

                                </div>


                                <div class="col-md-6">
                                <label class="font-16-bold fw-bold">Column <span class="fw-b text-danger">*</span></label>
                                <input type="text" class="form-control" name="column_number" placeholder="Page Number">

                                </div>


                                
                                </div>


                                <div class="row mt-2">
                                <div class="col-md-3">
                                <label class="font-16-bold fw-bold">Height <span class="fw-b text-danger">*</span></label>
                                <input type="text" class="form-control" name="height" placeholder="Page Number">

                                </div>


                                <div class="col-md-3">
                                <label class="font-16-bold fw-bold">Width <span class="fw-b text-danger">*</span></label>
                                <input type="text" class="form-control" name="width" placeholder="Page Number">

                                </div>


                                <div class="col-md-3">
                                <label class="font-16-bold fw-bold">Top <span class="fw-b text-danger">*</span></label>
                                <input type="text" class="form-control" name="top" placeholder="Page Number">

                                </div>


                                <div class="col-md-3">
                                <label class="font-16-bold fw-bold">Bottom <span class="fw-b text-danger">*</span></label>
                                <input type="text" class="form-control" name="bottom" placeholder="Page Number">

                                </div>


                                
                                </div>


                               


                                <div class="row mt-3">
                                <div class="col-md-6">
                                <label class="font-16-bold fw-bold">Desc <span class="fw-b text-danger">*</span></label>
                                <input type="text" class="form-control" name="desc" placeholder="Page Number">

                                </div>


                                <div class="col-md-6">
                                <label class="font-16-bold fw-bold">Column Image <span class="fw-b text-danger">*</span></label>
                                <input type="file" class="form-control" name="profile_image">

                                <p><img id="previewimage" style="display:none;"/></p>

                                </div>


                                
                                </div>
                                

                             

                            </div>
                        </div>



                        <!--Submit Button-->
                        <div class="row my-3">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-success add-news">Add New</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('backend.includes.footer')
</div>





@endsection