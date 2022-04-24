/**
 * @param {*} start start int 
 * @param {*} end end int
 * @returns return the count of all numbers except numbers with a 5 in it
 */
function dontGiveMeFive(start, end)
{
  var count = 0;
  for(var i = start; i <= end; i++){
    if(i.toString().includes(5)==false){
      count++;
    }
  }  
  return count;
}