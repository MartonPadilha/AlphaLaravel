@extends('site.master.layout')
@section('content')
<div class="banner-bottom">
    <div class="container">
        <h3 class="wthree_head">Obras</h3>
        <p class="agileits_w3layouts_para w3_agile_para">Confira algumas de nossas principais obras.</p>

        @foreach ($works as $work)
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="" data-image="{{asset($work->file)}}" data-target="#image-gallery">
                    <img class="img-thumbnail" src="{{asset($work->file)}}" alt="{{$work->title}}">
                </a>
            </div>
        @endforeach

        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="image-gallery-title"></h4>
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                            </button>
    
                            <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        {{-- <div class="w3ls_gallery_grids">
            @foreach ($works as $work)
                <div class="col-md-3 col-sm-3 col-xs-4 agi-pro filtr-item" data-category="{{$work->category}}" data-sort="">
                        <div class="agileits_portfolio_grid" style="background-image: url('{{asset($work->file)}}')">
                            <a class="group1" href="{{asset($work->file)}}" title="{{$work->title}}">
                                
                                <div class="w3_textbox">
                                    <h4>{{$work->title}}</h4>
                                    <p>{{$work->description}}</p>
                                </div>
                            </a>
                        </div>
                </div>
            @endforeach
        </div> --}}

            <div class="clearfix"></div>
    </div>
</div>
<script src="js/simpleLightbox.js"></script>
<script>
    $('.w3_agile_gallery_grid a').simpleLightbox();
</script>
@endsection