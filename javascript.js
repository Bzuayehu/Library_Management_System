

//user sign up validation
function validation(){
  if(document.userSignup.firstname.value=="")
  {
      alert("please enter your first name it is mandatory ");
return false;
  }
  else if(document.userSignup.lname.value=="")
  {
      alert("you missed your last name please enter your last name again? ");
  return false;
  }
  else if(document.userSignup.username.value=="")
  {
      alert("please enter your usernameit is mandatory ")
      return false;
  }
  else if(document.userSignup.email.value=="")
  {
      alert("you missed your email please enter your email again? ")
      return false;
  }
  else if(document.userSignup.password.value=="")
  {
      alert("please enter your password it is mandatory ")
      return false;
  }
  else if(document.userSignup.userid.value=="")
  {
      alert("you missed your user id  please enter your user id again? ")
      return false;
  }

  else if (document.userSignup.phoneNumber.value=="")
  {
      alert("you missed your phone number please enter your phone number again? ")
      return false;
  }
}

//Admin sign up validation
function Adminvalidation(){
   if(document.AdminSignup.id.value=="")
  {
      alert("you missed your id  please enter your id again? ")
      return false;
  }
  if(document.AdminSignup.firstname.value=="")
  {
      alert("please enter your first name it is mandatory ");
return false;
  }
  else if(document.AdminSignup.lname.value=="")
  {
      alert("you missed your last name please enter your last name again? ");
  return false;
  }
  else if(document.AdminSignup.username.value=="")
  {
      alert("please enter your username it is mandatory ")
      return false;
  }
  else if(document.AdminSignup.email.value=="")
  {
      alert("you missed your email please enter your email again? ")
      return false;
  }
  else if(document.AdminSignup.password.value=="")
  {
      alert("please enter your password it is mandatory ")
      return false;
  }
  

  
}

//Book Validation

function Bookvalidation(){
  if(document.book_information.book_id.value=="")
  {
      alert("please enter  the book's id it is mandatory ");
return false;
  }
  else if(document.book_information.book_name.value=="")
  {
      alert("you missed book's name please enter? ");
  return false;
  }
  else if(document.book_information.author.value=="")
  {
      alert("please enter the the name of the book's author")
      return false;
  }
  else if(document.book_information.status.value=="")
  {
      alert("please enter book's status ")
      return false;
  }
  else if(document.book_information.edition.value=="")
  {
      alert("you missed book's edition! ")
      return false;
  }
 
  else if(document.book_information.type.value=="")
  {
      alert("you missed book's type ")
      return false;
  }
}
// function login() {
//     document.getElementById("div2").style.display = "inline-block";
//     document.getElementById("div1").style.display = "none";
//     // document.getElementById("adminloginbutton").style.display = "none";
    
//   }
//   function signup() {
//     document.getElementById("login").style.display = "inline-block";
//     document.getElementById("join").style.display = "none";

//   }
  
  
  function user() {
    document.getElementById("users").style.display = "none";

  }

function search() {
  document.getElementById("container").style.display = "none";
   document.getElementById("container2").style.display = "none";
   document.getElementById("searchbox").style.display = "none";
   document.getElementById("users").style.display = "none";
   document.getElementById("requestBook").style.display = "none";
   document.getElementById("requestinformation").style.display = "none";
   document.getElementById("EditBook").style.display = "none";
   document.getElementById("returnBook").style.display = "none";
   document.getElementById("IssuedBooks").style.display ="none";
   document.getElementById("searchbox").style.display = "inline-block";
   
  

  }
 

 
  function viewBooks() {
    
      document.getElementById("container2").style.display = "none";
      document.getElementById("searchbox").style.display = "none";
      document.getElementById("users").style.display = "none";
      document.getElementById("requestinformation").style.display = "none";
      document.getElementById("EditBook").style.display = "none";
      document.getElementById("IssuedBooks").style.display ="none";
      document.getElementById("container").style.display = "inline-block";
  
  
    }
    function AddBook() {
       
      document.getElementById("container").style.display = "none";
      document.getElementById("searchbox").style.display = "none";
      document.getElementById("users").style.display = "none";
      document.getElementById("requestinformation").style.display = "none";
      document.getElementById("EditBook").style.display = "none";
      document.getElementById("IssuedBooks").style.display ="none";
      document.getElementById("container2").style.display = "inline-block";
      }
      function  viewrequestInfo(){
       
       document.getElementById("container").style.display = "none";
       document.getElementById("container2").style.display = "none";
       document.getElementById("searchbox").style.display = "none";
       document.getElementById("users").style.display = "none";
       document.getElementById("EditBook").style.display = "none";
       document.getElementById("IssuedBooks").style.display ="none";
       document.getElementById("requestinformation").style.display = "inline-block";
  
  }
      function ViewUsers() {
       
        document.getElementById("container").style.display = "none";
      document.getElementById("searchbox").style.display = "none";
        document.getElementById("container2").style.display = "none";
        document.getElementById("requestinformation").style.display = "none";
        document.getElementById("EditBook").style.display = "none";
        document.getElementById("IssuedBooks").style.display ="none";
        document.getElementById("users").style.display = "inline-block";
        
        }
        function  EditBook(){
       
          document.getElementById("container").style.display = "none";
          document.getElementById("searchbox").style.display = "none";
          document.getElementById("container2").style.display = "none";
          document.getElementById("users").style.display = "none";
          document.getElementById("requestinformation").style.display = "none";
          document.getElementById("IssuedBooks").style.display ="none";
          document.getElementById("EditBook").style.display = "inline-block";
        
        }
   
          function IssuedBook() {
       
            document.getElementById("container").style.display = "none";
            document.getElementById("searchbox").style.display = "none";
            document.getElementById("container2").style.display = "none";
            document.getElementById("requestinformation").style.display = "none";
            document.getElementById("EditBook").style.display = "none";
            document.getElementById("users").style.display = "none";
            document.getElementById("IssuedBooks").style.display ="inline-block";
            
                    }







 