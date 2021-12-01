/**
 * @param {*} friends array to be checked
 * @returns array of names with exactly 4 letters
 */
function friend(friends){
    const MyFriends = [];
    for(let i = 0; i < friends.length; i++){
      console.log(friends[i].length);
      if(friends[i].length == 4){
          MyFriends.push(friends[i]);
      }   
    }
   return MyFriends;
  }