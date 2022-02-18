/**
 * @returns CamelCase of string
 */

String.prototype.camelCase=function(){
    String = this.toString();
    if(String != ""){
      const arrayStr = String.toString().split(' ');
      var str2 = "";
    
      for (const string of arrayStr){
        const str = string.charAt(0).toUpperCase() + string.slice(1);
        str2 += str;
      }
      
      String = str2;
    }
    
    return String;
  }