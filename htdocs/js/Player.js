export default class Player {
  constructor(name, symbol) {
    this.name = name;
    this.symbol = symbol;
    this.score = 0;
    this.level = 0;
  }

  AddPoint = function () {
    console.log(this.score);
    this.score += 1;
    console.log(this.score)
  }

  GetLevel = function () {
    return Math.floor(this.score / 10) + 1;
  }
}
