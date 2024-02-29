@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <!-- Include CSRF token -->

    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ breadcrumb ] start -->
                        <div class="page-header">
                            <div class="page-block">
                                <!-- <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Navs &amp; tabs</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html"><i
                                                        class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Basic Components</a></li>
                                            <li class="breadcrumb-item"><a href="#!">Navs &amp; tabs</a></li>
                                        </ul>
                                    </div>
                                </div> -->
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
                                        <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab"
                                            href="#home" role="tab" aria-controls="home" aria-selected="true">Basic
                                            Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab"
                                            href="#profile" role="tab" aria-controls="profile"
                                            aria-selected="false">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-uppercase" id="contact-tab" data-toggle="tab"
                                            href="#contact" role="tab" aria-controls="contact"
                                            aria-selected="false">Contact</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel"
                                        aria-labelledby="home-tab">

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

                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">First Name</label>
                                                                    <input type="text"
                                                                        class="form-control @error('firstname') is-invalid @enderror"
                                                                        id="exampleInputEmail1" name="firstname"
                                                                        value="{{ old('firstname') }}"
                                                                        placeholder="Enter First Name">
                                                                    @error('firstname')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Email</label>
                                                                    <input type="text"
                                                                        class="form-control @error('email') is-invalid @enderror"
                                                                        id="exampleInputEmail1" name="email"
                                                                        value="{{ old('email') }}"
                                                                        placeholder="Enter email">
                                                                    @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Contact
                                                                        Number</label>
                                                                    <input type="text"
                                                                        class="form-control @error('contactnumber') is-invalid @enderror"
                                                                        id="contact_number"
                                                                        value="{{ old('contactnumber') }}"
                                                                        name="contactnumber"
                                                                        aria-describedby=" emailHelp"
                                                                        placeholder="Enter Contact Number">
                                                                    @error('contactnumber')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>

                                                                <div class="form-group">
                                                                    <label
                                                                        for="exampleFormControlSelect1">Gender</label>
                                                                    <select class="form-control"
                                                                        id="exampleFormControlSelect1" name="gender">
                                                                        <option value="" selected disabled>Choose Gender
                                                                        </option>
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                        <option value="Other">Other</option>
                                                                    </select>
                                                                    @error('gender')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">GrandFather
                                                                        Name</label>
                                                                    <input type="text" name="grandfathername"
                                                                        class="form-control  @error('grandfathername') is-invalid @enderror"
                                                                        name="grandfather" name="grandfathername"
                                                                        id=" grandfather" aria-describedby="emailHelp"
                                                                        placeholder="Enter grandfather name">
                                                                    @error('grandfathername')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlSelect1">Role</label>
                                                                    <select class="form-control" id="maritalstatus"
                                                                        name="role">
                                                                        <option value="" selected disabled>Choose Role
                                                                        </option>
                                                                        <option>admin</option>
                                                                        <option>user</option>
                                                                    </select>
                                                                    @error('role')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>



                                                                <!-- <div class="form-group">
                                                                    <label for="exampleInputEmail1">Upload image</label>
                                                                    <input type="file" name="filename"
                                                                        class="form-control" id="myFile"
                                                                        aria-describedby="emailHelp">
                                                                    @error('filename')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div> -->

                                                                <!-- <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                        </div> -->
                                                                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

                                                            </div>
                                                            <div class="col-md-4">

                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Middle Name</label>
                                                                    <input type="text" class="form-control"
                                                                        id="middlename" name="middlename"
                                                                        aria-describedby="emailHelp"
                                                                        placeholder="Enter Middle Name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">Password</label>
                                                                    <input type="password"
                                                                        class="form-control @error('password') is-invalid @enderror"
                                                                        id="exampleInputPassword1" name="password"
                                                                        placeholder="Password">
                                                                    @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>


                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Father Name</label>
                                                                    <input type="text"
                                                                        class="form-control @error('fathername') is-invalid @enderror"
                                                                        id="fathername" name="fathername"
                                                                        value="{{ old('fathername') }}"
                                                                        aria-describedby="emailHelp"
                                                                        placeholder="Enter Father Name">
                                                                    @error('fathername')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>DOB(B.S)</label>
                                                                    <input type="date" name="dob_bs"
                                                                        class="form-control @error('dob_bs') is-invalid @enderror"
                                                                        id="dob_bs" aria-describedby="emailHelp"
                                                                        placeholder="dd/mm/yy">
                                                                    @error('dob_bs')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">GrandMother
                                                                        Name</label>
                                                                    <input type="text" class="form-control"
                                                                        id="grandmother_name" name="grandmothername"
                                                                        aria-describedby="emailHelp"
                                                                        placeholder="Enter GrandMother Name">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlSelect1">Marital
                                                                        status</label>
                                                                    <select class="form-control" id="maritalstatus"
                                                                        name="maritalstatus">
                                                                        <option value="" selected disabled>Choose
                                                                            Marital Status</option>
                                                                        <option>Unmarried</option>
                                                                        <option>Married</option>
                                                                    </select>
                                                                    @error('maritalstatus')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>

                                                                <!-- <div class="form-group form-check">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                                        </div> -->
                                                                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

                                                            </div>
                                                            <div class="col-md-4">

                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Last Name</label>
                                                                    <input type="text"
                                                                        class="form-control  @error('lastname') is-invalid @enderror"
                                                                        id="lastname" value="{{ old('lastname') }}"
                                                                        aria-describedby="emailHelp" name="lastname"
                                                                        placeholder=" Enter Last Name">
                                                                    @error('lastname')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputPassword1">Confirm
                                                                        Password</label>
                                                                    <input id="confirm_password" type="password"
                                                                        class="form-control @error('cpassword') is-invalid @enderror"
                                                                        id="confirm_password" name="cpassword"
                                                                        placeholder="Confirm Password">
                                                                    @error('cpassword')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Mother Name</label>
                                                                    <input type="text"
                                                                        class="form-control  @error('mothername') is-invalid @enderror"
                                                                        id="mother_name" value="{{ old('mothername') }}"
                                                                        name="mothername" aria-describedby=" emailHelp"
                                                                        placeholder="Enter Mother Name">
                                                                    @error('mothername')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </div>


                                                                <div class="form-group">
                                                                    <label>DOB(A.D)</label>
                                                                    <input type="date" name="dob_ad"
                                                                        class="form-control @error('dob_ad') is-invalid @enderror"
                                                                        id="dob_bs" aria-describedby="emailHelp"
                                                                        placeholder="dd/mm/yy">
                                                                    @error('dob_ad')
                                                                    <div class="text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Spouse Name</label>
                                                                    <input type="text"
                                                                        class="form-control @error('spousename') is-invalid @enderror"
                                                                        id="spousename" value="{{ old('spousename') }}"
                                                                        aria-describedby="emailHelp"
                                                                        placeholder="Enter Spouse Name">
                                                                    @error('spousename')
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

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <!-- Input group -->

                                        </div>

                                        <!-- [ form-element ] end -->
                                        <!-- [ Main Content ] end -->
                                    </div>

                                    <!-- contact content -->

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- [ tabs ] end -->
                </div>
                <!-- [ Main Content ] end -->
            </div>
            <!-- <div class="col-sm-12 text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div> -->

        </div>
    </div>
    <div class="col-sm-12 text-right">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
<!-- <div class="col-sm-12 text-right">
    <button type="submit" class="btn btn-primary">Submit</button>
</div> -->
@endsection




<script>
function updateDistricts() {
    // Get the selected province
    var provinceSelect = document.getElementById("province1");
    var selectedProvince = provinceSelect.options[provinceSelect.selectedIndex].value;

    // Get the corresponding districts for the selected province
    var districts = [];
    switch (selectedProvince) {
        case "Koshi":
            districts = ["Bhojpur", "Dhankuta", "Ilam", "Jhapa", "Khotang", "Morang", "Okhaldhunga", "Panchthar",
                "Sankhuwasabha", "Saptari", "Siraha", "Solukhumbu", "Sunsari", "Taplejung", "Terhathum", "Udayapur"
            ];
            break;
        case "Madhesh":
            districts = ["Saptari", "Siraha", "Dhanusa", "Mahottari", "Sarlahi", "Bara", "Parsa", "Rautahat"];
            break;
        case "Bagmati":
            districts = ["Bhaktapur", "Dhading", "Kathmandu", "Kavrepalanchok", "Lalitpur", "Nuwakot", "Ramechhap",
                "Rasuwa", "Sindhuli", "Sindhupalchok"
            ];
            break;
            // Add cases for other provinces with their respective districts
    }

    // Update the options in the District select element
    var districtSelect = document.getElementById("district1");
    districtSelect.innerHTML = ""; // Clear existing options
    for (var i = 0; i < districts.length; i++) {
        var option = document.createElement("option");
        option.text = districts[i];
        districtSelect.add(option);
    }
}


function updateCitizenDistricts() {
    // Get the selected province
    var provinceSelect = document.getElementById("province2");
    var selectedProvince = provinceSelect.options[provinceSelect.selectedIndex].value;

    // Get the corresponding districts for the selected province
    var districts = [];
    switch (selectedProvince) {
        case "Koshi":
            districts = ["Bhojpur", "Dhankuta", "Ilam", "Jhapa", "Khotang", "Morang", "Okhaldhunga", "Panchthar",
                "Sankhuwasabha", "Saptari", "Siraha", "Solukhumbu", "Sunsari", "Taplejung", "Terhathum", "Udayapur"
            ];
            break;
        case "Madhesh":
            districts = ["Saptari", "Siraha", "Dhanusa", "Mahottari", "Sarlahi", "Bara", "Parsa", "Rautahat"];
            break;
        case "Bagmati":
            districts = ["Bhaktapur", "Dhading", "Kathmandu", "Kavrepalanchok", "Lalitpur", "Nuwakot", "Ramechhap",
                "Rasuwa", "Sindhuli", "Sindhupalchok"
            ];
            break;
            // Add cases for other provinces with their respective districts
    }

    // Update the options in the District select element
    var districtSelect = document.getElementById("district2");
    districtSelect.innerHTML = ""; // Clear existing options
    for (var i = 0; i < districts.length; i++) {
        var option = document.createElement("option");
        option.text = districts[i];
        districtSelect.add(option);
    }
}
</script>

<!-- Example JavaScript code to convert B.S. to A.D. and vice versa -->