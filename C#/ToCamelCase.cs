using System;

public class Kata
{
    /*
    *Returns camelcase string
    *leave first word as is;
    */
    public static string ToCamelCase(string str)
    {
        char[] delimiterChars = { '_', '-'};
        string[] strArray = str.Split(delimiterChars);
        string newString;
        
        
        for(int i = 0; i < strArray.Length; i++){
        if(i!=0){
            newString = strArray[i];
            newString = char.ToUpper(newString[0]) + newString.Substring(1);
            strArray[i] = newString;
        }else{
            strArray[i] = strArray[i];
        }
        }
        
        str = string.Join("", strArray);
        return str;
    }
}