<section class="blog">
			<div class="container">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">
						
						<!-- Blog Classic Start -->
						<div class="blog-grid">
							<div class="row">
								<div class="col-md-12">
									

									<!-- Post Item Start -->
									<div class="post-item">
										
										<div class="text">
											<h3><a href="blog-single-sidebar-no.html">{{ $post->getTranslatedAttribute('title') }}</a></h3>
											<ul class="status">
												<li><i class="fa fa-user"></i>@lang('home.author'): <a href="blog-single-sidebar-no.html">{{ $post->authorId->name }}</a></li>
												<li>-</li>
												<li><i class="fa fa-calendar"></i>{{$post->humanDate()}}</li>
												<!--<li><i class="fa fa-comments"></i><a href="blog-single-sidebar-no.html">14 Comments</a></li>-->
												<!--<li>-</li>-->
												<!--<li><i class="fa fa-tag"></i>Cat: <a href="blog-single-sidebar-no.html">Drugs and Suppliers</a></li>-->
											</ul>
											{!! $post->getTranslatedAttribute('body') !!}
											
										</div>
									</div>
									<!-- Post Item End -->

								</div>

							</div>
						</div>
						<!-- Blog Classic End -->

						<!-- Prev Next Start -->
						<!--<div class="prev-next-container">-->
						<!--	<div class="row inner">-->
						<!--		<div class="col-md-6 prev">-->
						<!--			<div class="inner">-->
						<!--				<a href="blog-single-sidebar-no.html"><i class="fa fa-angle-left"></i> PREV</a>-->
						<!--				<p>His voluptua prodesset accommodare ea, in delectus perfecto cum.</p>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--		<div class="col-md-6 next">-->
						<!--			<div class="inner">-->
						<!--				<p>Ea putant fastidii molestie usu, vel rebum mo dicant at.</p>-->
						<!--				<a href="blog-single-sidebar-no.html">NEXT <i class="fa fa-angle-right"></i></a>-->
						<!--			</div>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!-- Prev Next End -->


						<!-- Author Box Start -->
						<!--<div class="author-box">-->
						<!--	<div class="inner">-->
						<!--		<div class="author-thumb">-->
						<!--			<img src="images/authors/1.jpg" alt="">-->
						<!--		</div>-->
						<!--		<div class="author-info">-->
						<!--			<h3>About Author: John Doe</h3>-->
						<!--			<p>-->
						<!--				Veritus consulatu ei nam, vim omittam voluptua ut. Ea quot tantas diceret eam, ad vel vivendo consulatu consetetur, prima postea an vis. Vel habeo sensibus scriptorem ei, ut eum altera corrumpit, eos id probo moderatius. No ferri perfecto ius.-->
						<!--			</p>-->
						<!--			<ul class="social">-->
						<!--				<li><a href="blog-single-sidebar-no.html#"><i class="fa fa-facebook"></i></a></li>-->
						<!--				<li><a href="blog-single-sidebar-no.html#"><i class="fa fa-twitter"></i></a></li>-->
						<!--				<li><a href="blog-single-sidebar-no.html#"><i class="fa fa-linkedin"></i></a></li>-->
						<!--				<li><a href="blog-single-sidebar-no.html#"><i class="fa fa-google-plus"></i></a></li>-->
						<!--			</ul>-->
						<!--		</div>-->
						<!--	</div>-->
						<!--</div>-->
						<!-- Author Box End -->
						
						<!-- Comment Section Start -->
						<!--<div class="comments">-->
						<!--	<h3>Comments</h3>-->
						<!--	<ul class="comment-list">-->
						<!--		<li>-->
						<!--			<div class="parent">-->
						<!--				<div class="thumb">-->
						<!--					<img src="images/commenters/1.jpg" alt="" class="img-responsive">-->
						<!--				</div>-->
						<!--				<div class="text">-->
						<!--					<div class="inner">-->
						<!--						<h3>Brent Grundy</h3>-->
						<!--						<p>-->
						<!--							<span class="date"><i class="fa fa-calendar"></i> 25 October, 2016</span>-->
						<!--							<span class="reply"><a href="blog-single-sidebar-no.html">Reply</a></span>-->
						<!--						</p>-->
						<!--						<p>-->
						<!--							Eam te latine verterem. Quo omnes nonumes eloquentiam eu, eam esse nullam et. Vix ei nonumy noluisse, vero scaevola delicatissimi vix ne, his vide persequeris an. -->
						<!--						</p>-->
						<!--					</div>							-->
						<!--				</div>-->
						<!--			</div>-->
						<!--			<ul class="children">-->
						<!--				<li>-->
						<!--					<div class="parent">-->
						<!--						<div class="parent-inner">-->
						<!--							<div class="thumb">-->
						<!--								<img src="images/commenters/2.jpg" alt="" class="img-responsive">-->
						<!--							</div>-->
						<!--							<div class="text">-->
						<!--								<div class="inner">-->
						<!--									<h3>Samuel Turf</h3>-->
						<!--									<p>-->
						<!--										<span class="date"><i class="fa fa-calendar"></i> 25 October, 2016</span>-->
						<!--										<span class="reply"><a href="blog-single-sidebar-no.html">Reply</a></span>-->
						<!--									</p>-->
						<!--									<p>-->
						<!--										Eam te latine verterem. Quo omnes nonumes eloquentiam eu, eam esse nullam et. Vix ei nonumy noluisse, vero scaevola delicatissimi vix ne, his vide persequeris an. -->
						<!--									</p>-->
						<!--								</div>							-->
						<!--							</div>-->
						<!--						</div>-->
						<!--					</div>-->
						<!--					<ul class="children">-->
						<!--						<li>-->
						<!--							<div class="parent">-->
						<!--						<div class="parent-inner">-->
						<!--							<div class="thumb">-->
						<!--								<img src="images/commenters/3.jpg" alt="" class="img-responsive">-->
						<!--							</div>-->
						<!--							<div class="text">-->
						<!--								<div class="inner">-->
						<!--									<h3>Peter Smith</h3>-->
						<!--									<p>-->
						<!--										<span class="date"><i class="fa fa-calendar"></i> 25 October, 2016</span>-->
						<!--										<span class="reply"><a href="blog-single-sidebar-no.html">Reply</a></span>-->
						<!--									</p>-->
						<!--									<p>-->
						<!--										Eam te latine verterem. Quo omnes nonumes eloquentiam eu, eam esse nullam et. Vix ei nonumy noluisse, vero scaevola delicatissimi vix ne, his vide persequeris an. -->
						<!--									</p>-->
						<!--								</div>							-->
						<!--							</div>-->
						<!--						</div>-->
						<!--					</div>-->
						<!--						</li>-->
						<!--					</ul>-->
						<!--				</li>-->
						<!--			</ul>-->
						<!--		</li>-->
						<!--		<li>-->
						<!--			<div class="parent">-->
						<!--				<div class="thumb">-->
						<!--					<img src="images/commenters/default.png" alt="" class="img-responsive">-->
						<!--				</div>-->
						<!--				<div class="text">-->
						<!--					<div class="inner">-->
						<!--						<h3>Brent Grundy</h3>-->
						<!--						<p>-->
						<!--							<span class="date"><i class="fa fa-calendar"></i> 25 October, 2016</span>-->
						<!--							<span class="reply"><a href="blog-single-sidebar-no.html">Reply</a></span>-->
						<!--						</p>-->
						<!--						<p>-->
						<!--							Eam te latine verterem. Quo omnes nonumes eloquentiam eu, eam esse nullam et. Vix ei nonumy noluisse, vero scaevola delicatissimi vix ne, his vide persequeris an. -->
						<!--						</p>-->
						<!--					</div>							-->
						<!--				</div>-->
						<!--			</div>-->
						<!--		</li>-->
						<!--		<li>-->
						<!--			<div class="parent">-->
						<!--				<div class="thumb">-->
						<!--					<img src="images/commenters/4.jpg" alt="" class="img-responsive">-->
						<!--				</div>-->
						<!--				<div class="text">-->
						<!--					<div class="inner">-->
						<!--						<h3>Brent Grundy</h3>-->
						<!--						<p>-->
						<!--							<span class="date"><i class="fa fa-calendar"></i> 25 October, 2016</span>-->
						<!--							<span class="reply"><a href="blog-single-sidebar-no.html">Reply</a></span>-->
						<!--						</p>-->
						<!--						<p>-->
						<!--							Eam te latine verterem. Quo omnes nonumes eloquentiam eu, eam esse nullam et. Vix ei nonumy noluisse, vero scaevola delicatissimi vix ne, his vide persequeris an. -->
						<!--						</p>-->
						<!--					</div>							-->
						<!--				</div>-->
						<!--			</div>-->
						<!--		</li>-->
						<!--	</ul>-->
						<!--	<div class="gap-small"></div>-->
						<!--	<h3>Leave a Comment</h3>-->
						<!--	<div class="respond">-->
						<!--		<form action="blog-single-sidebar-no.html#" class="form-horizontal cform-1" method="post">-->
						<!--			<div class="form-group">-->
		    <!--                            <div class="col-sm-12">-->
		    <!--                                <textarea name="" class="form-control" cols="30" rows="10" placeholder="Your Comment"></textarea>-->
		    <!--                            </div>-->
		    <!--                        </div>-->
						<!--			<div class="form-group">-->
		    <!--                            <div class="col-sm-12">-->
		    <!--                                <input type="text" class="form-control" placeholder="Name" name="">-->
		    <!--                            </div>-->
		    <!--                        </div>-->
						<!--			<div class="form-group">-->
		    <!--                            <div class="col-sm-12">-->
		    <!--                                <input type="email" class="form-control" placeholder="Email" name="">-->
		    <!--                            </div>-->
		    <!--                        </div>		                           -->
		    <!--                        <div class="form-group">-->
		    <!--                            <div class="col-sm-12">-->
		    <!--                                <input type="text" class="form-control" placeholder="Website" name="">-->
		    <!--                            </div>-->
		    <!--                        </div>		                            -->
		    <!--                        <div class="form-group">-->
					 <!--                   <div class="col-sm-12">-->
					 <!--                       <input type="submit" value="Submit Comment" class="btn btn-success">-->
					 <!--                   </div>-->
					 <!--               </div>-->
						<!--		</form>-->
						<!--	</div>-->
						<!--</div>-->
						<!-- Comment Section end -->


					</div>
					<div class="col-md-1"></div>

					


				</div>
			</div>
		</section>