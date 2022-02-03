using System;
public class Kata
{
    /*
    * Returns middle element of a sorted array
    */
    public static int Gimme(double[] inputArray)
    {
        double[] sortedArray = new double[inputArray.Length];
        
        Array.Copy(inputArray, sortedArray , inputArray.Length);
            
        Array.Sort(sortedArray);

        double middleNumber = sortedArray[1];
        
        return Array.IndexOf(inputArray,middleNumber);
    }
}