@extends('site.master.layout')
@section('content')
<div class="banner-bottom">
    <div class="container">
        <h3 class="wthree_head">Obras</h3>
        <p class="agileits_w3layouts_para w3_agile_para">Confira algumas de nossas principais obras.</p>
        <div class="w3ls_gallery_grids">
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
        </div>

            <div class="clearfix"></div>
    </div>
</div>
<script src="js/simpleLightbox.js"></script>
<script>
    $('.w3_agile_gallery_grid a').simpleLightbox();
</script>
@endsection