/**
 * 
 * @param {*} value value passed to function 
 * @returns true/false if the value is Narcissistic or not
 */
function narcissistic(value) {
    const numArray = value.toString().split("");
    var powerSum = 0;
    
    for(var i = 0; i<numArray.length; i++){
         powerSum += Math.pow(numArray[i], numArray.length);
    }
  
    if(powerSum == value){
        return true;
    }else{
        return false;
    }
  }