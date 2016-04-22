$( document ).ready(function() {
  var masterRef = new Firebase("https://dafchecker.firebaseio.com/");
  var jobsRef = new Firebase("https://dafchecker.firebaseio.com/Jobs");
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
  }
});

function listJobs(){
  var jobsRef = new Firebase("https://dafchecker.firebaseio.com/Jobs");
  console.log("listing jobs now");
  jobsRef.orderByChild("child_added").on("child_added", function(snapshot) {
    console.log(snapshot.key() + " is " + snapshot.val().Status);
  });
}
