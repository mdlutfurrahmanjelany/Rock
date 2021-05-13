@extends('admin.layouts.app')

@section('dashcontent')
@include('errors.error')

<!-- Begin Page Content -->
<div class="container-fluid">


    <div class="row">
        

        <div class="col-lg-10">

            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Add Post</h6>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{route('createpost.store')}}" enctype="multipart/form-data">
                        
                        @csrf


                        <div class="form-group">
                            <label for="post-title">Title</label>
                            <input name="title" type="text" class="form-control" id="post-title" placeholder="Enter your title">
                        </div>

                        <div class="form-group">
                            <label for="post-image">Image</label>
                            <span class="input-group-btn">
                            <input name="image" type="file" class="form-control" id="post-image" placeholder="Upload">
                            </span>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="post-description">Description</label>
                            <textarea name="description" class="form-control" id="post-description" placeholder="Enter the description" rows="3"></textarea>
                        </div>

                        <div class="form-check">
                            <input name="featureimg" class="form-check-input" type="checkbox" value="1" id="feature-image">
                            <label class="form-check-label" for="flexCheckDefault">
                               Feature Image
                            </label>
                        </div>

                        <input class="btn btn-primary mt-3" type="submit" value="Submit" >
                    </form>
                </div>
            </div>

            

        </div>

       

    </div>

</div>
<!-- /.container-fluid -->

</div>
@endsection