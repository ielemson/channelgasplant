 
              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card card-statistics">
                    <div class="row">
                      <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                              <i class="mdi mdi-cart-plus text-primary mr-0 mr-sm-4 icon-lg"></i>
                              <div class="wrapper text-center text-sm-left">
                                <p class="card-text mb-0">Pending Orders</p>
                                <div class="fluid-container">
                                  <h3 class="card-title mb-0">{{ count($orders) }}</h3>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                              <i class="mdi mdi-checkbox-marked-circle-outline text-primary mr-0 mr-sm-4 icon-lg"></i>
                              <div class="wrapper text-center text-sm-left">
                                <p class="card-text mb-0">Tickets</p>
                                <div class="fluid-container">
                                  <h3 class="card-title mb-0">{{$ticketCount }}</h3>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                              <i class="mdi mdi-book-open text-primary mr-0 mr-sm-4 icon-lg"></i>
                              <div class="wrapper text-center text-sm-left">
                                <p class="card-text mb-0">Invoices</p>
                                <div class="fluid-container">
                                  <h3 class="card-title mb-0">0</h3>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="card-col col-xl-3 col-lg-3 col-md-3 col-6">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
                              <i class="mdi mdi-wallet text-primary mr-0 mr-sm-4 icon-lg"></i>
                              <div class="wrapper text-center text-sm-left">
                                <p class="card-text mb-0">Wallet</p>
                                <div class="fluid-container">
                                  <h3 class="card-title mb-0">0</h3>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>