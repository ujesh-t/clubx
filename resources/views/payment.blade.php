<!doctype html>
<html>
<Form method="post" action="https://hblpgw.2c2p.com/HBLPGW/Payment/Payment/Payment">
<input type="text" id="paymentGatewayID" name="paymentGatewayID" value="{{config('payment.payment_gid')}}"/>
<input type="text" id="invoiceNo" name="invoiceNo" value="00233001234567890333"/>
<input type="text" id="productDesc" name="productDesc" value="Test Product"/>
<input type="text" id="amount" name="amount" value="000000010000"/>
<input type="text" id="currencyCode" name="currencyCode" value="764"/>
<input type="text" id="userDefined1" name="userDefined1" value="custom data"/>
<input type="text" id="nonSecure" name="nonSecure" value="Y"/>
<input type="text" id="hashValue" name="hashValue" value="94E8E91C29E73B9648011FADBAE19849B520B24B"/>
<button value="submit">Submit</button>
</Form>
</html>