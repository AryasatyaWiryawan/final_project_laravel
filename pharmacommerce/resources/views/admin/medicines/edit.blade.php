@extends('admin.layout.app')
@section('content')
<div class="pagetitle">
    <h1>Edit Medicines</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Medicines</h5>
                    <form action="{{ url('admin/medicines/edit/'.$getRecord->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">
                                Name <span style="color: red;">*</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" required value="{{ $getRecord->name }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">
                                Packing
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="packing" class="form-control" value="{{ $getRecord->packing }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">
                                Generic Name
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="generic_name" class="form-control" value="{{ $getRecord->generic_name }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">
                                Supplier
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="supplier_name" class="form-control" value="{{ $getRecord->supplier_name }}">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection