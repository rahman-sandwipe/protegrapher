
<div class="body">
    <div class="clearfix">
        <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">                                                
                <div class="col-md-2">                                                
                    <label for="web_name">Web Name</label>
                </div>
                <div class="col-md-10">                                                
                    <input type="text" name="web_name" id="web_name" class="form-control" required>
                </div>
            </div>


            <div class="form-group row">                                                
                <div class="col-md-2">                                                
                    <label for="web_tagline">Web Tageline</label>
                </div>
                <div class="col-md-10">                                                
                    <input type="text" name="web_tagline" id="web_tagline" class="form-control" required>
                </div>
            </div>


            <div class="form-group row">                                                
                <div class="col-md-2">                                                
                    <label for="web_link">Web Link</label>
                </div>
                <div class="col-md-10">                                                
                    <input type="text" name="web_link" id="web_link" class="form-control" required>
                </div>
            </div>
            
            
            <div class="form-group row">                                                
                <div class="col-md-2">                                                
                    <label for="web_logo">Web Logo</label>
                </div>
                <div class="col-md-9">
                    <input type="file" name="web_logo" id="web_logo" class="form-control">
                </div>
                <div class="col-md-1">
                    <img src="" alt="logo" width="50">
                </div>
            </div>
            
            
            <div class="form-group row">
                <div class="col-md-2">
                    <label for="web_fevicon">Web Fevicon</label>
                </div>
                <div class="col-md-9">
                    <input type="file" name="web_fevicon" id="web_fevicon" class="form-control">
                </div>
                <div class="col-md-1">
                    <img src="" alt="logo" width="50">
                </div>
            </div>
            
            
            <div class="form-group row">
                <div class="col-md-2">
                    <label for="web_timezone">Timezone</label>
                </div>
                <div class="col-md-10">
                    <input type="text" name="web_timezone" id="web_timezone" class="form-control">
                </div>
            </div>
            
            
            <div class="form-group row">
                <div class="col-md-2">
                    <label for="web_authors">Web Authors</label>
                </div>
                <div class="col-md-10">
                    <input type="text" name="web_authors" id="web_authors" class="form-control">
                </div>
            </div>
            
            
            <div class="form-group row">
                <div class="col-md-2">
                    <label for="author_mail">Authors Mail</label>
                </div>
                <div class="col-md-10">
                    <input type="email" name="author_mail" id="author_mail" class="form-control">
                </div>
            </div>
            
            
            <div class="form-group row">
                <div class="col-md-2">
                    <label for="author_phone">Authors Number</label>
                </div>
                <div class="col-md-10">
                    <input type="text" name="author_phone" id="author_phone" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="web_metatags">Meta Tags</label>
                    <textarea name="web_metatags" id="web_metatags" class="form-control" rows="4"></textarea>
                </div>
                <div class="col-md-6">
                    <label for="web_metadesc">Meta Desc</label>
                    <textarea name="web_metadesc" id="web_metadesc" class="form-control" rows="4"></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Update</button>
        </form>
    </div>
</div>