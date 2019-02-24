<section class="contact-v2">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="heading-normal">
							<h2>Request an {{$category->title}} Package</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<form action="{{route('category.request')}}" class="form-horizontal cform-2" method="post">
					    @csrf
						<div class="col-md-6">						
							<div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="First Name" name="first_name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
                                </div>
                            </div>
							<div class="form-group">
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Country Code" name="country_code" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
                                </div>
                            </div>
                            
						</div>	
						<div class="col-md-6">
						    @if(count($category->children)>0)
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <select class="form-control" name="category_id">
                                      <option value="{{$category->id}}" selected="selected">What procedure of {{$category->title}} are you looking for?</option>
                                      @foreach($category->children as $child)
                                        <option value="{{$child->id}}">{{$child->title}}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                            @else 
                             <input type="hidden" value="{{$category->id}}" name="category_id">
                            @endif
							<div class="form-group">
                                <div class="col-sm-12">
                                    <textarea name="message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
			                    <div class="col-sm-12">
			                        <input type="submit" value="Book Now" class="btn btn-success">
			                    </div>
			                </div>
						</div>
					</form>	
				</div>
			</div>
		</section>