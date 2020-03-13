function validate()
{
  var firstname = document.forms["myForm"]["fname"].value;
  var lastname = document.forms["myForm"]["lname"].value;
  var email = document.forms["myForm"]["email"].value;
  var address = document.forms["myForm"]["address"].value;
  var institute = document.forms["myForm"]["institute"].value;
  var nic = document.forms["myForm"]["NIC"].value;
  var password = document.forms["myForm"]["password"].value;
  var repassword = document.forms["myForm"]["repassword"].value;

  if( not_empty( firstname, "First Name" ))
    if( not_empty( lastname, "Last Name" ))
      if( not_empty( email, "Email" ))
        if( not_empty( address, "Address" ))
          if( not_empty( institute, "Institute" ))
            if( check_nic( nic ))
              if( check_password( password) )
                if( check_password( repassword ))
                  return true;
                else
                  return false;
              else
                  return false;
            else
              return false;
          else
            return false;
        else
          return false;
      else
        return false;
    else
      return false;
  else
    return false;
};
function not_empty( value, field )
{
  var exp1 = /^[a-zA-Z]+$/;
  if( value == "" || value == "NULL" )
  {
    alert( field + " cannot be empty" );
    return false;
  }
  else
  {
    if( value.match( exp1) )
    {
      return true;
    }
    else
    {
      alert( field + " should only contain letters")
    }
  }
}

function check_nic( value )
{
  var exp = /^[0-9]+$/;
  if( value == "" || value == "NULL" )
  {
    alert( "NIC can't be empty" );
    return false;
  }
  else
  {
    if( value.match( exp ) && value.length == 10 )
    {
      return true;
    }
    else
    {
      alert( "NIC number must contain 10 numeric digits" );
      return false;
    }
  }

}

function check_password( value )
{
  if( value == "" || value == "NULL" )
  {
    alert( "Password can't be empty" );
    return false;
  }
  else
  {
    if( value.length >= 8 && value.length <=16 )
    {
      return true;
    }
    else
    {
      alert( "Password must contain 8-16 characters" );
      return false;
    }
  }
}
