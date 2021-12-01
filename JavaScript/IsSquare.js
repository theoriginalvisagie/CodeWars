
/**
 * @param {*} n numer you want to test for square
 * @returns true if number is a square, false if not
 */
var isSquare = function(n){
    return Math.sqrt(n) % 1 === 0;
}