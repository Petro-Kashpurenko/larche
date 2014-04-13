<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
  <head>
    <script type="text/javascript">
    function redir()
    {
     var formSend=document.getElementById("SENDER");
     formSend.submit();
    }
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  </head>
  <body text="#000000" bgcolor="#FFF5EE" link="#FF0000" vlink="#A52A2A" alink="#FF0000"  onload="redir();">
    <form ACTION="<?php print $vars['action']; ?>" ID="SENDER" METHOD="POST">
      <input TYPE="HIDDEN" NAME="AMOUNT" VALUE="<?php print $vars['amount']; ?>"></input>
      <input TYPE="HIDDEN" NAME="CURRENCY" VALUE="<?php print $vars['currency']; ?>"></input>
      <input TYPE="HIDDEN" NAME="ORDER" VALUE="<?php print $vars['order']; ?>"></input>
      <input TYPE="HIDDEN" NAME="DESC" VALUE="<?php print $vars['description']; ?>"></input>
      <input TYPE="HIDDEN" NAME="MERCH_NAME" VALUE="<?php print $vars['merch_name']; ?>"></input>
      <input TYPE="HIDDEN" NAME="MERCH_URL" VALUE="<?php print $vars['merch_url']; ?>"></input>
      <input TYPE="HIDDEN" NAME="MERCHANT" VALUE="<?php print $vars['merchant']; ?>"></input>
      <input TYPE="HIDDEN" NAME="TERMINAL" VALUE="<?php print $vars['terminal']; ?>"></input>
      <input TYPE="HIDDEN" NAME="EMAIL" VALUE="<?php print $vars['email']; ?>"></input>
      <input TYPE="HIDDEN" NAME="TRTYPE" VALUE="<?php print $vars['trtype']; ?>"></input>
      <input TYPE="HIDDEN" NAME="COUNTRY" VALUE="<?php print $vars['country']; ?>"></input>
      <input TYPE="HIDDEN" NAME="MERCH_GMT" VALUE="<?php print $vars['merch_gmt']; ?>"></input>
      <input TYPE="HIDDEN" NAME="TIMESTAMP" VALUE="<?php print $vars['timestamp']; ?>"></input>
      <input TYPE="HIDDEN" NAME="NONCE" VALUE="<?php print $vars['nonce']; ?>"></input>
      <input TYPE="HIDDEN" NAME="BACKREF" VALUE="<?php print $vars['backref']; ?>"></input>
      <input TYPE="HIDDEN" NAME="P_SIGN" VALUE="<?php print $vars['p_sign']; ?>"></input>
      <input TYPE="HIDDEN" NAME="LANG" VALUE="<?php print $vars['lang']; ?>"></input>
    </form>
  </body>
</html>
