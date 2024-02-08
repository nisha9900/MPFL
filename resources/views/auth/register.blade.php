@extends('layouts.app')

@section('content')

		<div class="pcoded-wrapper">
			<div class="pcoded-content">
				<div class="pcoded-inner-content">
					<div class="main-body">
						<div class="page-wrapper">
							<!-- [ breadcrumb ] start -->
							<div class="page-header">
								<div class="page-block">
									<div class="row align-items-center">
										<div class="col-md-12">
											<div class="page-header-title">
												<h5 class="m-b-10">Navs &amp; tabs</h5>
											</div>
											<ul class="breadcrumb">
												<li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
												<li class="breadcrumb-item"><a href="#!">Basic Components</a></li>
												<li class="breadcrumb-item"><a href="#!">Navs &amp; tabs</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- [ breadcrumb ] end -->
							<!-- [ Main Content ] start -->
							<div class="row">
								<!-- [ tabs ] start -->
								<div class="col-sm-12">
									<!-- <h5>Basic Tabs</h5>
									<hr> -->
									<ul class="nav nav-tabs" id="myTab" role="tablist">
										<li class="nav-item">
											<a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Basic Information</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
										</li>
										<li class="nav-item">
											<a class="nav-link text-uppercase" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
										</li>
									</ul>
						<div class="tab-content" id="myTabContent">
										<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                <!-- [ form-element ] start -->
                                <div class="col-sm-12">
                                    <div class="card">
                                        <!-- <div class="card-header">
                                            <h5>Basic Componant</h5>
                                        </div> -->
                                        <div class="card-body">
                                            <!-- <h5>Form controls</h5>
                                            <hr> -->
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <form method="POST" method="POST" action="{{ route('register') }}">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">First Name</label>
                                                            <input type="email" class="form-control @error('first_name') is-invalid @enderror" id="exampleInputEmail1" value="{{ old('name') }}" aria-describedby="emailHelp" placeholder="Enter First Name">
                                                            @error('first_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                 <strong>{{ $message }}</strong>
                                                                  </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Password</label>
                                                            <input id="password" type="password" class="form-control @error('name') is-invalid @enderror" id="exampleInputPassword1" placeholder="Password">
                                                            @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                           </span>
                                                         @enderror
                                                        </div>
														
                                                        <div class="form-group">
                                                         <label for="exampleFormControlSelect1">Gender</label>
                                                         <select class="form-control" id="exampleFormControlSelect1" name="gender">
                                                         <option value="">Select Gender</option>
                                                          <option value="male">Male</option>
                                                          <option value="female">Female</option>
                                                             <option value="other">Other</option>
                                                               </select>
                                                             @error('gender')
                                                            <div class="text-danger">{{ $message }}</div>
                                                                 @enderror
                                                            </div>
                                                        <div class="form-group">
                                                            <label>DOB(B.S)</label>
                                                            <input type="date" name="gender" class="form-control @error('dob') is-invalid @enderror" id="exampleInputdate" aria-describedby="emailHelp" placeholder="dd/mm/yy">
                                                             @error('dob')
                                                                 <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">GrandFather Name</label>
                                                            <input type="email" name="grandfather" class="form-control  @error('dob') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter grandfather name">
                                                             @error('grandfather')
                                                                 <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Upload image</label>
                                                            <input type="file"  name="filename" class="form-control" id="myFile" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        
                                                        <!-- <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                        </div> -->
                                                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                                    </form>
                                                </div>
                                                <div class="col-md-4">
                                                    <form method="POST" method="POST" action="{{ route('register') }}">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Middle Name</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Enter Middle Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Confirm Password</label>
                                                           <input id="password" type="password" class="form-control @error('name') is-invalid @enderror" id="exampleInputPassword1" placeholder="Password">
                                                            @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                           </span>
                                                         @enderror
                                                        </div>
														
                                                        <div class="form-group">
                                                         <label for="exampleInputEmail1">Father Name</label>
                                                            <input type="email" class="form-control @error('father_name') is-invalid @enderror" id="exampleInputEmail1" value="{{ old('father_name') }}" aria-describedby="emailHelp" placeholder="Enter Father Name">
                                                            @error('father_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                 <strong>{{ $message }}</strong>
                                                                  </span>
                                                            @enderror
                                                            </div>
                                                        <div class="form-group">
                                                            <label>DOB(A.D)</label>
                                                            <input type="date" name="gender" class="form-control @error('ad') is-invalid @enderror" id="exampleInputdate" aria-describedby="emailHelp" placeholder="dd/mm/yy">
                                                             @error('ad')
                                                                 <div class="text-danger">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">GrandMother Name</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter GrandMother Name">
                                                        </div>
                                                        <div class="form-group">
                                                           <label for="exampleFormControlSelect1">Marital status</label>
                                                            <select class="form-control" id="exampleFormControlSelect1" name="status">
                                                            <option>Select Marital Status</option>
                                                                <option>Unmarried</option>
                                                                <option>Married</option>
                                                            </select>
                                                             @error('status')
                                                            <div class="text-danger">{{ $message }}</div>
                                                                 @enderror
                                                        </div>
                                                        
                                                        <!-- <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                        </div> -->
                                                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                                    </form>
                                                </div>
                                                <div class="col-md-4">
                                                    <form>
													<div class="form-group">
                                                           <label for="exampleInputEmail1">Last Name</label>
                                                            <input type="email" class="form-control  @error('last_name') is-invalid @enderror" id="exampleInputEmail1" value="{{ old('last_name') }}" aria-describedby="emailHelp" placeholder="Enter Last Name">
                                                            @error('last_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                 <strong>{{ $message }}</strong>
                                                                  </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Mother Name</label>
                                                            <input type="email" class="form-control  @error('mother_name') is-invalid @enderror" id="exampleInputEmail1" value="{{ old('mother_name') }}" aria-describedby="emailHelp" placeholder="Enter Mother Name">
                                                            @error('mother_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                 <strong>{{ $message }}</strong>
                                                                  </span>
                                                            @enderror
                                                        </div>
                                                       
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Spouse Name</label>
                                                            <input type="email" class="form-control @error('spouse_name') is-invalid @enderror" id="exampleInputEmail1" value="{{ old('spouse_name') }}" aria-describedby="emailHelp" placeholder="Enter Spouse Name">
                                                            @error('spouse_name')
                                                                <span class="invalid-feedback" role="alert">
                                                                 <strong>{{ $message }}</strong>
                                                                  </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                             <label for="exampleInputEmail1">Contact Number</label>
                                                            <input type="email" class="form-control @error('contact_number') is-invalid @enderror" id="exampleInputEmail1" value="{{ old('contact_number') }}" aria-describedby="emailHelp" placeholder="Enter Contact Number">
                                                            @error('contact_number')
                                                                <span class="invalid-feedback" role="alert">
                                                                 <strong>{{ $message }}</strong>
                                                                  </span>
                                                            @enderror
                                                        </div>
                                                        </div>
                                                        
                                                        <!-- <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Example textarea</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        </div> -->
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Input group -->
                                    
                                </div>
                                <!-- [ form-element ] end -->
                                <!-- [ Main Content ] end -->
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
											<div class="row">
                                <!-- [ form-element ] start -->
                                <div class="col-sm-12">
                                    <div class="card">
                                        <!-- <div class="card-header">
                                            <h5>Basic Componant</h5>
                                        </div> -->
                                        <div class="card-body">
                                            <h5>Permanent Address</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <form method="POST" method="POST" action="{{ route('register') }}">
                                                        <div class="form-group">
                                                           <label for="exampleInputEmail1">Province</label>
                                                            <select class="form-control" id="exampleFormControlSelect1" name="province">
                                                            <option>Select Province</option>
                                                                <option>Koshi</option>
                                                                <option>Madhesh</option>
                                                                 <option>Bagmati</option>
                                                                <option>Gandaki</option>
                                                                 <option>Lumbini</option>
                                                                <option>Karnali</option>
                                                                 <option>Sudurpashchim</option>
                                                            </select>
                                                             @error('province')
                                                            <div class="text-danger">{{ $message }}</div>
                                                                 @enderror
                                                        </div>
                                                        <div class="form-group">
                                                             <label for="exampleInputEmail1">District</label>
                                                            <select class="form-control" id="exampleFormControlSelect1" name="province">
                                                            <option>Select District</option>
                                                                <option>Koshi</option>
                                                                <option>Madhesh</option>
                                                                 <option>Bagmati</option>
                                                                <option>Gandaki</option>
                                                                 <option>Lumbini</option>
                                                                <option>Karnali</option>
                                                                 <option>Sudurpashchim</option>
                                                            </select>
                                                             @error('province')
                                                            <div class="text-danger">{{ $message }}</div>
                                                                 @enderror
                                                        </div>
														
                                                        
                                                        
                                                       
                                                        
                                                        <!-- <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                        </div> -->
                                                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                                    </form>
                                                </div>
                                                <div class="col-md-4">
                                                    <form method="POST" method="POST" action="{{ route('register') }}">
                                                        <div class="form-group">
                                                             <label for="exampleInputEmail1">Municipality</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                              <label for="exampleInputEmail1">Ward</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
														
                                                        
                                                      
                                                        
                                                      
                                                        
                                                        <!-- <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                        </div> -->
                                                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                                    </form>
                                                </div>
                                                <div class="col-md-4">
                                                    <form>
													<div class="form-group">
                                                           <label for="exampleInputEmail1">Country</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Tole/Street</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                       
                                                        
                                                        
                                                        </div>
                                                        
                                                        <!-- <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Example textarea</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        </div> -->
                                                    </form>
                                                </div>
                                            </div>
                                             <h5>Citizenship Address</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <form method="POST" method="POST" action="{{ route('register') }}">
                                                        <div class="form-group">
                                                           <label for="exampleInputEmail1">Province</label>
                                                            <select class="form-control" id="exampleFormControlSelect1" name="province">
                                                            <option>Select Province</option>
                                                                <option>Koshi</option>
                                                                <option>Madhesh</option>
                                                                 <option>Bagmati</option>
                                                                <option>Gandaki</option>
                                                                 <option>Lumbini</option>
                                                                <option>Karnali</option>
                                                                 <option>Sudurpashchim</option>
                                                            </select>
                                                             @error('province')
                                                            <div class="text-danger">{{ $message }}</div>
                                                                 @enderror
                                                        </div>
                                                        <div class="form-group">
                                                             <label for="exampleInputEmail1">District</label>
                                                            <select class="form-control" id="exampleFormControlSelect1" name="province">
                                                            <option>Select District</option>
                                                                <option>Koshi</option>
                                                                <option>Madhesh</option>
                                                                 <option>Bagmati</option>
                                                                <option>Gandaki</option>
                                                                 <option>Lumbini</option>
                                                                <option>Karnali</option>
                                                                 <option>Sudurpashchim</option>
                                                            </select>
                                                             @error('province')
                                                            <div class="text-danger">{{ $message }}</div>
                                                                 @enderror
                                                        </div>
														
                                                        
                                                        
                                                       
                                                        
                                                        <!-- <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                        </div> -->
                                                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                                    </form>
                                                </div>
                                                <div class="col-md-4">
                                                    <form method="POST" method="POST" action="{{ route('register') }}">
                                                        <div class="form-group">
                                                             <label for="exampleInputEmail1">Municipality</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                              <label for="exampleInputEmail1">Ward</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
														
                                                        
                                                      
                                                        
                                                      
                                                        
                                                        <!-- <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                        </div> -->
                                                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                                                    </form>
                                                </div>
                                                <div class="col-md-4">
                                                    <form>
													<div class="form-group">
                                                           <label for="exampleInputEmail1">Country</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Tole/Street</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                       
                                                        
                                                        
                                                        </div>
                                                        
                                                        <!-- <div class="form-group">
                                                            <label for="exampleFormControlTextarea1">Example textarea</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        </div> -->
                                                    </form>
                                                </div>
                                            </div>
                                             <h5 class="mt-5">ID Information</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <form>
                                                       
                                                       
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Citizenship Number</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">PAN Number</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-4">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Citizenship Issue Date</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">PAN office</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-4">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Citizenship Office</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                    </form>
                                                </div>
                                        </div>
                                    </div>
                                    <!-- Input group -->
                                    
                                </div>
                                <!-- [ form-element ] end -->
                                <!-- [ Main Content ] end -->
                            </div>
										<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
											<div class="card-body">
                                            <!-- <h5></h5>
                                            <hr> -->
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Department</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Appointment Date</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-4">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Branch</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-4">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Degination/Post</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <h5 class="mt-5">Qualification Information</h5>
                                            <hr>
                                           
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <form>
                                                       
                                                       
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Qualification Name(SEE/SLC)</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Qualification Name(HSCB/+2)</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Qualification Name(Bachelor)</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Qualification Name(Master)</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        
                                                    </form>
                                                </div>
                                                <div class="col-md-3">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">University</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">University</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">University</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">University</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        
                                                    </form>
                                                </div>
                                                <div class="col-md-3">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1"> Passed Year</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1"> Passed Year</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1"> Passed Year</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1"> Passed Year</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="col-md-3">
                                                    <form>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">GPA/Percentage</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">GPA/Percentage</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">GPA/Percentage</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">GPA/Percentage</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
										</div>
                                            </div>
                                           
                                        </div>
										</div>
									</div>
                                   
								</div>
								<!-- [ tabs ] end -->
							</div>
							<!-- [ Main Content ] end -->
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="col-sm-12 text-right">
        <button type="submit" class="btn btn-primary">Submit</button>
</div>
@endsection











