


@extends('admin.admin_master')

@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

<div class="page-content">
<div class="container-fluid">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                

                <h4 class="card-title">Banner duzenle</h4>
                <form method="post" action="{{ route('banner.guncelle') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{ $homebanner->id }}">

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Baslik</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="baslik" placeholder="Baslik" id="example-text-input" value="{{ $homebanner->baslik }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Alt Baslik</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="alt_baslik" placeholder="Alt Baslik" id="example-text-input" value="{{ $homebanner->alt_baslik }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">URL</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="url" name="url" placeholder="URL" id="example-text-input" value="{{ $homebanner->url }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Video URL</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="url" name="video_url" placeholder="Video URL" id="example-text-input" value="{{ $homebanner->video_url }}">
                        </div>
                    </div>
                    
                    <!-- end row -->    

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2">Resim</label>
                        <div class="col-sm-10">
                            <input type="file" name="resim" id="resim" class="form-control">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2"></label>
                        <div class="col-sm-10">
                            <img class="rounded avatar-lg" src="{{ (!empty($homebanner->resim)) ? url($homebanner->resim): url('upload/resim-yok.png') }}" alt="" id="resimGoster">
                        </div>
                    </div>

                    <input type="submit" class="btn btn-info " value="Guncelle"> 

                </form>
            </div>
        </div>
    </div> <!-- end col -->
</div>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('#resim').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#resimGoster').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection