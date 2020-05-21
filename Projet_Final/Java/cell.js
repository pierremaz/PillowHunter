function Cell(i, j, w) {
    this.i = i;
    this.j = j;
    this.x = i * w;
    this.y = j * w;
    this.w = w;
    this.neighborCount = 0;
  
    this.mine = false;
    this.revealed = false;
  }
  
  Cell.prototype.show = function() {
    stroke(0);
    noFill();
    var MyImage=new Image();
    rect(this.x, this.y, this.w, this.w);
    if (this.revealed) {
      if (this.mine) {
        fill(127);
        ellipse(this.x + this.w * 0.5, this.y + this.w * 0.5, this.w * 0.5);
      } else {
        fill(200);
        rect(this.x, this.y, this.w, this.w);
        if (this.neighborCount > 0) {
          textAlign(CENTER);
          fill(0);
          if(this.neighborCount==1){
            MyImage.src="Photos/1.png";
            MyImage.show;
          }else if(this.neighborCount==2){
            MyImage.src="Photos/2.png";
            MyImage.show;
          }else if(this.neighborCount==3){
            MyImage.src="Photos/3.png";
            MyImage.show;
          }else if(this.neighborCount==4){
            MyImage.src="Photos/4.png";
            MyImage.show;
          }else{
            MyImage.src="Photos/5.png";
            MyImage.show;
          }

          text(this.neighborCount, this.x + this.w * 0.5, this.y + this.w - 6);
        }
      }
    }
  };
  
  Cell.prototype.countMines = function() {
    if (this.mine) {
      this.neighborCount = -1;
      return;
    }
    var total = 0;
    for (var xoff = -1; xoff <= 1; xoff++) {
      var i = this.i + xoff;
      if (i < 0 || i >= cols) continue;
  
      for (var yoff = -1; yoff <= 1; yoff++) {
        var j = this.j + yoff;
        if (j < 0 || j >= rows) continue;
  
        var neighbor = grid[i][j];
        if (neighbor.mine) {
          total++;
        }
      }
    }
    this.neighborCount = total;
  };
  
  Cell.prototype.contains = function(x, y) {
    return x > this.x && x < this.x + this.w && y > this.y && y < this.y + this.w;
  };
  
  Cell.prototype.reveal = function() {
    this.revealed = true;
    if (this.neighborCount == 0) {
      this.floodFill();
    }
  };

  Cell.prototype.floodFill = function() {
    for (var xoff = -1; xoff <= 1; xoff++) {
      var i = this.i + xoff;
      if (i < 0 || i >= cols) continue;
  
      for (var yoff = -1; yoff <= 1; yoff++) {
        var j = this.j + yoff;
        if (j < 0 || j >= rows) continue;
  
        var neighbor = grid[i][j];
        if (!neighbor.revealed) {
          neighbor.reveal();
        }
      }
    }
  };