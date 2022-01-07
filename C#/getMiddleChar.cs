public class Kata
{
    /*
    * returns the middle character of a string
    */
    public static string GetMiddle(string s)
    {
        int stringLenght = s.Length;
        
        if(stringLenght % 2 == 0){
        return s.Substring((stringLenght / 2 ) - 1, 2);
        }else{
        return s[stringLenght/2].ToString();
        }
    }
}