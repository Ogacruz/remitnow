function myFunction(accno) {
    var range = document.createRange();
    range.selectNode(accno); //changed here
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);
    document.execCommand("copy");
    window.getSelection().removeAllRanges();
    document.getElementById("c2").style.display = "block";
    document.getElementById("c1").style.display = "none";
    setTimeout(function() {
      document.getElementById("c2").style.display = "none";
      document.getElementById("c1").style.display = "block";
    }, 3000);

  }