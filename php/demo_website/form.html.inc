<html>
<head>
 <title>Handy-Dandy PaymentRequest Generator</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<style>
.error { color: red; }
.result { font-weight: bold; }
</style>
</head>
<body>
<div class="container">
<h1>Payment Request Generator</h1>
<ul class="error"><li>PLACEHOLDER FOR FORM ERRORS</li></ul>
<form action="createpaymentrequest.php" method="get">
<table>
<tr>
 <td align="right"><label for="merchant">Merchant:</label></td>
 <td colspan="3"><select name="merchant" id="merchant">
  <option value="bitcoincore">bitcoincore.org</option>
  <option value="gavinemail">gavinandresen@gmail.com</option>
  <option>None</option></select>
 </td>
</tr>
<tr>
  <td align="right"><label for="address1">Address(es):</label></td><td><input name="address1" size="36" id="address1"/></td>
  <td align="right"><label for="amount1">Amount(s):</label></td><td><input name="amount1" size="6" id="amount1"/></td>
</tr>
<tr>
 <td align="right"><label for="address2">:</label></td><td><input name="address2" size="36"/></td>
 <td align="right"><label for="amount2">:</label></td><td><input name="amount2" id="amount2" size="6"/></td>
</tr>
<tr>
 <td align="right"><label for="address3">:</label></td><td><input name="address3" size="36"/></td>
 <td align="right"><label for="amount3">:</label></td><td><input name="amount3" id="amount3" size="6"/></td>
</tr>

<tr>
 <td align="right"><label for="time">Time:</label></td>
 <td>
  <select name="time" id="time">
   <option value="0">Now</option>
   <option value="-3600">One Hour Ago</option>
   <option value="3600">One Hour From Now</option>
  </select>
 </td>
 <td align="right"><label for="expires">Expires:</label></td>
 <td>
  <select name="expires" id="expires">
   <option value="never">Never</option>
   <option value="0">Now</option>
   <option value="-1">One second ago</option>
   <option value="30">In 30 seconds</option>
   <option value="3600">In one hour</option>
  </select>
 </td>
</tr>
<tr>
 <td align="right"><label for="memo">Memo:</label></td>
 <td colspan="3"><textarea cols="60" name="memo" id="memo"/></textarea></td>
</tr>
<tr>
 <td>&nbsp;</td><td><input type="checkbox" name="payment_url"/>Set payment_url</td>
 <td><label for="ACK_message">PaymentACK message</label></td><td><input name="ACK_message" id="ACK_message"/></td>
</tr>

<tr><td>&nbsp;</td><td colspan="3"><input type="checkbox" name="produce_uri" id="produce_uri"/>Produce bitcoin: URI</td></tr>

<tr><td>&nbsp;</td><td colspan="3"><input type="submit" name="submit" value="Create Payment Request"/></td></tr>


</table>
</form>
<p>If 'Produce bitcoin: URI' is checked, the link will appear here: <span class="result"></span><br/>
If you change the form, you must click the Create Payment Request button to generate a new URI.
</p>

</div>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>
