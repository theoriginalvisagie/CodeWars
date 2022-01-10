public static class Kata
{
    // returns sum of all integers divisable by 5 and 3 between 1 and n
    public static int Solution(int value)
    {
        int sum = 0;
        for(int i = 1; i<value; i++){
        if(i%3==0 && i%5==0){
            sum += i;
        }else if(i%3==0){
            sum += i;
        }else if(i%5==0){
            sum += i;
        }
        }
        
        return sum;
    }
}