@extends('layout.layout')

<?php
$title = $berita->judul;
$subTitle = 'Home';
?>

@section('content')
    <!-- blog details area start -->
    <section class="blog_details-area pt-105 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_details-left mb-40">
                        <div class="blog_details-img">
                            <img src="{{ asset('storage/' . $berita->cover_gambar_berita) }}"
                                alt="{{ 'gambar terkait ' . $berita->judul . ' ?>' }}" class="w-100 tp_fade_bottom">
                            <div class="blog_details-meta-box tp_fade_bottom">
                                <div class="blog_details-meta">
                                    <span><a href="#">{{ $berita->kategori }}</a></span>
                                    <span><a href="#"><i class="fa-light fa-circle-user"></i> by admin</a></span>
                                    <span><i
                                            class="fa-light fa-calendar-days"></i>{{ \Carbon\Carbon::parse($berita->created_at)->locale('id')->format('d F Y') }}</span>
                                </div>
                                <div class="blog_details-meta-action">
                                    <ul>
                                        <li><a href="#"><i class="fa-light fa-comment"></i>5</a></li>
                                        <li><a href="#"><i class="fa-light fa-heart"></i>20</a></li>
                                        <li><a href="#"><i class="fa-light fa-share-nodes"></i>12</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- kontent berita --}}
                        @php
                            // Mendapatkan total panjang isi body
                            $totalLength = strlen($berita->body);

                            // Menghitung panjang tiap bagian (dibagi 4)
                            $partLength = ceil($totalLength / 4);

                            // Membagi teks menjadi 4 bagian
                            $part1 = substr($berita->body, 0, $partLength);
                            $part2 = substr($berita->body, $partLength, $partLength);
                            $part3 = substr($berita->body, 2 * $partLength, $partLength);
                            $part4 = substr($berita->body, 3 * $partLength);
                        @endphp
                        <div class="blog_details-content">
                            <h3 class="blog_details-content-title tp_has_text_reveal_anim">{{ $berita->judul }}</h3>
                            <p class="blog_details-content-text mb-30 tp_fade_bottom">
                                {!! $content['opening'] !!}</p>
                            @if ($berita->quotes)
                                <blockquote class="tp_fade_bottom">
                                    <p>{{ $berita->quotes }}
                                    </p>
                                    <span>Nelson Mandela</span>
                                </blockquote>
                            @else
                                <span></span>
                            @endif
                            <p class="blog_details-content-text mb-35 tp_fade_bottom">
                                {!! $content['pre_image'] !!}</p>
                            <div class="row align-items-center mb-20">
                                <div class="col-xl-6 tp_fade_right">
                                    <div class="inner-img w_img mb-35 mb-xl-0 tp_fade_right">
                                        <img src="{{ asset('storage/' . $berita->gambar_content) ?? $berita->gambar_content }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6 tp_fade_left">
                                    <p class="blog_details-content-text mb-0">{!! $content['beside_image'] !!}</p>
                                </div>
                            </div>
                            <p class="blog_details-content-text mb-45 tp_fade_bottom">
                                {!! $content['closing'] !!}</p>
                            <div class="blog_details-content-bottom tp_fade_bottom">
                                <div class="blog_details-content-tag">
                                    <span>Tags:</span>
                                    <ul>
                                        <li><a href="#">Creative</a></li>
                                        <li><a href="#">Ai</a></li>
                                        <li><a href="#">Design</a></li>
                                    </ul>
                                </div>
                                <div class="blog_details-content-share">
                                    <a href="#"><i class="fa-light fa-share-nodes"></i>12 Share</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog_details-bottom pt-75">
                            <div class="blog_details-comment pb-45">
                                <h3 class="blog_details-comment-title tp_has_text_reveal_anim">3 Comments</h3>
                                <div class="blog_details-comment-item tp_has_fade_anim" data-fade-from="left">
                                    <div class="blog_details-comment-img">
                                        <img src="{{ asset('assets/images/blog/innerPage/admin-1.jpg') }}" alt="">
                                    </div>
                                    <div class="blog_details-comment-content">
                                        <h6>Russell Sprout</h6>
                                        <span>march 29,2023 at 10:47 pm</span>
                                        <p>There are many variations passages of lorem qoree available, but the majority
                                            have content marketing suffered alteration in some form.</p>
                                        <a href="#" class="comment-reply">Reply</a>
                                    </div>
                                </div>
                                <div class="blog_details-comment-item ml-80 tp_has_fade_anim" data-fade-from="left"
                                    data-delay=".8">
                                    <div class="blog_details-comment-img">
                                        <img src="{{ asset('assets/images/blog/innerPage/admin-2.jpg') }}" alt="">
                                    </div>
                                    <div class="blog_details-comment-content">
                                        <h6>Brian Cumin</h6>
                                        <span>march 29,2023 at 10:47 pm</span>
                                        <p>There are many variations passages of lorem qoree available, but the majority
                                            have content marketing suffered alteration in some form.</p>
                                        <a href="#" class="comment-reply">Reply</a>
                                    </div>
                                </div>
                                <div class="blog_details-comment-item ml-80 tp_has_fade_anim" data-fade-from="left"
                                    data-delay="1.1">
                                    <div class="blog_details-comment-img">
                                        <img src="{{ asset('assets/images/blog/innerPage/admin-3.jpg') }}" alt="">
                                    </div>
                                    <div class="blog_details-comment-content">
                                        <h6>Parsley Montana</h6>
                                        <span>march 29,2023 at 10:47 pm</span>
                                        <p>There are many variations passages of lorem qoree available, but the majority
                                            have content marketing suffered alteration in some form.</p>
                                        <a href="#" class="comment-reply">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-comments">
                                <h3 class="post-comments-title tp_has_text_reveal_anim">Leave a Reply</h3>
                                <p class="tp_fade_bottom">Your email address will not be published. Required fields are
                                    marked *</p>
                                <form action="#" class="tp_fade_bottom">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="post-input mb-20">
                                                <input type="text" placeholder="Your Name">
                                                <i class="fa-light fa-user"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="post-input mb-20">
                                                <input type="email" placeholder="Your Email">
                                                <i class="fa-light fa-envelope"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="post-input mb-20">
                                                <input type="text" placeholder="Phone Number">
                                                <i class="fa-light fa-phone"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="post-input mb-20">
                                                <select name="select" class="subject-option has-nice-select  mb-25">
                                                    <option value="1">Subject</option>
                                                    <option value="2">Subject 2</option>
                                                    <option value="3">Subject 3</option>
                                                    <option value="4">Subject 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="post-input mb-30">
                                                <textarea placeholder="Enter your comment ..."></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="post-comments-btn">
                                                <button type="submit">Post Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_details-right mb-40">
                        <div class="blog_details-widget mb-30 tp_fade_left">
                            <h5 class="blog_details-widget-title mb-30">Search</h5>
                            <form action="#" class="blog_details-widget-search">
                                <input type="text" placeholder="Search here...">
                                <button type="submit"><i class="fa-light fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="blog_details-widget mb-30 tp_fade_left">
                            <h5 class="blog_details-widget-title mb-25">Category</h5>
                            <ul>
                                @foreach ($staticData['program'] as $item)
                                    <li><a href="{{ route('detail-program', ['slug' => $item->slug]) }}">{{ $item->kategori_program }}
                                            <span>({{ $item->berita->count() }})</span></a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <div class="blog_details-widget mb-30 tp_fade_left">
                            <h5 class="blog_details-widget-title mb-25">Recent Posts</h5>
                            <ul>
                                @foreach ($staticData['berita'] as $item)
                                    <li><a href="{{ route('detail-berita', $item->slug) }}">{{ $item->judul }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="blog_details-widget tp_fade_left">
                            <h5 class="blog_details-widget-title mb-30">Need Help?</h5>
                            <form action="#" class="blog_details-widget-help">
                                <input type="text" placeholder="Your name...">
                                <input type="email" placeholder="Your Email...">
                                <textarea name="message" placeholder="Write you Message"></textarea>
                                <button type="submit">Submit Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog details area end -->
@endsection
