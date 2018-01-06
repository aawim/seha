 

    <!-- BEGIN FOOTER -->
    <div class="footer" style="
     margin-top:40px;
    
    
    
    ">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-4 col-sm-4  ">
            2017 - {{date("Y")}} © SEHA. &nbsp;&nbsp; ALL Rights Reserved. 
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-4 col-sm-4">
            <!-- <ul class="list-unstyled list-inline pull-right">
              <li><img src="{{url('/').'/assets/corporate/img/payments/western-union.jpg'}}" alt="We accept Western Union" title="We accept Western Union"></li>
              <li><img src="{{url('/').'/assets/corporate/img/payments/american-express.jpg'}}" alt="We accept American Express" title="We accept American Express"></li>
              <li><img src="{{url('/').'/assets/corporate/img/payments/MasterCard.jpg'}}" alt="We accept MasterCard" title="We accept MasterCard"></li>
              <li><img src="{{url('/').'/assets/corporate/img/payments/PayPal.jpg'}}" alt="We accept PayPal" title="We accept PayPal"></li>
              <li><img src="{{url('/').'/assets/corporate/img/payments/visa.jpg'}}" alt="We accept Visa" title="We accept Visa"></li>
            </ul> -->
          </div>
          <!-- END PAYMENTS -->
          <!-- BEGIN POWERED -->
          <div class="col-md-4 col-sm-4 text-right">
          <form class="form-horizontal" action="{{route('subscribing.store')}}" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                <div class="input-group">
                  <input type="email" id="mail" name="mail"  placeholder="youremail@mail.com" class="form-control">
                  <span class="input-group-btn">
                    
                    <button type="submit" class="btn btn-primary">Subscribe</button>
</span>
                </div>
              </form>
          </div>
          <!-- END POWERED -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->