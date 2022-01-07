public class Triangle
{
    /*
    * Checks to see if a triangle can be made with the given sides
    */
    public static bool IsTriangle(int a, int b, int c)
    {
        if(a <= 1 || b <= 1 || c <= 1){
          return false;                    
        }else {
          return true;
        }          
    }
}
