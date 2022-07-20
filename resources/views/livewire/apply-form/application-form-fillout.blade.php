<div class="application-form-fillout" id="application-form">
    @if ($haveErrors)
        <div class="alert alert-danger alert-dismissible fade show errors-alert" role="alert">
            <strong>Please fix the following errors first:</strong>
            @if($errors->any())
                <ul>
                    {!! implode('', $errors->all('<li><small>:message</small></li>')) !!}
                </ul>
            @endif
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-9 offset-md-3">
                <h3>
                    Fill in the form below
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div id="application-form-scroll" class="list-group">
                    <a class="list-group-item list-group-item-action" href="#list-item-1">
                        <img src="{{ asset('img/apply-form/personal.svg') }}" alt="personal">
                        <span class="ms-1">Personal Information</span>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#list-item-2">
                        <img src="{{ asset('img/apply-form/contact.svg') }}" alt="contact">
                        <span class="ms-1">Contact Information</span>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#list-item-3">
                        <img src="{{ asset('img/apply-form/vehicle.svg') }}" alt="vehicle">
                        <span class="ms-1">Vehicle Information</span>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">
                        <img src="{{ asset('img/apply-form/additional-personal.svg') }}" alt="additional information">
                        <span class="ms-1">Additional Personal Information</span>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#list-item-5">
                        <img src="{{ asset('img/apply-form/employment.svg') }}" alt="employment">
                        <span class="ms-1">Employment Information</span>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#list-item-6">
                        <img src="{{ asset('img/apply-form/personal-preference.svg') }}" alt="reference">
                        <span class="ms-1">Personal References</span>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#list-item-7">
                        <img src="{{ asset('img/apply-form/consent.svg') }}" alt="consent">
                        <span class="ms-1">Consent to Receive Electronic Documents</span>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#list-item-8">
                        <img src="{{ asset('img/apply-form/income.svg') }}" alt="income">
                        <span class="ms-1">Disposable Income</span>
                    </a>
                    <a class="list-group-item list-group-item-action" href="#list-item-9">
                        <img src="{{ asset('img/apply-form/acknowledge.svg') }}" alt="acknowledge">
                        <span class="ms-1">Acknowledgements</span>
                    </a>
                </div>
            </div>
            <div class="col-md-9 position-relative">
                <div class="loading-state" style="z-index:1" wire:loading>
                  <div class="spinner-box">
                     <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                     </div>
                  </div>
               </div>
                <div data-bs-spy="scroll" data-bs-target="#application-form-scroll" data-bs-offset="0" class="scrollspy-example application-form-scroll-body" tabindex="0" style="height: 650px; overflow: scroll; position: relative;">

                    {{-- PERSONAL INFORMATION --}}
                    <div id="list-item-1"></div>
                    <form wire:submit.prevent="submit">
                        <div class="card application-form-box">
                            <div class="card-header d-flex">
                                <img src="{{ asset('img/apply-form/personal.svg') }}" alt="personal information">
                                <span class="ms-2">Personal Information</span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="">Loan Amount ($)</label>
                                        <input type="text" class="form-control @error('loanAmount') border-danger @enderror" placeholder="1000" wire:model.defer="loanAmount">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control @error('personalFirstName') border-danger @enderror" placeholder="John" wire:model.defer="personalFirstName">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control @error('personalLastName') border-danger @enderror" placeholder="Doe" wire:model.defer="personalLastName">
                                    </div>
                                    <div class="col-12">
                                        <label for="">Date Of Birth</label>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-select form-control @error('birthMonth') border-danger @enderror" wire:model.defer="birthMonth">
                                            <option value="0" selected>Select Month</option>
                                            <option value="01">January</option>
                                            <option value="02">February</option>
                                            <option value="03">March</option>
                                            <option value="04">April</option>
                                            <option value="05">May</option>
                                            <option value="06">June</option>
                                            <option value="07">July</option>
                                            <option value="08">August</option>
                                            <option value="09">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-select form-control @error('birthDate') border-danger @enderror" wire:model.defer="birthDate">
                                            <option value="0" selected>Select Day</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-select form-control @error('birthYear') border-danger @enderror" wire:model.defer="birthYear">
                                            <option value="0" selected>Select Year</option>
                                            <option value="1940">1940</option>
                                            <option value="1941">1941</option>
                                            <option value="1942">1942</option>
                                            <option value="1943">1943</option>
                                            <option value="1944">1944</option>
                                            <option value="1945">1945</option>
                                            <option value="1946">1946</option>
                                            <option value="1947">1947</option>
                                            <option value="1948">1948</option>
                                            <option value="1949">1949</option>
                                            <option value="1950">1950</option>
                                            <option value="1951">1951</option>
                                            <option value="1952">1952</option>
                                            <option value="1953">1953</option>
                                            <option value="1954">1954</option>
                                            <option value="1955">1955</option>
                                            <option value="1956">1956</option>
                                            <option value="1957">1957</option>
                                            <option value="1958">1958</option>
                                            <option value="1959">1959</option>
                                            <option value="1960">1960</option>
                                            <option value="1961">1961</option>
                                            <option value="1962">1962</option>
                                            <option value="1963">1963</option>
                                            <option value="1964">1964</option>
                                            <option value="1965">1965</option>
                                            <option value="1966">1966</option>
                                            <option value="1967">1967</option>
                                            <option value="1968">1968</option>
                                            <option value="1969">1969</option>
                                            <option value="1970">1970</option>
                                            <option value="1971">1971</option>
                                            <option value="1972">1972</option>
                                            <option value="1973">1973</option>
                                            <option value="1974">1974</option>
                                            <option value="1975">1975</option>
                                            <option value="1976">1976</option>
                                            <option value="1977">1977</option>
                                            <option value="1978">1978</option>
                                            <option value="1979">1979</option>
                                            <option value="1980">1980</option>
                                            <option value="1981">1981</option>
                                            <option value="1982">1982</option>
                                            <option value="1983">1983</option>
                                            <option value="1984">1984</option>
                                            <option value="1985">1985</option>
                                            <option value="1986">1986</option>
                                            <option value="1987">1987</option>
                                            <option value="1988">1988</option>
                                            <option value="1989">1989</option>
                                            <option value="1990">1990</option>
                                            <option value="1991">1991</option>
                                            <option value="1992">1992</option>
                                            <option value="1993">1993</option>
                                            <option value="1994">1994</option>
                                            <option value="1995">1995</option>
                                            <option value="1996">1996</option>
                                            <option value="1997">1997</option>
                                            <option value="1998">1998</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="control-label">Upload Your ID</label>
                                            
                                            <div class="personal-dropzone-wrapper @error('personalId') border-danger @enderror">
                                              <div class="personal-dropzone-desc">
                                                <img src="{{ asset('img/apply-form/upload-image.svg') }}" alt="upload icon">
                                                <p>
                                                    Choose an image file or drag it here.<br>
                                                    <small>JPG, PNG or SVG, file size no more than 10MB</small>
                                                </p>
                                              </div>
                                              <div class="browse">
                                                  SELECT FILE
                                              </div>
                                              <input type="file" name="img_logo" class="personal-dropzone" wire:model.defer="personalId">
                                            </div>
                                            <div class="preview-zone visually-hidden">
                                              <div class="box box-solid">
                                                <div class="box-header with-border">
                                                  {{-- <div class="box-tools">
                                                    <button type="button" class="btn-danger remove-preview btn-sm">
                                                      <i class="fa fa-times"></i> Remove
                                                    </button>
                                                  </div> --}}
                                                </div>
                                                <div class="box-body text-start"></div>
                                              </div>
                                            </div>
                                        </div>
                                        @if ($personalId)
                                            <img src="{{ $personalId->temporaryUrl() }}" style="width: 150px" class="mt-2 img-thumbnail">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        {{-- CONTACT INFORMATION --}}
                        <div id="list-item-2"></div>
                        <div class="card application-form-box mt-5">
                            <div class="card-header d-flex">
                                <img src="{{ asset('img/apply-form/contact.svg') }}" alt="personal information">
                                <span class="ms-2">Contact Information</span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" placeholder="9151 Charles Court Lake Mary, FL 32746">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">State</label>
                                        <select class="form-select form-control">
                                            <option value="0" selected>Select State</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District Of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">City</label>
                                        <select class="form-select form-control">
                                            <option value="0" selected>Select City</option>
                                            <option value="1" >City 1</option>
                                            <option value="2" >City 2</option>
                                            <option value="3" >City 3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Zip Code</label>
                                        <input type="text" class="form-control" placeholder="12345">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" placeholder="John@example.com">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Phone Number</label>
                                        <input type="text" class="form-control" placeholder="0000-5478-112">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Best Time to Call</label>
                                        <select class="form-select form-control">
                                            <option value="0" selected>Select Time</option>
                                            <option value="1">AnyTime</option>
                                            <option value="2">Noon</option>
                                            <option value="3">After Noon</option>
                                            <option value="4">Evening</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- VEHICLE INFORMATION --}}
                        <div id="list-item-3"></div>
                        <div class="card application-form-box mt-5">
                            <div class="card-header d-flex">
                                <img src="{{ asset('img/apply-form/vehicle.svg') }}" alt="personal information">
                                <span class="ms-2">Vehicle Information</span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Year</label>
                                        <input type="text" class="form-control" placeholder="2022">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Make</label>
                                        <input type="text" class="form-control" placeholder="Audi">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Model</label>
                                        <input type="text" class="form-control" placeholder="A6">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Trim</label>
                                        <input type="text" class="form-control" placeholder="330e Sedan 4D">
                                    </div>
                                     <div class="col-md-4">
                                        <label for="">License Plate Number</label>
                                        <input type="text" class="form-control" placeholder="IAH-0087">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Mileage</label>
                                        <input type="text" class="form-control" placeholder="20">
                                    </div>
                                    <div class="col-12">
                                        <label for="">VIN (Vehicle Identification Number)</label>
                                        <input type="text" class="form-control" placeholder="N/A">
                                    </div>
                                    <div class="col-12">
                                        <label for="">Upload Car Images</label>
                                        <div class="drop-multiple">
                                            <div class="cont">
                                                <img src="{{ asset('img/apply-form/upload-image.svg') }}" alt="upload icon">
                                                <p class="tit">
                                                    Select images or drag and drop here
                                                    <br>
                                                    <small class="desc">
                                                        JPG, PNG or SVG, image size no more than 10MB
                                                    </small>
                                                </p>
                                            </div>
                                            <div class="browse">
                                                SELECT FILES
                                            </div>
                                            <input id="files" multiple="true" name="files[]" type="file" />
                                        </div>
                                        <output id="list"></output>
                                    </div>  
                                </div>
                            </div>
                        </div>

                        {{-- ADDITIONAL PERSONAL INFORMATION --}}
                        <div id="list-item-4"></div>
                        <div class="card application-form-box mt-5">
                            <div class="card-header d-flex">
                                <img src="{{ asset('img/apply-form/additional-personal.svg') }}" alt="additional personal information">
                                <span class="ms-2">Additional Personal Information</span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="">How Long Have You Live In Your Home</label>
                                        <select class="form-select form-control">
                                            <option value="0" selected>Select</option>
                                            <option value="1">AnyTime</option>
                                            <option value="2">Noon</option>
                                            <option value="3">After Noon</option>
                                            <option value="4">Evening</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio-box">
                                            <label for="">Do You Rent Or Own?</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="rentOrOwn" id="rentOrOwn1">
                                                        <label class="form-check-label" for="rentOrOwn1">
                                                            Rent
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="rentOrOwn" id="rentOrOwn2" checked>
                                                        <label class="form-check-label" for="rentOrOwn2">
                                                            Own
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio-box">
                                            <label for="">Are You a US Citizen?</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="usCitizen" id="usCitizen1">
                                                        <label class="form-check-label" for="usCitizen1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="usCitizen" id="usCitizen2" checked>
                                                        <label class="form-check-label" for="usCitizen2">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio-box">
                                            <label for="">Are You In The Military?</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="inMilitary" id="inMilitary1">
                                                        <label class="form-check-label" for="inMilitary1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="inMilitary" id="inMilitary2" checked>
                                                        <label class="form-check-label" for="inMilitary2">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio-box">
                                            <label for="">Are You a Someone Dependent In The Military?</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dependentMilitary" id="dependentMilitary1">
                                                        <label class="form-check-label" for="dependentMilitary1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dependentMilitary" id="dependentMilitary2" checked>
                                                        <label class="form-check-label" for="dependentMilitary2">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="">Driver’s Licence Number</label>
                                        <input type="text" class="form-control" placeholder="021457">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- EMPLOYMENT INFORMATION --}}
                        <div id="list-item-5"></div>
                        <div class="card application-form-box mt-5">
                            <div class="card-header d-flex">
                                <img src="{{ asset('img/apply-form/employment.svg') }}" alt="employment information">
                                <span class="ms-2">Employment Information</span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <label for="">Where Do You Work?</label>
                                        <input type="text" class="form-control" placeholder="Company">
                                    </div>
                                    <div class="col-12">
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" placeholder="9151 Charles Court Lake Mary, FL 32746">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">State</label>
                                        <select class="form-select form-control">
                                            <option value="0" selected>Select State</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District Of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">City</label>
                                        <select class="form-select form-control">
                                            <option value="0" selected>Select City</option>
                                            <option value="1" >City 1</option>
                                            <option value="2" >City 2</option>
                                            <option value="3" >City 3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Zip Code</label>
                                        <input type="text" class="form-control" placeholder="12345">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">How Often Do You Get Paid?</label>
                                        <select class="form-select form-control">
                                            <option value="0" selected>Select City</option>
                                            <option value="1" >City 1</option>
                                            <option value="2" >City 2</option>
                                            <option value="3" >City 3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Last Payday</label>
                                        <input type="text" class="form-control datePickerInput" placeholder="mm/dd/yyyy">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Next Payday</label>
                                        <input type="text" class="form-control datePickerInput" placeholder="mm/dd/yyyy">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio-box">
                                            <label for="">Direct Deposit</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="directDeposit" id="directDeposit1">
                                                        <label class="form-check-label" for="directDeposit1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="directDeposit" id="directDeposit2" checked>
                                                        <label class="form-check-label" for="directDeposit2">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio-box">
                                            <label for="">What Type Of Income Is This?</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="incomeType" id="incomeType1">
                                                        <label class="form-check-label" for="incomeType1">
                                                            Employment
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="incomeType" id="incomeType2" checked>
                                                        <label class="form-check-label" for="incomeType2">
                                                            Benefits
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- PERSONAL REFERENCE --}}
                        <div id="list-item-6"></div>
                        <div class="card application-form-box mt-5">
                            <div class="card-header d-flex">
                                <img src="{{ asset('img/apply-form/personal-preference.svg') }}" alt="reference">
                                <span class="ms-2">Personal References</span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h6>Reference # 1</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" placeholder="John">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" placeholder="Doe">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">What Is Your Relationship With This Person?</label>
                                        <select class="form-select form-control">
                                            <option value="0" selected>Select Relation</option>
                                            <option value="family">Family</option>
                                            <option value="friend">Friend</option>
                                            <option value="business">Business</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Reference Phone Number</label>
                                        <input type="text" class="form-control" placeholder="0000-5478-112">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <h6>Reference # 2</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" placeholder="John">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" placeholder="Doe">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">What Is Your Relationship With This Person?</label>
                                        <select class="form-select form-control">
                                            <option value="0" selected>Select Relation</option>
                                            <option value="family">Family</option>
                                            <option value="friend">Friend</option>
                                            <option value="business">Business</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Reference Phone Number</label>
                                        <input type="text" class="form-control" placeholder="0000-5478-112">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        <h6>Reference # 3</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" placeholder="John">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" placeholder="Doe">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">What Is Your Relationship With This Person?</label>
                                        <select class="form-select form-control">
                                            <option value="0" selected>Select Relation</option>
                                            <option value="family">Family</option>
                                            <option value="friend">Friend</option>
                                            <option value="business">Business</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Reference Phone Number</label>
                                        <input type="text" class="form-control" placeholder="0000-5478-112">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- CONSENT TO RECIEVE ELECTRONIC DOCUMENTS --}}
                        <div id="list-item-7"></h4>
                        <div class="card application-form-box mt-5 consent-box-card">
                            <div class="card-header d-flex">
                                <img src="{{ asset('img/apply-form/consent.svg') }}" alt="consent">
                                <span class="ms-2">Consent to Receive Electronic Documents</span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="consent-box">
                                            <p>
                                                Please read this information carefully and, for future reference, either print a copy of this document or retain this information electronically.
                                            </p>
                                            <ol>
                                                <li>
                                                    INTRODUCTION. You are submitting a credit application to americantitleloans.com. We can give you the benefits of our online service only if you consent to use and accept electronic signatures, electronic records, and electronic disclosures in connection with this transaction (your "Consent"). By completing and submitting an online credit application (your "Application"), you acknowledge that you have received this document and have consented to the use of electronic signatures, electronic records, and electronic disclosures in connection with this transaction (collectively "Records").
                                                </li>
                                                <li>
                                                    ELECTRONIC COMMUNICATIONS. You may request a paper copy of any Record by e-mailing americantitleloans.com at: support@americantitleloans.com. You may request a paper copy even if you withdraw your Consent. americantitleloans.com will retain the Records as required by law and will provide you a paper copy of any Record at no charge.
                                                    <li>
                                                        CONSENTING TO DO BUSINESS ELECTRONICALLY. Before giving your Consent, you should consider whether you have the required hardware and software capabilities described below.
                                                    </li>
                                                </li>
                                                <li>
                                                    SCOPE OF CONSENT. Your Consent and our agreement to conduct this transaction electronically only apply to this transaction. If we receive your Consent, then we will conduct this transaction with you electronically.
                                                </li>
                                                <li>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid nostrum dignissimos sit laudantium in animi, saepe iusto corrupti quo expedita assumenda neque nihil amet ex labore magni illum rem non?
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="termAgreementsCheck">
                                            <label class="form-check-label" for="termAgreementsCheck">
                                                I have read and understand and accept the terms of the Consent for Electronic Records.*
                                            </label>
                                        </div>
                                        <div class="form-check mt-3">
                                            <input class="form-check-input" type="checkbox" value="" id="agreeListCheck">
                                            <label class="form-check-label" for="agreeListCheck">
                                                By checking here you agree that we may (i) call you at any number provided on your credit application, including your cell phone, with an auto dialer or pre recorded message (ii) write you, via US postal service and/or electronic mail or (iii) contact you by text message or other wireless communication method on any telephone number listed on your application, in order to inform you about special promotions, savings and services we believe may be of interest to you as well as account status information. You may be charged by your wireless provider in order to receive text messages. You may change your preferences at any time by contacting us at support@americantitleloans.com or by calling us at 855-269-8485.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- DISPOSABLE INCOME --}}
                        <div id="list-item-8"></div>
                        <div class="card application-form-box mt-5 income-box">
                            <div class="card-header d-flex">
                                <img src="{{ asset('img/apply-form/income.svg') }}" alt="income">
                                <span class="ms-2">Disposable Income</span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h6>Monthly Income ($)</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Net From Job</label>
                                        <input type="text" class="form-control" placeholder="$">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Other Income</label>
                                        <input type="text" class="form-control" placeholder="$">
                                    </div>
                                    <div class="col-12 d-flex">
                                        <label for="">Total Montly Income</label>
                                        <span class="total-income-box d-block">
                                            $1020
                                        </span>
                                    </div>
                                    <div class="col-12">
                                        <h6>Monthly Expenses ($)</h6>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Rent/Mortgage</label>
                                        <input type="text" class="form-control" placeholder="$">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Insurance</label>
                                        <input type="text" class="form-control" placeholder="$">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Utilities</label>
                                        <input type="text" class="form-control" placeholder="$">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Credit Cards</label>
                                        <input type="text" class="form-control" placeholder="$">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Food</label>
                                        <input type="text" class="form-control" placeholder="$">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Music/Other</label>
                                        <input type="text" class="form-control" placeholder="$">
                                    </div>
                                    <div class="col-12 d-flex">
                                        <label for="">Total Montly Income</label>
                                        <span class="total-income-box d-block">
                                            $650
                                        </span>
                                    </div>
                                    <div class="col-12">
                                        <h6>Total Disposable Income (Monthly)</h6>
                                    </div>
                                    <div class="col-12 d-flex">
                                        <label for="">Total Montly Income</label>
                                        <span class="total-income-box d-block">
                                            $650
                                        </span>
                                    </div>
                                    <div class="col-12">
                                        <label for="">Upload Car Images</label>
                                        <div class="drop-multiple-income">
                                            <div class="cont">
                                                <img src="{{ asset('img/apply-form/upload-image.svg') }}" alt="upload icon">
                                                <p class="tit">
                                                    Select a file or drag and drop here
                                                    <br>
                                                    <small class="desc">
                                                        JPG, PNG, SVG or PDF, image size no more than 10MB
                                                    </small>
                                                </p>
                                            </div>
                                            <div class="browse">
                                                SELECT FILES
                                            </div>
                                            <input id="files-income" multiple="true" name="files-income[]" type="file" />
                                        </div>
                                        <output id="list-income-files"></output>
                                    </div> 
                                </div>
                            </div>
                        </div>

                        {{-- ACKNOWLEDGEMENTS --}}
                        <div id="list-item-9"></div>
                        <div class="card application-form-box mt-5 acknowledge-box">
                            <div class="card-header d-flex">
                                <img src="{{ asset('img/apply-form/acknowledge.svg') }}" alt="acknowledge">
                                <span class="ms-2">Acknowledgements</span>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="radio-box">
                                            <label for="">Have You Filed For Bankruptcy Anytime In The Last 6 Month?</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="filedBankruptcy" id="filedBankruptcy1">
                                                        <label class="form-check-label" for="filedBankruptcy1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="filedBankruptcy" id="filedBankruptcy2" checked>
                                                        <label class="form-check-label" for="filedBankruptcy2">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-4">
                                                <label for="">If Yes, Date Filed?</label>
                                                <input type="text" class="form-control datePickerInput" placeholder="mm/dd/yyyy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="radio-box">
                                            <label for="">Status:</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="filedStatus" id="filedStatus1">
                                                        <label class="form-check-label" for="filedStatus1">
                                                            Dismissed
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="filedStatus" id="filedStatus2">
                                                        <label class="form-check-label" for="filedStatus2">
                                                            Discharged
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="filedStatus" id="filedStatus3" checked>
                                                        <label class="form-check-label" for="filedStatus3">
                                                            Pending
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="radio-box">
                                            <label for="">Are You Party To Any Suit Or Legal Action, Or Are There Any Unsatisfied JUdgements Against You?</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="legalAction" id="legalAction1">
                                                        <label class="form-check-label" for="legalAction1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="legalAction" id="legalAction2" checked>
                                                        <label class="form-check-label" for="legalAction2">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="alert alert-danger">
                                            By signing below, I represent the information on this application is a true representation and any misrepresentation will be considered fraudulent in nature. I authorize American Title Loans to verify all information that I have provided including but not limited to contacting any person, landlord, employer, reference or company listed. I further authorize American Title Loans to run a credit report on the social security numbers listed on this application.  All loans subject to vehicle appraisal by our staff and application approval.  This application may be rejected if I fail to qualify or if any information provided is found to be unverifiable.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="d-block">Sign</label>
                                        {{-- <canvas id="signature" width="400px" height="150"></canvas>
                                        <br>
                                        <a class="btn btn-sm" href="#!" id="clear-signature">Clear</a> --}}
                                        <input type="text" class="form-control signature-input">
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="d-block">Contract Form</label>
                                        <a href="#" class="contact-form-download">
                                            <img src="{{ asset('img/apply-form/pdf.svg') }}" alt="pdf">
                                            <span>Download File</span>
                                        </a>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="form-group">
                                            <label class="control-label">Upload Contract</label>
                                            
                                            <div class="personal-dropzone-wrapper">
                                              <div class="personal-dropzone-desc">
                                                <img src="{{ asset('img/apply-form/upload-image.svg') }}" alt="upload icon">
                                                <p>
                                                    Select the Contact File or Drop here<br>
                                                    <small> PDF file size no more than 10MB</small>
                                                </p>
                                              </div>
                                              <div class="browse">
                                                  SELECT FILE
                                              </div>
                                              <input type="file" name="contract_pdf" class="personal-dropzone" multiple>
                                            </div>
                                            <div class="preview-zone visually-hidden">
                                              <div class="box box-solid">
                                                <div class="box-header with-border">
                                                  {{-- <div class="box-tools">
                                                    <button type="button" class="btn-danger remove-preview btn-sm">
                                                      <i class="fa fa-times"></i> Remove
                                                    </button>
                                                  </div> --}}
                                                </div>
                                                <div class="box-body text-start"></div>
                                              </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-12 text-end">
                                <button type="submit" class="btn">
                                    Submit My Application
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
    <style>
        /*.application-form-fillout .application-form-scroll-body .card .card-body .form-control {
            margin-bottom: 0;
        }
        .application-form-fillout .application-form-scroll-body .card .card-body label {
            margin-top: 20px;
        }*/
    </style>
@endsection

@section('custom-js')

    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script> --}}

    <script>
        $(document).ready(function(){
            // var height = $("#application-form-scroll").height() + 100;
            // $('.application-form-scroll-body').css('height', height);

            // var canvas = document.getElementById("signature");
            // var signaturePad = new SignaturePad(canvas);
            
            // $('#clear-signature').on('click', function(){
            //     signaturePad.clear();
            // });

        });

        function readFile(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
              var htmlPreview =
                '<img width="150" src="' + e.target.result + '" />' +
                '<p>' + input.files[0].name + '</p>';
                var wrapperZone = $(input).parent();
                var previewZone = $(input).parent().parent().find('.preview-zone');
                var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');

                wrapperZone.removeClass('dragover');
                previewZone.removeClass('visually-hidden');
                boxZone.empty();
                boxZone.append(htmlPreview);
            };

            reader.readAsDataURL(input.files[0]);
          }
        }

        function reset(e) {
          e.wrap('<form>').closest('form').get(0).reset();
          e.unwrap();
        }

        $(".personal-dropzone").change(function() {
          readFile(this);
        });

        $('.personal-dropzone-wrapper').on('dragover', function(e) {
          e.preventDefault();
          e.stopPropagation();
          $(this).addClass('dragover');
        });

        $('.personal-dropzone-wrapper').on('dragleave', function(e) {
          e.preventDefault();
          e.stopPropagation();
          $(this).removeClass('dragover');
        });

        $('.remove-preview').on('click', function() {
          var boxZone = $(this).parents('.preview-zone').find('.box-body');
          var previewZone = $(this).parents('.preview-zone');
          var dropzone = $(this).parents('.form-group').find('.personal-dropzone');
          boxZone.empty();
          previewZone.addClass('visually-hidden');
          reset(dropzone);
        });


        // Multiple Images Drop
        var drop = $("input#files");
        drop.on('dragenter', function (e) {
          $(".drop").css({
            "border": "4px dashed #09f",
            "background": "rgba(0, 153, 255, .05)"
          });
          $(".cont").css({
            "color": "#09f"
          });
        }).on('dragleave dragend mouseout drop', function (e) {
          $(".drop").css({
            "border": "3px dashed #DADFE3",
            "background": "transparent"
          });
          $(".cont").css({
            "color": "#8E99A5"
          });
        });

        var dropIncome = $("input#files-income");
        dropIncome.on('dragenter', function (e) {
          $(".drop").css({
            "border": "4px dashed #09f",
            "background": "rgba(0, 153, 255, .05)"
          });
          $(".cont").css({
            "color": "#09f"
          });
        }).on('dragleave dragend mouseout drop', function (e) {
          $(".drop").css({
            "border": "3px dashed #DADFE3",
            "background": "transparent"
          });
          $(".cont").css({
            "color": "#8E99A5"
          });
        });



        function handleFileSelect(evt) {
          var files = evt.target.files; // FileList object

          // Loop through the FileList and render image files as thumbnails.
          for (var i = 0, f; f = files[i]; i++) {

            // Only process image files.
            if (!f.type.match('image.*')) {
              continue;
            }

            var reader = new FileReader();

            // Closure to capture the file information.
            reader.onload = (function(theFile) {
              return function(e) {
                // Render thumbnail.
                var span = document.createElement('span');
                span.innerHTML = ['<img class="thumb" src="', e.target.result,
                                  '" title="', escape(theFile.name), '"/>'].join('');
                document.getElementById('list').insertBefore(span, null);
              };
            })(f);

            // Read in the image file as a data URL.
            reader.readAsDataURL(f);
          }
        }

        function handleFileSelectIncome(evt) {
          var files = evt.target.files; // FileList object

          // Loop through the FileList and render image files as thumbnails.
          for (var i = 0, f; f = files[i]; i++) {

            // Only process image files.
            if (!f.type.match('image.*')) {
              var reader = new FileReader();
              imgAddress = "<img class='thumb' src='https://eu.ui-avatars.com/api/?name="+f.name+"&size=150&length=20&font-size=0.1'/>";
              // alert(imgAddress);

                // Closure to capture the file information.
                reader.onload = (function(theFile) {
                  return function(e) {
                    // Render thumbnail.
                    var span = document.createElement('span');
                    span.innerHTML = [imgAddress].join('');
                    document.getElementById('list-income-files').insertBefore(span, null);
                  };
                })(f);

            } else {

                var reader = new FileReader();

                // Closure to capture the file information.
                reader.onload = (function(theFile) {
                  return function(e) {
                    // Render thumbnail.
                    var span = document.createElement('span');
                    span.innerHTML = ['<img class="thumb" src="', e.target.result,
                                      '" title="', escape(theFile.name), '"/>'].join('');
                    document.getElementById('list-income-files').insertBefore(span, null);
                  };
                })(f);
            }
            // Read in the image file as a data URL.
            reader.readAsDataURL(f);
            $('[data-bs-spy="scroll"]').each(function () {
                $(this).scrollspy('refresh');
            }); 
          }
        }

        $('#files').change(handleFileSelect);
        $('#files-income').change(handleFileSelectIncome);

        $(function(){
          $('.datePickerInput').datepicker();
        });

    </script>   
    
@endsection