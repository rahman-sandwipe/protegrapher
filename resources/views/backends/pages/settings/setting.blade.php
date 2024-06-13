<div class="row clearfix">
    <div class="col-lg-6 col-md-12">
        <div class="body">
            <h6>Basic Information</h6>
            <div class="clearfix">
                <form class="row" action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group col-md-12">                                                
                        <input type="text" name="name" value="{{ auth()->user()->name }}" class="form-control">
                    </div>
                    <div class="form-group col-md-12">                                                
                        <input type="text" name="email" value="{{ auth()->user()->email }}" class="form-control">
                    </div>
                    <div class="form-group col-md-11">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group col-md-1">                                                
                        @if (auth()->user()->image==NULL)
                            <img src="{{ asset("uploads/users/default_image.png") }}" alt="" width="50" class="mb-2">                                            
                        @else
                            <img src="{{ asset(auth()->user()->image) }}" alt="" width="50" class="mb-2">
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>