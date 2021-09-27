{{-- 

 <div class="col-12 grid-margin">
 
    <div class="card">
      @if ($orders->isNotEmpty())
      <div class="table-responsive">
        <table class="table center-aligned-table">
          <thead>
            <tr class="bg-light">
              <th class="border-bottom-0">#</th>
              <th class="border-bottom-0">Product</th>
              <th class="border-bottom-0">Status</th>
               <th class="border-bottom-0">Qty</th>
              <th class="border-bottom-0">Unit Price</th>
              <th class="border-bottom-0">Total Price</th>
              <th class="border-bottom-0">Order Date</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($orders as $order)
            <tr>
                <th scope="row"><a href="">{{ $order->order_no }}</a></th>
                <td>{{ $order->product->name }}</td>
                <td>
                    @if ($order->status)
                        <span class="badge badge-success">{{ 'completed' }}</span>
                    @else
                        <span class="badge badge-warning">{{ 'processing' }}</span>
                    @endif
                </td>

                <td>{{$order->qty}}</td>

                <td>&#8358;{{ $order->product->price }}</td>
                
                <td>&#8358;{{ $order->product->price * $order->qty }}</td>
               
                <td>
                    {{ \Carbon\Carbon::parse($order->created_at)->toFormattedDateString() }}
                </td>
            </tr>
        @endforeach
          </tbody>
        </table>
      </div>
      @else
      <div class="alert alert-info" role="alert">
          <h6> {{ 'You have no pending order(s)' }} </h6>
      </div>
      @endif
    </div>
 
  </div>
   --}}


   <div class="col-md-12">
    @if ($orders->isNotEmpty())
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data table</h4>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table id="order-listing" class="table">
                <thead>
                  <tr>
                    <th class="border-bottom-0">#</th>
              <th class="border-bottom-0">Product</th>
              <th class="border-bottom-0">Status</th>
               <th class="border-bottom-0">Qty</th>
              <th class="border-bottom-0">Unit Price</th>
              <th class="border-bottom-0">Total Price</th>
              <th class="border-bottom-0">Order Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      {{-- <td>1</td>
                      <td>2012/08/03</td>
                      <td>Edinburgh</td>
                      <td>New York</td>
                      <td>$1500</td>
                      <td>$3200</td>
                      <td>
                        <label class="badge badge-info">On hold</label>
                      </td>
                      <td>
                        <button class="btn btn-outline-primary">View</button>
                      </td> --}}

                      @foreach ($orders as $order)
                      <tr>
                          <th scope="row"><a href="">{{ $order->order_no }}</a></th>
                          <td>{{ $order->product->name }}</td>
                          <td>
                              @if ($order->status)
                                  <span class="badge badge-success">{{ 'completed' }}</span>
                              @else
                                  <span class="badge badge-warning">{{ 'processing' }}</span>
                              @endif
                          </td>
          
                          <td>{{$order->qty}}</td>
          
                          <td>&#8358;{{ $order->product->price }}</td>
                          
                          <td>&#8358;{{ $order->product->price * $order->qty }}</td>
                         
                          <td>
                              {{ \Carbon\Carbon::parse($order->created_at)->toFormattedDateString() }}
                          </td>
                      </tr>
                  @endforeach
                  </tr>
                 
              
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    @else
    
      <div class="card">
        <div class="card-body">
          <div class="alert alert-info" role="alert">
            <h6> {{ 'You have no pending order(s)' }} </h6>
        </div>
        </div>
      </div>
    
    </div>
  
    @endif

   </div>