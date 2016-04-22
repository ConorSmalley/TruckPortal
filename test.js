$( document ).ready(function() {
  var masterRef = new Firebase("https://dafchecker.firebaseio.com/");
  masterRef.authWithPassword({
    "email": "conorsmalley93@gmail.com",
    "password": "Password1"
  }, function(error, authData) {
    if (error) {
      console.log("Login Failed!", error);
    } else {
      console.log("Authenticated successfully with payload:", authData);
      listJobs();
    }
  });


  if(masterRef.getAuth()){
    console.log("Authenticated!");
    var jobsRef = new Firebase("https://dafchecker.firebaseio.com/Jobs");

    // jobsRef.push({
    //   city: "Sheffield",
    //   Street: "Hardcastle Road",
    // });

  }
});

function listJobs(){
  console.log("listing jobs now");
}
