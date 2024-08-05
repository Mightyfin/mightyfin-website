<style>
    
    .main-content .wizard-form .progressbar-list::before{
        content: " ";
        background-color: rgb(155, 155, 155);
        border: 10px solid #fff;
        border-radius: 50%;
        display: block;
        width: 30px;
        height: 30px;
        margin: 9px auto;
        box-shadow: 1px 1px 3px #792db8;
        transition:all;
    }
    .main-content .wizard-form .progressbar-list::after{
        content: "";
        background-color: rgb(155, 155, 155);
        padding: 0px 0px;
        position: absolute;
        top: 14px;
        left: -50%;
        width: 100%;
        height: 2px;
        margin: 9px auto;
        z-index: -1;
        transition: all 0.8s;
    }
    .main-content .wizard-form .progressbar-list.active::after{
        background-color: #792db8;
    }
    .main-content .wizard-form .progressbar-list:first-child::after{
        content: none;
    }
    .main-content .wizard-form .progressbar-list.active::before{
        font-family: "Font Awesome 5 free";
        content: "\f00c";
        font-size: 11px;
        font-weight: 600;
        color: #fff;
        padding: 6px;
        background-color: #792db8;
        border: 1px solid #792db8;
        box-shadow: 0 0 0 7.5px rgb(176 60 70 / 11%);
    }
    .progressbar-list{
        color:#792db8;
    }
    .active{
        color:#000;
    }
    /* card */
    .card img{
        width: 40px;
    }
    .card{
        border: 3px solid #fbf6f6;
        cursor: pointer;
    }
    .active-card{
        color:#792db8;
        font-weight: bold;
        border: 3px solid #792db8;
    }
    .form-check-input:focus {
        box-shadow: none;
    }
    .bg-color-info{
        background-color:#792db8 !important;
    }
    .border-color{
        border-color: #792db8;
    }
    .btn{
        padding:16px 30px;
    }
    .back-to-wizard{
        transform: translate(-50%, -139%) !important;
    }
    .bg-success-color{
        background-color:#87D185;
    }
    .bg-success-color:focus{
        box-shadow: 0 0 0 0.25rem rgb(55 197 20 / 25%);
    }
    
    .selected-card {
        background-color: #ffd500; /* Light red background color */
        border: 1px solid #ffd900; /* Red border color */
    }
    
    /* Input Field Style */
    /* General styling for all inputs */
    input {
        
        padding: 10px;
        border: 2px solid #792db8; /* Border color */
        border-radius: 5px; /* Rounded corners */
        font-size: 24px; /* Increased font size */
        font-family: 'Arial', sans-serif;
    }
    
    /* Styling for text-type inputs */
    input[name='amount'] {
        text-align: right;
    }
    
    /* Hover effect */
    input:hover {
        border-color: #792db8; /* Border color on hover */
    }
    
    /* Focus effect */
    input:focus {
        outline: none;
        border-color: #792db8; /* Border color when focused */
        box-shadow: 0 0 10px rgba(185, 60, 231, 0.8); /* Box shadow when focused */
    }
    
    
    /* ranger */
    @import url("https://fonts.googleapis.com/css2?family=Creepster&family=montserrat:wght@700&display=swap");
    
    /* .container {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    } */
    
    .range-slider {
        position: relative;
        width: 80vmin;
        height: 20vmin;
    }
    
    .range-slider_input {
        width: 100%;
        position: absolute;
        top: 50%;
        z-index: 3;
        transform: translateY(-50%);
        -webkit-appearance: none;
        appearance: none;
        width: 100%;
        height: 4px;
        opacity: 0;
        margin: 0;
    }
    
    .range-slider_input::-webkit-slider-thumb {
      -webkit-appearance: none;
      appearance: none;
      width: 100px;
      height: 100px;
      cursor: pointer;
        border-radius: 50%;
        opacity: 0;
    }
    
    .range-slider_input::-moz-range-thumb {
      width: 14vmin;
      height: 14vmin;
      cursor: pointer;
        border-radius: 50%;
        opacity: 0;
    }
    
    .range-slider_thumb {
        width: 14vmin;
        height: 14vmin;
        border: 0.6vmin solid #792db8;
        border-radius: 50%;
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: 700;
        font-size: 4vmin;
        color: #792db8;
        z-index: 2;
    }
    
    .range-slider_line {
        height: 0.5vmin;
        width: 100%;
        background-color: #e1e1e1;
        top: 50%;
        transform: translateY(-50%);
        left: 0;
        position: absolute;
        z-index: 1;
    }
    
    .range-slider_line-fill {
        position: absolute;
        height: 0.5vmin;
        width: 0;
        background-color: #792db8;
    }
    
    .disabled-card {
        opacity: 0.5; /* Adjust the opacity as needed */
        pointer-events: none; /* Disable pointer events */
        cursor: not-allowed; /* Set the cursor to "not-allowed" */
    }

        
    #preloader2 {
    position: fixed;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background-color: #fff;
    z-index: 999999999; }
    #preloader2 i {
        display: block;
        width: 16px;
        height: 16px;
        background: black;
        border-radius: 16px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin: -8px 0 0 -8px;
        opacity: 1;
        -webkit-transform: translate3d(60px, 0, 0);
        overflow: hidden;
        text-indent: -9999px;
        border: 1px solid white; }
        #preloader2 i:nth-child(1) {
        background: #613de6;
        -webkit-animation: googleDotA 1.75s ease-in-out infinite; }
        #preloader2 i:nth-child(2) {
        background: #36b37e;
        -webkit-animation: googleDotB 1.75s ease-in-out infinite; }
        #preloader2 i:nth-child(3) {
        background: #ffab00;
        -webkit-animation: googleDotC 1.75s ease-in-out infinite; }

    @-webkit-keyframes googleDotA {
    0% {
        opacity: 0;
        transform: translate3d(60px, 0, 0);
        -webkit-transform: translate3d(60px, 0, 0); }
    30% {
        opacity: 1;
        transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0); }
    70% {
        opacity: 1;
        transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0); }
    100% {
        opacity: 0;
        transform: translate3d(-300px, 0, 0);
        -webkit-transform: translate3d(-300px, 0, 0); } }

    @-webkit-keyframes googleDotB {
    0% {
        opacity: 0;
        transform: translate3d(180px, 0, 0);
        -webkit-transform: translate3d(180px, 0, 0); }
    35% {
        opacity: 1;
        transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0); }
    77% {
        opacity: 1;
        transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0); }
    100% {
        opacity: 0;
        transform: translate3d(-180px, 0, 0);
        -webkit-transform: translate3d(-180px, 0, 0); } }

    @-webkit-keyframes googleDotC {
    0% {
        opacity: 0;
        transform: translate3d(300px, 0, 0);
        -webkit-transform: translate3d(300px, 0, 0); }
    40% {
        opacity: 1;
        transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0); }
    80% {
        opacity: 1;
        transform: translate3d(0, 0, 0);
        -webkit-transform: translate3d(0, 0, 0); }
    100% {
        opacity: 0;
        transform: translate3d(-60px, 0, 0);
        -webkit-transform: translate3d(-60px, 0, 0); } }

        /* Media Queries */
        .textMedia{
            font-size: 100%;
        }
        #stepOneMedia, #stepTwoMedia, #stepThreeMedia, #stepFourMedia{
            padding: 4%;
        }
        @media (max-width: 768px) {
            #stepOneMedia, #stepTwoMedia, #stepThreeMedia, #stepFourMedia {
                padding: 7%;
            }
            .textMedia{
                font-size: 60%;
            }
        }
    </style>
    <div class="content-body">
            <div class="">
                {{-- <h2 class="mx-4">Get a Loan</h2> --}}
                <!-- section -->
                <section>
                    <div class="">
                    <form  action="{{ route("apply-loan") }}" method="POST" enctype="multipart/form-data" class="main-content">
                        @csrf
                        
                        <div class="row justify-content-center">
                            <div class="col-lg-7 col-md-8">
                                <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                    </symbol>
                                </svg>
                                <div class="alert alert-danger d-flex align-items-center mt-3 d-none mb-0" id="alertBox" role="alert">
                                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                    <div>
                                        Please fill up all the neccessary fields
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row justify-content-center pt-0 p-2" id="wizardRow">
                            <div class="col-md-12 text-center">
                                <div class="wizard-form mt-2 justify-content-between col-md-12">
                                    <ul id="progressBar" class="progressbar gap-10" style="width: 100%">
                                        <li id="progressList-1" class="d-inline-block fw-bold w-40 position-relative text-center progressbar-list active">
                                            <span class="textMedia">Amount</span>
                                        </li>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        
                                        <li id="progressList-3" class="d-inline-block fw-bold w-40 position-relative text-center progressbar-list">
                                            <span class="textMedia">Repayment</span>
                                        </li>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <li id="progressList-4" class="d-inline-block fw-bold w-40 position-relative text-center progressbar-list">
                                            <span class="textMedia">Requirements</span>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="row justify-content-center" id="cardSection">
                            <div class="col-lg-9 col-md-9" id="stepOneMedia">
                                <h3 class="fw-bold pt-2">Loan Details</h3>
                                <div>
                                    {{-- Duration --}}                 
                                    <p class="small pb-0">What is your reason for a loan?</p>    
                                    <small class="text-danger" id="loanProdValidText"></small>           
                                    <div class="row row-cols-2 row-cols-lg-3 g-4 pb-2">
                                        @forelse ($this->get_all_loan_products() as $p)
                                        <div class="col">
                                            <label class="card text-center h-70 py-2">
                                                <input type="radio" name="loan_type" value="{{ $p->id }}" class="d-none">
                                                <span class="text-lg">
                                                    {!! $p->icon !!}
                                                </span>
                                                <div class="card-body px-0">
                                                    <h5 class="card-title title-binding">{{ $p->name }}</h5>
                                                </div>
                                            </label>
                                        </div>
                                        @empty
                                        <div class="col">
                                            <label for=""></label>
                                        </div>
                                        @endforelse
                                    </div>

                                    {{-- Principal --}}
                                    <div class="col-12">
                                        <p class="small pb-0">How much would you like to borrow?</p>
                                        <small class="text-danger" id="principalText"></small>
                                        <input type="text" class="col-12" contentEditable='true' data-mask='K #,##0.00' id="amountInput" name="amount"/>
        
                                    </div>

                                </div>
                                <button type="button" class="btn text-white float-end next mt-4 rounded-3 bg-color-info">Continue</button>
                            </div>
                        </div>

                        <div class="row justify-content-center form-business">
                            <div class="col-lg-9 col-md-9" id="stepThreeMedia">
                            <h3 class="fw-bold pt-2">Repayment Options</h3>
                            <p class="small pb-0">How will you pay back?</p>
                            <div>
                                <div class="range-slider">
                                    <div id="slider_thumb" class="range-slider_thumb"></div>
                                    <div class="range-slider_line">
                                    <div id="slider_line" class="range-slider_line-fill"></div>
                                    </div>
                                    
                                    <input id="slider_input" name="duration" class="range-slider_input" type="range" value="1"  max="">
                                </div>
                            </div>  
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p id="interest_value">Interest Rate: 21%</p>
                                            <p id="principal_value"></p>
                                        </div> 
                                        <div class="col-lg-6">
                                            <p id="slider_value">2 Months</p>
                                            {{-- <p id="interest_value">Interest Rate: 21%</p> --}}
                                            <span id="service_charge">

                                            </span>
                                        </div>
                                    </div>
                                    {{-- <p id="principal_value"></p> --}}
                                    <p style="padding: 2%; background-color:#792db8" class="bg-[#792db8] text-white" id="payback_value">Calculator</p>
                                </div>
                            </div>
                            <!-- /cards -->
                            <!-- NEXT BUTTON-->
                            <button type="button" class="btn btn-dark text-white float-start back mt-0 rounded-3">Go Back</button>
                            <button type="button" class="btn text-white float-end next mt-0 rounded-3 bg-color-info confirm">Continue</button>
                            <!-- /NEXT BUTTON-->
                            </div>
                            <!-- /col -->
                        </div>
                        <!-- /row -->
                        <!-- row -->
                        <div class="row justify-content-center form-business">
                            <!-- col -->
                            <div class="col-lg-7 col-md-8" id="successMessage">
                            <!-- success message -->
                            <div class="position-relative success-content">
                                <span class="w-100" id="successImage" alt="success-message">

                                    
                                    <div id="preloader2"><i>.</i><i>.</i><i>.</i></div>
                                    <svg style="font-siz:14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><circle fill="#BB14FF" stroke="#BB14FF" stroke-width="2" r="15" cx="40" cy="100"><animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.4"></animate></circle><circle fill="#BB14FF" stroke="#BB14FF" stroke-width="2" r="15" cx="100" cy="100"><animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="-.2"></animate></circle><circle fill="#BB14FF" stroke="#BB14FF" stroke-width="2" r="15" cx="160" cy="100"><animate attributeName="opacity" calcMode="spline" dur="2" values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1" repeatCount="indefinite" begin="0"></animate></circle></svg>
                                </span>
                                <p class="py-2 " style="color: #792db8">Submitting your loan request ...🚀</p>
                            </div>
                            <!-- /success message -->
                            </div>
                            <!-- col -->
                            <div class="col-lg-9 col-md-9" style="padding: 3%" id="successForm">
                                <div class="mb-5 pb-2 col-lg-12">
                                    <!-- Final step -->
                                    <div class="alert alert-sm alert-primary" role="alert">
                                        <h5 class="p-4">
                                            You're almost there! 🚀 Continue to do the following easy steps.
                                        </h5>
                                        <ol class="text-left">
                                            <li>1. Fill up the final <b>Submission Form</b>.</li>
                                            <li>2. Upload Loan Documents (<b>Preapproval Form</b> & <b>Letter of Introduction</b> ).</li>
                                            <li>3. Complete KYC (Upload Copy of <b>National ID</b> & <b>TPIN</b> ).</li>
                                        </ol>
    
                                    </div>
                                    {{-- <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                        Gracias por participar
                                        </label>
                                    </div> --}}
                                    <!-- /Final step -->
                                </div>
                                <!-- NEXT BUTTON-->
                                <button type="button" class="btn btn-dark text-white float-start back rounded-3">Go Back</button>
                                <button type="submit" class="btn text-white float-end submit-button rounded-3 bg-color-info">Continue</button>
                                <!-- /NEXT BUTTON-->
                            </div>
                        <!-- /col -->
                        </div>
                    </form>
                    <!-- /main content -->
                    </div>
                    <!-- /container -->
                </section>
                <!-- /section -->
    
            </div>
        </div>
        <!-- pickdate -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        {{-- <script src="{{ asset('public/js/zan/dist/zangdar.min.js')}}"></script> --}}
        <script type="text/javascript">

            $(document).ready(function () {
                var stepCount = 0;
                var principal = 0;
                var rate = 21;
                var duration = document.getElementById('slider_input');
                var principalVal = document.getElementById('amountInput');
                var principalText = document.getElementById('principalText');  
                var loanProdValidText = document.getElementById('loanProdValidText');  
                
                var selectedLoanProduct = null;
                duration = 1;
                
                $(".form-business").hide();
                $("#successMessage").hide();

                $('input[name="loan_type"]').change(function () {
                    selectedLoanProduct = $('input[name="loan_type"]:checked').val();
                });
                
                $(".next").on({
                    click: function () {
                        stepCount ++;

                        var getValue = $(this).parents(".row").find(".card").hasClass("active-card");
                    
                        if (!principalVal.value) {
                            principalText.textContent = 'Please enter amount you want to borrow';
                            return false;
                        } 
                        
                        if ( selectedLoanProduct === null) {
                            loanProdValidText.textContent = 'Please select a loan product to continue';
                            return false;
                        }
                        if (getValue) {
                            $("#progressBar").find(".active").next().addClass("active");
                            $("#alertBox").addClass("d-none");
                            $(this).parents(".row").fadeOut("slow", function () {
                                $(this).next(".row").fadeIn("slow");
                            });
                            
                        } else {
                            $("#progressBar").find(".active").next().addClass("active");
                            $("#alertBox").addClass("d-none");
                            $(this).parents(".row").fadeOut("slow", function () {
                                $(this).next(".row").fadeIn("slow");
                            });
                        // $("#alertBox").removeClass("d-none");
                        }
                    }
                });
                // back button
                $(".back").on({
                    click: function () {
                        $("#progressBar .active").last().removeClass("active");
                        $(this).parents(".row").fadeOut("slow", function () {
                            $(this).prev(".row").fadeIn("slow");
                        });
                    }
                });
                //finish button
                $(".submit-button").on({
                    click: function () {
                        $("#wizardRow").fadeOut(300);
                        $(this).parents(".row").children("#successForm").fadeOut(300);
                        $(this).parents(".row").children("#successMessage").fadeIn(3000);
                    }
                });
                //Active card on click function
                $(".card").on({
                    click: function () {
                        $(this).toggleClass("active-card");
                        $(this).parent(".col").siblings().children(".card").removeClass("active-card");
                    }
                });
                //back to wizard
                $(".back-to-wizard").on({
                    click: function () {
                        location.reload(true);
                    }
                });


                $(".card").on({
                    click: function () {
                        // Remove the 'selected-card' class from all labels
                        var labels = document.querySelectorAll('.card');
                        labels.forEach(function (label) {
                            label.classList.remove('selected-card');
                        });

                        // Add the 'selected-card' class to the clicked label
                        this.classList.add('selected-card');

                        // Additional code to get the details of the selected loan product ID from the database
                        var selectedLoanProductID = $(this).find('input[type="radio"]').val();
                        fetch(`api/get-loan-product-details/${selectedLoanProductID}`)
                            .then(response => response.json())
                            .then(data => {
                                console.log(data.max_loan_duration); 
                                
                                // Update the UI with the retrieved details
                                var sliderValue = $(this).val();
                                rate = data.def_loan_interest;
                                duration = data.def_loan_duration;
                                var my_returns = (parseInt(principal) * data.def_loan_interest) * parseInt(data.default_loan_duration) + parseInt(principal);

                                // Update a display element with the current value
                                $('#payback_value').text( 'Payback amount of: K'+my_returns.toFixed(2));
                                $('#principal_value').text( 'Borrowing: K'+principal);
                                $('#interest_value').text( 'Interest Rate: '+data.def_loan_interest);
                                $('#slider_value').text( 'Payback in '+data.def_loan_duration + ' Months');
                                $('#slider_input').attr('max', data.max_loan_duration);

                                
                
                                data.services_fees.forEach(element => {
                                    // Create element under the service charges div
                                    $('#service_charge').text(data.services_fees.service_charge.name+' '+data.services_fees.service_charge.value);
                                });

                            })
                            .catch(error => {
                                console.error('Error fetching loan product details:', error);
                            });
                    }
                });

    
                // Get the input element by its ID
                const amountInput = document.getElementById('amountInput');
    
                // Add an input event listener to the input element
                amountInput.addEventListener('input', function() {
                    // Get the current value of the input
                    var inputValue = amountInput.value;
    
                    // Remove non-numeric characters (letters, symbols, commas)
                    var numericValue = inputValue.replace(/[^0-9.]/g, '');
    
                    // Convert the numeric value to a float
                    principal = parseInt(numericValue);
    
                    var my_returns = (parseInt(principal) * 0.21) * parseInt(2) + parseInt(principal);
                    // Log the cleaned and converted value to the console
                    console.log('Borrowing: ', principal);
                    $('#payback_value').text( 'Payback amount of: K'+my_returns.toFixed(2));
                    $('#principal_value').text( 'Borrowing: K'+principal);
                    // Update a display element with the current value
                    $('#slider_value').text( 'Payback in 2 Months');
                });
    
    
                // Use input event to track changes in the range input value
                $('#slider_input').on('input', function () {
    
                    // Get the current value of the range input
                    var sliderValue = $(this).val();
    
                    var my_returns = (parseInt(principal) * 0.21) * parseInt(sliderValue) + parseInt(principal);
    
                    $('#payback_value').text( 'Payback amount of: K'+my_returns.toFixed(2));
                    $('#principal_value').text( 'Borrowing: K'+principal);
                    // Update a display element with the current value
                    $('#slider_value').text( 'Payback in '+sliderValue + ' Months');
                });
            }); 
    
    
    
            const slider_input = document.getElementById('slider_input'),
            slider_thumb = document.getElementById('slider_thumb'),
            slider_line = document.getElementById('slider_line');
    
            function showSliderValue() {
                slider_thumb.innerHTML = slider_input.value;
                const bulletPosition = (slider_input.value /slider_input.max),
                        space = slider_input.offsetWidth - slider_thumb.offsetWidth;
    
                slider_thumb.style.left = (bulletPosition * space) + 'px';
                slider_line.style.width = slider_input.value + '%';
            }
    
            showSliderValue();
            window.addEventListener("resize",showSliderValue);
            slider_input.addEventListener('input', showSliderValue, false);
    
            // function selectCard(selectedLabel) {
            //     console.log(selectedLabel);
            //     // Remove the 'selected-card' class from all labels
            //     var labels = document.querySelectorAll('.card');
            //     labels.forEach(function (label) {
            //         label.classList.remove('selected-card');
            //     });
    
            //     // Add the 'selected-card' class to the clicked label
            //     selectedLabel.classList.add('selected-card');
            // }

            // function selectCard(selectedLabel) {
            //     alert(rate);
            //     // Get the value of the selected radio button
            //     var selectedRadioButton = selectedLabel.querySelector('input[type="radio"]');
            //     var selectedLoanProductID = selectedRadioButton.value;

            //     // Make an AJAX request to the server to get details
            //     fetch(`api/get-loan-product-details/${selectedLoanProductID}`)
            //         .then(response => response.json())
            //         .then(data => {
            //             console.log(data); // Display the details in the console
            //             // Update the UI with the retrieved details
            //             updateUI(data);
            //         })
            //         .catch(error => {
            //             console.error('Error fetching loan product details:', error);
            //         });

            //     // Remove the 'selected-card' class from all labels
            //     var labels = document.querySelectorAll('.card');
            //     labels.forEach(function (label) {
            //         label.classList.remove('selected-card');
            //     });

            //     // Add the 'selected-card' class to the clicked label
            //     selectedLabel.classList.add('selected-card');
            // }

            // function updateUI(data) {
            //     // Update your UI with the retrieved loan product details
            //     // For example, you can update HTML elements with the data.
            //     // Replace the following lines with your specific logic.
            //     document.getElementById('loanProductName').textContent = data.name;
            //     document.getElementById('loanProductInterest').textContent = data.interest;
            //     // Add more lines for other details as needed.
            // }

        </script>
        
    </div>
    