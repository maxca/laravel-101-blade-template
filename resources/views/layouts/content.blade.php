@extends('layouts.main')

@section('scripts')

@endsection


@section('pageTitle')
    Title
@endsection

<!-- Blog Grid -->
@section('content')
<section id="blogGrid" class="blog blog-grid pb-90">
    <div class="container">
        <div class="row">


        <!-- Blog Item -->
        @for($i = 0; $i < 9; $i++)
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="blog-item">
            <div class="blog__img">
                <a href="#">
                <img src="{{asset('assets/images/blog/grid/1.jpg')}}" alt="blog image">
                </a>
            </div><!-- /.entry-img -->
            <div class="blog__content">
                <div class="blog__meta">
                <span class="blog__meta-date">Jan 20, 2019</span>
                </div><!-- /.blog-meta -->
                <h4 class="blog__title"><a href="#">Four ways to cheer yourself up on Blue Monday!</a></h4>
                <p class="blog__desc">The third Monday of January is supposed to be day of year. Whether you
                believe that or not....</p>
                <a href="#" class="btn btn__secondary btn__link">Read More</a>
            </div><!-- /.entry-content -->
            </div><!-- /.blog-item -->
        </div><!-- /.col-lg-4 -->
        @endfor
        </div><!-- /.row -->


        <!-- pagination  -->
        <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <nav class="pagination-area">
            <ul class="pagination justify-content-center mt-30">
                <li><a class="current" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
            </nav><!-- .pagination-area -->
        </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->


    </div><!-- /.container -->
</section>
<!-- /.blog Grid -->

@endsection