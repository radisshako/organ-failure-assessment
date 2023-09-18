

//validate the input from the nhi number input
function validateInputs(){
    //get the nhi input
    var nhiNum = document.getElementById("nhi").value;
    console.log(nhiNum);
    //set the nhi regular expression
    var regexNHI = /^[A-Z]{3}[0-9]{4}$/;
    //test the regex
    var validNHI = regexNHI.test(nhiNum);
    
    //if its valid write to the console
    if(!validNHI){
        var nhiResult ="NHI number is invalid,(Should be 3 uppercase letters and 4 numbers)";
        console.log("NHI number not valid");
        return false;
    }
    else if(validNHI){
        var nhiResult ="";
    }

    //get the first name 
    var firstName = document.getElementById("fname").value;
    console.log(firstName);
    //set the regex for the firsname
    var regexfName = /^[a-zA-Z]+$/;
    //test the input for fname
    var validfName = regexfName.test(firstName);
    
    //if valid write to the console else write to consol
    if(!validfName){
        var fnameResult = "First Name was invalid,(use atleast 2 alphabetical characters)";
        console.log("First Name not valid");
        return false;
    }
    else if(validfName){
        var fnameResult = "";
    }

    //get the last name 
    var lastName = document.getElementById("lname").value;
    console.log(lastName);
    //set the regex for the firsname
    var regexlName = /^[a-zA-Z]+$/;
    //test the input for fname
    var validlName = regexlName.test(lastName);
   
    //if valid write to the console else write to consol
    if(!validlName){
        var lnameResult = "Last Name was invalid,(use atleast 2 alphabetical characters)";
        console.log("Last Name not valid");
        return false;
    }
    else if(validlName){
        var lnameResult = "";
    }

    var totalResults = {"nhi": nhiResult, "fname": fnameResult,"lname": lnameResult};
    console.log(totalResults);

    var results = [validfName ,validlName ,validNHI];
    console.log(results);
    
    document.getElementById("submit").submit();
    return results;

}

