using System;

public static class Kata
{
    /*
    * Retunrs sum of int a and b in binary
    */
    public static string AddBinary(int a, int b)
    {
        int sumValue = a + b;
        string binary = Convert.ToString(sumValue, 2);
        
        return binary;
    }
}