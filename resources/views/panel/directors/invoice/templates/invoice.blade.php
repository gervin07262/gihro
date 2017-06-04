<div class="invoice">
  <header class="clearfix">
    <div class="row">
      <div class="col-sm-6 mt-md">
        <h2 class="h2 mt-none mb-sm text-dark text-weight-bold">INVOICE</h2>
        <h4 class="h4 m-none text-dark text-weight-bold">#76598345</h4>
      </div>
      <div class="col-sm-6 text-right mt-md mb-md">
        <address class="ib mr-xlg">
          Okler Themes Ltd
          <br/>
          24 Henrietta Street, London, England
          <br/>
          Phone: +12 3 4567-8901
          <br/>
          okler@okler.net
        </address>
        <div class="ib">
          {{ HTML::image('assets-panel/images/invoice-logo.png', '', []) }}
        </div>
      </div>
    </div>
  </header>
  <div class="bill-info">
    <div class="row">
      <div class="col-md-6">
        <div class="bill-to">
          <p class="h5 mb-xs text-dark text-weight-semibold">To:</p>
          <address>
            Envato
            <br/>
            121 King Street, Melbourne, Australia
            <br/>
            Phone: +61 3 8376 6284
            <br/>
            info@envato.com
          </address>
        </div>
      </div>
      <div class="col-md-6">
        <div class="bill-data text-right">
          <p class="mb-none">
            <span class="text-dark">Invoice Date:</span>
            <span class="value">05/20/2016</span>
          </p>
          <p class="mb-none">
            <span class="text-dark">Due Date:</span>
            <span class="value">06/20/2016</span>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table invoice-items">
      <thead>
        <tr class="h4 text-dark">
          <th id="cell-id"     class="text-weight-semibold">#</th>
          <th id="cell-item"   class="text-weight-semibold">Item</th>
          <th id="cell-desc"   class="text-weight-semibold">Description</th>
          <th id="cell-price"  class="text-center text-weight-semibold">Price</th>
          <th id="cell-qty"    class="text-center text-weight-semibold">Quantity</th>
          <th id="cell-total"  class="text-center text-weight-semibold">Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>123456</td>
          <td class="text-weight-semibold text-dark">Porto HTML5 Template</td>
          <td>Multipourpouse Website Template</td>
          <td class="text-center">$14.00</td>
          <td class="text-center">2</td>
          <td class="text-center">$28.00</td>
        </tr>
        <tr>
          <td>654321</td>
          <td class="text-weight-semibold text-dark">Tucson HTML5 Template</td>
          <td>Awesome Website Template</td>
          <td class="text-center">$17.00</td>
          <td class="text-center">1</td>
          <td class="text-center">$17.00</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div class="invoice-summary">
    <div class="row">
      <div class="col-sm-4 col-sm-offset-8">
        <table class="table h5 text-dark">
          <tbody>
            <tr class="b-top-none">
              <td colspan="2">Subtotal</td>
              <td class="text-left">$73.00</td>
            </tr>
            <tr>
              <td colspan="2">Shipping</td>
              <td class="text-left">$0.00</td>
            </tr>
            <tr class="h4">
              <td colspan="2">Grand Total</td>
              <td class="text-left">$73.00</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
