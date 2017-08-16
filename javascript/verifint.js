function filter_numeric(param_field)
{
  var s = param_field.value;
  var lg = s.length;
  if (lg < 1)
     return true;
  var lastchar = s.charAt(lg - 1);
  if (lastchar < "0" || lastchar > "9" ) {
     //alert("Saisie numérique uniquement" );
     param_field.value = s.substring(0, lg - 1);
     param_field.focus();  
     return false;
  }
  return true;
}
