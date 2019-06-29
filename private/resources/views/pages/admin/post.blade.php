@extends('pages.admin.dashboard')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
		<div class="col-sm-9">
            <h1 class="page-header">Posting</h1>
        </div>
        <div class="col-xs-6 col-md-3">
            <input type="submit" value="Post" name="post" class="page-header btn btn-lg btn-primary">
            <input type="submit" value="Batal" name="batal" class="page-header btn btn-lg btn-danger">
        </div>
    </div>
    
    <form action="" method="post">
        <div class="row">
            <div class="col-sm-9">
                <div class="panel panel-container">
                    <input type="text" name="judul" class="form-control" placeholder="Judul">
                </div>
                <div class="panel panel-container">
                    <textarea class='ckeditor' id='ckedtor'></textarea>
                </div>
            </div>

            <div class="col-xs-6 col-md-3">
                <div class="panel panel-container">
                    <select name="kategori" class="form-control">
                        <option value="0">Kategori</option>
                        <option value="1">Novel</option>
                        <option value="2">Komik</option>
                        <option value="3">Films</option>
                    </select>
                    <input type='file' onchange="readURL(this);" />
                    <img id="blah" src="http://placehold.it/180" alt="your image" />
                </div>
            </div>
        </div>
    </form>
</div>
@stop

@section('footer')
<div class=" footer col-sm-12">
    <p class="back-link">My <a href="https://www.medialoot.com">Blog's</a></p>
</div>
@stop

