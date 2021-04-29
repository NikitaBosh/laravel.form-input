<div class="container-fluid"></div>
<div class="row">
        <div class="col col-md-10 offset-md-1 col-lg-8 offset-lg-2
        col-xl-6 offset-xl-3">
        @csrf
        <div class="border">
            <div class="m-3">

<form>
  <div class="row">
    <div class="col">
        <label for="exampleFormControlInput1">First name</label>
      <input type="text" id="exampleFormControlInput1" class="form-control">
    </div>
    <div class="col">
        <label for="exampleFormControl">Last name</label>
      <input type="text" id="exampleFormControl" class="form-control">
    </div>
  </div>

 <div class="form-group">
    <label for="exampleFormControlInput1"><div class="form-inline">Email <div class="text-muted">(Optional)</div></div></label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="you@example.com">
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1">Adress</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="1234 Main St">
  </div>

   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputГород">Country</label>
      <select id="inputГород" class="form-control custom-select">
        <option selected>Choose...</option>
        <option>United States</option>
        <option>Russia</option>
      </select>

    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control custom-select">
        <option selected>Choose...</option>
        <option>California</option>
        <option>Mari El Republic</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Post Code</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>

  <div class="custom-control mt-5 custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Shipping address is the same as my billing address</label>
</div>

    <div class="border-bottom">
  <div class="custom-control custom-checkbox mb-3">
  <input type="checkbox" class="custom-control-input" id="customCheck1">
  <label class="custom-control-label" for="customCheck1">Save this information for next time</label>
</div>
</div>

<h4 div class="form-check mt-4">Payment</h4>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Credit card
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Debit card
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
  <label class="form-check-label" for="exampleRadios3">
    PayPal
  </label>
</div>

 <button class="btn btn-primary mt-5 btn-block" type="submit">Continue to checkout</button>
        </div>
        </div>

</form>
