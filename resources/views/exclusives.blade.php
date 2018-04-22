@extends('layouts.app')

@section('content')
    <div class="row">
        <div style="padding-right: 0;" class="text-center col-12">
            <h3 style="font-weight: 900;" class="tc mt-4 mb-4">EXCLUSIVE PRODUCTS</h3>
        </div>
    </div>

    <div class="row">
            <div id="accordion" class="w-100" style="margin: 0 10%;" role="tablist">
                    <!-- COACH START -->
                    <div class="card">
                      <div class="card-header" role="tab" id="headingOne">
                        <h5 class="mb-0">
                          <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            COACH
                          </a>
                        </h5>
                      </div>
                  
                      <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="tc card-body row">
                            <div class="col-6">
                                <img src="{{ asset('images/products/coach.png') }}">
                            </div>
                            <div class="flexBox col-6">
                                <h5 class="f5"><strong>CANADA EXCLUSIVE</strong></h5>
                                <p class="f7">ONLY <span class="warning"><strong>37 REMAINING</strong></span></p>
                                <div style="margin-bottom: 7px;" class="buynow exclusiveButton">BUY NOW ></div>
                                <div class="reserver exclusiveButton">RESERVE IN STORE></div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- CLAIRS START -->
                    <div class="card">
                      <div class="card-header" role="tab" id="headingTwo">
                        <h5 class="mb-0">
                          <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            HUGO BOSS
                          </a>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="tc card-body row">
                                <div class="col-6">
                                    <img src="{{ asset('images/products/hugo.png') }}">
                                </div>
                                <div class="flexBox col-6">
                                    <h5 class="f5"><strong>CANADA EXCLUSIVE</strong></h5>
                                    <p class="f7">ONLY <span class="warning"><strong>1 REMAINING</strong></span></p>
                                    <div style="margin-bottom: 7px;" class="buynow exclusiveButton">BUY NOW ></div>
                                    <div class="reserver exclusiveButton">RESERVE IN STORE></div>
                                </div>
                            </div>
                      </div>
                    </div>
                    <!-- HOLT START -->
                    <div class="card">
                      <div class="card-header" role="tab" id="headingThree">
                        <h5 class="mb-0">
                          <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                HOLT RENFREW
                          </a>
                        </h5>
                      </div>
                      <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="tc card-body row">
                                <div class="col-6">
                                    <img src="{{ asset('images/products/holt.png') }}">
                                </div>
                                <div class="flexBox col-6">
                                    <h5 class="f5"><strong>CANADA EXCLUSIVE</strong></h5>
                                    <p class="f7">ONLY <span class="warning"><strong>5 REMAINING</strong></span></p>
                                    <div style="margin-bottom: 7px;" class="buynow exclusiveButton">BUY NOW ></div>
                                       <div class="reserver exclusiveButton">RESERVE IN STORE></div>
                                </div>
                            </div>
                      </div>
                    </div>
                    <!-- PEOPLES -->
                    <div class="card">
                        <div class="card-header" role="tab" id="headingFour">
                          <h5 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                PEOPLES
                            </a>
                          </h5>
                        </div>
                        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="tc card-body row">
                                <div class="col-6">
                                    <img src="{{ asset('images/products/peoples.png') }}">
                                </div>
                                <div class="flexBox col-6">
                                       <h5 class="f5"><strong>CANADA EXCLUSIVE</strong></h5>
                                       <p class="f7">ONLY <span class="warning"><strong>12 REMAINING</strong></span></p>
                                    <div style="margin-bottom: 7px;" class="buynow exclusiveButton">BUY NOW ></div>
                                    <div class="reserver exclusiveButton">RESERVE IN STORE></div>
                                </div>
                            </div>
                        </div>
                       </div>
                  </div>
    </div>
@endsection
