using System;

public static class Kata
{
    /*
    * returns letters in word reversed
    * ex: This is an example! -> sihT si na !elpmaxe
    */
  public static string ReverseWords(string str)
  {    
		string[] strArrayOne = new string[] {""};
		string finalString = "";

		strArrayOne = str.Split(' ');
		foreach (string element in strArrayOne)
		{
			Console.WriteLine(element);
			char[] ch = new char[element.Length];
    
			for (int i = 0; i < element.Length; i++) { 
				ch[i] = element[i]; 
			}

			Array.Reverse(ch);
			str = new string(ch);
			if(finalString == ""){
				finalString = str;
			}else{
				finalString = finalString + " " + str;
			}
			
			
		}
    return finalString;
  }
}