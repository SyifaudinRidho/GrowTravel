@extends('admin.layout.main')

@section('title','dashboard')

@section('content')
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6  subheader-transparent " id="kt_subheader">
        <div
            class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">

                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h2 class="text-dark font-weight-bold my-1 mr-5">
                        Tambah Inclusion </h2>
                    <!--end::Page Title-->

                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <form action="{{ route('add.inclusion') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b example example-compact">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Tambah Inclusion
                                </h3>
                            </div>
                            <!--begin::Form-->
                                <div class="card-body">
                                    <div class="form-group mb-1">
                                        <label>Name Inclusion</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Inclusion"/>
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-1">
                                        <label for="exampleSelect1">Level</label>
                                        <select class="form-control" name="level">
                                            <option value=""></option>
                                            <option value="bronze">Bronze</option>
                                            <option value="silver">Silver</option>
                                            <option value="gold">Gold</option>
                                            <option value="luxury">Luxury</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-1">
                                        <label for="harga awal">Inclusion</label>
                                        <div class="input-group control-group increment-inclusion" >
                                        <textarea name="inclusion[]" id="" class="form-control"></textarea>
                                            <div class="input-group-btn"> 
                                            <button class="btn btn-success btn-inclusion" type="button"><i class="glyphicon glyphicon-plus"></i></button>
                                            </div>
                                        </div>
                                        <div class="clone-inclusion hide" style="display: none">
                                            <div class="control-group control-group-inclusion input-group" style="margin-top:10px">
                                        <textarea name="inclusion[]" id="" class="form-control" placeholder="jj"></textarea>
                                            <div class="input-group-btn"> 
                                                <button class="btn btn-danger danger-inclusion" type="button"><i class="glyphicon glyphicon-remove"></i></button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <div class="card-footer col-md-6">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </form>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->

</div>


 
<!--end::Content-->
@endsection

@push('script')
<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-inclusion").click(function(){ 
          var html = $(".clone-inclusion").html();
          $(".increment-inclusion").after(html);
      });
      $("body").on("click",".danger-inclusion",function(){ 
          $(this).parents(".control-group-inclusion").remove();
      });
    });
</script>
@endpush