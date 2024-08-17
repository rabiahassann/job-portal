@extends('admin.layouts.app')
@section('title', 'Category')
@section('content')
@include('sweetalert::alert')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<div class="container" style="margin-top:10px;">
<div class="text-right mb-3">
        <a class="btn btn-primary" data-toggle="modal" href='#susbc-form'>Add New</a>
    </div>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Detail</th>
                <th >Action</th>
            </tr>
        </thead>
        <tbody>
		@if ($categorys->isNotEmpty())
            @foreach($categorys as $category)
            <tr>
                <td>{{$category->name}}</td>
                <td>{{$category->detail}}</td>
                <td> <a href="#" class="edit-icon" data-id="{{ $category->id }}" data-name="{{ $category->name }}" data-detail="{{ $category->detail }}">
                        <i class="fa fa-pencil pl-2 text-info"></i>
                        <a href="{{ route('dltcategory', ['id' => $category->id]) }}">
                <i class="fa fa-trash pl-2 text-danger"></i>
            </a></td>     
           </tr>
           @endforeach
		   @else
    <tr>
        <td colspan="3">No jobs available.</td>
    </tr>
@endif
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Detail</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
    <div class="pagination">
	@if ($categorys->isNotEmpty())
    {{ $categorys->links() }}
	@endif
</div>
    <div class="modal fade" id="susbc-form">
    <div class="modal-dialog shadow-lg p-3 mb-5 bg-white rounded">
        <div class="modal-content sub-bg">
            <div class="modal-header subs-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
					<div class="modal-body">
						<div class="heading-text text-center ">
							<h4 class="shadow p-3 mb-5">Add New Category</h4>
						</div>
						<div class="row">
							<div class="col-md-12">
								<form id="subs-form" method="post" action="{{route('addcategory')}}">
                                    @csrf
									<div class="form-group row">
										<div class="col-md-12 col-xs-12">
											<label for="firstName" class="">Name </label>
											<input type="text" class="form-control" id="firstName" placeholder="Please enter name" required name="name">
										</div>
										<div class="col-md-12 col-xs-12 mt-2" >
											<label for="firstName">Detail </label>
											<textarea type="text" class="form-control" id="firstName" name="detail" placeholder="Please enter detail" row="3" required>
</textarea>
										</div>
									</div>
									<button type="submit" class="btn btn-primary text-center">Add</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="susbc-form-thank">
			<div class="modal-dialog">
				<div class="modal-content sub-bg shadow-lg">
					<div class="modal-header subs-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<!-- <h4 class="modal-title">Modal title</h4> -->
					</div>
					<div class="modal-body">
						<div class="text-center">
							<img src="http://pluspng.com/img-png/national-geographic-logo-vector-png-national-geographic-kids-logo-vector-300.png" alt="">
						</div>
						<div class="heading-text text-center">
							<h4>Thank you For Subscribe</h4>
						</div>
						
					</div>
				</div>
			</div>
		</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        var form = document.getElementById("subs-form");
        $('.btn-primary[data-toggle="modal"]').on('click', function () {
            $('#susbc-form').modal('show');
        });

        $('#susbc-form').on('hidden.bs.modal', function () {
            // Use 'hidden.bs.modal' event to remove the modal backdrop
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
        });
    });
</script>
</main>
@endsection