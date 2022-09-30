<div class="application-form-fillout" id="application-form">
    @if (Auth::user()->applicationForm()->exists())
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card rounded py-5">
                        <div class="text-center">
                            <img src="{{ asset('img/apply-form/tick.png') }}" style="max-width:100%; width: 100px;" alt="">
                            <h3 class="mt-3">Your application has been received. Our team will contact you soon. Thank you...</h3>
                            <a href="/" class="btn mt-3">Return Home</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    @else
    
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
        @if ($formCompleted)
            Form Completed
        @else
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
                    <a class="list-group-item list-group-item-action personal-info-tab" href="#list-item-1">
                        <img src="{{ asset('img/apply-form/personal.svg') }}" alt="personal">
                        <span class="ms-1">Personal Information</span>
                    </a>
                    <a class="list-group-item list-group-item-action contact-info-tab" href="#list-item-2">
                        <img src="{{ asset('img/apply-form/contact.svg') }}" alt="contact">
                        <span class="ms-1">Contact Information</span>
                    </a>
                    <a class="list-group-item list-group-item-action vehicle-info-tab" href="#list-item-3">
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
                                        <input type="text" class="form-control @error('contactAddress') border-danger @enderror" placeholder="9151 Charles Court Lake Mary, FL 32746" wire:model.defer="contactAddress">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">State</label>
                                        <input type="text" class="form-control @error('contactState') border-danger @enderror" placeholder="Uttah" wire:model.defer="contactState" readonly disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">City</label>
                                        <select class="form-select form-control @error('contactCity') border-danger @enderror" wire:model.defer="contactCity">
                                            <option value="0">Select City</option>
                                            <option value="Alpine">Alpine</option>
                                            <option value="American Fork">American Fork</option>
                                            <option value="Aurora">Aurora</option>
                                            <option value="Ballard">Ballard</option>
                                            <option value="Beaver">Beaver</option>
                                            <option value="Beaver County">Beaver County</option>
                                            <option value="Benjamin">Benjamin</option>
                                            <option value="Benson">Benson</option>
                                            <option value="Blanding">Blanding</option>
                                            <option value="Bluffdale">Bluffdale</option>
                                            <option value="Bountiful">Bountiful</option>
                                            <option value="Box Elder County">Box Elder County</option>
                                            <option value="Brigham City">Brigham City</option>
                                            <option value="Cache County">Cache County</option>
                                            <option value="Canyon Rim">Canyon Rim</option>
                                            <option value="Carbon County">Carbon County</option>
                                            <option value="Carbonville">Carbonville</option>
                                            <option value="Castle Dale">Castle Dale</option>
                                            <option value="Cedar City">Cedar City</option>
                                            <option value="Cedar Hills">Cedar Hills</option>
                                            <option value="Centerfield">Centerfield</option>
                                            <option value="Centerville">Centerville</option>
                                            <option value="Clearfield">Clearfield</option>
                                            <option value="Clinton">Clinton</option>
                                            <option value="Coalville">Coalville</option>
                                            <option value="Cottonwood Heights">Cottonwood Heights</option>
                                            <option value="Daggett County">Daggett County</option>
                                            <option value="Daniel">Daniel</option>
                                            <option value="Davis County">Davis County</option>
                                            <option value="Delta">Delta</option>
                                            <option value="Draper">Draper</option>
                                            <option value="Duchesne">Duchesne</option>
                                            <option value="Duchesne County">Duchesne County</option>
                                            <option value="Eagle Mountain">Eagle Mountain</option>
                                            <option value="East Carbon City">East Carbon City</option>
                                            <option value="East Millcreek">East Millcreek</option>
                                            <option value="Elk Ridge">Elk Ridge</option>
                                            <option value="Elwood">Elwood</option>
                                            <option value="Emery County">Emery County</option>
                                            <option value="Enoch">Enoch</option>
                                            <option value="Enterprise">Enterprise</option>
                                            <option value="Ephraim">Ephraim</option>
                                            <option value="Erda">Erda</option>
                                            <option value="Fairview">Fairview</option>
                                            <option value="Farmington">Farmington</option>
                                            <option value="Farr West">Farr West</option>
                                            <option value="Ferron">Ferron</option>
                                            <option value="Fillmore">Fillmore</option>
                                            <option value="Fountain Green">Fountain Green</option>
                                            <option value="Francis">Francis</option>
                                            <option value="Fruit Heights">Fruit Heights</option>
                                            <option value="Garfield County">Garfield County</option>
                                            <option value="Garland">Garland</option>
                                            <option value="Genola">Genola</option>
                                            <option value="Grand County">Grand County</option>
                                            <option value="Granite">Granite</option>
                                            <option value="Grantsville">Grantsville</option>
                                            <option value="Gunnison">Gunnison</option>
                                            <option value="Harrisville">Harrisville</option>
                                            <option value="Heber City">Heber City</option>
                                            <option value="Helper">Helper</option>
                                            <option value="Herriman">Herriman</option>
                                            <option value="Highland">Highland</option>
                                            <option value="Hildale">Hildale</option>
                                            <option value="Hill Air Force Base">Hill Air Force Base</option>
                                            <option value="Holladay">Holladay</option>
                                            <option value="Honeyville">Honeyville</option>
                                            <option value="Hooper">Hooper</option>
                                            <option value="Huntington">Huntington</option>
                                            <option value="Hurricane">Hurricane</option>
                                            <option value="Hyde Park">Hyde Park</option>
                                            <option value="Hyrum">Hyrum</option>
                                            <option value="Iron County">Iron County</option>
                                            <option value="Ivins">Ivins</option>
                                            <option value="Juab County">Juab County</option>
                                            <option value="Junction">Junction</option>
                                            <option value="Kamas">Kamas</option>
                                            <option value="Kanab">Kanab</option>
                                            <option value="Kane County">Kane County</option>
                                            <option value="Kaysville">Kaysville</option>
                                            <option value="Kearns">Kearns</option>
                                            <option value="LaVerkin">LaVerkin</option>
                                            <option value="Layton">Layton</option>
                                            <option value="Lehi">Lehi</option>
                                            <option value="Lewiston">Lewiston</option>
                                            <option value="Liberty">Liberty</option>
                                            <option value="Lindon">Lindon</option>
                                            <option value="Little Cottonwood Creek Valley">Little Cottonwood Creek Valley</option>
                                            <option value="Loa">Loa</option>
                                            <option value="Logan">Logan</option>
                                            <option value="Maeser">Maeser</option>
                                            <option value="Magna">Magna</option>
                                            <option value="Manila">Manila</option>
                                            <option value="Manti">Manti</option>
                                            <option value="Mapleton">Mapleton</option>
                                            <option value="Marriott-Slaterville">Marriott-Slaterville</option>
                                            <option value="Mendon">Mendon</option>
                                            <option value="Midvale">Midvale</option>
                                            <option value="Midway">Midway</option>
                                            <option value="Milford">Milford</option>
                                            <option value="Millard County">Millard County</option>
                                            <option value="Millcreek">Millcreek</option>
                                            <option value="Millville">Millville</option>
                                            <option value="Moab">Moab</option>
                                            <option value="Mona">Mona</option>
                                            <option value="Monroe">Monroe</option>
                                            <option value="Monticello">Monticello</option>
                                            <option value="Morgan">Morgan</option>
                                            <option value="Morgan County">Morgan County</option>
                                            <option value="Moroni">Moroni</option>
                                            <option value="Mount Olympus">Mount Olympus</option>
                                            <option value="Mount Pleasant">Mount Pleasant</option>
                                            <option value="Mountain Green">Mountain Green</option>
                                            <option value="Murray">Murray</option>
                                            <option value="Naples">Naples</option>
                                            <option value="Nephi">Nephi</option>
                                            <option value="Nibley">Nibley</option>
                                            <option value="North Logan">North Logan</option>
                                            <option value="North Ogden">North Ogden</option>
                                            <option value="North Salt Lake">North Salt Lake</option>
                                            <option value="Oakley">Oakley</option>
                                            <option value="Ogden">Ogden</option>
                                            <option value="Oquirrh">Oquirrh</option>
                                            <option value="Orangeville">Orangeville</option>
                                            <option value="Orem">Orem</option>
                                            <option value="Panguitch">Panguitch</option>
                                            <option value="Park City">Park City</option>
                                            <option value="Parowan">Parowan</option>
                                            <option value="Payson">Payson</option>
                                            <option value="Perry">Perry</option>
                                            <option value="Piute County">Piute County</option>
                                            <option value="Plain City">Plain City</option>
                                            <option value="Pleasant Grove">Pleasant Grove</option>
                                            <option value="Pleasant View">Pleasant View</option>
                                            <option value="Price">Price</option>
                                            <option value="Providence">Providence</option>
                                            <option value="Provo">Provo</option>
                                            <option value="Randolph">Randolph</option>
                                            <option value="Rich County">Rich County</option>
                                            <option value="Richfield">Richfield</option>
                                            <option value="Richmond">Richmond</option>
                                            <option value="River Heights">River Heights</option>
                                            <option value="Riverdale">Riverdale</option>
                                            <option value="Riverton">Riverton</option>
                                            <option value="Roosevelt">Roosevelt</option>
                                            <option value="Roy">Roy</option>
                                            <option value="Saint George">Saint George</option>
                                            <option value="Salem">Salem</option>
                                            <option value="Salina">Salina</option>
                                            <option value="Salt Lake City">Salt Lake City</option>
                                            <option value="Salt Lake County">Salt Lake County</option>
                                            <option value="San Juan County">San Juan County</option>
                                            <option value="Sandy">Sandy</option>
                                            <option value="Sandy Hills">Sandy Hills</option>
                                            <option value="Sanpete County">Sanpete County</option>
                                            <option value="Santa Clara">Santa Clara</option>
                                            <option value="Santaquin">Santaquin</option>
                                            <option value="Saratoga Springs">Saratoga Springs</option>
                                            <option value="Sevier County">Sevier County</option>
                                            <option value="Silver Summit">Silver Summit</option>
                                            <option value="Smithfield">Smithfield</option>
                                            <option value="Snyderville">Snyderville</option>
                                            <option value="South Jordan">South Jordan</option>
                                            <option value="South Jordan Heights">South Jordan Heights</option>
                                            <option value="South Ogden">South Ogden</option>
                                            <option value="South Salt Lake">South Salt Lake</option>
                                            <option value="South Weber">South Weber</option>
                                            <option value="South Willard">South Willard</option>
                                            <option value="Spanish Fork">Spanish Fork</option>
                                            <option value="Spring City">Spring City</option>
                                            <option value="Spring Glen">Spring Glen</option>
                                            <option value="Springville">Springville</option>
                                            <option value="Stansbury park">Stansbury park</option>
                                            <option value="Summit County">Summit County</option>
                                            <option value="Summit Park">Summit Park</option>
                                            <option value="Sunset">Sunset</option>
                                            <option value="Syracuse">Syracuse</option>
                                            <option value="Taylorsville">Taylorsville</option>
                                            <option value="Tooele">Tooele</option>
                                            <option value="Tooele County">Tooele County</option>
                                            <option value="Toquerville">Toquerville</option>
                                            <option value="Tremonton">Tremonton</option>
                                            <option value="Uintah">Uintah</option>
                                            <option value="Uintah County">Uintah County</option>
                                            <option value="Utah County">Utah County</option>
                                            <option value="Vernal">Vernal</option>
                                            <option value="Vineyard">Vineyard</option>
                                            <option value="Wasatch County">Wasatch County</option>
                                            <option value="Washington">Washington</option>
                                            <option value="Washington County">Washington County</option>
                                            <option value="Washington Terrace">Washington Terrace</option>
                                            <option value="Wayne County">Wayne County</option>
                                            <option value="Weber County">Weber County</option>
                                            <option value="Wellington">Wellington</option>
                                            <option value="Wellsville">Wellsville</option>
                                            <option value="Wendover">Wendover</option>
                                            <option value="West Bountiful">West Bountiful</option>
                                            <option value="West Haven">West Haven</option>
                                            <option value="West Jordan">West Jordan</option>
                                            <option value="West Mountain">West Mountain</option>
                                            <option value="West Point">West Point</option>
                                            <option value="West Valley City">West Valley City</option>
                                            <option value="White City">White City</option>
                                            <option value="Willard">Willard</option>
                                            <option value="Wolf Creek">Wolf Creek</option>
                                            <option value="Woodland Hills">Woodland Hills</option>
                                            <option value="Woods Cross">Woods Cross</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Zip Code</label>
                                        <input type="text" class="form-control @error('contactZip') border-danger @enderror" placeholder="12345" wire:model.defer="contactZip">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control @error('contactEmail') border-danger @enderror" placeholder="John@example.com" wire:model.defer="contactEmail">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Phone Number</label>
                                        <input type="text" class="form-control @error('contactPhone') border-danger @enderror" placeholder="0000-5478-112" wire:model.defer="contactPhone">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Best Time to Call</label>
                                        <select class="form-select form-control @error('contactBestTimeToCall') border-danger @enderror" wire:model.defer="contactBestTimeToCall">
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
                                        <input type="text" class="form-control @error('vehicleYear') border-danger @enderror" wire:model.defer="vehicleYear" placeholder="2022">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Make</label>
                                        <input type="text" class="form-control @error('vehicleMake') border-danger @enderror" wire:model.defer="vehicleMake" placeholder="Audi">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Model</label>
                                        <input type="text" class="form-control @error('vehicleModel') border-danger @enderror" wire:model.defer="vehicleModel" placeholder="A6">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Trim</label>
                                        <input type="text" class="form-control @error('vehicleTrim') border-danger @enderror" wire:model.defer="vehicleTrim" placeholder="330e Sedan 4D">
                                    </div>
                                     <div class="col-md-4">
                                        <label for="">License Plate Number</label>
                                        <input type="text" class="form-control @error('vehicleLicensePlateNumber') border-danger @enderror" wire:model.defer="vehicleLicensePlateNumber" placeholder="IAH-0087">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Mileage</label>
                                        <input type="text" class="form-control @error('vehicleMileage') border-danger @enderror" wire:model.defer="vehicleMileage" placeholder="20">
                                    </div>
                                    <div class="col-12">
                                        <label for="">VIN (Vehicle Identification Number)</label>
                                        <input type="text" class="form-control @error('vehicleVinNumber') border-danger @enderror" wire:model.defer="vehicleVinNumber" placeholder="N/A">
                                    </div>
                                    <div class="col-12">
                                        <label for="">Upload Car Images</label>
                                        <div class="drop-multiple @error('vehicleImages') border-danger @enderror">
                                            <div class="cont">
                                                <img src="{{ asset('img/apply-form/upload-image.svg') }}" alt="upload icon">
                                                <p class="tit">
                                                    Select images or drag and drop here
                                                    <br>
                                                    <small class="desc">
                                                        JPG, PNG or SVG, image size no more than 2MB
                                                    </small>
                                                </p>
                                            </div>
                                            <div class="browse">
                                                SELECT FILES
                                            </div>
                                            <input id="files" multiple="true" type="file" wire:model.defer="vehicleImages"/>
                                        </div>
                                        <output id="list"></output>
                                        @if ($vehicleImages)
                                            @foreach ($vehicleImages as $image)
                                                <img src="{{ $image->temporaryUrl() }}" style="width: 150px" class="mt-2 img-thumbnail">
                                            @endforeach
                                        @endif
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
                                        <select class="form-select form-control @error('livingInHomeTime') border-danger @enderror" wire:model.defer="livingInHomeTime">
                                            <option value="0" selected>Select</option>
                                            <option value="1">AnyTime</option>
                                            <option value="2">Noon</option>
                                            <option value="3">After Noon</option>
                                            <option value="4">Evening</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio-box @error('rentOrOwn') border-danger @enderror">
                                            <label for="">Do You Rent Or Own?</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="rentOrOwn" id="rentOrOwn1" wire:model.defer="rentOrOwn" value="rent">
                                                        <label class="form-check-label" for="rentOrOwn1">
                                                            Rent
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="rentOrOwn" id="rentOrOwn2" wire:model.defer="rentOrOwn" value="own">
                                                        <label class="form-check-label" for="rentOrOwn2">
                                                            Own
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio-box @error('usCitizen') border-danger @enderror">
                                            <label for="">Are You a US Citizen?</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="usCitizen" id="usCitizen1" value="us_citizen" wire:model.defer="usCitizen">
                                                        <label class="form-check-label" for="usCitizen1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="usCitizen" id="usCitizen2" value="non_us_citizen" wire:model.defer="usCitizen">
                                                        <label class="form-check-label" for="usCitizen2">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio-box @error('inMilitary') border-danger @enderror">
                                            <label for="">Are You In The Military?</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="inMilitary" id="inMilitary1" value="military" wire:model.defer="inMilitary">
                                                        <label class="form-check-label" for="inMilitary1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="inMilitary" id="inMilitary2" value="non_military" wire:model.defer="inMilitary">
                                                        <label class="form-check-label" for="inMilitary2">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio-box @error('dependentInMilitary') border-danger @enderror">
                                            <label for="">Are You a Someone Dependent In The Military?</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dependentMilitary" id="dependentMilitary1" value="dependent" wire:model.defer="dependentInMilitary">
                                                        <label class="form-check-label" for="dependentMilitary1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="dependentMilitary" id="dependentMilitary2" value="non_dependent" wire:model.defer="dependentInMilitary">
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
                                        <input type="text" class="form-control @error('driversLicenseNumber') border-danger @enderror" placeholder="021457" wire:model.defer="driversLicenseNumber">
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
                                        <input type="text" class="form-control @error('employmentWorkPlace') border-danger @enderror" placeholder="Company" wire:model.defer="employmentWorkPlace">
                                    </div>
                                    <div class="col-12">
                                        <label for="">Address</label>
                                        <input type="text" class="form-control @error('employmentAddress') border-danger @enderror" placeholder="9151 Charles Court Lake Mary, FL 32746" wire:model.defer="employmentAddress">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">State</label>
                                        <select class="form-select form-control @error('employmentState') border-danger @enderror" wire:model.defer="employmentState">
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
                                        <select class="form-select form-control @error('employmentCity') border-danger @enderror" wire:model.defer="employmentCity">
                                            <option value="0" selected>Select City</option>
                                            <option value="1" >City 1</option>
                                            <option value="2" >City 2</option>
                                            <option value="3" >City 3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Zip Code</label>
                                        <input type="text" class="form-control @error('employmentZipCode') border-danger @enderror" placeholder="12345" wire:model.defer="employmentZipCode">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">How Often Do You Get Paid?</label>
                                        <select class="form-select form-control @error('employmentGettingPaidTime') border-danger @enderror" wire:model.defer="employmentGettingPaidTime">
                                            <option value="0" selected>Select City</option>
                                            <option value="1" >City 1</option>
                                            <option value="2" >City 2</option>
                                            <option value="3" >City 3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Last Payday</label>
                                        <input type="text" class="form-control datePickerInput @error('employmentLastPayday') border-danger @enderror" placeholder="yyyy/mm/dd" wire:model.defer="employmentLastPayday">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Next Payday</label>
                                        <input type="text" class="form-control datePickerInput @error('employmentNextPayday') border-danger @enderror" placeholder="yyyy/mm/dd" wire:model.defer="employmentNextPayday">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio-box @error('employmentDirectDeposit') border-danger @enderror">
                                            <label for="">Direct Deposit</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="directDeposit" id="directDeposit1" wire:model.defer="employmentDirectDeposit">
                                                        <label class="form-check-label" for="directDeposit1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="directDeposit" id="directDeposit2" wire:model.defer="employmentDirectDeposit">
                                                        <label class="form-check-label" for="directDeposit2">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="radio-box @error('employmentTypeOfIncome') border-danger @enderror">
                                            <label for="">What Type Of Income Is This?</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="incomeType" id="incomeType1" wire:model.defer="employmentTypeOfIncome">
                                                        <label class="form-check-label" for="incomeType1">
                                                            Employment
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="incomeType" id="incomeType2" wire:model.defer="employmentTypeOfIncome">
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
                                <div class="row first-reference-box">
                                    <div class="col-12">
                                        <h6>Reference # 1</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" placeholder="John" wire:model.defer="firstReferenceFirstName" id="ref1FirstName">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" placeholder="Doe" wire:model.defer="firstReferenceLastName" id="ref1LastName">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">What Is Your Relationship With This Person?</label>
                                        <select class="form-select form-control" wire:model.defer="firstReferenceRelation" id="ref1Relation">
                                            <option value="" selected>Select Relation</option>
                                            <option value="family">Family</option>
                                            <option value="friend">Friend</option>
                                            <option value="business">Business</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Reference Phone Number</label>
                                        <input type="text" class="form-control" placeholder="0000-5478-112" wire:model.defer="firstReferencePhoneNumber" id="ref1Phone">
                                    </div>
                                </div>
                                <hr>
                                <div class="row second-reference-box hidden-area">
                                    <div class="col-12">
                                        <h6>Reference # 2</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" placeholder="John" wire:model.defer="secondReferenceFirstName" id="ref2FirstName">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" placeholder="Doe" wire:model.defer="secondReferenceLastName" id="ref2LastName">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">What Is Your Relationship With This Person?</label>
                                        <select class="form-select form-control" wire:model.defer="secondReferenceRelation" id="ref2Relation">
                                            <option value="" selected>Select Relation</option>
                                            <option value="family">Family</option>
                                            <option value="friend">Friend</option>
                                            <option value="business">Business</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Reference Phone Number</label>
                                        <input type="text" class="form-control" placeholder="0000-5478-112" wire:model.defer="secondReferencePhoneNumber" id="ref2Phone">
                                    </div>
                                </div>
                                <hr>
                                <div class="row third-reference-box hidden-area">
                                    <div class="col-12">
                                        <h6>Reference # 3</h6>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" placeholder="John" wire:model.defer="thirdReferenceFirstName">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" placeholder="Doe" wire:model.defer="thirdReferenceLastName">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">What Is Your Relationship With This Person?</label>
                                        <select class="form-select form-control" wire:model.defer="thirdReferenceRelation">
                                            <option value="" selected>Select Relation</option>
                                            <option value="family">Family</option>
                                            <option value="friend">Friend</option>
                                            <option value="business">Business</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Reference Phone Number</label>
                                        <input type="text" class="form-control" placeholder="0000-5478-112" wire:model.defer="thirdReferencePhoneNumber">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- CONSENT TO RECIEVE ELECTRONIC DOCUMENTS --}}
                        <div id="list-item-7"></div>
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
                                            <input class="form-check-input @error('consentAgreement') border-danger @enderror" type="checkbox" value="" id="termAgreementsCheck" wire:model.defer="consentAgreement">
                                            <label class="form-check-label" for="termAgreementsCheck">
                                                I have read and understand and accept the terms of the Consent for Electronic Records.*
                                            </label>
                                        </div>
                                        <div class="form-check mt-3">
                                            <input class="form-check-input @error('pointsAgreement') border-danger @enderror" type="checkbox" value="" id="agreeListCheck" wire:model.defer="pointsAgreement">
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
                                        <input type="text" class="form-control @error('netFromJob') border-danger @enderror" id="netFromJob" placeholder="$" id="netFromJob" wire:model.defer="netFromJob">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Other Income</label>
                                        <input type="text" class="form-control @error('otherIncome') border-danger @enderror" id="otherIncome" placeholder="$" wire:model.defer="otherIncome">
                                    </div>
                                    <div class="col-12 d-flex">
                                        <label for="">Total Montly Income</label>
                                        <span class="total-income-box total-income-value d-block">
                                            $<span></span>
                                        </span>
                                    </div>
                                    <div class="col-12">
                                        <h6>Monthly Expenses ($)</h6>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Rent/Mortgage</label>
                                        <input type="text" class="form-control @error('rentMortage') border-danger @enderror" id="rentMortage" placeholder="$" wire:model.defer="rentMortage">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Insurance</label>
                                        <input type="text" class="form-control @error('insuranceExpense') border-danger @enderror" id="insuranceExpense" placeholder="$" wire:model.defer="insuranceExpense">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Utilities</label>
                                        <input type="text" class="form-control @error('utilitiesExpense') border-danger @enderror" id="utilitiesExpense" placeholder="$" wire:model.defer="utilitiesExpense">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Credit Cards</label>
                                        <input type="text" class="form-control @error('creditCardsExpense') border-danger @enderror" id="cardsExpense" placeholder="$" wire:model.defer="creditCardsExpense">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Food</label>
                                        <input type="text" class="form-control @error('foodExpense') border-danger @enderror" id="foodExpense" placeholder="$" wire:model.defer="foodExpense">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Music/Other</label>
                                        <input type="text" class="form-control @error('musicOrOtherExpense') border-danger @enderror" id="otherExpense" placeholder="$" wire:model.defer="musicOrOtherExpense">
                                    </div>
                                    <div class="col-12 d-flex">
                                        <label for="">Total Montly Expenses</label>
                                        <span class="total-income-box total-expenses-value d-block">
                                            $<span></span>
                                        </span>
                                    </div>
                                    <div class="col-12">
                                        <h6>Total Disposable Income (Monthly)</h6>
                                    </div>
                                    <div class="col-12 d-flex">
                                        <label for="">Total Disposable Income</label>
                                        <span class="total-income-box total-disposable-value d-block">
                                            $<span></span>
                                        </span>
                                    </div>
                                    {{-- <div class="col-12">
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
                                    </div>  --}}
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
                                        <div class="radio-box @error('filedForBackruptcy') border-danger @enderror">
                                            <label for="">Have You Filed For Bankruptcy Anytime In The Last 6 Month?</label>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="filedBankruptcy" id="filedBankruptcy1" value="yes" wire:model.defer="filedForBackruptcy">
                                                        <label class="form-check-label" for="filedBankruptcy1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="filedBankruptcy" id="filedBankruptcy2" value="no" wire:model.defer="filedForBackruptcy">
                                                        <label class="form-check-label" for="filedBankruptcy2">
                                                            No
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-4">
                                                <label for="">If Yes, Date Filed?</label>
                                                <input type="text" class="form-control datePickerInput @error('dateFiled') border-danger @enderror" placeholder="yyyy/mm/dd"  wire:model.defer="dateFiled">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="radio-box @error('status') border-danger @enderror">
                                            <label for="">Status:</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="filedStatus" id="filedStatus1" value="dismissed" wire:model.defer="status">
                                                        <label class="form-check-label" for="filedStatus1">
                                                            Dismissed
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="filedStatus" id="filedStatus2" value="discharged" wire:model.defer="status">
                                                        <label class="form-check-label" for="filedStatus2">
                                                            Discharged
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="filedStatus" id="filedStatus3" value="pending" wire:model.defer="status">
                                                        <label class="form-check-label" for="filedStatus3">
                                                            Pending
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="radio-box @error('suitOrLegalAction') border-danger @enderror">
                                            <label for="">Are You Party To Any Suit Or Legal Action, Or Are There Any Unsatisfied JUdgements Against You?</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="legalAction" id="legalAction1" value="yes" wire:model.defer="suitOrLegalAction">
                                                        <label class="form-check-label" for="legalAction1">
                                                            Yes
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="legalAction" id="legalAction2" value="no" wire:model.defer="suitOrLegalAction">
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
                                        <input type="text" class="form-control signature-input @error('signature') border-danger @enderror" wire:model.defer="signature">
                                    </div>
                                    <div class="col-12">
                                        <label for="" class="d-block">Contract Form</label>
                                        <a href="#" class="contact-form-download">
                                            <img src="{{ asset('img/apply-form/pdf.svg') }}" alt="pdf">
                                            <span>Download File</span>
                                        </a>
                                    </div>
                                    {{-- <div class="col-12 mt-4">
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
                                                  <div class="box-tools">
                                                    <button type="button" class="btn-danger remove-preview btn-sm">
                                                      <i class="fa fa-times"></i> Remove
                                                    </button>
                                                  </div>
                                                </div>
                                                <div class="box-body text-start"></div>
                                              </div>
                                            </div>
                                        </div> 
                                    </div> --}}
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
        @endif
    </div>
    @endif
</div>

@section('custom-css')
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
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

    {{-- <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        $(document).ready(function(){
            
            // $('.application-form-scroll-body').scroll(function (event) {
            //     var height = $('.application-form-scroll-body').offset().top;
            //     if ($('#list-item-1').offset().top - height >= 0) {
            //         $('#application-form-scroll .list-group-item').removeClass('.active');
            //         $('.personal-info-tab').addClass('active');
            //     }
            //     if ($('#list-item-2').offset().top - height >= 0) {
            //         $('#application-form-scroll .list-group-item').removeClass('.active');
            //         $('.contact-info-tab').addClass('active');
            //     }
                
            // });

            $("#netFromJob, #otherIncome")
            .on("keydown keyup", sumIncome);
            function sumIncome() {
                $(".total-income-value span").html(Number($("#netFromJob").val()) + Number($("#otherIncome").val()));
            }

            $("#rentMortage, #insuranceExpense, #utilitiesExpense, #cardsExpense, #foodExpense, #otherExpense")
            .on("keydown keyup", sumExpenses);
            function sumExpenses() {
                $(".total-expenses-value span")
                .html(
                    Number($("#rentMortage").val()) + 
                    Number($("#insuranceExpense").val()) +
                    Number($("#utilitiesExpense").val()) +
                    Number($("#cardsExpense").val()) +
                    Number($("#foodExpense").val()) +
                    Number($("#otherExpense").val())
                );
            }

            $("#rentMortage, #insuranceExpense, #utilitiesExpense, #cardsExpense, #foodExpense, #otherExpense, #netFromJob, #otherIncome")
            .on("keydown keyup", finalDispose);
            function finalDispose() {
                $(".total-disposable-value span")
                .html(
                    Number($(".total-income-value span").html()) -
                    Number($(".total-expenses-value span").html())
                );
            }

            $("#ref1FirstName, #ref1LastName, #ref1Relation, #ref1Phone")
            .on("keydown keyup", checkRef1);
            function checkRef1() {
                if ($("#ref1FirstName").val() != '' && 
                    $("#ref1LastName").val() != '' && 
                    $("#ref1Relation").val() != '' && 
                    $("#ref1Phone").val() != '') {
                    $('.second-reference-box').removeClass('hidden-area');
                } else {
                    $('.second-reference-box').addClass('hidden-area');
                }
            }

            $("#ref2FirstName, #ref2LastName, #ref2Relation, #ref2Phone")
            .on("keydown keyup", checkRef2);
            function checkRef2() {
                if ($("#ref2FirstName").val() != '' && 
                    $("#ref2LastName").val() != '' && 
                    $("#ref2Relation").val() != '' && 
                    $("#ref2Phone").val() != '') {
                    $('.third-reference-box').removeClass('hidden-area');
                } else {
                    $('.third-reference-box').addClass('hidden-area');
                }
            }

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

        // $(function(){
        //   $('.datePickerInput').datepicker();
        // });

        $(".datePickerInput").flatpickr();

    </script>   
    
@endsection