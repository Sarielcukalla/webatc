var Loadquotes= function(){
    var quotes = new Array('Stack1','Stack2','Stack16','Stack17','Stack13','Stack14','Stack15','Stack6','Stack7','Stack8','Stack9','Stack10');
    var i;

    for (i=0;i<quotes.length;i++){
      var newquotes = quotes[Math.floor(Math.random() * quotes.length)];
      document.getElementById('quoteshere').value=newquotes;
    }
  };