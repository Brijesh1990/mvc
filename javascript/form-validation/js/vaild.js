function validation()
{
    if(document.frm.fname.value=="")

    {
      alert('Please Enter Your FirstName *')
      document.frm.fname.focus();
      return false;
    }

    // regular expression for checking firstname only for alphbetic character
    var fnm=/^[A-Za-z]+$/;
    if(!fnm.test(document.frm.fname.value))
    {
        alert('Please Enter Your FirstName only alphabetic character *')
      document.frm.fname.focus();
      return false;
    }

    if(document.frm.lname.value=="")

    {
      alert('Please Enter Your LastName *')
      document.frm.lname.focus();
      return false;
    }

    // regular expression for checking firstname only for alphbetic character
    var lnm=/^[A-Za-z]+$/;
    if(!lnm.test(document.frm.lname.value))
    {
        alert('Please Enter Your LastName only alphabetic character *')
      document.frm.lname.focus();
      return false;
    }

    if(document.frm.email.value=="")

    {
      alert('Please Enter Your Email *')
      document.frm.email.focus();
      return false;
    }

    // regular expression for checking firstname only for alphbetic character
    var em=/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if(!em.test(document.frm.email.value))
    {
        alert('Please Enter Your Valid email Address *')
      document.frm.email.focus();
      return false;
    }


    
    if(document.frm.password.value==""))
    {
        alert('Please Enter Your Password *')
      document.frm.password.focus();
      return false;
    }



}